<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin · Escrow Management · Bull Auto</title>
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
    <div class="nav-section">Admin</div>
    <a class="nav-link" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link" href="users.php"><i class="bi bi-person-check"></i>User Verification</a><a class="nav-link" href="suppliers.php"><i class="bi bi-building-check"></i>Supplier Approval</a><a class="nav-link active" href="escrow.php"><i class="bi bi-shield-lock"></i>Escrow Management</a><a class="nav-link" href="disputes.php"><i class="bi bi-exclamation-octagon"></i>Disputes</a><a class="nav-link" href="analytics.php"><i class="bi bi-bar-chart"></i>Analytics</a><a class="nav-link" href="ai-monitoring.php"><i class="bi bi-cpu"></i>AI Monitoring</a><a class="nav-link" href="transactions.php"><i class="bi bi-credit-card"></i>Transactions</a><a class="nav-link" href="reports.php"><i class="bi bi-file-earmark-text"></i>Reports</a><a class="nav-link" href="settings.php"><i class="bi bi-gear"></i>Settings</a>
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
<div class="ba-page-title"><div><h1>Escrow Management</h1><p>Funds held, released and disputed.</p></div></div>
<div class="row g-3 mb-4">
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-shield-lock"></i></div><div class="label">In escrow</div><div class="value">$1.2M</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+5.4%</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-cash-coin"></i></div><div class="label">Released (30d)</div><div class="value">$3.8M</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+12%</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-exclamation-octagon"></i></div><div class="label">Disputed</div><div class="value">$42K</div><div class="delta down"><i class="bi bi-arrow-down me-1"></i>-3.1%</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-arrow-counterclockwise"></i></div><div class="label">Refunded</div><div class="value">$18K</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+1.2%</div></div></div>
</div>
<div class="ba-panel"><div class="table-responsive"><table class="ba-table">
<thead><tr><th>Escrow ID</th><th>Order</th><th>Supplier</th><th>Buyer</th><th>Amount</th><th>Status</th></tr></thead>
<tbody><tr><td>ESC-10421</td><td>#ORD-8204</td><td>Bosch GmbH</td><td>Partsworld SA</td><td>$4,820</td><td><span class="pill info">In Escrow</span></td></tr><tr><td>ESC-10420</td><td>#ORD-8201</td><td>NGK Co.</td><td>Lagos Motors</td><td>$1,240</td><td><span class="pill success">Released</span></td></tr><tr><td>ESC-10418</td><td>#ORD-8198</td><td>Mann-Filter</td><td>Accra Garage</td><td>$680</td><td><span class="pill danger">Disputed</span></td></tr><tr><td>ESC-10412</td><td>#ORD-8195</td><td>Sumitomo</td><td>Berlin Tires</td><td>$3,210</td><td><span class="pill success">Released</span></td></tr></tbody></table></div></div></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/charts.js"></script><script src="../assets/js/dashboard.js"></script>
</body>
</html>