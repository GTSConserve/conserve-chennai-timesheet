<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Chennai TimeSheet</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
    {{--  --}}

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    {{--  --}}
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/select2/select2.min.css')}}">


    <style>
            /*custom font*/
        @import url(https://fonts.googleapis.com/css?family=Montserrat);
        /*basic reset*/
        * {margin: 0; padding: 0;}

        body {
            /* background: #f1f2f3; */
        /* font-family: montserrat, arial, verdana; */
        font-weight:500;
        color:#000000;
        }
        /*form styles*/
        #msform {
        /* width: 400px; */
        margin: 10px auto;
        /* text-align: center; */
        position: relative;
        }
        #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 30px;
        box-sizing: border-box;
        width: 100%;
        /* margin: 0 10%; */
        /*stacking fieldsets above each other*/
        position: relative;
        }
        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
        display: none;
        }
        /*inputs*/
        .form_input{
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
        background-color :#e9e9ed;
        }
        /*buttons*/
        #msform .action-button {
        width: 150px;
        background: #27AE60;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
        }
        #msform .action-button:hover, #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }
        #lable{
            text-align: left;
        }
        /*headings*/
        .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
        }
        .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
        }
        /*progressbar*/
        #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
        }
        #progressbar li {
        text-align:center;
        list-style-type: none;
        color: #000000;
        text-transform: uppercase;
        font-size: 16px;
        width: 25%;
        font-weight: 700;
        float: left;
        position: relative;
        }
        #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 15px;
        color: #333;
        background: orange;
        border-radius: 3px;
        margin: 0 auto 5px auto;
        }
        /*progressbar connectors*/
        #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: orange;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1; /*put it behind the numbers*/
        }
        #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
        }
        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before, #progressbar li.active:after{
        background: #27AE60;
        color: white;
        }
    </style>
    <style>
       .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
            background:#009688;
        }
        .select2.select2-container {
  width: 100% !important;
}

.select2.select2-container .select2-selection {
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  height: 34px;
  margin-bottom: 15px;
  outline: none !important;
  transition: all .15s ease-in-out;
}

.select2.select2-container .select2-selection .select2-selection__rendered {
  color: #333;
  line-height: 32px;
  padding-right: 33px;
}

.select2.select2-container .select2-selection .select2-selection__arrow {
  background: #f8f8f8;
  border-left: 1px solid #ccc;
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
  height: 32px;
  width: 33px;
}

.select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
  background: #f8f8f8;
}

.select2.select2-container.select2-container--open .select2-selection.select2-selection--single .select2-selection__arrow {
  -webkit-border-radius: 0 3px 0 0;
  -moz-border-radius: 0 3px 0 0;
  border-radius: 0 3px 0 0;
}

.select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
  border: 1px solid #34495e;
}

.select2.select2-container .select2-selection--multiple {
  height: auto;
  min-height: 34px;
}

.select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
  margin-top: 0;
  height: 32px;
}

.select2.select2-container .select2-selection--multiple .select2-selection__rendered {
  display: block;
  padding: 0 4px;
  line-height: 29px;
}

.select2.select2-container .select2-selection--multiple .select2-selection__choice {
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  margin: 4px 4px 0 0;
  padding: 0 6px 0 22px;
  height: 24px;
  line-height: 24px;
  font-size: 12px;
  position: relative;
}

.select2.select2-container .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
  position: absolute;
  top: 0;
  left: 0;
  height: 22px;
  width: 22px;
  margin: 0;
  text-align: center;
  color: #e74c3c;
  font-weight: bold;
  font-size: 16px;
}

.select2-container .select2-dropdown {
  background: transparent;
  border: none;
  margin-top: -5px;
}

.select2-container .select2-dropdown .select2-search {
  padding: 0;
}

.select2-container .select2-dropdown .select2-search input {
  outline: none !important;
  border: 1px solid #34495e !important;
  border-bottom: none !important;
  padding: 4px 6px !important;
}

.select2-container .select2-dropdown .select2-results {
  padding: 0;
}

.select2-container .select2-dropdown .select2-results ul {
  background: #fff;
  border: 1px solid #34495e;
}

.select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
  background-color: #3498db;
}
    </style>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    @livewireStyles
</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"><div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @if(Auth::user()->user_group_id==1)
    @include('layouts.navbars.super-admin')
    @endif
    @if(Auth::user()->user_group_id==2)
    @include('layouts.navbars.location-head')
    @endif
    @if(Auth::user()->user_group_id==3)
    @include('layouts.navbars.hr-head')
    @endif
    @if(Auth::user()->user_group_id==4)
    @include('layouts.navbars.admin')
    @endif
    @if(Auth::user()->user_group_id==5)
    @include('layouts.navbars.project-manager-head')
    @endif
    @if(Auth::user()->user_group_id==6)
    @include('layouts.navbars.project-manager')
    @endif
    @if(Auth::user()->user_group_id==7)
    @include('layouts.navbars.project-lead')
    @endif
    @if(Auth::user()->user_group_id==8)
    @include('layouts.navbars.team-lead')
    @endif
    @if(Auth::user()->user_group_id==9)
    @include('layouts.navbars.employee')
    @endif
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        @include('layouts.topnavbar')
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                {{$slot}}
            </div>
        </div>

        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard/dash_2.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->

<script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/sweetalerts/custom-sweetalert.js')}}"></script>

    <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('plugins/select2/custom-select2.js')}}"></script>
    <script>
        $(".tagging").select2({
          tags: true
          containerCssClass: "error" 
      });
          </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
    <script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [3, 10, 20, 50],
            "pageLength": 10
        });
    </script>
    <script type="text/javascript">
        window.onload = function() {
           Livewire.on('UpdateEmployee', () => {
               swal({
               title: 'Saved!',
               text: "Details Store Successfully",
               type: 'success',
               showConfirmButton: false,
               timer: 900,
               padding: '50px'
               });
           });
       }
   </script>

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
                //jQuery time
// var current_fs, next_fs, previous_fs; //fieldsets
// var left, opacity, scale; //fieldset properties which we will animate
// var animating; //flag to prevent quick multi-click glitches
// $(".next").click(function(){
// if(animating) return false;
// animating = true;
// current_fs = $(this).parent();
// console.log(current_fs);
// next_fs = $(this).parent().next();
// //activate next step on progressbar using the index of next_fs
// $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
// //show the next fieldset
// next_fs.show();
// //hide the current fieldset with style
// current_fs.animate({opacity: 0}, {
// step: function(now, mx) {
// //as the opacity of current_fs reduces to 0 - stored in "now"
// //1. scale current_fs down to 80%
// scale = 1 - (1 - now) * 0.2;
// //2. bring next_fs from the right(50%)
// left = (now * 50)+"%";
// //3. increase opacity of next_fs to 1 as it moves in
// opacity = 1 - now;
// current_fs.css({
// 'transform': 'scale('+scale+')',
// 'position': 'absolute'
// });
// next_fs.css({'left': left, 'opacity': opacity});
// },
// duration: 800,
// complete: function(){
// current_fs.hide();
// animating = false;
// },
// //this comes from the custom easing plugin
// easing: 'easeInOutBack'
// });
// });
// $(".previous").click(function(){
// if(animating) return false;
// animating = true;
// current_fs = $(this).parent();
// previous_fs = $(this).parent().prev();
// //de-activate current step on progressbar
// $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
// //show the previous fieldset
// previous_fs.show();
// //hide the current fieldset with style
// current_fs.animate({opacity: 0}, {
// step: function(now, mx) {
// //as the opacity of current_fs reduces to 0 - stored in "now"
// //1. scale previous_fs from 80% to 100%
// scale = 0.8 + (1 - now) * 0.2;
// //2. take current_fs to the right(50%) - from 0%
// left = ((1-now) * 50)+"%";
// //3. increase opacity of previous_fs to 1 as it moves in
// opacity = 1 - now;
// current_fs.css({'left': left});
// previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
// },
// duration: 800,
// complete: function(){
// current_fs.hide();
// animating = false;
// },
// //this comes from the custom easing plugin
// easing: 'easeInOutBack'
// });
// });
// $(".submit").click(function(){
// return false;
// })
    </script>
    @stack('modals')
@livewireScripts
</body>
</html>
