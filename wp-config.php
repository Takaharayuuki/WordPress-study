<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp-01' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sphc$.4bi%*IC?UnI+8>q`9Yv1LP=Oa>kHi<P;!9=M8s9~38y?Ifd-W=u7bu^tzp' );
define( 'SECURE_AUTH_KEY',  '[jCUNw]v~X jLki6T]$2$&a2T=Jj;sOfg<0|4gDtmyfo6df5j,bX8nc },:d,Q^Q' );
define( 'LOGGED_IN_KEY',    'ao2<7(DUbv} $zEpb#DZZ+sc/H9:hsc$SYA?x!M:fO/@?,za3D`.@^s*ypzl2bke' );
define( 'NONCE_KEY',        '?V*f{0tZztDMM{]zbhF=IZ0=*f>U%fY5^4>_0Lc=0E#US}M_Zlh9S~J;3(i5J+|T' );
define( 'AUTH_SALT',        'K.un8pe@9{w+zR!p=3u4DM4dkH(}X!A&UR$68)s4tRWTX4xE[Sg_|D<Btz^uDy;}' );
define( 'SECURE_AUTH_SALT', 'I:uUy6QwfKYj:jDO>+V/BA8K|({]0.hU/(R4Fof-%i99)j#@Q;P6@5Y!Ifbfl(<F' );
define( 'LOGGED_IN_SALT',   'MzQv)I/ZEQEFz3cW]p6u!QObpWiM4<wGu#c&0]%bV9*LRugx;?w*24En+OgW>q}M' );
define( 'NONCE_SALT',       'a3HeO7x{lC+0<uu~V4GwAjp=Se(*Cb}}VbGpQbLS)B<ViPEqmK[L-2;P?[w -;+<' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
