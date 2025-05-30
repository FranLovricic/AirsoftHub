<?php
getHeader("Register | Airsoft Hub");
?>

<div class="row justify-content-center my-5">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow-sm border-0">
      <div class="card-body">
        <h4 class="card-title mb-4 text-center">Create an Account</h4>

        <!-- Registration Form -->
        <form method="POST" action="register-process.php">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required placeholder="e.g. AirsoftPro77">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required placeholder="Create a strong password">
          </div>

          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required placeholder="Repeat your password">
          </div>

          <!-- Optional: Add team name or role -->
          <!--
          <div class="mb-3">
            <label for="team" class="form-label">Team Name (Optional)</label>
            <input type="text" class="form-control" id="team" name="team" placeholder="Join or create a team later">
          </div>
          -->

          <button type="submit" class="btn btn-dark w-100">Register</button>
        </form>
      </div>
    </div>

    <div class="text-center mt-3">
      <small class="text-muted">Already have an account? <a href="login.php">Login here</a></small>
    </div>
  </div>
</div>

<?php
getFooter();
?>