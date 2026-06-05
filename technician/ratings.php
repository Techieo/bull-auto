<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Technician · Ratings · Bull Auto</title>
  <meta name="description" content="Bull Auto - AI-Powered Automotive Procurement and Intelligence Platform." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/dashboard.css" />
  <link rel="stylesheet" href="../assets/css/responsive.css" />
</head>
<body>

<div class="ba-app">
  <aside class="ba-sidebar">
    <a class="ba-brand" href="../index.php"><span class="logo-mark">B<span class="accent">A</span></span> Bull Auto</a>
    <div class="nav-section">Technician</div>
    <a class="nav-link" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link" href="requests.php"><i class="bi bi-tools"></i>Service Requests</a><a class="nav-link" href="diagnostics.php"><i class="bi bi-clipboard2-pulse"></i>Diagnostics</a><a class="nav-link" href="earnings.php"><i class="bi bi-cash-coin"></i>Earnings</a><a class="nav-link active" href="ratings.php"><i class="bi bi-star"></i>Ratings</a><a class="nav-link" href="availability.php"><i class="bi bi-calendar-check"></i>Availability</a>
    <div class="nav-section">Account</div>
    <a class="nav-link" href="../index.php"><i class="bi bi-box-arrow-right"></i>Log out</a>
  </aside>
  <div class="ba-backdrop"></div>
  <div class="ba-main">
    <header class="ba-topbar">
      <button class="menu-toggle"><i class="bi bi-list"></i></button>
      <div class="search"><i class="bi bi-search"></i><input placeholder="Search orders, parts, suppliers…"></div>
      <div class="right">
        <button class="theme-toggle"><i class="bi bi-moon"></i></button>
        <button class="icon-btn" title="Notifications"><i class="bi bi-bell"></i><span class="dot"></span></button>
        <button class="icon-btn" title="Messages"><i class="bi bi-chat-dots"></i></button>
        <div class="avatar">JD</div>
      </div>
    </header>
    <div class="ba-content">
<div class="ba-page-title"><div><h1>Ratings</h1></div></div>
<div class="row g-3">
  <div class="col-lg-4"><div class="ba-panel text-center"><h2 class="display-4 fw-bold" style="color:var(--ba-blue)">4.92</h2><div class="text-warning fs-4">★★★★★</div><p class="text-muted">From 184 reviews</p></div></div>
  <div class="col-lg-8"><div class="ba-panel">
    <div class="ba-panel-head"><h3>Recent reviews</h3></div>
    <ul class="list-unstyled mb-0">
      <li class="py-3 border-bottom"><strong>Anna Becker</strong> <span class="text-warning">★★★★★</span><p class="mb-0 text-muted">Fast, fair, fixed my brakes in 40 minutes.</p></li>
      <li class="py-3 border-bottom"><strong>Luca Rossi</strong> <span class="text-warning">★★★★★</span><p class="mb-0 text-muted">Saved me a tow truck call. Highly recommend.</p></li>
      <li class="py-3"><strong>Sara M.</strong> <span class="text-warning">★★★★☆</span><p class="mb-0 text-muted">Great service, slight delay.</p></li>
    </ul>
  </div></div>
</div></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/charts.js"></script><script src="../assets/js/dashboard.js"></script>
</body>
</html>