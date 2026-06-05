<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Supplier · Dashboard · Bull Auto</title>
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
    <div class="nav-section">Supplier</div>
    <a class="nav-link active" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link" href="products.php"><i class="bi bi-box-seam"></i>Products</a><a class="nav-link" href="inventory.php"><i class="bi bi-stack"></i>Inventory</a><a class="nav-link" href="orders.php"><i class="bi bi-bag-check"></i>Orders</a><a class="nav-link" href="shipments.php"><i class="bi bi-truck"></i>Shipments</a><a class="nav-link" href="analytics.php"><i class="bi bi-bar-chart"></i>Analytics</a><a class="nav-link" href="payments.php"><i class="bi bi-credit-card"></i>Payments</a><a class="nav-link" href="settings.php"><i class="bi bi-gear"></i>Settings</a>
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
<div class="ba-page-title"><div><h1>Supplier Dashboard</h1><p>Today, Acme Auto Parts Inc.</p></div>
<button class="btn btn-ba-primary"><i class="bi bi-plus-lg me-1"></i>Add product</button></div>
<div class="row g-3 mb-4">
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-cash-stack"></i></div><div class="label">Revenue (30d)</div><div class="value">$148,210</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+12.4%</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-bag-check"></i></div><div class="label">Open orders</div><div class="value">82</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+8</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-exclamation-triangle"></i></div><div class="label">Low stock SKUs</div><div class="value">14</div><div class="delta down"><i class="bi bi-arrow-down me-1"></i>-2</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-clock-history"></i></div><div class="label">Avg lead time</div><div class="value">2.4 days</div><div class="delta down"><i class="bi bi-arrow-down me-1"></i>-0.3</div></div></div>
</div>
<div class="row g-3 mb-4">
  <div class="col-lg-8"><div class="ba-panel"><div class="ba-panel-head"><h3>Revenue</h3><a class="link" href="#">Last 12 weeks</a></div><div class="ba-chart" data-chart="line" data-color="#0b5fff"></div></div></div>
  <div class="col-lg-4"><div class="ba-panel"><div class="ba-panel-head"><h3>Inventory health</h3></div><div class="ba-chart" data-chart="bar" data-color="#16a34a" data-count="6"></div></div></div>
</div>
<div class="row g-3">
  <div class="col-lg-8"><div class="ba-panel">
    <div class="ba-panel-head"><h3>Recent orders</h3><a class="link" href="orders.php">View all</a></div>
    <div class="table-responsive"><table class="ba-table">
      <thead><tr><th>Order</th><th>Buyer</th><th>Items</th><th>Total</th><th>Status</th></tr></thead>
      <tbody>
        <tr><td>#ORD-8204</td><td>Partsworld SA</td><td>12</td><td>$4,820</td><td><span class="pill warning">Packing</span></td></tr>
        <tr><td>#ORD-8203</td><td>Lagos Motors</td><td>4</td><td>$1,240</td><td><span class="pill info">Shipped</span></td></tr>
        <tr><td>#ORD-8201</td><td>Berlin Tires</td><td>20</td><td>$3,210</td><td><span class="pill success">Delivered</span></td></tr>
      </tbody></table></div>
  </div></div>
  <div class="col-lg-4"><div class="ba-panel">
    <div class="ba-panel-head"><h3>Top products</h3></div>
    <ul class="list-unstyled mb-0">
      <li class="d-flex justify-content-between py-2 border-bottom"><span>Bosch Brake Pads</span><strong>$28,420</strong></li>
      <li class="d-flex justify-content-between py-2 border-bottom"><span>NGK Spark Plugs</span><strong>$19,810</strong></li>
      <li class="d-flex justify-content-between py-2 border-bottom"><span>Mann Oil Filters</span><strong>$14,220</strong></li>
      <li class="d-flex justify-content-between py-2"><span>Sumitomo Tires</span><strong>$9,640</strong></li>
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