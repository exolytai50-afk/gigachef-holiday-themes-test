# GigaChef Holiday Theme Test Repo

This repository is a focused test bed for the GigaChef seasonal theme prototype based on the provided New Year / winter UI mockup.

## Included

- `index.php` — static mock app shell mirroring the supplied design
- `assets/css/app.css` — base layout and app structure
- `assets/css/newyear-theme.css` — festive New Year styling
- `assets/js/newyear-theme.js` — snow/ornament effects
- `includes/theme_manager.php` — conditional theme activation logic
- `pages/admin_theme.php` — lightweight admin page for switching theme state

## Quick preview

Run a local PHP server from the repo root:

```bash
php -S 127.0.0.1:8000
```

Then open:

- `http://127.0.0.1:8000/index.php`
- `http://127.0.0.1:8000/pages/admin_theme.php`

## Notes

This repository intentionally isolates the visual implementation and theme toggling logic so it can be tested without touching the full production app.