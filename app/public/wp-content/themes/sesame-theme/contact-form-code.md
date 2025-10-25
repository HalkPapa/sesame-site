# Contact Form 7 フォームコード

このファイルには、Contactページで使用するContact Form 7のフォームコードが含まれています。

## 基本フォームコード

Contact Form 7の管理画面（お問い合わせ → 新規追加）で、以下のコードを「フォーム」タブにコピー&ペーストしてください。

```html
<p>[text* your-name placeholder "name"]</p>

<p>[tel your-phone placeholder "phone-number"]</p>

<p>[email* your-email placeholder "mail"]</p>

<p>[textarea* your-message placeholder "message"]</p>

<p>[submit "submit"]</p>
```

## フィールドの説明

- **name** (必須): お名前入力フィールド
- **phone-number** (任意): 電話番号入力フィールド
- **mail** (必須): メールアドレス入力フィールド
- **message** (必須): お問い合わせ内容入力フィールド
- **submit**: 送信ボタン

## メール設定

「メール」タブで以下の内容を設定してください：

### 送信先
```
your-email@example.com
```
※ご自身のメールアドレスに変更してください

### 送信元
```
[your-name] <wordpress@yourdomain.com>
```

### 題名
```
Webサイトからのお問い合わせ
```

### メッセージ本文
```
お名前: [your-name]
電話番号: [your-phone]
メールアドレス: [your-email]

お問い合わせ内容:
[your-message]

--
このメールは [_site_title] ([_site_url]) のお問い合わせフォームから送信されました
```

### 追加ヘッダー
```
Reply-To: [your-email]
```

## 自動返信メールの設定（オプション）

「メール (2)」タブで自動返信メールを設定できます：

### メール (2) を使用
チェックを入れる

### 送信先
```
[your-email]
```

### 送信元
```
[_site_title] <wordpress@yourdomain.com>
```

### 題名
```
お問い合わせを受け付けました
```

### メッセージ本文
```
[your-name] 様

お問い合わせいただき、ありがとうございます。
以下の内容で承りました。

━━━━━━━━━━━━━━━━━━━━
お名前: [your-name]
電話番号: [your-phone]
メールアドレス: [your-email]

お問い合わせ内容:
[your-message]
━━━━━━━━━━━━━━━━━━━━

後ほど担当者よりご連絡させていただきます。
今しばらくお待ちください。

[_site_title]
[_site_url]
```

## プライバシーポリシー同意の追加（オプション）

プライバシーポリシーへの同意チェックボックスを追加する場合、送信ボタンの前に以下を追加：

```html
<p>[acceptance acceptance-privacy] <a href="/privacy-policy" target="_blank">プライバシーポリシー</a>に同意する</p>

<p>[submit "submit"]</p>
```

## カスタマイズ例

### 会社名フィールドを追加

```html
<p>[text* your-name placeholder "name"]</p>

<p>[text your-company placeholder "company name"]</p>

<p>[tel your-phone placeholder "phone-number"]</p>

<p>[email* your-email placeholder "mail"]</p>

<p>[textarea* your-message placeholder "message"]</p>

<p>[submit "submit"]</p>
```

メール本文にも以下を追加：
```
会社名: [your-company]
```

### お問い合わせ種類の選択

```html
<p>[text* your-name placeholder "name"]</p>

<p>[select your-subject "お見積りについて" "サービスについて" "採用について" "その他"]</p>

<p>[tel your-phone placeholder "phone-number"]</p>

<p>[email* your-email placeholder "mail"]</p>

<p>[textarea* your-message placeholder "message"]</p>

<p>[submit "submit"]</p>
```

メール本文にも以下を追加：
```
お問い合わせ種類: [your-subject]
```

## ファイルアップロード機能の追加

```html
<p>[text* your-name placeholder "name"]</p>

<p>[tel your-phone placeholder "phone-number"]</p>

<p>[email* your-email placeholder "mail"]</p>

<p>[textarea* your-message placeholder "message"]</p>

<p>[file your-file limit:5mb filetypes:jpg|png|pdf]</p>

<p>[submit "submit"]</p>
```

## 注意事項

1. **必須項目**: フィールドタイプの後に `*` を付けると必須になります（例：`[text*]`）
2. **プレースホルダー**: `placeholder "テキスト"` で入力欄のヒント文字を設定できます
3. **フィールド名**: `your-name`などのフィールド名は変更可能ですが、メール本文でも対応する名前に変更する必要があります

## 完成イメージ

上記のコードで、以下のようなシンプルなフォームが表示されます：

```
┌────────────────────┐
│ name               │
├────────────────────┤
│ phone-number       │
├────────────────────┤
│ mail               │
├────────────────────┤
│ message            │
│                    │
│                    │
├────────────────────┤
│    [ submit ]      │
└────────────────────┘
```

詳しい設定方法は `contact-setup-guide.md` をご覧ください。
