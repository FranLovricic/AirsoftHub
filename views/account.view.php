<?php
getHeader("My Account | Airsoft Hub");
?>

<h2 class="mb-4">My Account</h2>

<div class="row mb-5">
  <!-- Left Panel -->
  <div class="col-md-4">
    <div class="card shadow-sm border-0 mb-4">
      <div class="card-body text-center">
        <img src="https://via.placeholder.com/100x100?text=User" class="rounded-circle mb-3" alt="User Avatar">
        <h5 class="mb-0">JohnDoe_23</h5>
        <p class="text-muted small">johndoe@example.com</p>
        <hr>
        <a href="#" class="btn btn-outline-dark btn-sm w-100 mb-2">Edit Profile</a>
        <a href="#" class="btn btn-outline-secondary btn-sm w-100">Change Password</a>
      </div>
    </div>

    <div class="card shadow-sm border-0">
      <div class="card-body">
        <h6 class="card-title">Team</h6>
        <p class="small mb-1">Member of:</p>
        <p class="fw-semibold">Phantom Wolves</p>
        <a href="team-details.php" class="btn btn-sm btn-dark w-100">View Team</a>
      </div>
    </div>
  </div>

  <!-- Right Panel -->
  <div class="col-md-8">
    <!-- Registered Events -->
    <div class="card shadow-sm border-0 mb-4">
      <div class="card-body">
        <h5 class="card-title">Registered Events</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between">
            Operation Strikezone
            <span class="text-muted small">March 24, 2025</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            CQB Showdown
            <span class="text-muted small">February 11, 2025</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Marketplace Listings -->
    <div class="card shadow-sm border-0">
      <div class="card-body">
        <h5 class="card-title">My Marketplace Listings</h5>
        <div class="row">
          <?php for ($i = 1; $i <= 2; $i++): ?>
            <div class="col-md-6 mb-3">
              <div class="card h-100 border border-light">
                <div class="card-body">
                  <h6 class="card-title mb-1">Custom AEG Rifle <?= $i ?></h6>
                  <p class="small text-muted mb-2">Price: $<?= 150 + $i * 25 ?></p>
                  <p class="small mb-2">Upgraded gearbox, hi-cap mag, 11.1V LiPo compatible.</p>
                  <a href="#" class="btn btn-outline-dark btn-sm w-100">Edit Listing</a>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
getFooter();
?>