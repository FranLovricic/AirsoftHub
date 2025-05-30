<?php
getHeader("Events | Airsoft Hub");
?>

<h2 class="mb-4">Events</h2>
<p class="text-muted mb-4">Explore upcoming and past airsoft events. Join games, tournaments, and operations hosted by the community.</p>

<!-- Upcoming Events -->
<h4 class="mb-3">Upcoming Events</h4>
<div class="row mb-5">
  <?php for ($i = 1; $i <= 4; $i++): ?>
    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm border-success">
        <div class="card-body">
          <h6 class="card-title">Operation Strikezone <?= $i ?></h6>
          <p class="card-text small text-muted">Location: Field <?= $i ?></p>
          <p class="card-text small">Date: <?= date('F d, Y', strtotime("+$i week")) ?></p>
          <a href="#" class="btn btn-outline-success btn-sm w-100">View Details</a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>

<!-- Past Events -->
<h4 class="mb-3">Past Events</h4>
<div class="row">
  <?php for ($i = 1; $i <= 4; $i++): ?>
    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm border-secondary">
        <div class="card-body">
          <h6 class="card-title">Urban CQB Battle <?= $i ?></h6>
          <p class="card-text small text-muted">Location: Zone <?= $i ?></p>
          <p class="card-text small">Date: <?= date('F d, Y', strtotime("-$i month")) ?></p>
          <a href="#" class="btn btn-outline-secondary btn-sm w-100">View Summary</a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>

<?php
getFooter();
?>