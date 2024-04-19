# coachtech フリマ

## ページ一覧

<details>
<summary>未ログイン時ページ一覧</summary>

### トップページ(商品一覧ページ)

![flea_market_item_all](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/2f51b008-ac58-41b7-a6e8-1497161d84d1)

### 商品詳細ページ

![flea_market_item_detail](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/f2ac6368-5495-45fa-b0b4-27caf7b236ce)

### 会員登録ページ

![flea_market_register](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/707c2118-38d8-4e70-9ec8-7b0d4a87613f)

### ログインページ

![flea_market_login](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/ae88c086-b5a4-4859-b9cf-b445000d9132)

</details>

<details>
<summary>済ログイン時ページ一覧</summary>

### トップページ(商品一覧ページ)

![flea_market_item_all_logined](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/c4496a33-9820-4efc-b258-536bc8f8bda9)

### 商品詳細ページ

![flea_market_item_detail_logined](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/db529c78-f935-4a4b-9962-948e5a7241c0)

### 出品ページ

![flea_market_sell](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/be18034e-724f-4b24-b2cc-61cac4927f55)

### コメントページ

![flea_market_comment](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/539a2b21-ec4c-4bc8-9525-a39fcd494778)

### 購入ページ

![flea_market_purchase](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/96a43de8-670a-4955-b08a-15b6976a95b7)

### 住所変更ページ

![flea_market_address](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/2feab580-02bd-4082-bef4-3121b7b0c3d9)

### マイページ

![flea_market_mypage](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/b9d81089-d7f2-4096-8b96-17bf50ed7f74)

### プロフィール編集ページ

![flea_market_profile](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/dec2ad36-6d8b-4673-ad5a-a88d97331ffb)

</details>

## 作成した目的

## アプリケーション url

ログインなしで閲覧可能なページ

- 会員登録ページ
  http://localhost/register
- ログインページ
  http://localhost/login
- 商品一覧ページ
  http://localhost/
- 商品詳細ページ
  http://localhost/item/:item_id

ログインが必要なページ

- 出品ページ
  http://localhost/sell
- コメントページ
  http://localhost/comment/:item_id
- 購入ページ
  http://localhost/purchase/:item_id
- 住所変更ページ
  http://localhost/purchase/address/:item_id
- マイページ
  http://localhost/mypage
- プロフィール編集ページ
  http://localhost/mypage/profile

## 機能一覧

- 会員登録
- ログイン
- ログアウト
- 商品一覧取得
- 商品詳細取得
- ユーザ商品お気に入り一覧取得
- ユーザ情報取得
- ユーザ購入商品一覧取得
- ユーザ出品商品一覧取得
- プロフィール変更
- 商品お気に入り追加
- 商品お気に入り削除
- 商品コメント追加
- 商品コメント削除
- 出品
- 購入
- 配送先変更

## 使用技術(実行環境)

> laravel Framework 10.47.0<br>
> php 8.1.27<br>
> mysql 8.0.33<br>
> nginx 1.25.4<br>
> livewire 3.4<br>

## テーブル設計

<details>
<summary>テーブル一覧</summary>

- RolesTable
  ![flea_market_table_roles](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/43f0ec8e-0803-4fc3-9400-50fb20ea51b1)

- UsersTable
  ![flea_market_table_users](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/8a9bc0fd-5275-4cf4-8d00-5be33238b6ee)

- ProfilesTable
  ![flea_market_table_profiles](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/82ef3c25-6fbe-4106-9264-f6ce8aea1ebe)

- ShopsTable

- StaffsTable

- ConditionsTable
  ![flea_market_table_conditions](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/1987bcf1-f18e-41c9-ac7a-8b4b9680f2cc)

- ItemsTable
  ![flea_market_table_items](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/62a5ad73-d75a-4508-b79e-c8f5d06de216)

- CategoriesTable
  ![flea_market_table_categories](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/cfc90d77-9a03-4649-a54a-3c1ded4cdca6)

- CategoryItemTable
  ![flea_market_table_category_item](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/65bbb5ca-5cc9-49ca-9038-41ab31f71dd9)

- LikesTable
  ![flea_market_table_likes](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/d34a852e-854d-4e61-8af4-3dd671988f2a)

- SoldItemTable
  ![flea_market_table_sold_item](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/286945ca-7e30-414e-bbc6-1e899f05c7d3)

- CommentsTable
  ![flea_market_table_comments](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/b3b3149a-781a-4159-818d-ae7a6c556333)

</details>

## ER 図

![flea_market drawio](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/badbe4c2-0404-4107-ac3c-a9efbbbb4554)

## 環境構築

> [!IMPORTANT]
> これは Windows での構築方法です。
> 他 OS の場合は異なる場合がございます。<br>

- プロジェクトのクローン<br>
  まず、コマンドライン上でアプリケーションを導入したいディレクトリまで移動してください。
  移動出来たら、

```コマンドライン
git clone <リポジトリのurl>
```

を実行してください。<br>
これでプロジェクトのクローンが出来ました。<br>

- docker の作成と起動<br>
  次に、クローンしたプロジェクトのあるディレクトリで、

```コマンドライン
docker-compose up -d --build
```

を実行してください。<br>
これで、docker コンテナの作成と起動が完了しました。<br>  
docker が起動しているか目に見える形で確認したい方は、docker desktop を導入して確認してみてください。<br>

- laravel の導入<br>
  プロジェクトのディレクトリで、

```コマンドライン
docker-compose exec php bash
```

を実行して、php コンテナにログインしてください。<br>
ログインが出来たら

```phpコンテナ
composer install
```

を実行してください。<br>
これで laravel はインストール出来ました。<br>

- .env ファイルと APP_KEY の作成<br>
  laravel の導入時のように、php コンテナにログインしてください。<br>
  php コンテナ内で

```phpコンテナ
cp .env.example .env
```

を実行して、.env ファイルを作成してください。<br>
作成出来たら、

```phpコンテナ
exit
```

で php コンテナからログアウトした後、

```コマンドライン
code .
```

を実行して、VSCode でプロジェクトを開きます。<br>
src 以下に.env ファイルがあるので、そちらの 11 から 16 行目を

```.env:.envファイル
DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
+ DB_HOST=mysql
DB_PORT=3306
- DB_DATABASE=laravel
- DB_USERNAME=root
- DB_PASSWORD=
+ DB_DATABASE=laravel_db
+ DB_USERNAME=laravel_user
+ DB_PASSWORD=laravel_pass
```

のように変更し、保存してください。 <br>
php コンテナにログインして、

```phpコンテナ
php artisan key:generate
```

を実行して、APP_KEY を作成してください。<br>
データベースが存在するか確認したい場合は、
http://localhost:8080/
にアクセスしてください。<br>

- データベースとテーブルの作成<br>
  プロジェクトディレクトリで

```コマンドライン
docker-compose exec mysql bash
```

を実行して、mysql コンテナに入ってください。<br>
コンテナに入れたら

```mysqlコンテナ
mysql -u laravel_user -p
```

で、コンテナにログインしてください。<br>
この時、パスワードを求められるので、.env ファイルで変更した DB_PASSWORD の`laravel_pass`を入力してください。<br>
ログイン出来たら

```mysqlコンテナ
USE laravel_db;
```

を実行して、laravel_db を使用するようにしてください。<br>
確認のため

```mysqlコンテナ
SELECT DATABASE();
```

を実行して、laravel_db が選択されていることを確認してください。<br>
確認出来たら、

```
exit
```

で mysql コンテナからログアウトして、プロジェクトディレクトリに戻ってください。<br>
次に、laravel の導入時のように php コンテナにログインして

```phpコンテナ
php artisan migrate
```

を実行して、マイグレーションテーブルを作成してください。<br>

- ストレージのシンボリックリンク作成<br>
  このアプリケーションでは画像を storage/app/public/image 以下に保存するため、シンボリックリンクと保存先の image ディレクトリを作成します。

```phpコンテナ
chmod -R 775 storage
```

```phpコンテナ
chmod -R 775 public/storage
```

```phpコンテナ
php artisan storage:link
```

```phpコンテナ
mkdir -p storage/app/public/image
```

これらを順に行ってください。

- データの作成
  デフォルトの情報を作成するため、シーディングを行います。

```phpコンテナ
php artisan db:seed
```

これでデータが作成されました。

php コンテナからのログアウトには`exit`を実行してください。<br>
これでローカル環境の構築は終了です。お疲れ様でした。

## テストユーザー

> 一般ユーザー  
> メールアドレス：test@example.com  
> パスワード：2DDywxxwE3VM@D4
>
> 店舗代表者  
> merchant@example.com  
> 2DDywxxwE3VM@C3
>
> 管理者  
> admin@example.com  
> 2DDywxxwE3VM@B2

## シーディングについて

新たにデフォルトのデータを追加や削除したい場合は、src/database/seeders 以下に各テーブルに対応するファイルがございますので、VSCode 等を利用してカラム制約に気を付けながら変更して頂ければと思います。
シーディングファイルの変更後は

```phpコンテナ
php artisan migrate:refresh --seed
```

を行い、変更を反映させてください。

> [!IMPORTANT] > `php artisan migrate:refresh`を行うとデータベースの内容もリセットされるため注意してください。
