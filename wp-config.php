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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'match-site');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E_+/qK+Rv~A(9ovI{4[|Q$c#<|`zg2HMEVW2B^#{CZN{YO5&U#%TlQ<UyfrnyXP!');
define('SECURE_AUTH_KEY',  'b2{)WzWce[&2Ov}iMP|C+Ok+*#*8DAUz33i&xbzBVZpzsc`Z#H/?=}AT|%{uZ9qN');
define('LOGGED_IN_KEY',    '(xd(nMY9-gXXVLRu6bpR7)o(7wnX9$KuzvEmjtxrek()Y57kd;G-{6<-V`a`x.n;');
define('NONCE_KEY',        'rKD;58}^{zjp9SO4^DHJO8,P*@7IW%nAqjT(a|NsjWQ*XEut4EE-[;e%az!6%ZB.');
define('AUTH_SALT',        'O.#suRo%w:WIgdM*Hg-gB9v5/3 vfv|;s7SuR?wZ}oto&`S+Df5 hJl{h&&;~Ar(');
define('SECURE_AUTH_SALT', '=L4*he6G}mdc#WkEu(s<:IT>4+ Cz(jGuW[<r#[4A?mkWFy$g^pYT-7;:3|eMqg3');
define('LOGGED_IN_SALT',   '!B[w&.TjyN+CzqloFRm~w3VGSN1|+Cfx0zOPPh/iIVq} &}VHeB2ZC%`$o09u?0i');
define('NONCE_SALT',       'EoJv0.RZVIMTDEk]$H@XCH(1w  -64iid`.}9*&BH3U:DGrjq]Av-w{Fx<)sh_b.');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
