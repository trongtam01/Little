<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'LittleDamSen' );

/** Username của database */
define( 'DB_USER', 'LittleDamSen' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'khongcho3' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~/[w1i{KY%f79dt,K&N-ZcBX<8a<DhvnE8h`oA1BT!$!EN6X&tV{qi4L1!6r5bga' );
define( 'SECURE_AUTH_KEY',  'UrWjy`1(aWKw?uHbQMcE_i.L<L)C=yXBH6Lu|l6a22K[)=_%rX>:M;<Tldo=dWm%' );
define( 'LOGGED_IN_KEY',    'M)GN|$JTNyU.2#.^]QgU^VA[@X/32a0<+Y6W7_GDF/:cZS#@yYrgo-(raQTjie`^' );
define( 'NONCE_KEY',        '*@y3:1k[Ca`s2rsR5!@:hR$-;jzg(,BGYwIC5$e^3oo/y>oU*.VTijvi)3>A+&:j' );
define( 'AUTH_SALT',        '(}ETb/_+`B?Fhya@ep7*@7k1x!{D2^A%Tev|G%U/pl387W4b6DF 9D+-oXmM0=l=' );
define( 'SECURE_AUTH_SALT', 'ZaSHm(Ov<8:?8v_,hH4R h=W5-.Ii={9LAfO5V?b71)s&#qW)<^OMX;@ qiZF0d!' );
define( 'LOGGED_IN_SALT',   'kgnx+`57ByZb.d];:BbYRf`dqiP&rLG!$?p{WP:S:k0PS5ac1uW3<`3^W:fS]~H{' );
define( 'NONCE_SALT',       'X@u.8.$Dv2ovShjsGO2>P>_@xgW~}gSoBmi1d5?xpSfhdHxtw,Z!}].8trg>aJ|]' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
