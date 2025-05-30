<?php
getHeader("News | Airsoft Hub");
?>

<h2 class="mb-4">Latest News</h2>

<div class="row">
  <?php for ($i = 1; $i <= 4; $i++): ?>
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://via.placeholder.com/600x300?text=News+<?= $i ?>" class="card-img-top" alt="News Image">
        <div class="card-body">
          <h5 class="card-title">Airsoft Rule Update <?= $i ?></h5>
          <p class="text-muted small mb-2">Posted on <?= date('F j, Y', strtotime("-$i days")) ?></p>
          <p class="card-text">
            We’ve updated some of the gameplay rules and safety requirements. Make sure your gear is compliant before the next event.
          </p>
          <a href="news-details.php?id=<?= $i ?>" class="btn btn-outline-dark btn-sm">Read More</a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>

<?php
getFooter();
?>