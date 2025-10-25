# Companyページセットアップガイド

このガイドでは、Companyページのセットアップ方法を説明します。

## セットアップ手順

### 1. Companyページを作成

1. WordPress管理画面の **「固定ページ」→「新規追加」** をクリック

2. **タイトル** に「company」と入力

3. 右サイドバーの **「ページ属性」** → **「テンプレート」** で **「Company Page」** を選択

4. 本文は空白のままでOK（テンプレートが内容を自動生成します）

5. **「公開」** をクリック

### 2. 完成！

これでCompanyページが完成します。以下の内容が自動的に表示されます：

```
┌─────────────────────────────────┐
│ concept    company              │  ← ラベル
│                                 │
│ 商号                             │
│ 合同会社sesame                   │
│                                 │
│ メンバー                         │
│                                 │
│ Co-founder                      │
│ 小池 瑛瑠                        │
│                                 │
│ Co-founder/カメラマン            │
│ 汐田 伊吹                        │
└─────────────────────────────────┘
```

## 内容のカスタマイズ

Companyページの内容を変更したい場合は、`template-company.php` を編集してください。

### 商号を変更

```php
<p class="company-text">合同会社sesame</p>
```
この部分を編集します。

### メンバーを追加

```php
<div class="member-item">
    <p class="member-role">役職・肩書き</p>
    <p class="member-name">氏名</p>
</div>
```
このブロックをコピーして追加します。

### 例：メンバーを3人にする場合

```php
<div class="company-section">
    <h2 class="company-heading">メンバー</h2>
    
    <div class="member-item">
        <p class="member-role">Co-founder</p>
        <p class="member-name">小池 瑛瑠</p>
    </div>
    
    <div class="member-item">
        <p class="member-role">Co-founder/カメラマン</p>
        <p class="member-name">汐田 伊吹</p>
    </div>
    
    <div class="member-item">
        <p class="member-role">Designer</p>
        <p class="member-name">山田 太郎</p>
    </div>
</div>
```

## 追加情報を表示したい場合

### 設立年を追加

```php
<div class="company-section">
    <h2 class="company-heading">設立</h2>
    <p class="company-text">2020年</p>
</div>
```

### 所在地を追加

```php
<div class="company-section">
    <h2 class="company-heading">所在地</h2>
    <p class="company-text">東京都渋谷区</p>
</div>
```

### 事業内容を追加

```php
<div class="company-section">
    <h2 class="company-heading">事業内容</h2>
    <p class="company-text">
        空間デザイン<br>
        映像制作<br>
        グラフィックデザイン
    </p>
</div>
```

## スタイルのカスタマイズ

### フォントサイズを変更

`style.css` の「Companyページスタイル」セクションで調整できます：

```css
.company-text {
    font-size: 32px; /* お好みのサイズに変更 */
}

.member-name {
    font-size: 32px; /* お好みのサイズに変更 */
}
```

### 間隔を調整

```css
.company-section {
    margin-bottom: 80px; /* セクション間の間隔 */
}

.member-item {
    margin-bottom: 50px; /* メンバー間の間隔 */
}
```

## Conceptページとの連携

Companyページの上部には「concept」「company」のラベルがあります。これらはそれぞれのページへのリンクになっています。

同様に、Conceptページにも「concept」「company」のラベルがあり、相互にページ移動できるようになっています。

## トラブルシューティング

### Q: ページが正しく表示されない

A: 以下を確認してください：
1. テンプレートが「Company Page」に設定されているか
2. ブラウザのキャッシュをクリア
3. テーマが最新版にアップデートされているか

### Q: レイアウトが崩れる

A: ブラウザのキャッシュをクリアしてください（Ctrl+Shift+Delete）

### Q: 内容を変更したい

A: `template-company.php` を編集してください

## レスポンシブ対応

Companyページはレスポンシブ対応しており、PC・タブレット・スマートフォンで最適に表示されます。

- **PC**: 大きなフォントでゆったりとしたレイアウト
- **タブレット**: 中程度のフォントサイズ
- **スマートフォン**: コンパクトなレイアウト

## まとめ

Companyページはシンプルで美しいデザインです。必要に応じて `template-company.php` を編集してカスタマイズしてください。
