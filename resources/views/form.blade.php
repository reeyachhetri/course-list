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
    <form method="post" action="">
        @csrf
        <h3>Course</h3>
        <div class="cont">
        <label for="course_name">Course Name</label>
            <input name="course_name" type = "text" id="course_name">
            <br>
            <br>
            <label for="time">Time Duration : </label>
            <input type="time" id="time" name="time" min="09:00" max="18:00" required>
            <br>
            <br>
            <label for="director">Faculty Name : </label>
            <input name="director" type = "text" id="director">
            <br>
            <br>
           
            <br>
            <label for ="review"> Rating : </label> <br>
            <input name="review" type="radio" value="Very good"> Very Good <br>
            <input name="review" type="radio" value="good"> Good <br>
            <input name="review" type="radio" value="bad"> Bad <br>
            <input name="review" type="radio" value="worst"> Worst 
            
            <br>
            <br>
            
            </div>
            <button class="btn">Submit</button>
        </div>

    </form>
</body>
</html>