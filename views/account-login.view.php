<?php
getHeader("Login | Airsoft Hub");
?>

<div class="row justify-content-center my-5">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow-sm border-0">
      <div class="card-body">
        <h4 class="card-title mb-4 text-center">Login to Your Account</h4>

        <!-- Login Form -->
        <form method="POST" action="login-process.php">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label d-flex justify-content-between">
              <span>Password</span>
              <a href="#" class="small">Forgot password?</a>
            </label>
            <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>

          <button type="submit" class="btn btn-dark w-100">Login</button>
        </form>
      </div>
    </div>

    <div class="text-center mt-3">
      <small class="text-muted">Don't have an account? <a href="register.php">Sign up here</a></small>
    </div>
  </div>
</div>

<?php
getFooter();
?>