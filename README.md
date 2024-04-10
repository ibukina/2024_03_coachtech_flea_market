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

</details>

## ER 図

![flea_market drawio](https://github.com/ibukina/2024_03_coachtech_flea_market/assets/142294463/4c426fca-83cb-4afb-9857-24d1e758e80d)

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
  画像を表示するために、php コンテナで

```phpコンテナ
php artisan storage:link
```

を行ってください。

php コンテナからのログアウトには`exit`を実行してください。<br>
これで環境構築は終了です。お疲れ様でした。

## テストユーザー
