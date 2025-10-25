# Sesame Theme 総合セットアップガイド

このガイドでは、Sesame Themeのインストールから各種設定、カスタマイズまでを詳しく説明します。

## 📋 目次

1. [インストール](#インストール)
2. [基本設定](#基本設定)
3. [各ページのセットアップ](#各ページのセットアップ)
4. [カスタマイズ方法](#カスタマイズ方法)
5. [トラブルシューティング](#トラブルシューティング)
6. [バックアップ](#バックアップ)

---

## インストール

### 必要な環境

- WordPress 5.0以上
- PHP 7.4以上
- 推奨プラグイン：Contact Form 7（お問い合わせフォーム用）

### インストール手順

#### ステップ1: テーマファイルの準備

1. `sesame-theme-vX-xxxx.zip` をダウンロード
2. ファイルを解凍しない（zipファイルのまま使用）

#### ステップ2: WordPressへのアップロード

1. WordPress管理画面にログイン
2. **外観** → **テーマ** をクリック
3. **新規追加** ボタンをクリック
4. **テーマのアップロード** をクリック
5. **ファイルを選択** でzipファイルを選択
6. **今すぐインストール** をクリック
7. **有効化** をクリック

#### ステップ3: パーマリンク設定の更新

**これは非常に重要です！**

1. **設定** → **パーマリンク** をクリック
2. 何も変更せず **変更を保存** をクリック

これで実績投稿などのカスタム投稿タイプのURLが正しく機能します。

---

## 基本設定

### サイトタイトルの設定

1. **設定** → **一般** をクリック
2. **サイトのタイトル** を入力（例：「sesame」）
3. **キャッチフレーズ** を入力（例：「想像をカタチに」）
4. **変更を保存** をクリック

### ナビゲーションメニューの設定

1. **外観** → **メニュー** をクリック
2. **新しいメニューを作成しましょう** をクリック
3. メニュー名を入力（例：「Primary Menu」）
4. **メニューを作成** をクリック
5. 左側から固定ページを選択して **メニューに追加**
6. メニュー位置で **Primary Menu** にチェック
7. **メニューを保存** をクリック

推奨メニュー構成：
```
- concept
- work
- company
- Contact
```

詳細は `navigation-setup-guide.md` を参照してください。

---

## 各ページのセットアップ

### 1. トップページ（ホームページ）

#### 自動設定の場合

テーマを有効化すると、自動的にトップページが表示されます。

#### カスタマイズする場合

1. **固定ページ** → **新規追加**
2. タイトル：「ホーム」
3. 本文は空白のまま
4. **公開** をクリック
5. **設定** → **表示設定**
6. **ホームページの表示** で「固定ページ」を選択
7. **ホームページ** で作成した「ホーム」を選択
8. **変更を保存**

### 2. Conceptページ

1. **固定ページ** → **新規追加**
2. タイトル：「concept」
3. テンプレート：**Concept Page** を選択
4. 本文は空白のまま
5. **公開** をクリック

### 3. Companyページ

1. **固定ページ** → **新規追加**
2. タイトル：「company」
3. テンプレート：**Company Page** を選択
4. 本文は空白のまま
5. **公開** をクリック

詳細は `company-setup-guide.md` を参照してください。

### 4. Workページ

1. **固定ページ** → **新規追加**
2. タイトル：「work」
3. テンプレート：**Work Page** を選択
4. 本文は空白のまま
5. **公開** をクリック

#### 実績の投稿方法

1. **実績** → **新規追加**
2. タイトル、本文、抜粋を入力
3. **実績画像を設定** で画像をアップロード
4. 必要に応じて **実績カテゴリー** を選択
5. **公開** をクリック

詳細は `work-setup-guide.md` を参照してください。

### 5. Contactページ

#### 前提条件

Contact Form 7プラグインをインストール・有効化してください。

#### セットアップ手順

1. **プラグイン** → **新規追加**
2. 「Contact Form 7」を検索してインストール・有効化
3. **お問い合わせ** → **新規追加**
4. 以下のフォームコードを入力：

```html
<p>[text* your-name placeholder "name"]</p>
<p>[tel your-phone placeholder "phone-number"]</p>
<p>[email* your-email placeholder "mail"]</p>
<p>[textarea* your-message placeholder "message"]</p>
<p>[submit "submit"]</p>
```

5. **保存** をクリック
6. **固定ページ** → **新規追加**
7. タイトル：「Contact」
8. テンプレート：**Contact Page** を選択
9. 本文は空白のまま
10. **公開** をクリック

詳細は `contact-setup-guide.md` を参照してください。

### 6. Privacy Policyページ（任意）

1. **固定ページ** → **新規追加**
2. タイトル：「privacy policy」
3. テンプレート：**Privacy Policy Page** を選択
4. **公開** をクリック

詳細は `privacy-policy-setup-guide.md` を参照してください。

---

## カスタマイズ方法

### 基本的なカスタマイズ

詳細は `customization-guide.md` を参照してください。

#### 色の変更

`style.css` で以下の箇所を変更：

```css
/* メインカラー（現在：#5B9FBD） */
.site-title a {
    color: #5B9FBD; /* ここを変更 */
}

.main-navigation a:hover {
    color: #5B9FBD; /* ここを変更 */
}
```

#### フォントの変更

`functions.php` で以下を変更：

```php
wp_enqueue_style(
    'sesame-google-fonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600;700&display=swap',
    array(),
    null
);
```

#### レイアウトの調整

各ページのテンプレートファイルを編集：
- トップページ：`index.php`
- Conceptページ：`template-concept.php`
- Companyページ：`template-company.php`
- Workページ：`template-work.php`
- Contactページ：`template-contact.php`

---

## トラブルシューティング

詳細は `troubleshooting-guide.md` を参照してください。

### よくある問題

#### 1. 実績詳細ページが404エラー

**原因**: パーマリンク設定が更新されていない

**解決方法**:
1. **設定** → **パーマリンク**
2. **変更を保存** をクリック（何も変更しなくてOK）

#### 2. スタイルが反映されない

**原因**: ブラウザのキャッシュ

**解決方法**:
1. ブラウザのキャッシュをクリア（Ctrl+Shift+Delete）
2. スーパーリロード（Ctrl+Shift+R）

#### 3. Contact Form 7が表示されない

**原因**: プラグインが有効化されていない、またはフォームが作成されていない

**解決方法**:
1. Contact Form 7プラグインを確認
2. フォームを作成

#### 4. メニューが表示されない

**原因**: メニューが作成されていない、または位置が設定されていない

**解決方法**:
1. **外観** → **メニュー**
2. メニューを作成
3. **メニューの位置** で「Primary Menu」にチェック

---

## バックアップ

### テーマファイルのバックアップ

#### 方法1: FTP経由

1. FTPクライアント（FileZillaなど）でサーバーに接続
2. `/wp-content/themes/sesame-theme/` をダウンロード

#### 方法2: 管理画面から

1. **外観** → **テーマファイルエディター**
2. 各ファイルの内容をコピーしてローカルに保存

### データベースのバックアップ

#### プラグインを使用（推奨）

1. **UpdraftPlus** または **BackWPup** をインストール
2. バックアップをスケジュール設定

#### 手動バックアップ

1. phpMyAdminにアクセス
2. データベースを選択
3. **エクスポート** をクリック

---

## ファイル構造

```
sesame-theme/
├── style.css                      # メインスタイルシート
├── functions.php                  # テーマの機能定義
├── header.php                     # ヘッダー
├── footer.php                     # フッター
├── index.php                      # トップページ
├── page.php                       # 基本固定ページ
│
├── template-concept.php           # Conceptページ
├── template-company.php           # Companyページ
├── template-work.php              # Workページ
├── template-contact.php           # Contactページ
├── template-privacy-policy.php    # Privacy Policyページ
│
├── single-works.php               # 実績詳細ページ
│
├── README.md                      # このファイル
├── setup-guide.md                 # セットアップガイド（このファイル）
├── customization-guide.md         # カスタマイズガイド
├── troubleshooting-guide.md       # トラブルシューティング
│
├── work-setup-guide.md            # Work機能ガイド
├── contact-setup-guide.md         # Contactページガイド
├── contact-form-code.md           # フォームコード
├── company-setup-guide.md         # Companyページガイド
├── navigation-setup-guide.md      # ナビゲーション設定
└── privacy-policy-setup-guide.md  # Privacy Policy設定
```

---

## サポート

### ドキュメント

各機能の詳細は、対応するガイドファイルを参照してください：

- **カスタマイズ**: `customization-guide.md`
- **トラブルシューティング**: `troubleshooting-guide.md`
- **Work機能**: `work-setup-guide.md`
- **Contact機能**: `contact-setup-guide.md`
- **Company機能**: `company-setup-guide.md`

### よくある質問

Q: テーマを更新したらカスタマイズが消えた
A: 子テーマを使用することをお勧めします

Q: モバイルでレイアウトが崩れる
A: ブラウザのキャッシュをクリアしてください

Q: 画像が表示されない
A: 画像のファイルパスとパーミッションを確認してください

---

## バージョン情報

- **テーマバージョン**: 2.0
- **最終更新日**: 2025年10月
- **WordPress互換性**: 5.0以上
- **PHP要件**: 7.4以上

---

## ライセンス

GNU General Public License v2 or later

---

## 次のステップ

1. ✅ テーマをインストール
2. ✅ パーマリンク設定を更新
3. ✅ 各ページを作成
4. ✅ ナビゲーションメニューを設定
5. ✅ Contact Form 7をセットアップ
6. ✅ 実績を投稿
7. ✅ 必要に応じてカスタマイズ

テーマのセットアップが完了したら、`customization-guide.md` でさらなるカスタマイズ方法を確認してください。

問題が発生した場合は、`troubleshooting-guide.md` を参照してください。
