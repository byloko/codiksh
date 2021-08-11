    <div class="page-sidebar">

        <ul class="x-navigation">
            
            <li class="" style="background: #F85F6A; text-align: center;">
                <a style="font-size: 22px;" href="{{ url('admin/dashboard') }}"><b>Codiksh</b></a>
                <a href="#" class="x-navigation-control"></a>
            </li>

            <li class="@if ( Request::segment(2) == 'dashboard') active @endif">
                <a href="{{ url('admin/dashboard') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>

            <li class="@if ( Request::segment(2) == 'companies') active @endif">
                <a href="{{ url('admin/companies') }}"><span class="fa fa-building-o"></span> <span class="xn-text">Companies List</span></a>
            </li>

             <li class="@if ( Request::segment(2) == 'employees') active @endif">
                <a href="{{ url('admin/employees') }}"><span class="fa fa-user"></span> <span class="xn-text">Employees List</span></a>
            </li>

            <li class="@if ( Request::segment(2)== 'myaccount') active @endif">
                <a href="{{ url('admin/myaccount') }}"><span class="fa fa-cog"></span> <span class="xn-text">My Account</span></a>
            </li>

        </ul>
        
    </div>