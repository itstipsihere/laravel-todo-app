<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Signup User</title>
  </head>
  <body> 
    <div class="container">
        <div class="my-5 card">
            <div class="card-header">
                Create an account
            </div>
            <div class="card-body">
                <form  autocomplete="off" action="{{route("methodcreate")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" class="form-control" placeholder="name" name="name">
                        <div class="alert-danger">
                            @error('name'){{$message}}@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" placeholder="email" name="email">
                        <div class="alert-danger">
                            @error('email'){{$message}}@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pswd">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="passwords">
                        <div class="alert-danger">
                            @error('password'){{$message}}@enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Signup</button>
                </form>
            </div>
        </div>
        <!-- Errors -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>