<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Course-list</title>
</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">User Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('user.store')}}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">Enter Full Name : </label><br>
                                <input type="text" name="name" id="name" class="form-control">
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="email" class="text-info">Your Email : </label><br>
                                <input type="email" name="email" id="id" class="form-control">
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="id" class="text-info">Your Student ID : </label><br>
                                <input type="number" name="id" id="id" class="form-control">
                                @error('id') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <br>
                            <div class="form-group form-control">
                                <label for="shift" class="text-info">Shift :</label>
                                <select name="shift">
                                    <option value="Morning">Morning</option>

                                    <option value="Day">Day</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group form-control">
                                <label for="gender" class="text-info">Gender :</label><br>
                                <input type="radio" name="gender" value="Male" class=""> Male
                                <input type="radio" name="gender" value="Female" class=""> Female
                                <input type="radio" name="gender" value="Other" class=""> Others
                            </div>

                            <br>
                            <div class="form-group">

                                <button class="btn btn-info btn-md"> Submit</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>