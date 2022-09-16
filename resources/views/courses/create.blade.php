<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <title>Details</title>
</head>
<body>
<div class="header">
    <form method="post" action="{{route('course.store')}}">
        @csrf
        <h3>Course</h3>
        <div class="cont">
        <label for="course_name">Course</label>
            <input name="course_name" type = "text" id="course_name">
            <br>
            <br>
            <label for="teacher">Teacher : </label>
            <input name="teacher" type = "text" id="teacher">
            <br>
            <br>
            <label for="shift">Shift : </label>
            <input type="radio" name="shift" value="morning"> Morning
        <input type="radio" name="shift" value="day"> Day
        
            <br>
            <br>
            <label for="time">Time : </label>
            <input type="time" id="time" name="time" min="09:00" max="18:00" required>
            <br>
            <br>
            <label for ="price"> Price : </label> 
            <input name="price" type="price"> 

            
           
          
            
            </div>
            <a href="{{route('admin.course.index')}}"><button class="btn">Submit</button></a>
        </div>

    </form>
</body>
</html>