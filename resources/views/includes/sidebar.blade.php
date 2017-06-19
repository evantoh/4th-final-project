<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @if(Auth::user()->user_type == 'academic_advisor')
                        <li><a href="{{url('teaches')}}">Display students registered </a></li>
                    @elseif(Auth::user()->user_type == 'student')
                        <li><a href="{{url('results')}}">view Results</a></li>
                        <li><a href="{{url('unitsdisplay')}}">Display units</a></li>

                    @elseif(Auth::user()->user_type == 'admin')
                        <li><a href="{{ url('addyear') }}">Adding year </a></li>
                        <li><a href="{{ url('register') }}">Registration </a></li>

                    @elseif(Auth::user()->user_type == 'data_entry_operator')
                        <li><a href="{{ url('data') }}">Add Unit</a></li>
                        <li><a href="{{url('displaystudents')}}">Display students with grade</a></li>
                        <li><a href="{{ url('assignunitslecturer') }}">Assign unit to lecturer </a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </div>
    </div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
