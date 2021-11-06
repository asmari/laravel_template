@extends('layouts/admin')

@section('title', 'Create Translation')
@section('vendor-style')
    {{-- Vendor Css files --}}
    <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}">
@endsection
@section('content')

    <div class="intro-y flex items-center mt-12">
        <h2 class="text-lg font-medium mr-auto">
            Create Translation
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <form class="form needs-validation" id="jquery-val-form" method="post" action="{{route('wording-store')}}">
                    @CSRF
                    <div>
                        <input type="hidden" value="*" name="namespace"  class="input w-full border mt-2" placeholder="Name" required>
                    </div>
                    <div class="mt-3">
                        <label>Group</label>
                        <div class="mt-2">
                            <select data-placeholder="Select Group"  name="group" class="tail-select w-full" required>
                                    <option value="*">All</option>
                                    <option value="admin">Admin</option>
                                    <option value="web">Web</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label>Key</label>
                        <input type="tersxt" name="key" class="input w-full border mt-2" placeholder="Key" required>
                    </div>
                    @foreach($locales as $locale)
                    <div>
                        <label>Text {{strtoupper($locale)}}</label>
                        <input type="text" name="text[{{$locale}}]" class="input w-full border mt-2" placeholder="Text {{strtoupper($locale)}}" required>
                    </div>
                    @endforeach
                    <div class="text-right mt-5">
                        <button type="reset" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                    </div>
                </form>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>

    <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection
@section('page-script')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation');
            var jqForm = $('#jquery-val-form');
            var  select = $('.select2');

            // select2
            select.each(function () {
                var $this = $(this);
                $this.wrap('<div class="position-relative"></div>');
                $this
                    .select2({
                        placeholder: 'Select Role',
                        dropdownParent: $this.parent()
                    })
                    .change(function () {
                        $(this).valid();
                    });
            });
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            if (jqForm.length) {
                jqForm.validate({
                    rules: {
                        'basic-default-name': {
                            required: true
                        },
                        'basic-default-email': {
                            required: true,
                            email: true
                        },
                        'password': {
                            required: true
                        },
                        'confirm-password': {
                            required: true,
                            equalTo: '#password'
                        },
                        'role': {
                            required: true
                        },
                    }
                });
            }
        })()

    </script>
@endsection
