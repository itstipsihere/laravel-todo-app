<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login!</title>P
  </head>
  <body> 
    <div class="container">
        
        <div class="my-5 card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="{{route("methodlogin")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="email">
                        <div class="alert-danger">
                           <span> @error('email'){{$message}}@enderror <span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label " for="pswd">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="passwords">
                        <div class="alert-danger">
                           <span> @error('password'){{$message}}@enderror </span>
                        </div>
                    </div>
                    <div>
                        <small>Don't have an account</small>
                        <a href="{{route("openSignup")}}">Create an account</a>
                    </div>
                    <button type="submit" class="my-2 btn btn-primary">Login</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>