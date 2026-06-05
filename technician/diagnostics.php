<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Technician · Diagnostics · Bull Auto</title>
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
    <a class="nav-link" href="dashboard.php"><i class="bi bi-grid"></i>Dashboard</a><a class="nav-link" href="requests.php"><i class="bi bi-tools"></i>Service Requests</a><a class="nav-link active" href="diagnostics.php"><i class="bi bi-clipboard2-pulse"></i>Diagnostics</a><a class="nav-link" href="earnings.php"><i class="bi bi-cash-coin"></i>Earnings</a><a class="nav-link" href="ratings.php"><i class="bi bi-star"></i>Ratings</a><a class="nav-link" href="availability.php"><i class="bi bi-calendar-check"></i>Availability</a>
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
<div class="ba-page-title"><div><h1>AI Diagnostics</h1><p>Upload an OBD-II scan or describe symptoms.</p></div></div>
<div class="row g-3">
  <div class="col-lg-6"><div class="ba-panel">
    <h3 class="h5 fw-bold mb-3">New diagnosis</h3>
    <div class="mb-3"><label class="form-label">Vehicle</label><input class="form-control" placeholder="BMW 320i 2019"></div>
    <div class="mb-3"><label class="form-label">Symptoms</label><textarea class="form-control" rows="4" placeholder="Brake squeal at low speed, vibration on hard stop…"></textarea></div>
    <div class="mb-3"><label class="form-label">OBD-II scan (optional)</label><input class="form-control" type="file"></div>
    <button class="btn btn-ba-primary">Run AI diagnosis</button>
  </div></div>
  <div class="col-lg-6"><div class="ba-panel">
    <h3 class="h5 fw-bold mb-3">AI suggestion</h3>
    <div class="ba-ai-card mb-2"><div class="d-flex justify-content-between"><strong>Worn front brake pads</strong><span class="score">94%</span></div><div class="bar"><span style="width:94%"></span></div><p class="mt-2 mb-0 text-muted">Recommended part: Bosch BP-2041 ($42.10)</p></div>
    <div class="ba-ai-card mb-2"><div class="d-flex justify-content-between"><strong>Warped brake disc</strong><span class="score">71%</span></div><div class="bar"><span style="width:71%"></span></div></div>
    <div class="ba-ai-card"><div class="d-flex justify-content-between"><strong>Loose caliper bolt</strong><span class="score">38%</span></div><div class="bar"><span style="width:38%"></span></div></div>
  </div></div>
</div></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/charts.js"></script><script src="../assets/js/dashboard.js"></script>
</body>
</html>