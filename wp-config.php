<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cpblegal_ss_dbname3c7');

/** MySQL database username */
define('DB_USER', 'cpblegal_ss_d3c7');

/** MySQL database password */
define('DB_PASSWORD', 'cROtYREkHTtv');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'cAPkIw=)iXsyqZ;-y)Kc|uONr[Hr]=vhU*%xA%LxQ|PVEJem-lDQemQcDfC?wrJBWGacQ|Rj?dTcgoB(f*|P!bzOm|EJ@eUoeg]MgF^[lM/wuD|@qkVttpq;QLDAuJ>n');
define('SECURE_AUTH_KEY', 'rdoYwCpenuE*h$%P+(>ei&k=?xdQL]Ay-nbf$HW+S(jF{ane+NLt>_EQ{+cK%FgOtuXvjIne?yVeDcMiyZYp+_zT&jTXVXp>Fy?o;Ps*nbRNYS-H]b/+?x+e={oVtB%h');
define('LOGGED_IN_KEY', 'sWziN)L>n*rEnda@E_-=k+k<-[-aH*/vpp<]?Jx{/=HF]Vj*clc=P<^BTMXTttGS}muo+RdC/Snxxu+HBLAIveT(EIdLFzYBS@JLQ-*={Aj%C|KT@{Q<J]_PJ[kvQcRT');
define('NONCE_KEY', 'eHdfrFM?ChZ;wCCku$<k^B]K$OVm${]?O_p[$>nd)+Oto<M?R&/rUwfC$nh}D^%Tt|[TRR;=pMHIc@)v@!LtQMNf;BduCk|K[>I*vR_FdnrgbP/|!FzVagEPMOTHmBfE');
define('AUTH_SALT', 'XR^X{>Ds/U{);?Oqt=i$DZx]nuStz[vuWsk$?>=|CbVJnKql!P>a^nKn@^w)a&FDTTpPNOnb^tkgjlg$bnFoY%DY]ggq<-pGcVwq<fg)Vh=)idn/WeRfxlM$sjJuoyN<');
define('SECURE_AUTH_SALT', 'TL$K|t)aDa_v|hbI{iV[Cz$[FrK%Aib[@R]kcDVrl%CtV+Xu@YWZ=lnohZ=ID*^jEzc@EypI*P[o-q-i|A[(_o[gK*@qZylR[wR++d_bgxyIJ=mTHZ>{j-^hx>A&JymC');
define('LOGGED_IN_SALT', '-<@jyA!$EX{(w[joJjTjXJH?iKmI[uKEBYGtmStUtrp>EPb>]AXgBvPyUsQznP^&n/?<r<@jN[SAjCpeWYGzaPqhmJcBCXjOxOmi*y(?GF$P)!x$yjEG+GUq${nNsf<v');
define('NONCE_SALT', '|veb{+DL/}m_qMdZ//_yvIH}q}DFXe!iaR|i=Ly%%*EcmQqqy/N?f%{PLX)R*+_RSLKz/&s)Q^aM_Jbt+h_ujH/(ma?(jE}_hbR]ZEcvj!G)==_B>?Zd_qj-=?)>_Ylu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rzvk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');