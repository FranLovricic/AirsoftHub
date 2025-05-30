<?php 
    getHeader(); 
?>

    <!-- Highlight Section -->
    <div class="row mb-5">
        <div class="col-lg-12 text-center">
            <h1 class="fw-bold mb-3">
                <p>Dobro došli na <strong>HAMS</strong></p>
            </h1>
            <p class="lead text-muted">Potražnja događanja, vezani oglasi te spajanje sa drugim igračima — sve na jednom mjestu.</p>
        </div>
    </div>

    <div class="row text-center mb-5">
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Istanknut oglas</h5>
                    <p class="card-text">Ovo je istaknuti oglas.</p>
                    <a href="marketplace.php" class="btn btn-outline-dark btn-sm">Opširnije</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Nadolazeći događaj</h5>
                    <p class="card-text">Operacija "Poskok" –  5.4.2025. 8:00 - 6.4.2025. 9:00</p>
                    <a href="events.php" class="btn btn-outline-dark btn-sm">Opširnije</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Istaknuti tim</h5>
                    <p class="card-text">AT Poskoci Brač</p>
                    <a href="teams.php" class="btn btn-outline-dark btn-sm">Opširnije</a>
                </div>
            </div>
        </div>
    </div>

    <!-- News Section -->
    <h3 class="mb-3">Najnovije vijesti</h3>
    <div class="row mb-5">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="col-md-3 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Novost <?= $i ?></h6>
                        <p class="card-text small text-muted">Kratki opis novosti broj <?= $i ?>.</p>
                        <a href="#" class="text-decoration-none small">Pročitaj više →</a>
                    </div>
                </div>
            </div>
    <?php endfor; ?>
    </div>

    <!-- Events Section -->
    <h3 class="mb-3">Buduća događanja</h3>
    <div class="row mb-5">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="col-md-3 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Event <?= $i ?></h6>
                        <p class="card-text small text-muted"><?= 15 + $i ?>.4.2025. – MilSim</p>
                        <a href="events.php" class="text-decoration-none small">Opširnije →</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <!-- Marketplace Section -->
    <h3 class="mb-3">Istaknuti oglasi</h3>
    <div class="row mb-5">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="col-md-3 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Oglas broj: <?= $i ?></h6>
                        <p class="card-text small text-muted">$<?= 50 + $i * 25 ?> – Kao novo</p>
                        <a href="marketplace.php" class="text-decoration-none small">Opširnije →</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

<?php getFooter(); ?>
