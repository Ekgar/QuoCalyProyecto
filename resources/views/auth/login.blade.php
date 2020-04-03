<!DOCTYPE html>
<html>

<head>
    <title>Login QuoCaly</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>    
    <div class="container">
        <div class="img">
            <img src="img/bg.jpg">
        </div>
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img src="img/avatar.svg">
                <h2 class="title">Bienvenidos</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Coreo electronico</h5>
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="email" >

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>

                        <input id="password" type="password" class="input" name="password" required autocomplete="current-password" >

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <a href="#">¿Olvido su contraseña?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
    <script src="https://kit.fontawesome.com/faa8c7b9aa.js" crossorigin="anonymous"></script>
</body>

</html>