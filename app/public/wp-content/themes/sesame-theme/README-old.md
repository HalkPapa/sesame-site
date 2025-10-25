# Sesame WordPress Theme

https://www.sesame-gk.jp/ のサイトを再現したWordPressテーマです。

## 特徴

- シンプルでミニマルなデザイン
- レスポンシブ対応（PC、タブレット、スマートフォン）
- カスタマイザーから簡単にテキストを編集可能
- 美しい日本語フォント対応
- スムーズなアニメーション

## インストール方法

### ローカル環境へのインストール

1. **このテーマフォルダ（sesame-theme）をWordPressのテーマディレクトリにコピー**
   ```
   /your-wordpress/wp-content/themes/sesame-theme/
   ```

2. **WordPress管理画面にログイン**
   - ブラウザで `http://localhost/your-wordpress/wp-admin/` にアクセス
   - ユーザー名とパスワードを入力してログイン

3. **テーマを有効化**
   - 左メニューから「外観」→「テーマ」を選択
   - 「Sesame Theme」を見つけて「有効化」ボタンをクリック

## カスタマイズ方法

### テキストの編集

1. WordPress管理画面で「外観」→「カスタマイズ」を選択
2. 「ヒーローセクション」をクリック
3. 以下の項目を編集できます：
   - **ヒーロータイトル**: メインの見出し（デフォルト: 「想像の扉を開く。」）
   - **ヒーローテキスト**: 本文テキスト
   - **ヒーロータグライン**: キャッチフレーズ（デフォルト: 「sesameは想像をカタチにしていきます。」）

### サイト名の変更

1. WordPress管理画面で「設定」→「一般」を選択
2. 「サイトのタイトル」を「sesame」に変更
3. 「変更を保存」をクリック

## ファイル構成

```
sesame-theme/
├── style.css          # メインスタイルシート
├── index.php          # メインテンプレート
├── header.php         # ヘッダーテンプレート
├── footer.php         # フッターテンプレート
├── functions.php      # テーマの機能
└── README.md          # このファイル
```

## 必要な環境

- WordPress 5.0以上
- PHP 7.0以上
- モダンブラウザ（Chrome、Firefox、Safari、Edge）

## デザインのカスタマイズ

`style.css` を編集することで、デザインをさらにカスタマイズできます：

- **カラー**: `.hero-title`, `.hero-text` などのcolor属性を変更
- **フォントサイズ**: 各要素のfont-size属性を変更
- **レイアウト**: `.main-content` のmax-widthやpaddingを調整
- **アニメーション**: `@keyframes fadeInUp` を編集

## ライセンス

GPL v2 or later

## サポート

問題や質問がある場合は、WordPressの公式フォーラムをご利用ください。
