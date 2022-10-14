<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>

<body>
    <div class="container">
        <header>
        <i class='bx bxl-c-plus-plus size'></i>
            <a href="{{route('home')}}" class="brand">Courserio</a>
            
        </header>
        <div class="mid">
        <h1>Details on Course</h1>
        <div class="middle1">
        <img class="card-img-top" src="{{asset('img/course.jpg')}}">
        <br>
        <h3 class={}>{{$course->course}}</h3>
        <br>
        <h4> Teacher : {{$course->teacher}} </h4>
         <br>
        <h4> Shift : {{$course->shift}} </h4>
         <br>
        <h4> Time : {{$course->time}} </h4>
         <br>
        <h4> Price : {{$course->price}} </h4>
        </div>

        
        </div>
        

       
        <footer>
            <div class="info">
                <ul>
                    <li><a href="">About us</li></a>
                    <Li><a href="">For more info: courseio@gmail.com</Li></a>
                    <Li><a href="">Privacy Policy</Li></a>
                    <Li><a href="">Terms of Use</Li></a>

                </ul>


            </div>
            .
        </footer>

    </div>
</body>

</html>