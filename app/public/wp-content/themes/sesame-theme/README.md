# Sesame Theme

**バージョン:** 2.0  
**作成者:** Sesame  
**説明:** シンプルで美しい、想像をカタチにするWordPressテーマ

---

## 🎯 概要

Sesame Themeは、クリーンでモダンなデザインのWordPressテーマです。企業サイト、ポートフォリオサイト、クリエイティブエージェンシーのサイトに最適です。

### 主な特徴

- ✅ **レスポンシブデザイン** - PC・タブレット・スマートフォンに完全対応
- ✅ **カスタム投稿タイプ** - 実績（Works）投稿機能
- ✅ **Contact Form 7対応** - お問い合わせフォーム
- ✅ **シンプルで美しい** - ミニマルなデザイン
- ✅ **SEO最適化** - 検索エンジンに最適化
- ✅ **高速表示** - パフォーマンス重視の設計

---

## 📚 ドキュメント

### 🎯 すべてのドキュメントへの索引

**[DOCUMENTATION-INDEX.md](DOCUMENTATION-INDEX.md)** ← まずここを確認！
- すべてのドキュメントへのガイド
- 目的別の読み方
- 困った時の対処フロー

### 📘 主要ドキュメント

1. **[CUSTOMIZATION-GUIDE.md](CUSTOMIZATION-GUIDE.md)** - 🎨 完全カスタマイズガイド
   - テーマの構造説明
   - 色・フォント・レイアウトの変更方法
   - トラブルシューティング
   - バックアップと復元
   - 子テーマの作成
   - **カスタマイズする前に必読**

2. **[QUICK-REFERENCE.md](QUICK-REFERENCE.md)** - ⚡ クイックリファレンス
   - よく使うカスタマイズのチートシート
   - トラブル対処表
   - 推奨設定
   - **さっと調べたい時に便利**

### 📗 セットアップガイド

3. **[setup-guide.md](setup-guide.md)** - 📖 総合セットアップガイド
   - インストール手順
   - 基本設定
   - 各ページのセットアップ
   - **推奨: まずこのガイドから始めてください**

4. **[troubleshooting-guide.md](troubleshooting-guide.md)** - 🔧 トラブルシューティング
   - よくある問題と解決方法
   - エラー対処法
   - 緊急時の対応

### 📙 機能別ガイド

5. **[work-setup-guide.md](work-setup-guide.md)** - 実績機能のセットアップ
6. **[contact-setup-guide.md](contact-setup-guide.md)** - お問い合わせフォームの設定
7. **[contact-form-code.md](contact-form-code.md)** - フォームコードサンプル
8. **[company-setup-guide.md](company-setup-guide.md)** - 会社情報ページの設定
9. **[navigation-setup-guide.md](navigation-setup-guide.md)** - ナビゲーションメニュー設定
10. **[privacy-policy-setup-guide.md](privacy-policy-setup-guide.md)** - プライバシーポリシー設定

---

## 🚀 クイックスタート

### 1. インストール

```
WordPress管理画面 → 外観 → テーマ → 新規追加 → テーマのアップロード
```

### 2. パーマリンク設定を更新（重要！）

```
設定 → パーマリンク → 変更を保存
```

### 3. ページを作成

以下のページを作成してください：

| ページ名 | テンプレート | スラッグ |
|---------|------------|---------|
| concept | Concept Page | concept |
| company | Company Page | company |
| work | Work Page | work |
| Contact | Contact Page | contact |

### 4. メニューを設定

```
外観 → メニュー → 新規作成 → Primary Menu に設定
```

### 5. Contact Form 7をセットアップ

```
プラグイン → 新規追加 → Contact Form 7 をインストール
お問い合わせ → 新規追加 → フォーム作成
```

詳細は `setup-guide.md` を参照してください。

---

## 📄 テンプレート

### ページテンプレート

- **Concept Page** - コンセプトページ
- **Company Page** - 会社情報ページ
- **Work Page** - 実績一覧ページ
- **Contact Page** - お問い合わせページ
- **Privacy Policy Page** - プライバシーポリシーページ

### カスタム投稿タイプ

- **Works（実績）** - 実績投稿機能
  - カテゴリー分類可能
  - 自動詳細ページ生成
  - アイキャッチ画像対応

---

## 🎨 カスタマイズ

### 基本的なカスタマイズ

詳細は `customization-guide.md` を参照してください。

#### 色の変更

`style.css` で以下を検索：

```css
color: #5B9FBD;  /* メインカラー */
```

#### フォントの変更

`functions.php` で Google Fonts の URL を変更

#### レイアウトの変更

各テンプレートファイル（`template-*.php`）を編集

---

## 📁 ファイル構造

```
sesame-theme/
├── style.css                      # メインスタイルシート
├── functions.php                  # テーマ機能
├── header.php                     # ヘッダー
├── footer.php                     # フッター
├── index.php                      # トップページ
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
├── setup-guide.md                 # セットアップガイド
├── customization-guide.md         # カスタマイズガイド
└── troubleshooting-guide.md       # トラブルシューティング
```

---

## 🔧 必要な環境

- **WordPress:** 5.0以上
- **PHP:** 7.4以上
- **推奨プラグイン:** Contact Form 7

---

## 📝 使い方

### 実績を投稿する

1. **実績** → **新規追加**
2. タイトル、本文、抜粋を入力
3. **実績画像を設定** で画像をアップロード
4. **実績カテゴリー** を選択（任意）
5. **公開**

### お問い合わせフォームをカスタマイズ

1. **お問い合わせ** → フォームを編集
2. フィールドを追加・変更
3. **保存**

詳細は各ガイドファイルを参照してください。

---

## 🐛 トラブルシューティング

### よくある問題

#### 実績詳細ページが404エラー

**解決方法:**
```
設定 → パーマリンク → 変更を保存
```

#### スタイルが反映されない

**解決方法:**
1. ブラウザのキャッシュをクリア（Ctrl+Shift+Delete）
2. スーパーリロード（Ctrl+Shift+R）

#### Contact Form 7が表示されない

**解決方法:**
1. Contact Form 7プラグインをインストール・有効化
2. フォームを作成
3. Contactページで「Contact Page」テンプレートを選択

詳細は `troubleshooting-guide.md` を参照してください。

---

## 📖 サポート

### ドキュメント一覧

すべてのガイドファイルを確認してください：

- **総合ガイド**
  - [setup-guide.md](setup-guide.md) - セットアップ手順
  - [customization-guide.md](customization-guide.md) - カスタマイズ方法
  - [troubleshooting-guide.md](troubleshooting-guide.md) - 問題解決

- **機能ガイド**
  - [work-setup-guide.md](work-setup-guide.md) - Work機能
  - [contact-setup-guide.md](contact-setup-guide.md) - Contact機能
  - [company-setup-guide.md](company-setup-guide.md) - Company機能

### 問題が解決しない場合

1. `troubleshooting-guide.md` を確認
2. エラーログを確認
3. バックアップから復元
4. WordPress公式フォーラムで質問

---

## 🔄 更新履歴

### バージョン 2.0（2025年10月）
- カスタム投稿タイプ「Works」追加
- Contact Form 7完全対応
- レスポンシブデザイン改善
- 行間・余白の最適化
- 包括的なドキュメント追加

### バージョン 1.0（初版）
- 基本機能実装
- テンプレートページ作成

---

## 📋 チェックリスト

セットアップ完了チェックリスト：

- [ ] テーマをインストール・有効化
- [ ] パーマリンク設定を更新
- [ ] Conceptページを作成
- [ ] Companyページを作成
- [ ] Workページを作成
- [ ] Contactページを作成
- [ ] メニューを設定
- [ ] Contact Form 7をインストール
- [ ] お問い合わせフォームを作成
- [ ] 実績を投稿
- [ ] すべてのページが正しく表示されるか確認

---

## ⚠️ 重要な注意事項

### 1. パーマリンク設定

テーマを有効化したら、**必ず**パーマリンク設定を更新してください：
```
設定 → パーマリンク → 変更を保存
```

### 2. バックアップ

カスタマイズ前に必ずバックアップを取ってください。

### 3. 子テーマの使用

テーマを直接編集すると、更新時にカスタマイズが消えます。子テーマの使用を推奨します。

詳細は `customization-guide.md` を参照してください。

---

## 📞 サポート情報

### リソース

- WordPress Codex: https://codex.wordpress.org/
- Contact Form 7: https://contactform7.com/ja/
- Google Fonts: https://fonts.google.com/

### コミュニティ

- WordPress公式フォーラム
- Stack Overflow
- GitHub

---

## 📄 ライセンス

GNU General Public License v2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html

---

## 👏 クレジット

- **デザイン・開発:** Sesame
- **フォント:** Noto Sans JP (Google Fonts)
- **アイコン:** なし（シンプルデザイン）

---

## 🎉 さあ始めましょう！

1. `setup-guide.md` を開く
2. ステップバイステップで設定
3. オリジナルのサイトを作成

何か問題があれば、`troubleshooting-guide.md` を確認してください。

**素敵なサイトを作成してください！**
