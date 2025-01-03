<?php
require __DIR__ . '/config/conn.php';
// require __DIR__ . '/includes/header.php';
?> 

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login | Your App</title>
      <link rel="stylesheet" href="./assets/css/style.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

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
            <form>
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
                        <!-- <input type="checkbox">
                        <span>Remember me</span> --> <!-- Maybe I will need to implement that later... -->
                    </label>
                    <div class="text-center">

                      <a href="#" class="forgot-password ">Forgot password?</a>
                    </div>
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
</body>
</html>
<?php
// include __DIR__ . '/includes/footer.php'; 
?> 


<script src="assets/JS/script.js"></script>
</body>
</html>