<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/course.css')}}">

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
                        <a href="#">Log out</a>

                    </div>
                </div>
            </div>
        </nav>

        <div class="home-content">
        

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Users List</div>
                    <table class="nav ">

                        <tr class="size">
                        
                            <th style="padding:10px 20px;">Name</th>
                            <th style="padding:10px 20px;">Email</th>
                            <th style="padding:10px 20px;">Student ID</th>
                            <th style="padding:10px 20px;">Shift</th>
                            <th style="padding:10px 20px;">Gender</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td style="padding:10px 20px;">{{$user->name}}</td>
                            <td style="padding:10px 20px;">{{$user->email}}</td>
                            <td style="padding:10px 20px;">{{$user->student_id}}</td>
                            <td style="padding:10px 20px;">{{$user->shift}}</td>
                            <td style="padding:10px 20px;">{{$user->gender}}</td>
                            
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            

        </div>

    </section>



</body>

</html>