{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin</title>
</head> --}}





{{-- <body>
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
    </div> --}}
    {{-- <section class="home-section">
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
                    <a href="#">Log out</a>
                    
                </div>
                </div>
            </div>
        </nav> --}}

        @extends('layout.master')
        @section('content')
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total courses</div>
                        <div class="number">+100</div>
                        <div class="indicator">
                            <i class=''></i>

                        </div>
                    </div>
                    <i class=''></i>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Booking</div>
                        <div class="number">+20</div>
                        <div class="indicator">
                            <i class=''></i>

                        </div>
                    </div>
                    <i class=''></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Faculties</div>
                        <div class="number">+50</div>
                        <div class="indicator">
                            <i class=''></i>
                        </div>
                    </div>
                    <i class=''></i>
                </div>
            </div>

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Faculty Member</div>
                    <div class="sales-details">
                        <ul class="details">
                            <li class="topic">Time</li>
                            <li><a href="#">10 A.M. - 1 P.M.</a></li>
                            <li><a href="#">1 P.M. - 6 P.M. </a></li>
                            <li><a href="#">1 P.M. - 6 P.M.</a></li>
                            <li><a href="#">10 A.M. - 1 P.M.</a></li>

                        </ul>
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
                    </div>
                    <div class="button">
                        <a href="#">See All</a>
                    </div>
                </div>
                <div class="top-sales box">
                    <div class="title">Top Seling Course</div>
                    <ul class="top-sales-details">
                        <li>
                            <a href="#">
                                <!--<img src="images/sunglasses.jpg" alt="">-->
                                <span class="product">Python</span>
                            </a>
                            <span class="price">$204.98</span>
                        </li>
                        <li>
                            <a href="#">

                                <span class="product">Javascript </span>
                            </a>
                            <span class="price">$170.66</span>



                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endsection



{{-- </body>

</html> --}}