# Downloadable Lorem Ipsum Generator (Recursion課題)

このアプリケーションは、フォームから入力した条件に基づいて  
ユーザーやレストランチェーンのデータを自動生成し、  
選択した形式 (HTML / Markdown / JSON / TXT) でダウンロードできる PHP アプリです。
!(スクショ)["./public/スクリーンショット 2025-09-25 101250.png"]

## 🚀 機能

- **ユーザーデータ生成**
  - 名前、メールアドレス、電話番号、住所、生年月日、役割などを含むダミーデータを生成
- **レストランチェーンデータ生成**
  - 従業員数・給与範囲・店舗数・郵便番号範囲を指定して、チェーン全体のデータを生成
- **出力形式の選択**
  - HTML / Markdown / JSON / TXT の4種類に対応
- **入力フォーム付きUI**
  - ブラウザから簡単に条件を指定可能
- **バリデーション**
  - 件数やフォーマット指定の妥当性をサーバー側で検証

## 🛠️ 環境

- PHP 8.x
- Composer (依存ライブラリ管理)
- Faker (ダミーデータ生成)

## 📂 ディレクトリ構成

project-root/
├── generate.php # ユーザー入力フォーム
├── download.php # データ生成・ダウンロード処理
├── User.php # Userクラス（toHTML, toMarkdown, toArray, toString など）
├── RandomGenerator.php # ダミーデータ生成クラス
├── vendor/ # Composerでインストールされたライブラリ
└── README.md

markdown
コードをコピーする

## ⚡ 使い方

1. 依存パッケージをインストール

   ```bash
   composer install
PHPの組み込みサーバーを起動

bash
コードをコピーする
php -S localhost:8000
ブラウザでアクセス

bash
コードをコピーする
http://localhost:8000/generate.php
フォームから件数・フォーマットなどを入力 → 「Generate」ボタンを押すと、
指定した形式でデータがダウンロードされます。

⚠️ 注意点
vendor/ フォルダは Composer が管理するため、Git には含めず .gitignore に追加してください。

本アプリは学習用（Recursion課題）として作成しています。本番環境で利用する場合は入力検証・セキュリティ対策を強化してください。

大量データ生成はブラウザやサーバーがフリーズする可能性があるため、件数上限を適切に設定してください。