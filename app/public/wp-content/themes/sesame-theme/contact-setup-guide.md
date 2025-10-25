# Contactページセットアップガイド

このガイドでは、Contact Form 7を使用したContactページのセットアップ方法を説明します。

## セットアップ手順

### 1. Contact Form 7プラグインをインストール

1. WordPress管理画面にログイン
2. 「プラグイン」→「新規追加」をクリック
3. 検索ボックスに「Contact Form 7」と入力
4. 「今すぐインストール」をクリック
5. 「有効化」をクリック

### 2. お問い合わせフォームを作成

#### 2-1. 新規フォームの作成

1. WordPress管理画面の「お問い合わせ」→「新規追加」をクリック
2. タイトルに「お問い合わせ」と入力

#### 2-2. フォームの設定

「フォーム」タブで以下のコードを入力してください：

```html
<p>[text* your-name placeholder "name"]</p>

<p>[tel your-phone placeholder "phone-number"]</p>

<p>[email* your-email placeholder "mail"]</p>

<p>[textarea* your-message placeholder "message"]</p>

<p>[submit "submit"]</p>
```

このフォーム設定により、以下のフィールドが表示されます：
- **name** (必須): お名前
- **phone-number** (任意): 電話番号
- **mail** (必須): メールアドレス
- **message** (必須): お問い合わせ内容
- **submit**: 送信ボタン

#### 2-3. メール設定

「メール」タブで送信先などを設定：

**送信先**
```
your-email@example.com
```
ご自身のメールアドレスに変更してください。

**送信元**
```
[your-name] <wordpress@yourdomain.com>
```

**題名**
```
Webサイトからのお問い合わせ
```

**メッセージ本文**
```
お名前: [your-name]
電話番号: [your-phone]
メールアドレス: [your-email]

お問い合わせ内容:
[your-message]

--
このメールは [_site_title] ([_site_url]) のお問い合わせフォームから送信されました
```

#### 2-4. 保存

1. 「保存」をクリック
2. フォームが作成されます

### 3. Contactページを作成

1. 「固定ページ」→「新規追加」をクリック
2. タイトルに「Contact」と入力
3. 右サイドバーの「ページ属性」→「テンプレート」で「Contact Page」を選択
4. 本文は空白のままでOK（自動的にフォームが表示されます）
5. 「公開」をクリック

### 4. パーマリンク設定の確認

1. 「設定」→「パーマリンク」へ移動
2. 何も変更せず「変更を保存」をクリック

## フォームのカスタマイズ

### フィールドの種類

Contact Form 7では様々なフィールドタイプが使えます：

```html
<!-- テキストフィールド（必須） -->
[text* field-name placeholder "表示名"]

<!-- テキストフィールド（任意） -->
[text field-name placeholder "表示名"]

<!-- メールアドレス（必須） -->
[email* field-name placeholder "表示名"]

<!-- 電話番号 -->
[tel field-name placeholder "表示名"]

<!-- テキストエリア（必須） -->
[textarea* field-name placeholder "表示名"]

<!-- 選択リスト -->
[select field-name "選択肢1" "選択肢2" "選択肢3"]

<!-- チェックボックス -->
[checkbox field-name "選択肢1" "選択肢2"]

<!-- ラジオボタン -->
[radio field-name "選択肢1" "選択肢2"]

<!-- ファイルアップロード -->
[file field-name filetypes:jpg|png|pdf limit:2mb]

<!-- 送信ボタン -->
[submit "ボタンのテキスト"]
```

### プライバシーポリシーへの同意

プライバシーポリシーへの同意チェックボックスを追加する場合：

```html
<p>[acceptance acceptance-privacy] <a href="/privacy-policy">プライバシーポリシー</a>に同意する</p>
```

### バリデーション設定

- **必須項目**: フィールドタイプの後に `*` を付ける（例：`[text* your-name]`）
- **文字数制限**: `minlength:10 maxlength:100` を追加
- **メールアドレス形式**: `[email*]` で自動的に検証

## デザインのカスタマイズ

テーマには既にスタイルが組み込まれていますが、さらにカスタマイズしたい場合は `style.css` の「Contactページスタイル」セクションを編集してください。

### ボタンの幅を変更

```css
.wpcf7 input[type="submit"] {
    width: 100%; /* 全幅にする場合 */
}
```

### フィールドの高さを変更

```css
.wpcf7 textarea {
    min-height: 300px; /* 高さを増やす場合 */
}
```

## トラブルシューティング

### Q: フォームが表示されない

A: 以下を確認してください：
1. Contact Form 7プラグインが有効化されているか
2. お問い合わせフォームが作成されているか
3. ページに「Contact Page」テンプレートが選択されているか

### Q: メールが届かない

A: 以下を確認してください：
1. 「メール」タブで送信先アドレスが正しいか
2. サーバーのメール送信機能が有効か
3. スパムフォルダを確認
4. SMTPプラグイン（WP Mail SMTPなど）の使用を検討

### Q: スパム対策をしたい

A: 以下の方法があります：
1. reCAPTCHAの追加（Contact Form 7の公式アドオン）
2. Akismet Anti-Spamプラグインの使用
3. ハニーポット機能の有効化

### Q: デザインを変更したい

A: `style.css`の「Contactページスタイル」セクションを編集してください。

## 高度な設定

### 自動返信メールの設定

「メール (2)」タブで自動返信メールを設定できます：

1. 「メール (2) を使用」にチェック
2. 送信先: `[your-email]`
3. 題名: `お問い合わせを受け付けました`
4. メッセージ本文を作成

### サンクスページへのリダイレクト

フォーム送信後に別ページへリダイレクトする場合：

1. 「その他の設定」タブを開く
2. 以下を追加：

```
on_sent_ok: "location = 'https://yoursite.com/thank-you/';"
```

## サポート

より詳しい情報は、Contact Form 7の公式ドキュメントをご覧ください：
https://contactform7.com/ja/

ご不明な点がある場合は、テーマのサポートにお問い合わせください。
