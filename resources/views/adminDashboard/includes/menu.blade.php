
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{route('home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-building-o fa-fw"></i> Company<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('company.create')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Company</a>
                                </li>
                                <li>
                                    <a href="{{route('company.manage')}}"><i class="fa fa-edit fa-fw"></i> Manage Companies</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-truck fa-fw"></i> Vehicle<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('vehicle.create')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Vehicle</a>
                                </li>
                                <li>
                                    <a href="{{route('vehicle.manage')}}"><i class="fa fa-edit fa-fw"></i> Manage Vehicles</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Transactions<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('deposit.create')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Transaction</a>
                                </li>
                                <li>
                                    <a href="{{route('deposit.manage')}}"><i class="fa fa-edit fa-fw"></i> Manage Transactions</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-hand-paper-o fa-fw"></i> Toll Plazas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('toll-plaza.create')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Toll Plaza</a>
                                </li>
                                <li>
                                    <a href="{{route('toll-plaza.manage')}}"><i class="fa fa-edit fa-fw"></i> Manage Toll Plazas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('toll.manage')}}"><i class="fa fa-fax fa-fw"></i> All Tolls</a>
                        </li>
                        <li>
                            <a href="{{route('vehicle.balance')}}"><i class="fa fa-usd fa-fw"></i> Balance</a>
                        </li>
<!--                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>-->
<!--                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                             /.nav-second-level 
                        </li>-->
                        <!-- <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Question Bank<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#"><i class="fa fa-hand-o-right fa-fw"></i> Broad Question <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{url('broad-question/add')}}"><i class="fa fa-plus-circle fa-fw"></i> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{url('broad-question/manage')}}"><i class="fa fa-edit fa-fw"></i> Manage</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tags fa-fw"></i> Tags <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('tag/add')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Tags</a>
                                </li>
                                <li>
                                    <a href="{{url('tag/manage')}}"><i class="fa fa-edit fa-fw"></i> Manage Tags</a>
                                </li>
                            </ul> -->
                        <!-- </li> -->
                    </ul><br>
                    <style>
            .buttonkuks{
                    background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    -webkit-transition-duration: 0.4s; /* Safari */
                    transition-duration: 0.4s;
                    cursor: pointer;
                }
                .button1kuk {
                    background-color: white; 
                    color: green; 
                    border: 2px solid #4CAF50;
                }

                .button1kuk:hover {
                    
                    background-color: #4CAF50;
                    color: white;       
                }
                .button3kuk {
                    background-color: white; 
                    color: #F0AD4E; 
                    border: 2px solid #F0AD4E;
                }

                .button3kuk:hover {
                    
                    background-color: #F0AD4E;
                    color: white;       
}
                    
                </style>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>