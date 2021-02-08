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
define( 'DB_NAME', 'leins0322_wp1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'leins0322_wp1' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'o8opgf6zwf' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql8078.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '}Aey[[K=RKI^Xh|eZ{iy.EOo)Dihv4BA;O&|).D/K |H:]#Yk3onhg6/ Y IBocH' );
define( 'SECURE_AUTH_KEY',  '1w}4^g42qh5Sy%lsbFxp3*$7qJ*F1ph8FME .&nOEIVHu28C:P9RZd|yZ)akZ&hS' );
define( 'LOGGED_IN_KEY',    'o4|rk(Ybgw2^+;% S#{_YrvJe0TiBZP-r#|SL{|Mp&G+WMbCb/Id2D:b3Wf,sE^0' );
define( 'NONCE_KEY',        'zJOI,5I48N|KRS-U&@gpz${<-q00O8Z-iGgdObl$Yj74l1^pHNcg~=+S,Ex54lE=' );
define( 'AUTH_SALT',        '$B/x6va_K(}g7l-cAU-uqP%6<,Q}Yu2M4M<+PJCl&?2J|22{$6GQowa7})TUa$gT' );
define( 'SECURE_AUTH_SALT', 'b^%}P_UR/PrFE8=o2s-<>;066MnRFF8kr~hQ#J, ;6Y2,T]&t0G=wd/u0HRkB21r' );
define( 'LOGGED_IN_SALT',   'CldOcLsE,4O<WXGm6]x=5V<;lVA6<,cj` -oM]jR[K{U*It!izQZXnGfo0-Z6YYp' );
define( 'NONCE_SALT',       'w%[jKmzjq6([Gp}rr6GQyq+D1TI<F~.E)=?HQ~s1zSS|U3-l<XUR.7Ms~VZkBc|?' );
define( 'WP_CACHE_KEY_SALT','dnz6p[yLHzc~<J Zo/;8WH#G<$z:LaLdEN>P+zdzD(47|g]eDYf0fWJK-{.;G(Y<' );

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
