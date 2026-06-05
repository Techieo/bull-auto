<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin · Dashboard · Bull Auto</title>
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
    <a class="nav-link active" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link" href="users.php"><i class="bi bi-person-check"></i>User Verification</a><a class="nav-link" href="suppliers.php"><i class="bi bi-building-check"></i>Supplier Approval</a><a class="nav-link" href="escrow.php"><i class="bi bi-shield-lock"></i>Escrow Management</a><a class="nav-link" href="disputes.php"><i class="bi bi-exclamation-octagon"></i>Disputes</a><a class="nav-link" href="analytics.php"><i class="bi bi-bar-chart"></i>Analytics</a><a class="nav-link" href="ai-monitoring.php"><i class="bi bi-cpu"></i>AI Monitoring</a><a class="nav-link" href="transactions.php"><i class="bi bi-credit-card"></i>Transactions</a><a class="nav-link" href="reports.php"><i class="bi bi-file-earmark-text"></i>Reports</a><a class="nav-link" href="settings.php"><i class="bi bi-gear"></i>Settings</a>
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
<div class="ba-page-title"><div><h1>Admin Dashboard</h1><p>Welcome back, system overview at a glance.</p></div>
<div class="d-flex gap-2"><button class="btn btn-ba-outline"><i class="bi bi-download me-1"></i>Export</button><button class="btn btn-ba-primary"><i class="bi bi-plus-lg me-1"></i>Add user</button></div></div>
<div class="row g-3 mb-4">
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-people"></i></div><div class="label">Total users</div><div class="value">48,210</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+12.4%</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-building"></i></div><div class="label">Active suppliers</div><div class="value">12,480</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+3.2%</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-shield-lock"></i></div><div class="label">Escrow balance</div><div class="value">$4.2M</div><div class="delta up"><i class="bi bi-arrow-up me-1"></i>+8.7%</div></div></div>
  <div class="col-md-6 col-xl-3"><div class="ba-stat"><div class="icon"><i class="bi bi-exclamation-octagon"></i></div><div class="label">Open disputes</div><div class="value">37</div><div class="delta down"><i class="bi bi-arrow-down me-1"></i>-9.1%</div></div></div>
</div>
<div class="row g-3 mb-4">
  <div class="col-lg-8"><div class="ba-panel"><div class="ba-panel-head"><h3>Revenue overview</h3><a class="link" href="#">Last 12 months</a></div><div class="ba-chart" data-chart="line" data-color="#0b5fff" data-count="12"></div></div></div>
  <div class="col-lg-4"><div class="ba-panel"><div class="ba-panel-head"><h3>Escrow activity</h3><a class="link" href="#">This week</a></div><div class="ba-chart" data-chart="bar" data-color="#ff7a18" data-count="7"></div></div></div>
</div>
<div class="row g-3">
  <div class="col-lg-8"><div class="ba-panel">
    <div class="ba-panel-head"><h3>Pending supplier approvals</h3><a class="link" href="suppliers.php">View all</a></div>
    <div class="table-responsive"><table class="ba-table">
      <thead><tr><th>Supplier</th><th>Country</th><th>Category</th><th>Submitted</th><th>Status</th><th></th></tr></thead>
      <tbody>
        <tr><td>Bosch Auto Parts GmbH</td><td>Germany</td><td>Brakes</td><td>2h ago</td><td><span class="pill warning">Review</span></td><td><a href="#" class="link">Open</a></td></tr>
        <tr><td>NGK Spark Plug Co.</td><td>Japan</td><td>Electrical</td><td>5h ago</td><td><span class="pill warning">Review</span></td><td><a href="#" class="link">Open</a></td></tr>
        <tr><td>Mann-Filter SA</td><td>Spain</td><td>Filtration</td><td>1d ago</td><td><span class="pill info">Docs</span></td><td><a href="#" class="link">Open</a></td></tr>
        <tr><td>Sumitomo Tires</td><td>Japan</td><td>Tires</td><td>2d ago</td><td><span class="pill success">Approved</span></td><td><a href="#" class="link">View</a></td></tr>
      </tbody></table></div>
  </div></div>
  <div class="col-lg-4"><div class="ba-panel">
    <div class="ba-panel-head"><h3>System alerts</h3><span class="pill warning">3 new</span></div>
    <ul class="list-unstyled mb-0">
      <li class="d-flex gap-3 py-2 border-bottom"><i class="bi bi-shield-exclamation text-warning fs-4"></i><div><strong>Escrow fluctuation</strong><div class="text-muted small">Unusual settlement on order #ORD-8204</div></div></li>
      <li class="d-flex gap-3 py-2 border-bottom"><i class="bi bi-cpu text-primary fs-4"></i><div><strong>AI model retrained</strong><div class="text-muted small">Supplier-rank v3.4 deployed</div></div></li>
      <li class="d-flex gap-3 py-2"><i class="bi bi-person-x text-danger fs-4"></i><div><strong>Failed login burst</strong><div class="text-muted small">14 attempts on admin tenant</div></div></li>
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