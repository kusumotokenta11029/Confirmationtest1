# 確認テスト 問い合わせフォーム

## 環境構築

- Docker のビルドからマイグレーション、シーディングまでを記述する

1. git clone リンク
2. docker-compose up -d --build

- MYSQL は、OS によって起動しない場合があるのでそれぞれの PC に合わせて docker-compose.yml ファイルを編集してください。

Laravel 環境構築

1. docker-compose exec php bash
2. composer install
3. .env.example ファイルから.env を作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術(実行環境)

- 例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)
- PHP 8.0
- laravel 8.83.28
- MySQL 8.0.26

## ER 図

< - - - 作成した ER 図の画像 - - - >


## URL

- 例) 開発環境 : http://localhost/
- 開発環境 : http://localhost/
- phpMyAdmin :http://localhost:8080/
