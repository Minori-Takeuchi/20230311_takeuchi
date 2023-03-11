# アプリケーション名
お問い合わせ管理アプリ  
*お問い合わせフォーム画面*
![お問い合わせフォーム画面](https://user-images.githubusercontent.com/119908511/224460382-d15c542c-2347-4859-aaf9-c947af832be5.png)


*フォーム確認画面*
![内容確認画面](https://user-images.githubusercontent.com/119908511/224460388-2eb79b26-1ab1-4cba-8a80-16cda4f4d3f1.png)


*送信後画面*
![送信後画面](https://user-images.githubusercontent.com/119908511/224460391-8dda20f7-5d3a-42dc-9e5b-0fb73cb9f610.png)


*管理画面*
![管理画面](https://user-images.githubusercontent.com/119908511/224460393-905da7e8-d21f-4a61-aaf4-1936d6f97da8.png)


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
![テーブル設計](https://user-images.githubusercontent.com/119908511/224460398-87c5cfc9-61a9-46c3-a16f-adf8472b8a76.png)


## ER図
![ER図](https://user-images.githubusercontent.com/119908511/224460401-f0515983-e5cb-4101-ad4e-18fe74427a19.png)


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
