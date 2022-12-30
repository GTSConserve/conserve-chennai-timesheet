<div class="topbar-nav header navbar" role="banner" >
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="/" class="nav-link"> Erp Conserve </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">
            <li class="menu single-menu active">
                {{--  --}}
                <a href="{{route('location-head-dashboard')}}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span><b>Dashboard</b></span>
                    </div>
                </a>
            </li>

            <li class="menu single-menu">
                <a href="#employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                        <span><b>Employee</b></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="employee" data-parent="#topAccordion">
                    <li>
                        <a href="{{route('location-head-add-employee')}}"><b>Add Employee</b></a>
                    </li>
                    <li>
                        <a href="{{route('location-head-all-employee')}}"><b>All Employee</b></a>
                    </li>

                </ul>
            </li>

            <li class="menu single-menu">
                <a href="#projects" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        <span><b>Project</b></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="projects" data-parent="#topAccordion">
                    <li>
                        <a href="{{route('location-head-activity')}}"><b>Activity</b></a>
                    </li>
                    <li>
                        <a href="{{route('location-head-project')}}"><b>Project</b></a>
                    </li>
                    <li>
                        <a href="{{route('location-head-task')}}"><b>Task</b></a>
                    </li>
                    <li>
                        {{-- <a href="{{route('location-head-sub-task')}}"><b>Sub Task</b></a> --}}
                    </li>
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#project_settings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        <span><b>Project Settings</b></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="project_settings" data-parent="#topAccordion">
                    <li>
                        <a href="{{route('location-head-project-assign')}}"><b>Project Assign</b></a>
                    </li>
                    <li>
                        <a href="{{route('location-head-tree-structure')}}"><b>Tree Structure</b></a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#time_sheet" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                        <span><b>Time Sheet</b></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="time_sheet" data-parent="#topAccordion">
                    <li>
                        <a href="{{route('location-head-over-view')}}"><b>Over View</b></a>
                    </li>
                    <li>
                        <a href="{{route('location-head-add-timesheet')}}"><b>Add</b></a>
                    </li>
                    <li>
                        <a href="{{route('location-head-aproved-timesheet')}}"><b>Approved</b></a>
                    </li>
                    <li>
                        <a href="{{route('location-head-pending-timesheet')}}"><b>Pending</b></a>
                    </li>
                    <li>
                        <a href="{{route('location-head-approval-timesheet')}}"><b>Approval</b></a>
                    </li>
                    <li class="sub-sub-submenu-list">
                        <a href="#appInvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <b>Team Reports</b> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="appInvoice" data-parent="#app">
                            <li>
                                <a href="{{Route('location-head-project-wise-report')}}">Project reports</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-sub-submenu-list">
                        <a href="#MyReports" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <b>My Reports</b> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="MyReports" data-parent="#app">
                            <li>
                                <a href="{{Route('location-head-project-wise-myreport')}}">Project Reports</a>
                            </li>
                            <li>
                                <a href="{{Route('location-head-monthly-wise-my-project-report')}}">Monthly Reports</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <span><b>Dashboard Controls</b></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                    <li>
                        <a href="{{Route('location-head-dashboard-controls')}}">Controls</a>
                    </li>
                    <li>
                        <a href="{{Route('location-head-dashboard-skillings')}}">Skillings</a>
                    </li>
                    <li>
                        <a href="{{Route('location-head-dashboard-latest-project')}}"> Latest Projects</a>
                    </li>
                    <li>
                        <a href="{{Route('location-head-dashboard-happenings')}}">Happenings</a>
                    </li>
                    <li>
                        <a href="{{Route('location-head-dashboard-hirings')}}">Hirings</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
