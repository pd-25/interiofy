                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <!-- <li class="menu-title">Navigation</li> -->

                            <li>
                                <a href="#sidebarDashboard" data-bs-toggle="collapse">
                                    {{-- <span class="badge bg-success float-end">02</span> --}}
                                    <i data-feather="home"></i>
                                    <span> Dashboards </span>
                                    <!-- <span class="menu-arrow"></span> -->
                                </a>
                            </li>

                            <li class="menu-title mt-2"></li>

                            <li>
                                <a href="{{ route('bloglist') }}">
                                    <i data-feather="arrow-right-circle"></i>
                                    <span> Total Leads </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('testimonialslist') }}">
                                    <i data-feather="arrow-right-circle"></i>
                                    <span> Leads in progress </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('testimonialslist') }}">
                                    <i data-feather="arrow-right-circle"></i>
                                    <span> Completed Leads </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}">
                                    <i data-feather="log-out"></i>
                                    <span> Logout </span>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <!-- End Sidebar -->
