# laravel-repository-pattern

Laravelへのリポジトリパターン適用例

## Docker

実行環境にDockerを使用しています。以下を実行してください。

```
docker compose up -d
```

## Laravel Setup

```
docker compose exec laravel composer install
docker compose exec laravel cp .env.example .env
docker compose exec laravel php artisan key:generate
docker compose exec laravel php artisan migrate:fresh --seed
docker compose exec laravel yarn install
docker compose exec laravel yarn build
docker compose exec laravel chmod -R 777 storage
```

## Pages

- [http://localhost/items](http://localhost/items)
- [http://localhost/items-2](http://localhost/items-2)