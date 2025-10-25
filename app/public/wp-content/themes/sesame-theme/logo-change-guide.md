# ロゴ変更ガイド

このガイドでは、テーマのロゴを変更する方法を説明します。

---

## 現在のロゴについて

現在、テーマには青いロゴ画像が設定されています。

**ロゴファイルの場所**:
```
/wp-content/themes/sesame-theme/images/logo.png
```

**表示サイズ**:
- PC: 高さ40px（幅は自動調整）
- タブレット: 高さ32px
- スマートフォン: 高さ28px

---

## ロゴを変更する方法

### 方法1: 画像ファイルを置き換える（推奨）

#### 手順

1. **新しいロゴ画像を準備**
   - ファイル形式: PNG（推奨）、JPG、SVG
   - 推奨サイズ: 高さ80-120px、幅400-600px
   - 背景: 透明PNG推奨

2. **ファイルをアップロード**
   
   **FTPを使用する場合**:
   ```
   1. FTPクライアントでサーバーに接続
   2. /wp-content/themes/sesame-theme/images/ に移動
   3. 新しい画像を「logo.png」という名前でアップロード
      （既存のlogo.pngを上書き）
   ```

   **WordPressメディアライブラリを使用する場合**:
   ```
   1. メディア → 新規追加
   2. 画像をアップロード
   3. アップロード後、画像のURLをコピー
   4. header.phpを編集（後述）
   ```

3. **ブラウザのキャッシュをクリア**
   ```
   Ctrl + Shift + Delete
   または
   Ctrl + Shift + R（ハードリロード）
   ```

---

### 方法2: 異なるファイル名を使用する

別のファイル名でロゴをアップロードする場合：

#### 手順

1. **画像をアップロード**
   ```
   /wp-content/themes/sesame-theme/images/ に
   「my-logo.png」などの名前でアップロード
   ```

2. **header.phpを編集**
   
   **編集箇所**:
   ```php
   <!-- 変更前 -->
   <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" 
        alt="<?php bloginfo('name'); ?>" class="site-logo">
   
   <!-- 変更後 -->
   <img src="<?php echo get_template_directory_uri(); ?>/images/my-logo.png" 
        alt="<?php bloginfo('name'); ?>" class="site-logo">
   ```

3. **保存してブラウザキャッシュをクリア**

---

### 方法3: テキストロゴに戻す

画像ロゴではなく、テキストのサイト名を表示したい場合：

#### 手順

1. **header.phpを編集**
   
   **変更箇所**:
   ```php
   <!-- 画像ロゴ（現在） -->
   <h1 class="site-title">
       <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
           <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" 
                alt="<?php bloginfo('name'); ?>" class="site-logo">
       </a>
   </h1>
   
   <!-- テキストロゴに変更 -->
   <h1 class="site-title">
       <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
           <?php bloginfo('name'); ?>
       </a>
   </h1>
   ```

2. **style.cssを編集（オプション）**
   
   テキストロゴのスタイルを調整したい場合：
   ```css
   .site-title a {
       color: #5B9FBD; /* お好みの色に */
       font-size: 32px; /* お好みのサイズに */
   }
   ```

---

## ロゴサイズの変更

ロゴのサイズを変更したい場合は、`style.css` を編集します。

### PC版のロゴサイズ

```css
/* style.css */
.site-logo {
    height: 40px; /* この値を変更（例: 50px, 60px） */
    width: auto;
}
```

### タブレット版のロゴサイズ

```css
/* style.css */
@media (max-width: 768px) {
    .site-logo {
        height: 32px; /* この値を変更 */
    }
}
```

### スマートフォン版のロゴサイズ

```css
/* style.css */
@media (max-width: 480px) {
    .site-logo {
        height: 28px; /* この値を変更 */
    }
}
```

---

## ロゴの推奨仕様

### 画像形式

| 形式 | 特徴 | 推奨度 |
|-----|------|--------|
| PNG | 透明背景対応、高品質 | ⭐⭐⭐ |
| SVG | 拡大縮小しても綺麗、軽量 | ⭐⭐⭐ |
| JPG | ファイルサイズ小、透明背景不可 | ⭐⭐ |

### 画像サイズ

**推奨解像度**:
- 幅: 400-800px
- 高さ: 80-160px
- アスペクト比: 横長（4:1 〜 6:1程度）

**ファイルサイズ**:
- 目標: 50KB以下
- 最大: 200KB以下

### デザインのポイント

1. **シンプルに**
   - 細かすぎるディテールは避ける
   - 小さくても認識できるデザイン

2. **コントラスト**
   - 白い背景に映える色を使用
   - 明るい色は避ける

3. **余白**
   - ロゴの周りに適度な余白を確保
   - 文字が詰まりすぎないように

---

## トラブルシューティング

### Q: ロゴが表示されない

**A**: 以下を確認してください：

1. **ファイルパスの確認**
   ```
   /wp-content/themes/sesame-theme/images/logo.png
   にファイルが存在するか確認
   ```

2. **ファイル名の確認**
   ```
   大文字・小文字を区別します
   logo.png ≠ Logo.png ≠ LOGO.PNG
   ```

3. **ブラウザキャッシュをクリア**
   ```
   Ctrl + Shift + Delete
   ```

4. **ファイルのパーミッション確認**
   ```
   imagesフォルダ: 755
   logo.png: 644
   ```

### Q: ロゴが大きすぎる/小さすぎる

**A**: `style.css` でサイズを調整：

```css
.site-logo {
    height: 50px; /* 値を増減 */
}
```

### Q: ロゴの周りに余白がありすぎる

**A**: ロゴ画像自体に余白が含まれている可能性があります。

**解決方法**:
1. 画像編集ソフトで余白をトリミング
2. または、CSSで調整：
   ```css
   .site-logo {
       margin: -10px 0; /* 上下の余白を調整 */
   }
   ```

### Q: ロゴがぼやける

**A**: 高解像度（Retina）ディスプレイ用に2倍サイズの画像を準備：

1. 通常の2倍のサイズで画像を作成
   - 表示サイズが40pxなら、画像は80px
2. CSSでサイズを指定することで自動的に綺麗に表示されます

---

## 高度なカスタマイズ

### SVGロゴを使用する

SVGを使用すると、どのサイズでも綺麗に表示されます。

#### 手順

1. **SVGファイルをアップロード**
   ```
   /wp-content/themes/sesame-theme/images/logo.svg
   ```

2. **header.phpを編集**
   ```php
   <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" 
        alt="<?php bloginfo('name'); ?>" class="site-logo">
   ```

3. **style.cssを調整（オプション）**
   ```css
   .site-logo {
       height: 40px;
       width: auto;
       display: block;
   }
   ```

### ロゴにホバーエフェクトを追加

マウスオーバー時にロゴを変化させる：

```css
/* style.css */
.site-logo {
    transition: all 0.3s ease;
}

.site-title a:hover .site-logo {
    transform: scale(1.05); /* 少し拡大 */
    opacity: 0.8; /* 少し透明に */
}
```

### ダークモード用にロゴを切り替え

```css
/* style.css */
@media (prefers-color-scheme: dark) {
    .site-logo {
        filter: invert(1); /* 色を反転 */
    }
}
```

---

## ロゴ変更の前にバックアップ

万が一に備えて、変更前にバックアップを取りましょう。

### バックアップ方法

1. **FTPで現在のlogo.pngをダウンロード**
2. **header.phpの内容をコピーして保存**
3. **style.cssの該当部分をコピーして保存**

---

## まとめ

ロゴの変更は簡単です：

1. ✅ 新しいロゴ画像を準備
2. ✅ logo.pngとして/images/フォルダにアップロード
3. ✅ ブラウザキャッシュをクリア
4. ✅ 表示を確認

詳しいカスタマイズ方法は `CUSTOMIZATION-GUIDE.md` を参照してください。
