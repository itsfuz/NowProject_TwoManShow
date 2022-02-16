<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/now.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" style="text-">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <br><br><br><br>
        <div class="card">
            <h1>LOGIN</h1>
            <form method="POST" action="/userlogin">
                @csrf

                <div style="padding: 50px">
                    <div class="form-floating" style="width: 500px; justify-content:center">
                        <input type="username" name="username" class="form-control  @error('username') is-invalid @enderror" id="floatingInput" placeholder="admin" required autocomplete="username" autofocus>
                        <label for="floatingInput">Username</label>
                          @error('username')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <br>
                      <div class="form-floating"  style="width: 500px;  justify-content:center">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <br><br>
                      <div class="row justify-content-center">
                        <button class="login" type="submit">Login</button>
                      </div>
                      <div class="row justify-content-center">
                        <p  style="font-size: 12px">Don't have an account? Register <a href="/register" style="color: #D9534F">here</a>.</p>
                      </div>
                </div>
                </form>
        </div>

    </div>


</body>
</html>


<style>
    body{
        background-image: linear-gradient(to bottom right, #FA4EAB, #A3E4DB);
        width: 100%;
        height: 500px;
   }

   .card {
    width: 800px;
    display:flex;
    justify-content:center;
    margin:auto;
    align-items: center;
    border-radius: 50px;
    padding: 50px;
    box-shadow: 5px 5px #A3E4DB;
   }

   .login {
    text-align: center;
    justify-content: center;
    display: flex;
    background-color: #FA4EAB;
    color:white;
    border: none;
    width:100px;
    padding-bottom:5px
   }


</style>
