<!DOCTYPE html>
<html>
<head>
    <title> WORLD BANK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container" >
        <form name="myform" class="form-group">
            <h2 style="text-align: center; font-weight: bold; font-size: 30px;"> WORLD BANK</h2>
            
            <div class="row" >
                <div class="col-md-6">
                    <label for="inputname"style="float: right;"></label>
                    <input type="text" class="form-control" style="height: 42px; width:250px; margin-left: 200px; " placeholder="First name" name="firstname" required>
                </div>

                <div class="col-md-6">
                    <label for="inputname" style="float: right;"></label>
                    <input type="text" class="form-control"style="height: 42px; width:250px; margin-left: 10px; " placeholder="Last name" name="lastname" required>
                </div>

                <div class="col-md-6">
                    <label for="text"style="float: right;"></label>
                    <input type="text" class="form-control"style="height: 42px; width:250px; margin-left: 200px; " placeholder="Username"name="username" required>
                </div>

                <div class="col-md-6">
                    <label for="number"style="float: right;"></label>
                    <input type="number" class="form-control"style="height: 42px; width:250px; margin-left: 10px; " placeholder="Account-no" name="accountno" required>
                </div>

                <div class="col-md-6">
                    <label for="pwd"style="float: right;"></label>
                    <input type="password" class="form-control"style="height: 42px; width:250px; margin-left: 200px; " placeholder="Password"name="password"required>
                </div>

                <div class="col-md-6">
                    <label for="pwd"style="float: right;"></label>
                    <input type="password" class="form-control"style="height: 42px; width:250px; margin-left: 10px; " placeholder="Confirm Password"name="confirmpassword" required>
                </div>

                <div class="col-md-12">
                    <label for="email"style="float: right;"></label>
                    <input type="email" class="form-control"style="height: 42px; width:510px; margin-left: 200px; " placeholder="name@example.com"name="email"required>
                </div>

                <div class="col-md-12" style="text-align: center; margin-top: 18px;">
                    <button type="submit" onclick="alert('Sign-in Successfull!');location.href='selectpage.php'"  >SIGN-UP</button>
                </div>
                <p style="text-align: center; color:black; size: 30px;"> Already have an account?
                <a href=LOginPage.htm style="text-align: center; color: darkblue;">Login Here</a>
                </p>
            </div>
        </form>
    </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>