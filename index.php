<?php
require __DIR__ . '/includes/theme_manager.php';
$theme = active_theme();
?><!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GigaChef — New Year Theme</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/app.css">
  <?php if ($theme['enabled']): ?>
    <link rel="stylesheet" href="/assets/css/newyear-theme.css">
  <?php endif; ?>
</head>
<body class="theme-shell <?php echo $theme['enabled'] ? 'theme-newyear' : ''; ?>">
  <?php if ($theme['enabled']): ?>
    <div class="winter-decor winter-decor--left"></div>
    <div class="winter-decor winter-decor--right"></div>
    <div id="snow-layer" aria-hidden="true"></div>
  <?php endif; ?>

  <div class="app-shell">
    <aside class="sidebar">
      <div class="brand-row">
        <div class="brand-mark">◌</div>
        <div class="brand-text">GigaChef</div>
      </div>

      <nav class="side-nav">
        <div class="nav-item active"><span>🏠</span><span>Моя лента</span></div>
        <div class="nav-item"><span>📖</span><span>Все активности</span></div>
        <div class="nav-item"><span>🕘</span><span>Истории</span></div>
        <div class="nav-item"><span>🔍</span><span>Поиск</span></div>
        <div class="nav-item"><span>🧰</span><span>AI-инструменты</span></div>
        <div class="nav-item"><span>🎁</span><span>Праздники</span></div>
        <div class="nav-item"><span>⚙️</span><span>Администрирование</span></div>
      </nav>

      <div class="mini-toggle">
        <span>Новогодняя тема</span>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
      </div>

      <div class="user-card">
        <div class="user-mini-avatar">A</div>
        <div>
          <div class="name">Админ GigaChef</div>
          <div class="role">Профиль</div>
        </div>
      </div>
    </aside>

    <main class="main-panel">
      <header class="topbar">
        <div class="user-headline">
          <div class="user-avatar">A</div>
          <div>
            <div class="title">Админ GigaChef</div>
            <div class="subtitle">Волгоград</div>
          </div>
        </div>

        <div class="top-actions">
          <button class="icon-btn">⌕</button>
          <button class="icon-btn has-badge">🔔<span>3</span></button>
          <button class="icon-btn">⚙️</button>
        </div>
      </header>

      <section class="hero-card">
        <div class="hero-badge">★ НОВОГОДНЯЯ КОЛЛЕКЦИЯ 2026</div>
        <h1>Время<br>новогодних чудес</h1>
        <p>Создавай праздничные блюда вместе с GigaChef!</p>
        <button class="primary-btn">Создать праздничное меню →</button>
        <div class="hero-plate" aria-hidden="true">
          <div class="turkey"></div>
        </div>
      </section>

      <section class="feed-grid">
        <div class="story-strip card-block">
          <div class="section-head">
            <span>Истории</span>
            <a href="#">Все →</a>
          </div>
          <div class="story-row">
            <div class="story story-empty">+</div>
            <div class="story story-photo story-1"></div>
            <div class="story story-photo story-2"></div>
            <div class="story story-photo story-3"></div>
          </div>
        </div>

        <div class="quick-panel card-block">
          <div class="searchbar">Найти рецепт...</div>
          <div class="quick-actions">
            <button>Друзья</button>
            <button>Сохранённые</button>
            <button>Книги</button>
            <button>Подробнее</button>
          </div>
        </div>

        <div class="news-block card-block">
          <div class="section-head">
            <span>Новости</span>
            <a href="#">Все →</a>
          </div>
          <div class="news-item">
            <div class="news-icon">📦</div>
            <div>
              <div class="news-label">Закреплено</div>
              <div class="news-title">GigaChef скоро на ваших смартфонах!</div>
              <div class="news-date">22.08.2026</div>
            </div>
          </div>
        </div>
      </section>

      <section class="feed-list">
        <article class="feed-item card-block">
          <div class="feed-head">
            <div class="author">
              <div class="avatar">A</div>
              <div>
                <div class="name">Админ GigaChef</div>
                <div class="meta">01.11.2026 23:10</div>
              </div>
            </div>
            <button class="small-add">＋</button>
          </div>
          <div class="feed-body">
            <div class="dish-photo dish-one"></div>
            <div class="dish-copy">
              <div class="feed-title">Горячие блюда</div>
              <div class="feed-subtitle">Нежное и ароматное блюдо для праздничного ужина.</div>
              <div class="feed-stats">
                <span>💬 39 мин</span>
                <span>👍 500</span>
                <span>🔁 2</span>
                <span>❤ 0</span>
              </div>
              <div class="tag-row">
                <span>Романтический ужин</span>
                <span>Круглогодичные</span>
                <span>60 мин</span>
              </div>
            </div>
          </div>
        </article>

        <article class="feed-item card-block">
          <div class="feed-head">
            <div class="author">
              <div class="avatar">A</div>
              <div>
                <div class="name">Админ GigaChef</div>
                <div class="meta">01.11.2026 23:10</div>
              </div>
            </div>
            <button class="small-add">＋</button>
          </div>
          <div class="feed-body">
            <div class="dish-photo dish-two"></div>
            <div class="dish-copy">
              <div class="feed-title">Салаты и холодные закуски</div>
              <div class="feed-subtitle">Свежий и ароматный салат с овощами, сыром и оливками.</div>
              <div class="feed-stats">
                <span>💬 40 мин</span>
                <span>👍 250</span>
                <span>🔁 1</span>
                <span>❤ 0</span>
              </div>
              <div class="tag-row">
                <span>Романтический ужин</span>
                <span>Круглогодичные</span>
                <span>60 мин</span>
              </div>
            </div>
          </div>
        </article>
      </section>
    </main>
  </div>

  <?php if ($theme['enabled']): ?>
    <script src="/assets/js/newyear-theme.js"></script>
  <?php endif; ?>
</body>
</html>
