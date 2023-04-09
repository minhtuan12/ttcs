{{-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Login Form</title>
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
    <main class="container">
        <h2>Login</h2>
        <form action="{{ route('register') }}" method="POST">

            @csrf
            <div class="input-field">
                <input autofocus autocomplete="off" type="text" name="username" id="username"
                    placeholder="Enter Your Username">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input autocomplete="off" type="text" name="phone" id="phone"
                    placeholder="Enter Your Phone Number">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input autocomplete="off" type="password" name="password" id="password"
                    placeholder="Enter Your Password">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Register">
        </form>

        <div class="footer">
            <span>Or Connect With Social Media</span>
            <div class="social-fields">
                <div class="social-field twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                        Sign in with Twitter
                    </a>
                </div>
                <div class="social-field facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        Sign in with Facebook
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html> --}}