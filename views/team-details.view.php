<?php
getHeader("Team Profile | Airsoft Hub");

// You could use $_GET['id'] to dynamically fetch this data later
?>

<h2 class="mb-4">Team Phantom Wolves</h2>

<div class="row mb-5">
  <div class="col-md-8">
    <div class="card shadow-sm border-0 mb-4">
      <div class="card-body">
        <div class="d-flex align-items-center mb-3">
          <img src="https://via.placeholder.com/80x80?text=PW" class="rounded-circle me-3" alt="Team Logo">
          <div>
            <h5 class="mb-0">Phantom Wolves</h5>
            <small class="text-muted">Established: 2019 • Region: South Valley</small>
          </div>
        </div>
        <p>
          Phantom Wolves is a competitive airsoft team known for its fast-paced CQB tactics and disciplined recon operations. With over 25 active members, the team has participated in national-level events and regularly hosts training sessions.
        </p>
      </div>
    </div>

    <div class="card shadow-sm border-0 mb-4">
      <div class="card-body">
        <h5 class="card-title">Specializations</h5>
        <ul class="small mb-0">
          <li>CQB (Close Quarters Battle)</li>
          <li>Recon & Flanking</li>
          <li>Urban Ops</li>
          <li>Team-based objective games</li>
        </ul>
      </div>
    </div>

    <div class="card shadow-sm border-0">
      <div class="card-body">
        <h5 class="card-title">Team Description</h5>
        <p class="small">
          Our team trains monthly and maintains a strong discipline-first mindset. We welcome experienced players and new recruits who are willing to commit and grow with the squad. Most of our members are aged 18–35 and have backgrounds in military-style simulation or competitive play.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card shadow-sm border-0 mb-4">
      <div class="card-body">
        <h5 class="card-title">Join Team</h5>
        <p class="small">Interested in joining Phantom Wolves? Submit your request below.</p>
        <a href="#" class="btn btn-dark w-100 mb-2">Request to Join</a>
        <a href="#" class="btn btn-outline-secondary w-100">Contact Leader</a>
      </div>
    </div>

    <div class="card shadow-sm border-0">
      <div class="card-body">
        <h5 class="card-title">Quick Stats</h5>
        <ul class="list-unstyled small mb-0">
          <li><strong>Members:</strong> 26</li>
          <li><strong>Founded:</strong> April 2019</li>
          <li><strong>Location:</strong> South Valley</li>
          <li><strong>Events Attended:</strong> 48</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php
getFooter();
?>