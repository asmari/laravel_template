<?php
namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wording;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class WordingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:wording-list|wording-create|wording-edit|wording-delete', ['only' => ['index','store']]);
        $this->middleware('permission:wording-create', ['only' => ['create','store']]);
        $this->middleware('permission:wording-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:wording-delete', ['only' => ['destroy']]);
    }
    // Translation List
    public function index()
    {
        $datas = Wording::all();
        $datas->map(function ($data) {
            $data['responsive_id'] = '';
            return $data;
        });
        $pageConfigs = ['pageHeader' => false];
        $header = Helper::generateHeader($datas);
        return view('/admin/wording/index', ['pageConfigs' => $pageConfigs,'datas'=>$datas->toJson(),'header'=>$header]);
    }

    // Dashboard - Ecommerce
    public function create()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/admin/wording/create', ['pageConfigs' => $pageConfigs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Wording::create([
            'namespace' => $request->namespace,
            'group' => $request->group,
            'key' => $request->key,
            'text' => $request->text,
            'metadata' => $request->metadata
        ]);
        return redirect()->route('wording');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wording $wording)
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/admin/wording/edit',['pageConfigs' => $pageConfigs,'data'=>$wording]);
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

        $data = Wording::find($id);
        $data->namespace = $request->input('namespace');
        $data->group = $request->input('group');
        $data->key = $request->input('key');
        $data->text = $request->input('text');
        $data->update();


        return redirect()->route('wording');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wording $wording)
    {
        $wording->delete();
        return redirect()->route('wprding')
            ->with('success','Translation deleted successfully');
    }
}
