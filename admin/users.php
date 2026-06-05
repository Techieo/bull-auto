<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin · User Verification · Bull Auto</title>
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
    <a class="nav-link" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link active" href="users.php"><i class="bi bi-person-check"></i>User Verification</a><a class="nav-link" href="suppliers.php"><i class="bi bi-building-check"></i>Supplier Approval</a><a class="nav-link" href="escrow.php"><i class="bi bi-shield-lock"></i>Escrow Management</a><a class="nav-link" href="disputes.php"><i class="bi bi-exclamation-octagon"></i>Disputes</a><a class="nav-link" href="analytics.php"><i class="bi bi-bar-chart"></i>Analytics</a><a class="nav-link" href="ai-monitoring.php"><i class="bi bi-cpu"></i>AI Monitoring</a><a class="nav-link" href="transactions.php"><i class="bi bi-credit-card"></i>Transactions</a><a class="nav-link" href="reports.php"><i class="bi bi-file-earmark-text"></i>Reports</a><a class="nav-link" href="settings.php"><i class="bi bi-gear"></i>Settings</a>
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
<div class="ba-page-title"><div><h1>User Verification</h1><p>Verify identity, business documents and risk flags.</p></div>
<div class="d-flex gap-2"><input class="form-control" placeholder="Search users…" style="width:240px"><button class="btn btn-ba-primary"><i class="bi bi-funnel me-1"></i>Filter</button></div></div>
<div class="ba-panel"><div class="table-responsive"><table class="ba-table">
<thead><tr><th>Name</th><th>Email</th><th>Type</th><th>Country</th><th>Status</th><th></th></tr></thead>
<tbody><tr><td>Sara Martinez</td><td>sara@partsworld.com</td><td>Retailer</td><td>Spain</td><td><span class="pill success">Verified</span></td><td><a href="#" class="link">Review</a></td></tr><tr><td>Daniel Owusu</td><td>d.owusu@accra-motors.gh</td><td>Technician</td><td>Ghana</td><td><span class="pill warning">Pending</span></td><td><a href="#" class="link">Review</a></td></tr><tr><td>Hiro Tanaka</td><td>hiro@ngk-japan.com</td><td>Supplier</td><td>Japan</td><td><span class="pill success">Verified</span></td><td><a href="#" class="link">Review</a></td></tr><tr><td>Liu Wei</td><td>liu@wholesale-cn.com</td><td>Wholesaler</td><td>China</td><td><span class="pill info">Review</span></td><td><a href="#" class="link">Review</a></td></tr><tr><td>Anna Becker</td><td>anna@bmw-stuttgart.de</td><td>Vehicle Owner</td><td>Germany</td><td><span class="pill success">Verified</span></td><td><a href="#" class="link">Review</a></td></tr></tbody></table></div></div></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/charts.js"></script><script src="../assets/js/dashboard.js"></script>
</body>
</html>