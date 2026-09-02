# Архитектура

```text
Codex
  ├─> файлы репозитория reboot ──> WordPress theme (PHP/CSS/JS/templates)
  └─> scripts/wp ──> Codex Bridge REST API ──> опубликованный WordPress plugins-store.ru
```

Codex должен использовать оба источника в рамках одной задачи: сначала читать фактические данные опубликованного сайта через Bridge, затем при необходимости менять файлы темы и проверять итог.
