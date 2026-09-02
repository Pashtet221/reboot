# Codex Plugins Store — WordPress Bridge client

Этот код перенесён в `reboot`, чтобы Codex видел одновременно файлы темы и живой WordPress.

Переменные окружения:

```text
WORDPRESS_URL=https://plugins-store.ru
WORDPRESS_USERNAME=codex-agent
WORDPRESS_APP_PASSWORD=пароль приложения WordPress
```

Настоящий Application Password никогда не коммитится в GitHub.

Проверка:

```bash
bash scripts/wp health
bash scripts/wp pages
bash scripts/wp wp-plugins
```

На сайте должен быть установлен основной Codex Bridge. Дополнения в `wordpress-plugin/` используются только если соответствующей возможности нет в основной версии Bridge.
