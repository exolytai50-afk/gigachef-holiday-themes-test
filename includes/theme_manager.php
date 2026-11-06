<?php
function active_theme(): array {
    $settings = require __DIR__ . '/../config/theme_settings.php';
    $now = new DateTimeImmutable('now', new DateTimeZone('Europe/Moscow'));
    $start = new DateTimeImmutable($settings['schedule']['start'], new DateTimeZone('Europe/Moscow'));
    $end = new DateTimeImmutable($settings['schedule']['end'], new DateTimeZone('Europe/Moscow'));

    $enabled = (bool)($settings['enabled'] ?? false);
    if ($enabled && $now < $start) {
        $enabled = false;
    }
    if ($enabled && $now > $end) {
        $enabled = false;
    }

    return [
        'name' => $settings['theme'] ?? 'default',
        'enabled' => $enabled,
        'show_snow' => (bool)($settings['show_snow'] ?? true),
        'accent' => $settings['accent'] ?? '#f59e0b',
    ];
}

function theme_css(): string {
    $theme = active_theme();
    return $theme['enabled'] ? '/assets/css/newyear-theme.css' : '';
}

function theme_js(): string {
    $theme = active_theme();
    return $theme['enabled'] ? '/assets/js/newyear-theme.js' : '';
}
