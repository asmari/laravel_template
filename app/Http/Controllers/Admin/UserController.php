<?php
namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
        $this->middleware('permission:user-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    // User List
    public function index()
    {
        $datas = User::all();
        $datas->map(function ($data) {
            $data['responsive_id'] = '';
            return $data;
        });
        $pageConfigs = ['pageHeader' => false];
        $header = Helper::generateHeader($datas);
        return view('/admin/user/index', ['pageConfigs' => $pageConfigs,'datas'=>$datas->toJson(),'header'=>$header]);
    }

    // Dashboard - Ecommerce
    public function create()
    {
        $pageConfigs = ['pageHeader' => false];

        $roles = Role::where('id','!=',1)->get();
        return view('/admin/user/create', ['pageConfigs' => $pageConfigs,'roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->assignRole($request->role);
        return redirect()->route('user');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $pageConfigs = ['pageHeader' => false];
        $roles = Role::all();
        return view('/admin/user/edit',['pageConfigs' => $pageConfigs,'user'=>$user,'roles'=>$roles]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->has('password') && !empty($request->input('password'))) {
            $user->password = $request->input('password');
        }
        $user->update();

        $user->syncRoles($request->input('role'));

        return redirect()->route('user');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user')
            ->with('success','User deleted successfully');
    }
}
