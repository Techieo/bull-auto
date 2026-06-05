# Bull Auto Platform — Static Frontend

AI-powered automotive procurement, parts marketplace, technician matching, logistics and analytics — pure HTML5, CSS3, Bootstrap 5 and vanilla JS.

## Run locally
Just open `index.php` in your browser, or serve with any static server:

```bash
python3 -m http.server 8080
```

Then visit http://localhost:8080/

## Structure
- Public pages: index, about, pricing, contact
- Auth: login, register (5 user types), forgot-password, verify-email, two-factor
- Dashboards: admin/, supplier/, wholesaler/, retailer/, technician/, vehicle-owner/
- Assets: assets/css, assets/js

## Tech
- Bootstrap 5 (CDN)
- Bootstrap Icons (CDN)
- Inter font (Google Fonts)
- Vanilla JS for theme toggle, sidebar, charts (no React/Vue/Angular)
- Light & dark mode (persists in localStorage)
- Fully responsive

Ready to wire up to PHP + MySQL APIs.
