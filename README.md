# Contact Form 7 for Umaten (ウマ店)

Contact Form 7プラグインのカスタマイズ版です。ウマ店（Umamise）のプライバシーポリシーページのデザインに合わせたカスタムテーマを搭載しています。

## 概要

このプラグインは、オリジナルのContact Form 7プラグイン（バージョン6.1.3）に、ウマ店のデザインシステムに合わせたカスタムスタイルシートを追加したものです。

## 主な特徴

### デザインの統一性
- **アクセントカラー**: #e74c3c（ウマ店の赤）
- **モダンなUI**: 角丸、グラデーション、影を使った立体感
- **日本語フォント**: Hiragino Kaku Gothic ProN、Yu Gothicなど
- **レスポンシブデザイン**: モバイルにも完全対応

### カスタマイズされた要素

#### フォームフィールド
- 入力フィールド（テキスト、メール、電話など）
- テキストエリア
- セレクトボックス
- チェックボックス・ラジオボタン
- ファイルアップロード

#### ビジュアルフィードバック
- フォーカス時のハイライト（赤色のボーダーと影）
- バリデーションエラー表示
- 送信成功・失敗メッセージ
- 送信中のスピナーアニメーション

#### ボタンデザイン
- グラデーション背景
- ホバーエフェクト
- クリックアニメーション
- 無効状態のスタイル

## ファイル構成

```
contact-form-7/
├── includes/
│   ├── css/
│   │   ├── styles.css              # オリジナルのスタイル
│   │   └── umaten-theme.css        # ウマ店カスタムテーマ（新規追加）
│   └── umaten-theme.php            # テーマ読み込み用PHPファイル（新規追加）
├── load.php                        # カスタムテーマを読み込むよう変更
└── wp-contact-form-7.php           # メインプラグインファイル
```

## 変更内容

### 追加ファイル

1. **`includes/css/umaten-theme.css`**
   - ウマ店のデザインシステムに基づいたカスタムスタイルシート
   - プライバシーポリシーページとの視覚的な統一性を実現
   - 1000行以上の詳細なスタイル定義

2. **`includes/umaten-theme.php`**
   - カスタムスタイルシートを読み込むためのPHPファイル
   - `wpcf7_enqueue_styles` アクションフックを使用

### 変更ファイル

1. **`load.php`**
   - `umaten-theme.php` を読み込むよう1行追加（30行目）

## インストール方法

1. このリポジトリをクローンまたはダウンロード
2. `contact-form-7` フォルダをWordPressの `wp-content/plugins/` ディレクトリにアップロード
3. WordPressの管理画面でプラグインを有効化

## 使用方法

通常のContact Form 7プラグインと同じ方法で使用できます。カスタムテーマは自動的に適用されます。

### フォームの作成

1. WordPress管理画面で「お問い合わせ」→「新規追加」
2. フォームエディタでフィールドを追加
3. ショートコードをページに貼り付け

### カスタマイズ例

フォームをより美しく表示するためのHTMLサンプル：

```html
<div class="wpcf7-form-title">お問い合わせフォーム</div>
<div class="wpcf7-form-description">
  以下のフォームからお気軽にお問い合わせください。
</div>

<div class="wpcf7-required-notice">
  <strong>必須</strong>マークのある項目は必ずご入力ください。
</div>

<label>お名前 <abbr title="required">*</abbr></label>
[text* your-name placeholder "山田 太郎"]

<label>メールアドレス <abbr title="required">*</abbr></label>
[email* your-email placeholder "example@umamise.com"]

<label>お問い合わせ内容 <abbr title="required">*</abbr></label>
[textarea* your-message placeholder "お問い合わせ内容をご記入ください"]

<div class="wpcf7-submit-wrapper">
  [submit "送信する"]
</div>
```

## デザイントークン

カスタムテーマで使用している主要な色とスタイル：

### カラーパレット
- **アクセントカラー**: `#e74c3c` （赤）
- **ダークアクセント**: `#c0392b`
- **テキストカラー**: `#2c3e50`, `#5a6c7d`, `#7f8c8d`
- **背景カラー**: `#ffffff`, `#f5f7fa`
- **ボーダーカラー**: `#ecf0f1`
- **成功カラー**: `#27ae60`（緑）
- **警告カラー**: `#f39c12`（オレンジ）

### タイポグラフィ
- **フォントファミリー**: 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', 'Yu Gothic', YuGothic, Meiryo, sans-serif
- **ラインハイト**: 1.9
- **フォントサイズ**: 15px（基本）

### スペーシング・レイアウト
- **パディング**: 45px（フォームコンテナ）
- **角丸**: 15px（大）、12px（中）、10px（小）、8px（最小）
- **シャドウ**: `0 5px 25px rgba(0, 0, 0, 0.06)`

## ブラウザ対応

- Chrome（最新版）
- Firefox（最新版）
- Safari（最新版）
- Edge（最新版）
- モバイルブラウザ（iOS Safari、Android Chrome）

## レスポンシブブレークポイント

- **デスクトップ**: 768px以上
- **モバイル**: 768px未満

## ライセンス

オリジナルのContact Form 7と同様、GPL v2またはそれ以降のライセンスで配布されます。

## クレジット

- **ベースプラグイン**: [Contact Form 7](https://contactform7.com/) by Rock Lobster Inc.
- **カスタムテーマ**: ウマ店（Umamise）デザインシステム

## サポート

このカスタマイズ版に関するお問い合わせは、プロジェクトのIssuesページからお願いします。

## バージョン履歴

### 1.0.0 (2025-11-16)
- Contact Form 7 v6.1.3をベースに作成
- ウマ店カスタムテーマの追加
- プライバシーポリシーページとのデザイン統一

## 今後の予定

- [ ] 管理画面のデザインカスタマイズ
- [ ] 追加のフォームスタイルバリエーション
- [ ] ダークモード対応
- [ ] より詳細なアニメーション

---

**Contact Form 7 for Umaten** - ウマ店のデザインに完全対応したお問い合わせフォームプラグイン
