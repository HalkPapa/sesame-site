# Sesame Theme クイックリファレンス

よく使うカスタマイズのチートシート

---

## 🎨 色の変更

```css
/* メインカラー（水色 → 他の色に） */
#5B9FBD → #E74C3C  /* 赤 */
#5B9FBD → #3498DB  /* 青 */
#5B9FBD → #2ECC71  /* 緑 */
#5B9FBD → #9B59B6  /* 紫 */
```

## 📏 フォントサイズ

```css
/* 基本サイズ */
body { font-size: 16px; }

/* 見出し */
.hero-title { font-size: 52px; }
.company-heading { font-size: 24px; }
.member-name { font-size: 32px; }
```

## 📐 余白

```css
/* セクション間 */
.company-section { margin-bottom: 60px; }

/* メンバー間 */
.member-item { margin-bottom: 40px; }

/* コンテンツの余白 */
.main-content { padding: 80px 60px 100px 120px; }
```

## 📱 レスポンシブ

```css
/* PC */
デフォルトのスタイル

/* タブレット */
@media (max-width: 768px) {
    /* 768px以下に適用 */
}

/* スマートフォン */
@media (max-width: 480px) {
    /* 480px以下に適用 */
}
```

## 🔧 よく使うセレクタ

```css
/* ロゴ */
.site-title a { color: #5B9FBD; }

/* ナビゲーション */
.main-navigation a { color: #666; }

/* 見出し */
.hero-title { font-size: 52px; }

/* ボタン */
.wpcf7 input[type="submit"] { width: 200px; }
```

## 📂 ファイルの場所

```
色・デザイン      → style.css
機能              → functions.php
Companyページ    → template-company.php
Workページ       → template-work.php
Contactページ    → template-contact.php
ヘッダー          → header.php
フッター          → footer.php
```

## ⚡ よくあるトラブル

| 症状 | 原因 | 解決方法 |
|-----|------|---------|
| 真っ白 | PHP構文エラー | FTPで復元 |
| 崩れた | CSS構文エラー | キャッシュクリア |
| 反映されない | キャッシュ | Ctrl+Shift+R |
| 実績が見えない | パーマリンク | 設定→パーマリンク→保存 |

## 🛡️ バックアップ

```
【編集前】
1. ファイルをコピー
2. 日付を付けて保存
3. 複数箇所に保存

【編集後】
1. 動作確認
2. 問題なければバックアップ更新
3. 問題あれば復元
```

## 🔍 デバッグ方法

```
1. F12キーで開発者ツールを開く
2. Elements/Inspector タブを選択
3. 問題の要素を選択
4. Stylesパネルで適用されているCSSを確認
```

## 📝 編集の流れ

```
バックアップ → 編集 → 保存 → キャッシュクリア → 確認
     ↓                                            ↓
    OK? ←────────────────────────────────── 問題あり?
     ↓                                            ↓
   完了                                        復元
```

## 🎯 推奨設定

```css
/* 読みやすい行間 */
line-height: 1.6-1.8

/* 適切な余白 */
margin-bottom: 40-80px

/* 見やすいフォントサイズ */
body: 15-17px
見出し: 28-52px
```

## 💾 バックアップ先

1. ✅ ローカルPC
2. ✅ クラウド（Google Drive等）
3. ✅ 外付けHDD

## 🚨 緊急時

```
1. パニックにならない
2. バックアップから復元
3. 変更内容をメモ
4. 原因を特定
5. 再編集
```

---

詳細は CUSTOMIZATION-GUIDE.md を参照してください。
