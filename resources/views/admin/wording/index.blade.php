
@extends('layouts/admin')

@section('title', 'Translation')

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset('vendors/css/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/extensions/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{asset('css/base/plugins/extensions/ext-component-sweet-alerts.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection


@section('content')

    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="col-span-12 mt-6">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Translation
                </h2>
                @can('wording-create')
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <a class="button box flex items-center text-gray-700 dark:text-gray-300" href="{{route('wording-create')}}"> <i data-feather="plus-square" class="hidden sm:block w-4 h-4 mr-2"></i> New Translation</a>
                    </div>
                @endcan
            </div>

            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                <table class="dt-responsive table table-report sm:mt-2">
                    <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>{{$translation['admin']['translation.column.namespace']['text']}}</th>
                        <th>{{$translation['admin']['translation.column.group']['text']}}</th>
                        <th>{{$translation['admin']['translation.column.key']['text']}}</th>
                        <th>{{$translation['admin']['translation.column.text']['text']}}</th>
                        <th>{{$translation['*']['global.created_at']['text']}}</th>
                        <th>{{$translation['*']['global.updated_at']['text']}}</th>
                        <th>{{$translation['*']['global.action']['text']}}</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>{{$translation['admin']['translation.column.namespace']['text']}}</th>
                        <th>{{$translation['admin']['translation.column.group']['text']}}</th>
                        <th>{{$translation['admin']['translation.column.key']['text']}}</th>
                        <th>{{$translation['admin']['translation.column.text']['text']}}</th>
                        <th>{{$translation['*']['global.created_at']['text']}}</th>
                        <th>{{$translation['*']['global.updated_at']['text']}}</th>
                        <th>{{$translation['*']['global.action']['text']}}</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
    <!--/ Responsive Datatable -->
@endsection


@section('vendor-script')
    {{-- vendor files --}}
    <script src="{{ asset('vendors/js/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('vendors/js/extensions/polyfill.min.js') }}"></script>
@endsection

@section('page-script')
    {{-- Page js files --}}
    <script>
        // Responsive Table
        // --------------------------------------------------------------------
        // let assetPath = '../../../app-assets/';
        //
        // if ($('body').attr('data-framework') === 'laravel') {
        //     assetPath = $('body').attr('data-asset-path');
        // }
        const dt_responsive_table = $('.dt-responsive');
        if (dt_responsive_table.length) {
            const dt_responsive = dt_responsive_table.DataTable({
                data: <?php echo $datas;?>,
                columns: [
                    {data: 'responsive_id'},
                    {data: 'id'},
                    {data: 'namespace'},
                    {data: 'group'},
                    {data: 'key'},
                    {data: 'text'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                    {data: 'id'}
                ],
                columnDefs: [
                    {
                        className: 'control',
                        orderable: false,
                        targets: 0
                    },
                    {
                        // Label
                        targets: -1,
                        render: function (data, type, full, meta) {
                            const $id = full['id'];

                            return (
                                '<div class="links">' +
                                '@can("wording-edit")<a  href="/admin/translation/'+$id+'"class="btn btn-primary btn-icon "><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a> @endcan' +
                                '@can("wording-destroy")<form method="POST"  action="/admin/translation/'+$id+'" style="display: inline"> @CSRF @method('delete')' +
                                '<btn type="submit"  class="btn btn-danger btn-icon js-swal-confirm submit-delete"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></btn> </form>@endcan' +
                                '</div>'
                            );
                        }
                    }
                ],
                dom:
                    '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function (row) {
                                var data = row.data();
                                return 'Details of ' + data['name'];
                            }
                        }),
                        type: 'column',
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },
                language: {
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;',
                        next: '&nbsp;'
                    }
                }
            });
        }

        $('.submit-delete').on('click',function(e){
            e.preventDefault();
            var form = $(this).closest('form');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {

                    form.submit();
                }
            });
        });
        // // Filter form control to default size for all tables
        $('.dataTables_filter .form-control').removeClass('form-control-sm');
        $('.dataTables_length .custom-select').removeClass('custom-select-sm').removeClass('form-control-sm');
    </script>
@endsection
