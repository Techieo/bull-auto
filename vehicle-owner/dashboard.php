<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vehicle Owner · Dashboard · Bull Auto</title>
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
    <div class="nav-section">Vehicle Owner</div>
    <a class="nav-link active" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link" href="vehicles.php"><i class="bi bi-car-front"></i>My Vehicles</a><a class="nav-link" href="marketplace.php"><i class="bi bi-shop"></i>Spare Parts</a><a class="nav-link" href="../technician/requests.php"><i class="bi bi-tools"></i>Technicians</a><a class="nav-link" href="diagnostics.php"><i class="bi bi-clipboard2-pulse"></i>Diagnostics</a><a class="nav-link" href="orders.php"><i class="bi bi-bag-check"></i>Orders</a>
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
<div class="ba-page-title"><div><h1>My Garage</h1><p>Welcome back, Anna.</p></div></div>
<div class="row g-3 mb-4">
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-car-front"></i></div><div class="label">Vehicles</div><div class="value">2</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i></div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-bag-check"></i></div><div class="label">Open orders</div><div class="value">1</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i></div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-tools"></i></div><div class="label">Service due</div><div class="value">1</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i></div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-piggy-bank"></i></div><div class="label">Saved (YTD)</div><div class="value">$840</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+12%</div></div></div>
</div>
<div class="row g-3">
  <div class="col-lg-6"><div class="ba-panel">
    <div class="ba-panel-head"><h3>BMW 320i 2019</h3><span class="pill warning">Service due</span></div>
    <p class="text-muted">Next: Brake pads replacement · 1,200 km away</p>
    <button class="btn btn-ba-primary">Find technician</button>
  </div></div>
  <div class="col-lg-6"><div class="ba-panel">
    <div class="ba-panel-head"><h3>Renault Clio 2018</h3><span class="pill success">Healthy</span></div>
    <p class="text-muted">Last service: 2 weeks ago</p>
    <button class="btn btn-ba-outline">View history</button>
  </div></div>
</div></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/charts.js"></script><script src="../assets/js/dashboard.js"></script>
</body>
</html>