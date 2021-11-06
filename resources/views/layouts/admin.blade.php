<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{asset('admin-asset/images/logo.png')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('admin-asset/css/app.css')}}" />
@yield('vendor-style')
@yield('page-style')
<!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="app">
<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{asset('admin-asset/images/logo.png')}}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="{{route('dashboard')}}" class="menu {{ request()->is('admin/dashboard')|| request()->is('admin')? 'menu--active' : 'menu' }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{route('user')}}" class="menu  {{ request()->is('admin/user')|| request()->is('admin/user/*')? 'menu--active' : 'menu' }}">
                <div class="menu__icon"> <i data-feather="users"></i> </div>
                <div class="menu__title"> Users </div>
            </a>
        </li>
        <li>
            <a href="{{route('wording')}}" class="menu {{ request()->is('admin/translation')|| request()->is('admin/translation/*')? 'menu--active' : 'menu' }}">
                <div class="menu__icon"> <i data-feather="globe"></i> </div>
                <div class="menu__title"> Translation </div>
            </a>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{asset('admin-asset/images/logo.png')}}">
            <span class="hidden xl:block text-white text-lg ml-3"> Admin<span class="font-medium">CMS</span> </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="{{route('dashboard')}}" class="side-menu {{ request()->is('admin/dashboard')|| request()->is('admin')? 'side-menu--active' : 'side-menu' }}">
                    <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="side-menu__title"> Dashboard </div>
                </a>
            </li>
            <li>
                <a href="{{route('user')}}" class="side-menu {{ request()->is('admin/user')|| request()->is('admin/user/*')? 'side-menu--active' : 'side-menu' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title"> Users </div>
                </a>
            </li>
            <li>
                <a href="{{route('wording')}}" class="side-menu {{ request()->is('admin/translation')|| request()->is('admin/translation/*')? 'side-menu--active' : 'side-menu' }}">
                    <div class="side-menu__icon"> <i data-feather="globe"></i> </div>
                    <div class="side-menu__title"> Translation </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="{{asset('admin-asset/images/profile-1.jpg')}}">
                </div>
                <div class="dropdown-box w-56">
                    <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                            <div class="font-medium">John Travolta</div>
                            <div class="text-xs text-theme-41 dark:text-gray-600">DevOps Engineer</div>
                        </div>
                        <div class="p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </div>
                        <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
{{--        <div class="grid grid-cols-12 gap-6">--}}
            @yield('content')
{{--        </div>--}}
    </div>
    <!-- END: Content -->
</div>
<!-- BEGIN: JS Assets-->
<script src="{{asset('admin-asset/js/app.js')}}"></script>
<script src="{{asset('vendors/js/jquery/jquery.min.js')}}"></script>
@yield('vendor-script')
@yield('page-script')
<!-- END: JS Assets-->
</body>
</html>
