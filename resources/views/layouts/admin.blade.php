<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>BISU Balilihan Guidance Individual Profiling System</title>

    <!-- Fontfaces CSS-->
    <link href="{{URL::to('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href='https://fonts.googleapis.com/css?family=Akshar|Abhaya+Libre|Adamina|Arbutus+Slab|Berkshire+Swash' rel='stylesheet'>

    <!-- Bootstrap CSS-->
    <link href="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{URL::to('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/css/DragAndDropUpload.css')}}">

    <!-- Main CSS-->
    <link href="{{URL::to('admin/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{URL::to('package/dist/sweetalert2.min.css')}}">
    <script type="text/javascript" src="{{URL::to('package/dist/sweetalert2.all.min.js')}}"></script>

    <link rel="stylesheet" href="{{URL::to('datatables/DataTables-1.10.23/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('datatables/Responsive-2.2.7/css/responsive.bootstrap4.min.css')}}">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    @yield('head')
    <style type="text/css">
        body{
            font-size: 13px;
        }
        .main-content {
            padding-top: 61px;
        }
        .navbar__list li a{
            color: white ;
        }
    </style>
    <style>
        .century_gothic{
            font-family: 'Arbutus Slab',sans-serif;
            font-size: 12px;
        }
        .cambria{
            font-family: 'Arbutus Slab',serif;
            font-size: 16px;
            color: black;
        }
        .calibri{
            font-family: 'Arbutus Slab',sans-serif; 
            
        }
        .margin-0rem{
            margin-bottom: 0rem;
        }
        .fsize_15{
            font-size: 15px;
        }
        .checkbox-wrapper-28 label{
            font-family: 'Arbutus Slab',serif;
            font-size: 12px;
        }
    </style>

    <style>
        
    .checkbox-wrapper-28 {
        --size: 25px;
        position: relative;
    }

    .checkbox-wrapper-28 *,
    .checkbox-wrapper-28 *:before,
    .checkbox-wrapper-28 *:after {
        box-sizing: border-box;
    }

    .checkbox-wrapper-28 .promoted-input-checkbox {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .checkbox-wrapper-28 input:checked ~ svg {
        height: calc(var(--size) * 0.6);
        -webkit-animation: draw-checkbox-28 ease-in-out 0.2s forwards;
                animation: draw-checkbox-28 ease-in-out 0.2s forwards;
    }
    .checkbox-wrapper-28 label:active::after {
        background-color: #e6e6e6;
    }
    .checkbox-wrapper-28 label {
        color: black;
        line-height: var(--size);
        cursor: pointer;
        position: relative;
    }
    .checkbox-wrapper-28 label:after {
        content: "";
        height: var(--size);
        width: var(--size);
        margin-right: 8px;
        float: left;
        border: 2px solid black;
        border-radius: 3px;
        transition: 0.15s all ease-out;
    }
    .checkbox-wrapper-28 svg {
        stroke: black;
        stroke-width: 3px;
        height: 0;
        width: calc(var(--size) * 0.6);
        position: absolute;
        left: calc(var(--size) * 0.21);
        top: calc(var(--size) * 0.2);
        stroke-dasharray: 33;
    }

    @-webkit-keyframes draw-checkbox-28 {
        0% {
        stroke-dashoffset: 33;
        }
        100% {
        stroke-dashoffset: 0;
        }
    }

    @keyframes draw-checkbox-28 {
        0% {
        stroke-dashoffset: 33;
        }
        100% {
        stroke-dashoffset: 0;
        }
    }

    .list-unstyled li a{
        color: black !important;
    }
    .button:hover{
        
        color: white;
     
    }
    
    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar" >
                <p style="text-align: center; font-size: 20px; font-weight: bold;">Guidance Individual Profiling System</p>
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html" style="font-family: 'Poppins', san-serif;">
                             <img src="{{URL::to('admin/images/logo.png')}}" style="height: 40px; width: 40px; "alt="BISU" /> 
                            BISU BALILIHAN
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">

                        <li class="@yield('dashboard')">
                            <a class="button" href="/home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                   
                        <li class="@yield('pfapplication')">
                            <a class="js-arrow" href="{{route('forms.clientcounselorfeedback_form')}}">
                            <i class="fas fa-copy"></i>Counselor Feedback</a>
                        </li>
                       
                        <li class="@yield('evaluation') has-sub">
                            <a class="js-arrow" href="#" >
                                <i class="fas fa-copy" id="showList"></i>Evaluation</a>
                                
                            <ul class="list-unstyled navbar__sub-list js-sub-list" id="myList">
                                <?php 
                                    $sy   = App\Schoolyear::where('status', 1)->first(); 
                                    $activities = App\EvaluationActivity::where('schoolyear_id', $sy->id)->get(); 
                                ?>

                                @isset($activities)
                                    @foreach($activities as $activity)
                                    <li>
                                        <a href="{{route('forms.evaluation_form', $activity->id)}}">{{$activity->title}}</a>
                                    </li>
                                    @endforeach
                                @endisset
                            </ul>
                                
                        </li>
                        
                        <li class="@yield('individualinventory_form')">
                            <a class="js-arrow" href="{{route('forms.individualinventory_form')}}">
                            <i class="fas fa-copy"></i>Individual Inventory</a>
                        </li>
                        
                        <li class="@yield('interviewfeedback')">
                            <a class="js-arrow" href="{{route('forms.interviewfeedback_form')}}">
                            <i class="fas fa-copy"></i>Interview Feedback </a>
                        </li>
                        
                        <li class="@yield('leavers')">
                            <a class="js-arrow" href="{{route('forms.leavers_form')}}">
                            <i class="fas fa-copy"></i>Leaver's Checklist </a>
                        </li>
                        
                        <li class="@yield('needsassessment')">
                            <a class="js-arrow" href="{{route('forms.needsassessment_form')}}">
                            <i class="fas fa-copy"></i>Needs Assessment</a>
                        </li>
                        
                        <li class="@yield('pfapplication')">
                            <a class="js-arrow" href="{{route('forms.pfapplication_form')}}">
                            <i class="fas fa-copy"></i>PF-Application </a>
                        </li>
                        
                        <li class="@yield('pfmembership')">
                            <a class="js-arrow" href="{{route('forms.pfmembership_form')}}">
                            <i class="fas fa-copy"></i>PF-Membership</a>
                        </li>
                        
                        <li class="@yield('precounseling')">
                            <a class="js-arrow" href="{{route('forms.precounseling_form')}}">
                            <i class="fas fa-copy"></i>Pre-Counseling </a>
                        </li>

                        <li class="@yield('studprofile')">
                            <a class="js-arrow" href="{{route('forms.stud_profile_form')}}">
                            <i class="fas fa-copy"></i>Student Profile </a>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo" style="font-size: 30px;font-weight: bold;background-color: #00ABE4;padding-left: 110px;">
                <a href="#" style="color: white;">
                    <img src="{{URL::to('/logo.png')}}" width="70" height="70" alt="BISU" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1" style="background: #6A9CF2;background: -webkit-linear-gradient(left, #6A9CF2, #E8EDF8);background: -moz-linear-gradient(left, #6A9CF2, #E8EDF8);background: linear-gradient(to right, #6A9CF2, #E8EDF8);">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="@yield('dashboard')">
                            <a class="button" href="/home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        @if(Auth::user()->role_id == 0)
                        <li class="@yield('schoolyear')">
                            <a class="button" href="{{route('schoolyear.index')}}">
                                <i class="fas fa-chart-bar"></i>School Year</a>
                        </li>
                        <li class="@yield('college')">
                            <a class="button" href="{{route('college.index')}}">
                                <i class="fas fa-table"></i>College</a>
                        </li>
                        <li class="@yield('course')">
                            <a class="button" href="{{route('course.index')}}">
                                <i class="far fa-check-square"></i>Course</a>
                        </li>
                        <li class="@yield('students')">
                            <a class="button" href="{{route('students.index')}}">
                                <i class="fas fa-users"></i>Students</a>
                        </li>
                        <li class="@yield('form_settings')">
                            <a class="button" href="{{route('form_settings')}}">
                                <i class="fas fa-cogs"></i>Form Settings</a>
                        </li>
                        @endif
                        <li style="pointer-events: none;font-weight: bold;">
                            <hr style="margin-top: 0rem;margin-bottom: 0rem;">
                            <a href="#">Forms</a>
                            <hr style="margin-top: 0rem;margin-bottom: 0rem;">
                        </li>
                        @if(Auth::user()->role_id == 0)

                        <li class="@yield('clientcounselorfeedback')">
                            <a class="js-arrow button" href="{{route('forms.clientcounselorfeedback')}}">
                            <i class="fas fa-copy"></i>Counselor Feedback</a>
                        </li>
                        <li class="@yield('evaluation')">
                            <a class="js-arrow button" href="{{route('forms.evaluation_activities')}}">
                            <i class="fas fa-copy"></i>Evaluation</a>
                        </li>
                        <li class="@yield('individualinventory')">
                            <a class="js-arrow button" href="{{route('forms.individualinventory')}}">
                            <i class="fas fa-copy"></i>Individual Inventory</a>
                        </li>
                        <li class="@yield('interviewfeedback')">
                            <a class="js-arrow button" href="{{route('forms.interviewfeedback')}}">
                            <i class="fas fa-copy"></i>Interview Feedback </a>
                        </li>
                        <li class="@yield('leavers')">
                            <a class="js-arrow button" href="{{route('forms.leavers')}}">
                            <i class="fas fa-copy"></i>Leaver's Checklist </a>
                        </li>
                        
                        <li class="@yield('needsassessment')">
                            <a class="js-arrow button" href="{{route('forms.needsassessment')}}">
                            <i class="fas fa-copy"></i>Needs Assessment</a>
                        </li>
                        <li class="@yield('pfapplication')">
                            <a class="js-arrow button" href="{{route('forms.pfapplication')}}">
                            <i class="fas fa-copy"></i>PF-Application </a>
                        </li>
                        <li class="@yield('pfmembership')">
                            <a class="js-arrow button" href="{{route('forms.pfmembership')}}">
                            <i class="fas fa-copy"></i>PF-Membership</a>
                        </li>
                        <li class="@yield('precounseling')">
                            <a class="js-arrow" href="{{route('forms.precounseling')}}">
                            <i class="fas fa-copy button"></i>Pre-Counseling </a>
                        </li>
                        <li class="@yield('studentprofile')">
                            <a class="js-arrow" href="{{route('forms.stud_profile')}}">
                            <i class="fas fa-copy"></i>Student Profiles</a>
                        </li>
                        
                        
                        
                        @endif
                        @if(Auth::user()->role_id == 1)

                        @if(App\FormSetting::where('form', 1)->first()->enabled == 1)
                        <li class="@yield('pfapplication')">
                            <a class="js-arrow" href="{{route('forms.clientcounselorfeedback_form')}}">
                            <i class="fas fa-copy"></i>Counselor Feedback</a>
                        </li>
                        @endif
                        @if(App\FormSetting::where('form', 2)->first()->enabled == 1)
                        <li class="@yield('evaluation') has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Evaluation</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php 
                                    $sy   = App\Schoolyear::where('status', 1)->first(); 
                                    $activities = App\EvaluationActivity::where('schoolyear_id', $sy->id)->get(); 
                                ?>

                                @isset($activities)
                                    @foreach($activities as $activity)
                                    <li>
                                        <a href="{{route('forms.evaluation_form', $activity->id)}}">{{$activity->title}}</a>
                                    </li>
                                    @endforeach
                                @endisset
                            </ul>
                        </li>
                        @endif
                        @if(App\FormSetting::where('form', 3)->first()->enabled == 1)
                        <li class="@yield('individualinventory_form')">
                            <a class="js-arrow" href="{{route('forms.individualinventory_form')}}">
                            <i class="fas fa-copy"></i>Individual Inventory</a>
                        </li>
                        @endif
                        @if(App\FormSetting::where('form', 4)->first()->enabled == 1)
                        <li class="@yield('interviewfeedback')">
                            <a class="js-arrow" href="{{route('forms.interviewfeedback_form')}}">
                            <i class="fas fa-copy"></i>Interview Feedback </a>
                        </li>
                        @endif
                        @if(App\FormSetting::where('form', 5)->first()->enabled == 1)
                        <li class="@yield('leavers')">
                            <a class="js-arrow" href="{{route('forms.leavers_form')}}">
                            <i class="fas fa-copy"></i>Leaver's Checklist </a>
                        </li>
                        @endif
                       
                        @if(App\FormSetting::where('form', 7)->first()->enabled == 1)
                        <li class="@yield('needsassessment')">
                            <a class="js-arrow" href="{{route('forms.needsassessment_form')}}">
                            <i class="fas fa-copy"></i>Needs Assessment</a>
                        </li>
                        @endif
                        @if(App\FormSetting::where('form', 8)->first()->enabled == 1)
                        <li class="@yield('pfapplication')">
                            <a class="js-arrow" href="{{route('forms.pfapplication_form')}}">
                            <i class="fas fa-copy"></i>PF-Application </a>
                        </li>
                        @endif
                        @if(App\FormSetting::where('form', 6)->first()->enabled == 1)
                        <li class="@yield('pfmembership')">
                            <a class="js-arrow" href="{{route('forms.pfmembership_form')}}">
                            <i class="fas fa-copy"></i>PF-Membership</a>
                        </li>
                        @endif
                        @if(App\FormSetting::where('form', 9)->first()->enabled == 1)
                        <li class="@yield('precounseling')">
                            <a class="js-arrow" href="{{route('forms.precounseling_form')}}">
                            <i class="fas fa-copy"></i>Pre-Counseling </a>
                        </li>
                        @endif
                        @if(App\FormSetting::where('form', 10)->first()->enabled == 1)
                        <li class="@yield('studprofile')">
                            <a class="js-arrow" href="{{route('forms.stud_profile_form')}}">
                            <i class="fas fa-copy"></i>Student Profile </a>
                        </li>
                        @endif
                        
                        
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop" style="background-color: #00ABE4;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." style="display: none;"/>
                                <button class="au-btn--submit" type="submit" style="display: none;">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#" style="color: black;"><i class="fa fa-user"></i> {{Auth::user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{route('myaccount')}}">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                            <a class="dropdown-item" href="{{route('logout')}}"
                                                onclick="event.preventDefault(); $('#logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                                @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content" style="background-color: #E9F1FA">
                    @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <!-- Jquery JS-->
    <script src="{{URL::to('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{URL::to('admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{URL::to('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/select2/select2.min.js')}}"></script>
    <script src="{{URL::to('form-validator/jquery.form-validator.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('datatables/DataTables-1.10.23/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('datatables/DataTables-1.10.23/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('datatables/Responsive-2.2.7/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('datatables/Responsive-2.2.7/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- Main JS-->
    <script src="{{URL::to('admin/js/main.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable( {
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal( {
                            header: function ( row ) {
                                var data = row.data();
                                return 'Details for '+data[0]+' '+data[1];
                            }
                        } ),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                            tableClass: 'table'
                        } )
                    }
                }
            } );

            $('#table2').DataTable( {
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal( {
                            header: function ( row ) {
                                var data = row.data();
                                return 'Details for '+data[0]+' '+data[1];
                            }
                        } ),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                            tableClass: 'table'
                        } )
                    }
                }
            } );
        } );
    </script>
    <script type="text/javascript">
        $.validate();
    </script>
    <script>
        $.validate();
        $(document).ready(function(){
          @if(  Session::has('Account_updated') )
          swal(
                        'Data Saved.',
                        'Account updated successfully.',
                        'success'
                    )
          @endif
      });
    </script>
    <script>
        const showListBtn = document.getElementById("showList");
        const myList = document.getElementById("myList");

            showListBtn.addEventListener("click", function() {
                myList.classList.remove("hidden");
});
    </script>
    @yield('scripts')

</body>

</html>
<!-- end document-->
