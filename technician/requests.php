<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Technician · Service Requests · Bull Auto</title>
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
    <a class="nav-link" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link active" href="requests.php"><i class="bi bi-tools"></i>Service Requests</a><a class="nav-link" href="diagnostics.php"><i class="bi bi-clipboard2-pulse"></i>Diagnostics</a><a class="nav-link" href="earnings.php"><i class="bi bi-cash-coin"></i>Earnings</a><a class="nav-link" href="ratings.php"><i class="bi bi-star"></i>Ratings</a><a class="nav-link" href="availability.php"><i class="bi bi-calendar-check"></i>Availability</a>
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
    <div class="ba-content"><div class="ba-page-title"><div><h1>Service Requests</h1></div></div><div class="row g-3">
        <div class="col-md-6 col-xl-3"><div class="ba-card h-100">
          <div class="d-flex justify-content-between mb-2"><strong>Anna Becker</strong><span class="pill danger">Urgent</span></div>
          <p class="text-muted mb-1">BMW 320i 2019</p><p class="mb-2">Brake noise</p>
          <div class="d-flex justify-content-between align-items-center"><span class="text-muted small"><i class="bi bi-geo-alt me-1"></i>2.1 km</span><button class="btn btn-sm btn-ba-primary">Accept</button></div>
        </div></div>
        <div class="col-md-6 col-xl-3"><div class="ba-card h-100">
          <div class="d-flex justify-content-between mb-2"><strong>Luca Rossi</strong><span class="pill warning">High</span></div>
          <p class="text-muted mb-1">Fiat 500 2020</p><p class="mb-2">Battery dead</p>
          <div class="d-flex justify-content-between align-items-center"><span class="text-muted small"><i class="bi bi-geo-alt me-1"></i>3.4 km</span><button class="btn btn-sm btn-ba-primary">Accept</button></div>
        </div></div>
        <div class="col-md-6 col-xl-3"><div class="ba-card h-100">
          <div class="d-flex justify-content-between mb-2"><strong>Sara M.</strong><span class="pill info">Normal</span></div>
          <p class="text-muted mb-1">Renault Clio 2018</p><p class="mb-2">AC not cold</p>
          <div class="d-flex justify-content-between align-items-center"><span class="text-muted small"><i class="bi bi-geo-alt me-1"></i>5.0 km</span><button class="btn btn-sm btn-ba-primary">Accept</button></div>
        </div></div>
        <div class="col-md-6 col-xl-3"><div class="ba-card h-100">
          <div class="d-flex justify-content-between mb-2"><strong>James T.</strong><span class="pill warning">High</span></div>
          <p class="text-muted mb-1">Ford Focus 2017</p><p class="mb-2">Engine warning</p>
          <div class="d-flex justify-content-between align-items-center"><span class="text-muted small"><i class="bi bi-geo-alt me-1"></i>6.2 km</span><button class="btn btn-sm btn-ba-primary">Accept</button></div>
        </div></div></div></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/charts.js"></script><script src="../assets/js/dashboard.js"></script>
</body>
</html>