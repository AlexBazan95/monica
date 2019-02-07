<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'CRM') }} @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/morris/morris.css') }}">
    <link href="{{ asset('/plugins/hopscotch/css/hopscotch.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/responsive-table/css/rwd-table.min.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/application.css') }}" type="text/css" />
    <link rel="stylesheet"href="{{ asset('/plugins/custombox/dist/custombox.min.css') }}">
    <link rel="stylesheet"href="{{ asset('/plugins/dragula/dragula.min.css') }}">

    <script src="{{ asset('/js/modernizr.min.js') }}"></script>
</head>

    <body class="fixed-left">
        <div id="wrapper">
            <div class="topbar">
                @if(\Auth::check() == 'false')
                <div class="topbar-left">
                    <div style="padding: 21px 18px; max-height: 65px; overflow: hidden;">
                        <img src="{{ env('APP_LOGOTYPE', '/svg/flags/065-ukraine.svg') }}" height="22" style="float: left; padding-right: 3px;">
                        <span style="font-weight: bold; float: left; line-height: 35px;">
                            {{ config('app.name', 'CRM') }}
                        </span>
                    </div>
                </div>

                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="open-left" style="float: left; background: 0 0;border: none;color: #435966;font-size: 21px;line-height: 68px;cursor: pointer">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                                <h4 class="page-title" style="float: left;"></h4>
                            </li>
                        </ul>
                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li id="mainmenuItem-notification">
                                    <div class="notification-box">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a href="javascript:void(0);" class="right-bar-toggle">
                                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                                </a>
                                                <div class="noti-dot">
                                                    <span class="dot"></span>
                                                    <span class="pulse"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="hide-phone" id="mainmenuItem-search">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                                <li id="mainmenuItem-user">
                                    <div class="notification-box">
                                        <ul class="btn-group dropdown" style="margin-left: -20px;">
                                            <li style="list-style: none;">
                                                <a href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-account-circle"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    @foreach(\App\Locale::getAllLocales() as $locale)
                                                        <a href="/setlocale/{{$locale->lnk}}" style="line-height: 15px; font-size: 14px;" class="dropdown-item">
                                                            <img src="{{$locale->img}}" style="height: 20px;">
                                                            <span>{{$locale->name}}</span> /
                                                            <span style="font-weight: bold; text-transform: uppercase;">{{$locale->lnk}}</span>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </nav>
                    </div><!-- end container -->
                </div><!-- end navbar -->
                @endif
            </div>
            <!-- Top Bar End -->

            @if(\Auth::check() == 'false')
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    @mainmenu @endmainmenu
                </div>
            </div>
            @endif

            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>
                @if(\Auth::check() == 'false')
                <footer class="footer text-right">
                    {{ __('pack.copy') }}
                </footer>
                @endif
            </div>

            @notifications @endnotifications
        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/detect.js') }}"></script>
        <script src="{{ asset('/js/fastclick.js') }}"></script>
        <script src="{{ asset('/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('/js/waves.js') }}"></script>
        <script src="{{ asset('/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('/plugins/jquery-knob/jquery.knob.js') }}"></script>
        <script src="{{ asset('/plugins/raphael/raphael-min.js') }}"></script>
        <script src="{{ asset('/plugins/responsive-table/js/rwd-table.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/hopscotch/js/hopscotch.min.js') }}"></script>
        <script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.core.js') }}"></script>
        <script src="{{ asset('/js/jquery.app.js') }}"></script>
        <script type="text/javascript">
            toastr.options = {
                closeButton: true,
                positionClass: 'toast-bottom-right',
                preventDuplicates: false,
                showEasing: 'linear',
                hideEasing: 'linear',
                showMethod: 'fadeIn',
                hideMethod: 'fadeOut',
                tapToDismiss: false,
                extendedTimeOut: 1000,
                showDuration: 150,
                hideDuration: 150,
                timeOut: 5000,
                onclick: null
            };
            toastr['info']('mymsg', 'mytitle');
        </script>
        @yield('scripts')
    </body>
</html>
