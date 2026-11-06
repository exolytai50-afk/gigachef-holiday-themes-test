<?php
require __DIR__ . '/../includes/theme_manager.php';
$raw = $_POST['theme'] ?? null;
if ($raw !== null) {
    $settings = require __DIR__ . '/../config/theme_settings.php';
    $settings['enabled'] = ($raw === 'on') ? true : false;
    $content = "<?php\nreturn " . var_export($settings, true) . ";\n";
    file_put_contents(__DIR__ . '/../config/theme_settings.php', $content);
    header('Location: /pages/admin_theme.php?updated=1');
    exit;
}
$theme = active_theme();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theme Admin</title>
  <link rel="stylesheet" href="/assets/css/app.css">
  <link rel="stylesheet" href="/assets/css/newyear-theme.css">
</head>
<body class="admin-theme-page">
  <div class="admin-panel">
    <h1>Праздничные темы</h1>

    <?php if (isset($_GET['updated'])): ?>
      <div class="flash success">Настройки успешно сохранены.</div>
    <?php endif; ?>

    <form method="post">
      <label class="switch-row">
        <span>Новогодняя тема</span>
        <label class="switch">
          <input type="checkbox" name="theme" value="on" <?php echo $theme['enabled'] ? 'checked' : ''; ?>>
          <span class="slider"></span>
        </label>
      </label>

      <button type="submit" class="primary-btn">Сохранить</button>
    </form>
  </div>
</body>
</html>
