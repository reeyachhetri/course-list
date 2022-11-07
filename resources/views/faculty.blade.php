 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/faculty.css')}}">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin</title>
</head>

<body>
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
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">

                <div class="dropdown">

                    <a class="admin_name dropbtn">Admin</a>
                    <i class='bx bx-chevron-down'></i>
                    <div class="dropdown-content">
                        <a href="#">Settings</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Faculty Member</div>
                    <div class="sales-details">

                        <ul class="details">
                            <li class="topic">Members</li>
                            <li><a href="#">Alex Doe</a></li>
                            <li><a href="#">David Mart</a></li>
                            <li><a href="#">Roe Parter</a></li>
                            <li><a href="#">Meghan Clarke</a></li>

                        </ul>
                        <ul class="details">
                            <li class="topic">Shift</li>
                            <li><a href="#">Morning</a></li>
                            <li><a href="#">Day</a></li>
                            <li><a href="#">Morning</a></li>
                            <li><a href="#">Day</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Time</li>
                            <li><a href="#">10 A.M. - 1 P.M.</a></li>
                            <li><a href="#">1 P.M. - 6 P.M. </a></li>
                            <li><a href="#">1 P.M. - 6 P.M.</a></li>
                            <li><a href="#">10 A.M. - 1 P.M.</a></li>

                        </ul>
                        <ul class="details">
                            <li class="topic">Course</li>
                            <li><a href="#">Python</a></li>
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Java</a></li>
                            <li><a href="#">Database</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Price</li>
                            <li><a href="#">$204.98</a></li>
                            <li><a href="#">$24.55</a></li>
                            <li><a href="#">$25.88</a></li>
                            <li><a href="#">$170.66</a></li>
                        </ul>
                        <ul class="details">
                            <li class="topic">Actions</li>
                            <li><a href="#">Edit/</a> <a href="#"> Delete/</a> <a href="#">View</a></li>
                            <li><a href="#">Edit/</a> <a href="#"> Delete/</a> <a href="#">View</a></li>
                            <li><a href="#">Edit/</a> <a href="#"> Delete/</a> <a href="#">View</a></li>
                            <li><a href="#">Edit/</a> <a href="#"> Delete/</a> <a href="#">View</a></li>
                        </ul>
                    </div>
                    <div class="button">

                    </div>

                </div>
            </div>
    </section>



</body>

</html>