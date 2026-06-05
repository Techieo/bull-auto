<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Retailer · Dashboard · Bull Auto</title>
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
    <div class="nav-section">Retailer</div>
    <a class="nav-link active" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link" href="marketplace.php"><i class="bi bi-shop"></i>Marketplace</a><a class="nav-link" href="orders.php"><i class="bi bi-bag-check"></i>Orders</a><a class="nav-link" href="../admin/suppliers.php"><i class="bi bi-building"></i>Suppliers</a><a class="nav-link" href="marketplace.php"><i class="bi bi-cpu"></i>AI Recommendations</a>
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
<div class="ba-page-title"><div><h1>Retailer Dashboard</h1></div></div>
<div class="row g-3 mb-4">
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-bag-check"></i></div><div class="label">Orders (30d)</div><div class="value">52</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+4</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-cash-stack"></i></div><div class="label">Spend (30d)</div><div class="value">$12,820</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+9%</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-arrow-counterclockwise"></i></div><div class="label">Returns</div><div class="value">2</div><div class="delta down"><i class="bi bi-arrow-down me-1"></i>-1</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-graph-up"></i></div><div class="label">Avg margin</div><div class="value">28%</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+1.2%</div></div></div>
</div>
<div class="row g-3">
  <div class="col-lg-7"><div class="ba-panel"><div class="ba-panel-head"><h3>Sales trend</h3></div><div class="ba-chart" data-chart="line" data-color="#0b5fff"></div></div></div>
  <div class="col-lg-5"><div class="ba-panel"><div class="ba-panel-head"><h3>Top suppliers (AI)</h3></div>
    <ul class="list-unstyled mb-0">
      <li class="d-flex justify-content-between py-2 border-bottom"><span>Bosch GmbH</span><span class="pill success">98%</span></li>
      <li class="d-flex justify-content-between py-2 border-bottom"><span>NGK Co.</span><span class="pill success">95%</span></li>
      <li class="d-flex justify-content-between py-2 border-bottom"><span>Mann-Filter</span><span class="pill info">92%</span></li>
      <li class="d-flex justify-content-between py-2"><span>Sumitomo</span><span class="pill info">89%</span></li>
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