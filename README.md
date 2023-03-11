# アプリケーション名
お問い合わせ管理アプリ
*お問い合わせフォーム画面*


*フォーム確認画面*


*送信後画面*


*管理画面*


## 作成した目的
フォームからの問い合わせを簡潔に管理できるアプリです。

## 機能一覧
お問い合わせフォーム  
入力確認  
問い合わせ情報表示機能  
名前、メールアドレス、性別、送信日による問い合わせ情報検索機能  
問い合わせ情報削除機能  
ページネーション  

## 使用技術（実行環境）
Laravel 8.x  
JavaScript  

## テーブル設計


## ER図


## 環境構築
*mysqlにてshare_databaseを作成する*

create database management_system  

*マイグレーション*

php artisan migrate  

*テストデータ準備*

php artisan db:seed  

*ローカルサーバーの立ち上げ*  

php artisan serve  
http://localhost:8000/   

管理画面：http://localhost:8000/management