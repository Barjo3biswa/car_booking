<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/users_end/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



</head>

<body>
    <section id="login-reg-section">
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx">
                    <img src="https://static.vecteezy.com/system/resources/previews/038/811/140/large_2x/ai-generated-beautiful-background-for-car-rental-advertising-free-photo.jpeg"
                        alt="" />
                    <div class="overlay-text">
                        <h1>Jajabor</h1>
                        <p>Admin Panel — Car and Bike Rental Service</p>
                    </div>
                </div>
                <div class="formBx">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2>Sign In</h2>
                        <div class="input-field">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="input-field">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="submit" value="Login" />
                        <p class="signup">
                            Don't have an account? <a href="#" onclick="toggleForm();">Sign Up.</a>
                        </p>
                    </form>
                </div>
            </div>

            <div class="user signupBx">
                <div class="formBx">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2>Create an account</h2>
                        <div class="input-field">
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="User Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="input-field">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="input-field">
                            <select name="user_type" class="form-control" required>
                                <option value="">--Registration Type--</option>
                                <option value="rider">Rider</option>
                                <option value="owner">Car Owner</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fas fa-lock"></i>
                        </div>



                        <div class="input-field">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirm Password">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="submit" value="Sign Up" />
                        <p class="signup">
                            Already have an account? <a href="#" onclick="toggleForm();">Sign In.</a>
                        </p>
                    </form>
                </div>
                <div class="imgBx">
                    <img src="https://static.vecteezy.com/system/resources/previews/038/811/140/large_2x/ai-generated-beautiful-background-for-car-rental-advertising-free-photo.jpeg"
                        alt="" />
                    <div class="overlay-text">
                        <h1>Jajabor</h1>
                        <p>Admin Panel — Car and Bike Rental Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        const toggleForm = () => {
            const container = document.querySelector('.container');
            container.classList.toggle('active');
        };
    </script>
</body>

</html>
