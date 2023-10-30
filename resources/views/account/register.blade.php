<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('_account/register.css') }}">

    <script src="{{ asset('build/assets/app.js') }}" defer></script>
    <title>Register</title>
</head>
<body>
    <div class="login_card">
        <div class="login_form">
            <div class="header">
                Smart Jounral
            </div>
            <div class="header">
                Create new account
            </div>

            <div class="form_container">
                <form action="{{ route('create_account') }}" method="POST">
                    @csrf
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" required>
                    </div>

                    <div>
                        <label>Surname</label>
                        <input type="text" name="surname" required>
                    </div>

                    <div>
                        <label>Login</label>
                        <input type="text" name="login" required>
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>

                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
        <div class="register_image">
            <img src="{{ asset('images/bg.jpeg') }}"/>
        </div>
    </div>
</body>
</html>

