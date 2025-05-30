<?php
getHeader("Item Details | Airsoft Hub");
?>

<div class="row my-5">
  <!-- Item Image -->
  <div class="col-md-6 mb-4">
    <div class="card shadow-sm border-0 h-100">
      <img src="https://via.placeholder.com/600x400?text=Item+Photo" class="card-img-top" alt="Marketplace Item">
    </div>
  </div>

  <!-- Item Info -->
  <div class="col-md-6">
    <div class="card shadow-sm border-0 mb-3">
      <div class="card-body">
        <h3 class="card-title mb-2">Custom AEG M4 Rifle</h3>
        <p class="text-muted small mb-3">Posted on March 10, 2025</p>
        <h4 class="text-dark mb-3">$220</h4>
        <p class="card-text">
          Upgraded airsoft AEG M4 with reinforced gearbox, high torque motor, and precision barrel. Comes with battery and charger. Used in 4 games, excellent condition.
        </p>
        <ul class="list-unstyled small">
          <li><strong>Condition:</strong> Excellent</li>
          <li><strong>Location:</strong> Northwood, NJ</li>
          <li><strong>Shipping:</strong> Available (Buyer pays)</li>
        </ul>
      </div>
    </div>

    <!-- Seller Info -->
    <div class="card shadow-sm border-0">
      <div class="card-body d-flex align-items-center">
        <img src="https://via.placeholder.com/50x50?text=JD" class="rounded-circle me-3" alt="Seller">
        <div>
          <h6 class="mb-0">JohnDoe_23</h6>
          <small class="text-muted">Member since 2023</small>
        </div>
        <div class="ms-auto">
          <a href="#" class="btn btn-outline-dark btn-sm">Contact Seller</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
getFooter();
?>