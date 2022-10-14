<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/landpage.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>

<body>
    <div class="container">
        <header>
        <i class='bx bxl-c-plus-plus size'></i>
        <ul>
            <li><a href="#" class="brand">Courserio</a></li>
           <li style="margin-left: -85px;"> <a href="{{route('user.login')}}" class="btn-primary btn space"> User </a></li>
          <li>  <a href="{{route('admin.login')}}" class="btn-primary btn space"> Login</a></li>
            </ul>
        </header>

        <section class="middle1">
        <div class="mid">
                <h1>Generate more ideas with this course !</h1>
            </div>
        </section>
        
        <section class="middle2">
            @foreach($courses as $course)
            <div class="box">
                <img class="card-img-top" src="{{asset('img/course.jpg')}}">
                <h3>{{$course->course}}</h3>
                <a href="{{route('detail', $course->id)}}" class="btn btn-primary">Details</a>
            </div>
            @endforeach
            
        </section>
        <footer>
            <div class="info">
                <ul>
                    <li><a href="">About us</li></a>
                    <Li><a href="">For more info: courseio@gmail.com</Li></a>
                    <Li><a href="">Privacy Policy</Li></a>
                    <Li><a href="">Terms of Use</Li></a>

                </ul>


            </div>
        </footer>

    </div>
</body>

</html>