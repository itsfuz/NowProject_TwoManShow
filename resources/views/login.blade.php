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

    <div class="container d-flex justify-content-center">
        <div class="card">
            <br>
            <form method="POST" action="/userlogin">
                @csrf
                <h3>LOGIN</h3>
                <br>
                <div class="row">
                    <div class="col-4 form-floating" style="text-align:right; padding-top:20px">
                        <label for="floatingInput">Username</label>
                        <br><br>
                        <label for="floatingPassword">Password</label>
                      </div>

                      <br>
                      <div class="col-8 form-floating" style="align-items:flex-start; padding:10px">
                        <input type="username" name="username" class="form-control  @error('username') is-invalid @enderror" id="floatingInput" placeholder="admin" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <br><br>
                </div>
                <br>
                <div class="row justify-content-center">
                    <button class="w-100 btn btn-lg" type="submit" id="loginBtn">Login</button>
                  </div>
                  <div class="row justify-content-center">
                    <p  style="font-size: 12px">Don't have an account? Register <a href="/register" style="color: #D9534F">here</a>.</p>
                    </div>
                </form>
        </div>

    </div>


</body>
</html>


<style>
    body{
        background-image: linear-gradient(to bottom right, #FE83C6, #A3E4DB);
        width: 100%;
        height: fit-content;
   }

   .card {
    width: 500px;
    height: fit-content;
    display:flex;
    justify-content:center;
    margin:auto;
    align-items: center;
    border-radius: 50px;
    padding: 20px;
    box-shadow: 5px 5px #FA4EAB;
   }

   .login {
    text-align: center;
    justify-content: center;
    display: flex;
    background-color: #FA4EAB;
    color:white;
    border: none;
    width:100px;
   }


   h3 {
       color: black;
        text-align: center;
        border-bottom: 1px solid gray;
   }


   #loginBtn {
    background: #FA4EAB;
    color:white;
   }

</style>
