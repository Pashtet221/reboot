# Команды Codex

Во всех примерах используется устойчивый запуск через Bash:

```bash
bash scripts/wp health
```

## Чтение

```bash
bash scripts/wp pages
bash scripts/wp posts
bash scripts/wp services
bash scripts/wp wp-plugins
bash scripts/wp find "Контакты"
bash scripts/wp get POST_ID
bash scripts/wp acf POST_ID
bash scripts/wp seo POST_ID
bash scripts/wp audit
```

## Создание и изменение

```bash
bash scripts/wp create payload.json
bash scripts/wp create-service payload.json
bash scripts/wp create-wp-plugin payload.json
bash scripts/wp update POST_ID payload.json
bash scripts/wp update-service POST_ID payload.json
bash scripts/wp update-wp-plugin POST_ID payload.json
bash scripts/wp update-acf POST_ID payload.json
bash scripts/wp update-seo POST_ID payload.json
bash scripts/wp delete-service POST_ID
```

## Media / screenshots

```bash
bash scripts/wp media-upload FILE.webp [--post-id=ID] [--alt=TEXT] [--title=TEXT] [--caption=TEXT] [--description=TEXT] [--set-featured]
bash scripts/wp media-sideload payload.json
bash scripts/wp thumbnail POST_ID ATTACHMENT_ID
bash scripts/wp capture URL NAME [--selector=CSS] [--mobile] [--mode=page|viewport] [--post-id=ID] [--set-featured]
```

`capture` делает browser capture через серверный Bridge, загружает WebP в WordPress Media и возвращает готовый `gutenberg_block`, если серверная версия Bridge поддерживает эту функцию.

## Правило для Codex

Если пользователь просит создать/обновить шаблон по существующему содержимому сайта, сначала получить список и данные объектов через `bash scripts/wp ...`, затем менять тему. Не просить пользователя вручную присылать названия, slug и описания, если эти данные доступны через Bridge.
