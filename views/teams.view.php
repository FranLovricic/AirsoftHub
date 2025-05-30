<?php
getHeader("Teams | Airsoft Hub");
?>

<h2 class="mb-4">Teams & Organizations</h2>
<p class="text-muted mb-4">Discover airsoft teams and communities near you. Connect, collaborate, or challenge them in the field.</p>

<div class="row">
  <?php for ($i = 1; $i <= 8; $i++): ?>
    <div class="col-md-3 mb-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body text-center">
          <img src="https://via.placeholder.com/80x80?text=T<?= $i ?>" class="rounded-circle mb-3" alt="Team <?= $i ?>">
          <h6 class="card-title mb-1">Team <?= $i ?> Tactical</h6>
          <p class="small text-muted mb-2">Region <?= $i ?> • CQB & Recon</p>
          <p class="card-text small">Focused on teamwork, discipline, and precision. Active since 2020. Hosting monthly skirmishes.</p>
          <a href="#" class="btn btn-outline-dark btn-sm w-100">View Profile</a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>

<?php
getFooter();
?>