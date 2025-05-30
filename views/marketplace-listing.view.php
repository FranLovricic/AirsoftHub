<?php
getHeader("Marketplace | Airsoft Hub");
?>

<h2 class="mb-4">Marketplace</h2>
<p class="text-muted mb-4">Browse gear, equipment, and accessories listed by other airsoft players.</p>

<!-- Search & Filter (Placeholder) -->
<div class="row mb-4">
  <div class="col-md-4">
    <input type="text" class="form-control" placeholder="Search items...">
  </div>
  <div class="col-md-3">
    <select class="form-select">
      <option selected>Category</option>
      <option value="rifles">Rifles</option>
      <option value="gear">Gear</option>
      <option value="accessories">Accessories</option>
    </select>
  </div>
  <div class="col-md-2">
    <select class="form-select">
      <option selected>Sort by</option>
      <option value="newest">Newest</option>
      <option value="price_low">Price: Low to High</option>
      <option value="price_high">Price: High to Low</option>
    </select>
  </div>
  <div class="col-md-3 text-end">
    <a href="#" class="btn btn-dark">+ Post New Item</a>
  </div>
</div>

<!-- Item Grid -->
<div class="row">
  <?php for ($i = 1; $i <= 8; $i++): ?>
    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="https://via.placeholder.com/300x180?text=Item+<?= $i ?>" class="card-img-top" alt="Item <?= $i ?>">
        <div class="card-body">
          <h6 class="card-title">Item Title <?= $i ?></h6>
          <p class="card-text small text-muted">Brief description of the item. Excellent condition.</p>
          <p class="fw-bold mb-2">\${{ 40 + $i * 10 }}</p>
          <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>

<?php
getFooter();
?>
