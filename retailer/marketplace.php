<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Retailer · Marketplace · Bull Auto</title>
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
    <a class="nav-link" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link active" href="marketplace.php"><i class="bi bi-shop"></i>Marketplace</a><a class="nav-link" href="orders.php"><i class="bi bi-bag-check"></i>Orders</a><a class="nav-link" href="../admin/suppliers.php"><i class="bi bi-building"></i>Suppliers</a><a class="nav-link" href="marketplace.php"><i class="bi bi-cpu"></i>AI Recommendations</a>
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
    <div class="ba-content"><div class="ba-page-title"><div><h1>Marketplace</h1></div><input class="form-control" placeholder="Search parts…" style="max-width:300px"></div><div class="row g-3"><div class="col-sm-6 col-lg-4"><div class="ba-product">
          <div class="img"><i class="bi bi-disc"></i></div>
          <div class="body"><h5>Bosch Brake Pads</h5><div class="text-muted small">Bosch GmbH</div>
            <div class="mt-2 d-flex justify-content-between align-items-center"><span class="price">$42.10</span><button class="btn btn-sm btn-ba-primary">Add</button></div>
          </div></div></div><div class="col-sm-6 col-lg-4"><div class="ba-product">
          <div class="img"><i class="bi bi-lightning"></i></div>
          <div class="body"><h5>NGK Iridium Plug</h5><div class="text-muted small">NGK Co.</div>
            <div class="mt-2 d-flex justify-content-between align-items-center"><span class="price">$18.40</span><button class="btn btn-sm btn-ba-primary">Add</button></div>
          </div></div></div><div class="col-sm-6 col-lg-4"><div class="ba-product">
          <div class="img"><i class="bi bi-funnel"></i></div>
          <div class="body"><h5>Mann Oil Filter</h5><div class="text-muted small">Mann-Filter SA</div>
            <div class="mt-2 d-flex justify-content-between align-items-center"><span class="price">$9.80</span><button class="btn btn-sm btn-ba-primary">Add</button></div>
          </div></div></div><div class="col-sm-6 col-lg-4"><div class="ba-product">
          <div class="img"><i class="bi bi-circle"></i></div>
          <div class="body"><h5>Sumitomo Tire 205</h5><div class="text-muted small">Sumitomo</div>
            <div class="mt-2 d-flex justify-content-between align-items-center"><span class="price">$84.00</span><button class="btn btn-sm btn-ba-primary">Add</button></div>
          </div></div></div><div class="col-sm-6 col-lg-4"><div class="ba-product">
          <div class="img"><i class="bi bi-cpu"></i></div>
          <div class="body"><h5>Denso Alternator</h5><div class="text-muted small">Denso</div>
            <div class="mt-2 d-flex justify-content-between align-items-center"><span class="price">$219.00</span><button class="btn btn-sm btn-ba-primary">Add</button></div>
          </div></div></div><div class="col-sm-6 col-lg-4"><div class="ba-product">
          <div class="img"><i class="bi bi-lightbulb"></i></div>
          <div class="body"><h5>Hella LED Headlight</h5><div class="text-muted small">Hella</div>
            <div class="mt-2 d-flex justify-content-between align-items-center"><span class="price">$129.00</span><button class="btn btn-sm btn-ba-primary">Add</button></div>
          </div></div></div></div></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/charts.js"></script><script src="../assets/js/dashboard.js"></script>
</body>
</html>