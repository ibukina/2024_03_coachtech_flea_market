# !/bin/bash
# リポジトリの細心のコードを取得
git pull origin main

# dockerコンテナの再起動
docker-compose down
docker-compose up -d --build

# MySQLコンテナでデータベースを作成
docker-compose exec mysql bash -c "
    mysql -u root -p -e 'CREATE DATABASE IF NOT EXISTS flea_market_db;'
"

# コンテナ内での操作
docker-compose exec app bash -c "
    # 依存関係のインストール
    composer install --optimize-autoloader --no-dev

    # 環境変数の設定
    cp .env.production .env

    # キャッシュのクリアと最適化
    php artisan cache:clear
    php artisan config:cache
    php artisan route:cache

    # データベースのマイグレーション
    php artisan migrate --force

    # storageディレクトリへのシンボリックリンクの作成
    php artisan storage:link

    # 権限の設定
    chmod -R 775 storage
    chmod -R 775 public/storage
    "

# nginxコンテナの再起動
docker-compose restart nginx