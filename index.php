<?php
require __DIR__ . '/config/conn.php';
// require __DIR__ . '/includes/header.php';
?> 
<link rel="stylesheet" href="./assets/css/style.css">

<div class="w3-container w3-black w3-center w3-allerta">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Your App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #F5EFFF;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            border: 1px solid #E5D9F2;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            width: 64px;
            height: 64px;
            background: #CDC1FF;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .logo i {
            font-size: 1.5rem;
            color: #A294F9;
        }

        h1 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            color: #666;
            font-size: 0.875rem;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            border: 1px solid #E5D9F2;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:hover {
            border-color: #CDC1FF;
        }

        .form-control:focus {
            outline: none;
            border-color: #A294F9;
            box-shadow: 0 0 0 2px rgba(162, 148, 249, 0.2);
        }

        .floating-label {
            position: absolute;
            left: 1rem;
            top: 1rem;
            pointer-events: none;
            transition: all 0.2s ease;
            color: #666;
            background: white;
            padding: 0 0.25rem;
        }

        .form-control:focus ~ .floating-label,
        .form-control:not(:placeholder-shown) ~ .floating-label {
            transform: translateY(-1.4rem) scale(0.85);
            color: #A294F9;
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .password-toggle:hover {
            color: #A294F9;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        input[type="checkbox"] {
            accent-color: #A294F9;
        }

        .forgot-password {
            color: #A294F9;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .forgot-password:hover {
            color: #8C7DF9;
        }

        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: #A294F9;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background: #8C7DF9;
        }

        .signup-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.875rem;
            color: #666;
        }

        .signup-link a {
            color: #A294F9;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .signup-link a:hover {
            color: #8C7DF9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <!-- Header -->
            <div class="header">
                <div class="logo">
                    <i class="fas fa-user-circle"></i>
                </div>
                <h1>Welcome Back</h1>
                <p class="subtitle">Sign in to continue your journey</p>
            </div>

            <!-- Form -->
            <form onsubmit="handleSubmit(event)">
                <!-- Email Field -->
                <div class="form-group">
                    <input 
                        type="email" 
                        id="email" 
                        class="form-control" 
                        placeholder=" "
                        required
                        autocomplete="email"
                    >
                    <label for="email" class="floating-label">Email address</label>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <input 
                        type="password" 
                        id="password" 
                        class="form-control" 
                        placeholder=" "
                        required
                        autocomplete="current-password"
                    >
                    <label for="password" class="floating-label">Password</label>
                    <button 
                        type="button"
                        id="password-toggle"
                        class="password-toggle"
                        aria-label="Toggle password visibility"
                    >
                        <i class="fas fa-eye" id="toggleIcon"></i>
                    </button>
                </div>

                <!-- Options -->
                <div class="options">
                    <label class="checkbox-wrapper">
                        <input type="checkbox">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn">
                    <span>Sign in</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <!-- Sign Up Link -->
            <div class="signup-link">
                <p>
                    Don't have an account? 
                    <a href="#">Create one now</a>
                </p>
            </div>
        </div>
    </div>

    <!-- <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (password.type === 'password') {
                password.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        function handleSubmit(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            console.log('Login attempt:', { email, password });
        }
    </script> -->
</body>
</html>
<?php
// include __DIR__ . '/includes/footer.php'; 
?> 
</div>

<script src="assets/JS/script.js"></script>
</body>
</html>