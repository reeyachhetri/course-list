<div class="sidebar">
    <div class="logo-details">

        <a href="{{route('admin.index')}}"><i class='bx bxl-c-plus-plus'></i></a>
        <span class="logo_name">Courserio</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{route('admin.index')}}" class="active">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>

        <li>
        <a href="{{route('admin.course.index')}}">
                <i class='bx bx-coin-stack'></i>
                <span class="links_name">Courses</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin.user')}}">
                <i class='bx bx-user'></i>
                <span class="links_name">Users</span>
            </a>
        </li>

        <li>
            <a href="{{route('faculty')}}">
                <i class='bx bx-user'></i>
                <span class="links_name">Faculty</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-message'></i>
                <span class="links_name">Messages</span>
            </a>
        </li>
        
        

        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">Settings</span>
            </a>
        </li>
        <li class="log_out">
            <a href="#">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>