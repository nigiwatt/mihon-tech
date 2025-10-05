# Portfolio Demo Site

このリポジトリは、ポートフォリオ実績用に制作した **WordPress テーマ（ラウンドアバウト）** です。  
デザインの再現性と保守性の高いコーディングを意識し、  
制作から構築、運用を想定した実装まで一貫して行っています。

- 20〜40代の工業系エンジニア志望が訪れることを想定
- 幅広い年齢層を意識し、テキストを大きめにデザイン
- 実サイトでの運用を想定し、スマートフォンやタブレットでも快適に閲覧できるレスポンシブ対応

<br>

## 制作会社について

会社名：ウェブ制作ニギワ  
代表者：村井　和也（個人事業主）

Web コーダーとして、デザインを活かすフロントエンド実装を専門としています。  
HTML・SCSS・JavaScript・WordPress を中心に、再利用性・保守性の高いコード設計を心がけています。  
また、SEO やセキュリティ面も意識した、実用的なウェブサイト制作を目指しています。

| スキル | 内容 |
|--------|------|
| **HTML / PUG (Jade)** | 簡潔で読みやすいマークアップを意識しています |
| **SCSS (Dart Sass)** | FLOCSS ベースで構造的に設計しています |
| **JavaScript** | ネイティブ JS を中心に軽量なスクリプトを作成します |
| **PHP / WordPress** | オリジナルテーマ開発、機能拡張、既存テーマ修正など対応可能です |

<br>

## 今回実装した機能

| 機能 | 概要 |
|------|------|
| **スライダー（Swiper）** | トップページ等に Swiper を用いたスライダーを実装 |
| **お問い合わせフォーム** | Google フォームをベースに独自のフォームを自主制作 |
| **郵便番号検索** | 入力された郵便番号から住所を一部自動補完（[yubinbango.js](https://github.com/yubinbango/yubinbango) 使用） |
| **お知らせ投稿機能** | 管理画面から投稿可能な「お知らせ」機能（WordPress 標準） |
| **Google reCAPTCHA v2** | スパム防止のためフォームに reCAPTCHA を追加 |

<br>

## 使用プラグイン

| プラグイン名 | 用途 |
|--------------|------|
| **All-In-One Security (AIOS)** | セキュリティ対策 |
| **UpdraftPlus** | バックアップ管理 |
| **Yoast SEO** | SEO 最適化 |

<br>

## 使用言語・ツール

主な開発環境：macOS | Windows
主な開発ツール：Visual Studio Code, Adobe Creative Cloud, Google Chrome, Firefox, Safari, Edge

| 分類 | 使用技術 |
|------|----------|
| マークアップ | HTML5, PUG (Jade) |
| スタイル | CSS3, SCSS (Dart Sass) |
| スクリプト | JavaScript |
| バックエンド | PHP, WordPress |
| ビルド環境 | Node.js / Gulp |
| デザイン | Adobe XD |

<br>

## 除外ファイルについて

以下のファイル・フォルダはソースコードなどから参照されていますが、リポジトリからは除外しています。  
（購入素材・再配布不可ライブラリなどが含まれているため）

- roundabout/assets/img  
- roundabout/assets/js/yubinbango.min.js  
- roundabout/assets/vendor  
- roundabout/resources/setup  
- roundabout/screenshot.png

<br>

## ライセンスについて

このリポジトリは **MIT License** で公開しています。

<br>

Copyright (c) 2025 Web production nigiwa  
Released under the MIT license
