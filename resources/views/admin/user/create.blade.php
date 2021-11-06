@extends('layouts/admin')

@section('title', 'Create User')
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
            Create User
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <form class="form needs-validation" id="jquery-val-form" method="post" action="{{route('user-store')}}">
                    @CSRF
                    <div>
                        <label>Name</label>
                        <input type="text" name="name"  class="input w-full border mt-2" placeholder="Name" required>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="input w-full border mt-2" placeholder="Email" required>
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="input w-full border mt-2" placeholder="Password" id="password" >
                    </div>
                    <div>
                        <label>Confirm Password</label>
                        <input type="password" name="confirm-password" class="input w-full border mt-2" placeholder="Password" >
                    </div>
                    <div class="mt-3">
                        <label>Role</label>
                        <div class="mt-2">
                            <select data-placeholder="Select Role" class="tail-select w-full" name="role" required>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="reset" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</button>
                        <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                    </div>
                </form>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
    <!-- Basic Floating Label Form section end -->
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
                            required: false
                        },
                        'confirm-password': {
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
