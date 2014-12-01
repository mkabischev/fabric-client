phpinfo()
PHP Version => 5.5.15

System => Darwin MacBook-Pro-mike.local 14.0.0 Darwin Kernel Version 14.0.0: Sat Sep 27 03:58:47 PDT 2014; root:xnu-2782.1.97~11/RELEASE_X86_64 x86_64
Build Date => Aug 22 2014 10:30:54
Configure Command =>  './configure'  '--prefix=/usr/local/Cellar/php55/5.5.15' '--localstatedir=/usr/local/var' '--sysconfdir=/usr/local/etc/php/5.5' '--with-config-file-path=/usr/local/etc/php/5.5' '--with-config-file-scan-dir=/usr/local/etc/php/5.5/conf.d' '--with-iconv-dir=/usr' '--enable-dba' '--with-ndbm=/usr' '--enable-exif' '--enable-intl' '--enable-soap' '--enable-wddx' '--enable-ftp' '--enable-sockets' '--enable-zip' '--enable-shmop' '--enable-sysvsem' '--enable-sysvshm' '--enable-sysvmsg' '--enable-mbstring' '--enable-mbregex' '--enable-bcmath' '--enable-calendar' '--with-zlib=/usr/local/opt/zlib' '--with-ldap' '--with-ldap-sasl=/usr' '--with-xmlrpc' '--with-kerberos=/usr' '--with-gd' '--enable-gd-native-ttf' '--with-freetype-dir=/usr/local/opt/freetype' '--with-icu-dir=/usr/local/opt/icu4c' '--with-jpeg-dir=/usr/local/opt/jpeg' '--with-png-dir=/usr/local/opt/libpng' '--with-gettext=/usr/local/opt/gettext' '--with-snmp=/usr' '--with-libedit' '--with-unixODBC=/usr/local/opt/unixodbc' '--with-pdo-odbc=unixODBC,/usr/local/opt/unixodbc' '--mandir=/usr/local/Cellar/php55/5.5.15/share/man' '--with-mhash' '--with-curl' '--with-bz2=/usr' '--disable-debug' '--with-openssl=/usr' '--with-xsl=/usr' '--with-apxs2=/usr/sbin/apxs' '--libexecdir=/usr/local/Cellar/php55/5.5.15/libexec' '--with-mysql-sock=/tmp/mysql.sock' '--with-mysqli=mysqlnd' '--with-mysql=mysqlnd' '--with-pdo-mysql=mysqlnd' '--enable-pcntl' '--enable-zend-signals' '--enable-dtrace' '--enable-opcache'
Server API => Command Line Interface
Virtual Directory Support => disabled
Configuration File (php.ini) Path => /usr/local/etc/php/5.5
Loaded Configuration File => /usr/local/etc/php/5.5/php.ini
Scan this dir for additional .ini files => /usr/local/etc/php/5.5/conf.d
Additional .ini files parsed => /usr/local/etc/php/5.5/conf.d/ext-amqp.ini,
/usr/local/etc/php/5.5/conf.d/ext-calculator.ini,
/usr/local/etc/php/5.5/conf.d/ext-memcached.ini,
/usr/local/etc/php/5.5/conf.d/ext-pinba.ini,
/usr/local/etc/php/5.5/conf.d/ext-propro.ini,
/usr/local/etc/php/5.5/conf.d/ext-raphf.ini,
/usr/local/etc/php/5.5/conf.d/ext-redis.ini,
/usr/local/etc/php/5.5/conf.d/ext-xdebug.ini,
/usr/local/etc/php/5.5/conf.d/zzz_ext-http.ini

PHP API => 20121113
PHP Extension => 20121212
Zend Extension => 220121212
Zend Extension Build => API220121212,NTS
PHP Extension Build => API20121212,NTS
Debug Build => no
Thread Safety => disabled
Zend Signal Handling => enabled
Zend Memory Manager => enabled
Zend Multibyte Support => provided by mbstring
IPv6 Support => enabled
DTrace Support => enabled

Registered PHP Streams => https, ftps, compress.zlib, compress.bzip2, php, file, glob, data, http, ftp, phar, zip
Registered Stream Socket Transports => tcp, udp, unix, udg, ssl, sslv3, sslv2, tls
Registered Stream Filters => zlib.*, bzip2.*, convert.iconv.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk, http.*

This program makes use of the Zend Scripting Language Engine:
Zend Engine v2.5.0, Copyright (c) 1998-2014 Zend Technologies
    with Xdebug v2.2.5, Copyright (c) 2002-2014, by Derick Rethans


 _______________________________________________________________________


Configuration

amqp

Version => 1.4.0
Revision => $Revision: 327551 $
Compiled => Sep  1 2014 @ 16:47:09
AMQP protocol version => 0-9-1
librabbitmq version => 0.5.1

Directive => Local Value => Master Value
amqp.auto_ack => 0 => 0
amqp.connect_timeout => 0 => 0
amqp.host => localhost => localhost
amqp.login => guest => guest
amqp.password => guest => guest
amqp.port => 5672 => 5672
amqp.prefetch_count => 3 => 3
amqp.read_timeout => 0 => 0
amqp.timeout => no value => no value
amqp.vhost => / => /
amqp.write_timeout => 0 => 0

bcmath

BCMath support => enabled

Directive => Local Value => Master Value
bcmath.scale => 0 => 0

bz2

BZip2 Support => Enabled
Stream Wrapper support => compress.bzip2://
Stream Filter support => bzip2.decompress, bzip2.compress
BZip2 Version => 1.0.6, 6-Sept-2010

calculator



calculator => enabled
Author =>  
Version => 0.0.1
Powered by Zephir => Version 0.5.8a

calendar

Calendar support => enabled

Core

PHP Version => 5.5.15

Directive => Local Value => Master Value
allow_url_fopen => On => On
allow_url_include => Off => Off
always_populate_raw_post_data => Off => Off
arg_separator.input => & => &
arg_separator.output => & => &
asp_tags => Off => Off
auto_append_file => no value => no value
auto_globals_jit => On => On
auto_prepend_file => no value => no value
browscap => no value => no value
default_charset => no value => no value
default_mimetype => text/html => text/html
disable_classes => no value => no value
disable_functions => no value => no value
display_errors => STDOUT => STDOUT
display_startup_errors => On => On
doc_root => no value => no value
docref_ext => no value => no value
docref_root => no value => no value
enable_dl => Off => Off
enable_post_data_reading => On => On
error_append_string => no value => no value
error_log => no value => no value
error_prepend_string => no value => no value
error_reporting => 32767 => 32767
exit_on_timeout => Off => Off
expose_php => On => On
extension_dir => /usr/local/Cellar/php55/5.5.15/lib/php/extensions/no-debug-non-zts-20121212 => /usr/local/Cellar/php55/5.5.15/lib/php/extensions/no-debug-non-zts-20121212
file_uploads => On => On
highlight.comment => <font style="color: #FF8000">#FF8000</font> => <font style="color: #FF8000">#FF8000</font>
highlight.default => <font style="color: #0000BB">#0000BB</font> => <font style="color: #0000BB">#0000BB</font>
highlight.html => <font style="color: #000000">#000000</font> => <font style="color: #000000">#000000</font>
highlight.keyword => <font style="color: #007700">#007700</font> => <font style="color: #007700">#007700</font>
highlight.string => <font style="color: #DD0000">#DD0000</font> => <font style="color: #DD0000">#DD0000</font>
html_errors => Off => Off
ignore_repeated_errors => Off => Off
ignore_repeated_source => Off => Off
ignore_user_abort => Off => Off
implicit_flush => On => On
include_path => .:/usr/local/Cellar/php55/5.5.15/lib/php => .:/usr/local/Cellar/php55/5.5.15/lib/php
log_errors => On => On
log_errors_max_len => 1024 => 1024
mail.add_x_header => On => On
mail.force_extra_parameters => no value => no value
mail.log => no value => no value
max_execution_time => 0 => 0
max_file_uploads => 20 => 20
max_input_nesting_level => 64 => 64
max_input_time => -1 => -1
max_input_vars => 1000 => 1000
memory_limit => 128M => 128M
open_basedir => no value => no value
output_buffering => 0 => 0
output_handler => no value => no value
post_max_size => 8M => 8M
precision => 14 => 14
realpath_cache_size => 16K => 16K
realpath_cache_ttl => 120 => 120
register_argc_argv => On => On
report_memleaks => On => On
report_zend_debug => Off => Off
request_order => GP => GP
sendmail_from => no value => no value
sendmail_path => /usr/sbin/sendmail -t -i  => /usr/sbin/sendmail -t -i 
serialize_precision => 17 => 17
short_open_tag => Off => Off
SMTP => localhost => localhost
smtp_port => 25 => 25
sql.safe_mode => Off => Off
sys_temp_dir => no value => no value
track_errors => On => On
unserialize_callback_func => no value => no value
upload_max_filesize => 2M => 2M
upload_tmp_dir => no value => no value
user_dir => no value => no value
user_ini.cache_ttl => 300 => 300
user_ini.filename => .user.ini => .user.ini
variables_order => GPCS => GPCS
xmlrpc_error_number => 0 => 0
xmlrpc_errors => Off => Off
zend.detect_unicode => On => On
zend.enable_gc => On => On
zend.multibyte => Off => Off
zend.script_encoding => no value => no value
zend.signal_check => Off => Off

ctype

ctype functions => enabled

curl

cURL support => enabled
cURL Information => 7.37.1
Age => 3
Features
AsynchDNS => Yes
CharConv => No
Debug => No
GSS-Negotiate => Yes
IDN => No
IPv6 => Yes
krb4 => No
Largefile => Yes
libz => Yes
NTLM => Yes
NTLMWB => Yes
SPNEGO => No
SSL => Yes
SSPI => No
TLS-SRP => No
Protocols => dict, file, ftp, ftps, gopher, http, https, imap, imaps, ldap, ldaps, pop3, pop3s, rtsp, smtp, smtps, telnet, tftp
Host => x86_64-apple-darwin14.0
SSL Version => SecureTransport
ZLib Version => 1.2.5

date

date/time support => enabled
"Olson" Timezone Database Version => 2014.5
Timezone Database => internal
Default timezone => Europe/Moscow

Directive => Local Value => Master Value
date.default_latitude => 31.7667 => 31.7667
date.default_longitude => 35.2333 => 35.2333
date.sunrise_zenith => 90.583333 => 90.583333
date.sunset_zenith => 90.583333 => 90.583333
date.timezone => Europe/Moscow => Europe/Moscow

dba

DBA support => enabled
Supported handlers => ndbm cdb cdb_make inifile flatfile 

Directive => Local Value => Master Value
dba.default_handler => flatfile => flatfile

dom

DOM/XML => enabled
DOM/XML API Version => 20031129
libxml Version => 2.9.0
HTML Support => enabled
XPath Support => enabled
XPointer Support => enabled
Schema Support => enabled
RelaxNG Support => enabled

ereg

Regex Library => Bundled library enabled

exif

EXIF Support => enabled
EXIF Version => 1.4 $Id$
Supported EXIF Version => 0220
Supported filetypes => JPEG,TIFF

Directive => Local Value => Master Value
exif.decode_jis_intel => JIS => JIS
exif.decode_jis_motorola => JIS => JIS
exif.decode_unicode_intel => UCS-2LE => UCS-2LE
exif.decode_unicode_motorola => UCS-2BE => UCS-2BE
exif.encode_jis => no value => no value
exif.encode_unicode => ISO-8859-15 => ISO-8859-15

fileinfo

fileinfo support => enabled
version => 1.0.5

filter

Input Validation and Filtering => enabled
Revision => $Id: 4d3899e089e6e45b157975ceef2ac7deb6e9d762 $

Directive => Local Value => Master Value
filter.default => unsafe_raw => unsafe_raw
filter.default_flags => no value => no value

ftp

FTP support => enabled

gd

GD Support => enabled
GD Version => bundled (2.1.0 compatible)
FreeType Support => enabled
FreeType Linkage => with freetype
FreeType Version => 2.5.3
GIF Read Support => enabled
GIF Create Support => enabled
JPEG Support => enabled
libJPEG Version => 8
PNG Support => enabled
libPNG Version => 1.6.12
WBMP Support => enabled
XBM Support => enabled

Directive => Local Value => Master Value
gd.jpeg_ignore_warning => 0 => 0

gettext

GetText Support => enabled

hash

hash support => enabled
Hashing Engines => md2 md4 md5 sha1 sha224 sha256 sha384 sha512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost adler32 crc32 crc32b fnv132 fnv164 joaat haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5 

http

HTTP Support => enabled
Extension Version => 2.0.7

Used Library => Compiled => Linked
libz => 1.2.8 => 1.2.8
libcurl => 7.37.1 => 7.37.1
libevent => 2.0.21-stable => 2.0.21-stable

Directive => Local Value => Master Value
http.etag.mode => crc32b => crc32b

iconv

iconv support => enabled
iconv implementation => libiconv
iconv library version => 1.11

Directive => Local Value => Master Value
iconv.input_encoding => ISO-8859-1 => ISO-8859-1
iconv.internal_encoding => ISO-8859-1 => ISO-8859-1
iconv.output_encoding => ISO-8859-1 => ISO-8859-1

intl

Internationalization support => enabled
version => 1.1.0
ICU version => 53.1
ICU Data version => 53.1

Directive => Local Value => Master Value
intl.default_locale => no value => no value
intl.error_level => 0 => 0
intl.use_exceptions => 0 => 0

json

json support => enabled
json version => 1.2.1

ldap

LDAP Support => enabled
RCS Version => $Id$
Total Links => 0/unlimited
API Version => 3001
Vendor Name => OpenLDAP
Vendor Version => 20428
SASL Support => Enabled

Directive => Local Value => Master Value
ldap.max_links => Unlimited => Unlimited

libxml

libXML support => active
libXML Compiled Version => 2.9.0
libXML Loaded Version => 20900
libXML streams => enabled

mbstring

Multibyte Support => enabled
Multibyte string engine => libmbfl
HTTP input encoding translation => disabled
libmbfl version => 1.3.2

mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.

Multibyte (japanese) regex support => enabled
Multibyte regex (oniguruma) backtrack check => On
Multibyte regex (oniguruma) version => 5.9.2

Directive => Local Value => Master Value
mbstring.detect_order => no value => no value
mbstring.encoding_translation => Off => Off
mbstring.func_overload => 0 => 0
mbstring.http_input => pass => pass
mbstring.http_output => pass => pass
mbstring.http_output_conv_mimetypes => ^(text/|application/xhtml\+xml) => ^(text/|application/xhtml\+xml)
mbstring.internal_encoding => no value => no value
mbstring.language => neutral => neutral
mbstring.strict_detection => Off => Off
mbstring.substitute_character => no value => no value

memcached

memcached support => enabled
Version => 2.1.0
libmemcached version => 1.0.18
SASL support => no
Session support => yes
igbinary support => no
json support => no

Directive => Local Value => Master Value
memcached.compression_factor => 1.3 => 1.3
memcached.compression_threshold => 2000 => 2000
memcached.compression_type => fastlz => fastlz
memcached.serializer => php => php
memcached.sess_binary => 0 => 0
memcached.sess_connect_timeout => 1000 => 1000
memcached.sess_consistent_hash => 0 => 0
memcached.sess_lock_wait => 150000 => 150000
memcached.sess_locking => 1 => 1
memcached.sess_number_of_replicas => 0 => 0
memcached.sess_prefix => memc.sess.key. => memc.sess.key.
memcached.sess_randomize_replica_read => 0 => 0
memcached.sess_remove_failed => 0 => 0

mhash

MHASH support => Enabled
MHASH API Version => Emulated Support

mysql

MySQL Support => enabled
Active Persistent Links => 0
Active Links => 0
Client API version => mysqlnd 5.0.11-dev - 20120503 - $Id: bf9ad53b11c9a57efdb1057292d73b928b8c5c77 $

Directive => Local Value => Master Value
mysql.allow_local_infile => On => On
mysql.allow_persistent => On => On
mysql.connect_timeout => 60 => 60
mysql.default_host => no value => no value
mysql.default_password => no value => no value
mysql.default_port => no value => no value
mysql.default_socket => /tmp/mysql.sock => /tmp/mysql.sock
mysql.default_user => no value => no value
mysql.max_links => Unlimited => Unlimited
mysql.max_persistent => Unlimited => Unlimited
mysql.trace_mode => Off => Off

mysqli

MysqlI Support => enabled
Client API library version => mysqlnd 5.0.11-dev - 20120503 - $Id: bf9ad53b11c9a57efdb1057292d73b928b8c5c77 $
Active Persistent Links => 0
Inactive Persistent Links => 0
Active Links => 0

Directive => Local Value => Master Value
mysqli.allow_local_infile => On => On
mysqli.allow_persistent => On => On
mysqli.default_host => no value => no value
mysqli.default_port => 3306 => 3306
mysqli.default_pw => no value => no value
mysqli.default_socket => /tmp/mysql.sock => /tmp/mysql.sock
mysqli.default_user => no value => no value
mysqli.max_links => Unlimited => Unlimited
mysqli.max_persistent => Unlimited => Unlimited
mysqli.reconnect => Off => Off

mysqlnd

mysqlnd => enabled
Version => mysqlnd 5.0.11-dev - 20120503 - $Id: bf9ad53b11c9a57efdb1057292d73b928b8c5c77 $
Compression => supported
core SSL => supported
extended SSL => supported
Command buffer size => 4096
Read buffer size => 32768
Read timeout => 31536000
Collecting statistics => Yes
Collecting memory statistics => Yes
Tracing => n/a
Loaded plugins => mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_sha256_password
API Extensions => mysqli,pdo_mysql,mysql

mysqlnd statistics =>  
bytes_sent => 0
bytes_received => 0
packets_sent => 0
packets_received => 0
protocol_overhead_in => 0
protocol_overhead_out => 0
bytes_received_ok_packet => 0
bytes_received_eof_packet => 0
bytes_received_rset_header_packet => 0
bytes_received_rset_field_meta_packet => 0
bytes_received_rset_row_packet => 0
bytes_received_prepare_response_packet => 0
bytes_received_change_user_packet => 0
packets_sent_command => 0
packets_received_ok => 0
packets_received_eof => 0
packets_received_rset_header => 0
packets_received_rset_field_meta => 0
packets_received_rset_row => 0
packets_received_prepare_response => 0
packets_received_change_user => 0
result_set_queries => 0
non_result_set_queries => 0
no_index_used => 0
bad_index_used => 0
slow_queries => 0
buffered_sets => 0
unbuffered_sets => 0
ps_buffered_sets => 0
ps_unbuffered_sets => 0
flushed_normal_sets => 0
flushed_ps_sets => 0
ps_prepared_never_executed => 0
ps_prepared_once_executed => 0
rows_fetched_from_server_normal => 0
rows_fetched_from_server_ps => 0
rows_buffered_from_client_normal => 0
rows_buffered_from_client_ps => 0
rows_fetched_from_client_normal_buffered => 0
rows_fetched_from_client_normal_unbuffered => 0
rows_fetched_from_client_ps_buffered => 0
rows_fetched_from_client_ps_unbuffered => 0
rows_fetched_from_client_ps_cursor => 0
rows_affected_normal => 0
rows_affected_ps => 0
rows_skipped_normal => 0
rows_skipped_ps => 0
copy_on_write_saved => 0
copy_on_write_performed => 0
command_buffer_too_small => 0
connect_success => 0
connect_failure => 0
connection_reused => 0
reconnect => 0
pconnect_success => 0
active_connections => 0
active_persistent_connections => 0
explicit_close => 0
implicit_close => 0
disconnect_close => 0
in_middle_of_command_close => 0
explicit_free_result => 0
implicit_free_result => 0
explicit_stmt_close => 0
implicit_stmt_close => 0
mem_emalloc_count => 0
mem_emalloc_amount => 0
mem_ecalloc_count => 0
mem_ecalloc_amount => 0
mem_erealloc_count => 0
mem_erealloc_amount => 0
mem_efree_count => 0
mem_efree_amount => 0
mem_malloc_count => 0
mem_malloc_amount => 0
mem_calloc_count => 0
mem_calloc_amount => 0
mem_realloc_count => 0
mem_realloc_amount => 0
mem_free_count => 0
mem_free_amount => 0
mem_estrndup_count => 0
mem_strndup_count => 0
mem_estndup_count => 0
mem_strdup_count => 0
proto_text_fetched_null => 0
proto_text_fetched_bit => 0
proto_text_fetched_tinyint => 0
proto_text_fetched_short => 0
proto_text_fetched_int24 => 0
proto_text_fetched_int => 0
proto_text_fetched_bigint => 0
proto_text_fetched_decimal => 0
proto_text_fetched_float => 0
proto_text_fetched_double => 0
proto_text_fetched_date => 0
proto_text_fetched_year => 0
proto_text_fetched_time => 0
proto_text_fetched_datetime => 0
proto_text_fetched_timestamp => 0
proto_text_fetched_string => 0
proto_text_fetched_blob => 0
proto_text_fetched_enum => 0
proto_text_fetched_set => 0
proto_text_fetched_geometry => 0
proto_text_fetched_other => 0
proto_binary_fetched_null => 0
proto_binary_fetched_bit => 0
proto_binary_fetched_tinyint => 0
proto_binary_fetched_short => 0
proto_binary_fetched_int24 => 0
proto_binary_fetched_int => 0
proto_binary_fetched_bigint => 0
proto_binary_fetched_decimal => 0
proto_binary_fetched_float => 0
proto_binary_fetched_double => 0
proto_binary_fetched_date => 0
proto_binary_fetched_year => 0
proto_binary_fetched_time => 0
proto_binary_fetched_datetime => 0
proto_binary_fetched_timestamp => 0
proto_binary_fetched_string => 0
proto_binary_fetched_blob => 0
proto_binary_fetched_enum => 0
proto_binary_fetched_set => 0
proto_binary_fetched_geometry => 0
proto_binary_fetched_other => 0
init_command_executed_count => 0
init_command_failed_count => 0
com_quit => 0
com_init_db => 0
com_query => 0
com_field_list => 0
com_create_db => 0
com_drop_db => 0
com_refresh => 0
com_shutdown => 0
com_statistics => 0
com_process_info => 0
com_connect => 0
com_process_kill => 0
com_debug => 0
com_ping => 0
com_time => 0
com_delayed_insert => 0
com_change_user => 0
com_binlog_dump => 0
com_table_dump => 0
com_connect_out => 0
com_register_slave => 0
com_stmt_prepare => 0
com_stmt_execute => 0
com_stmt_send_long_data => 0
com_stmt_close => 0
com_stmt_reset => 0
com_stmt_set_option => 0
com_stmt_fetch => 0
com_deamon => 0
bytes_received_real_data_normal => 0
bytes_received_real_data_ps => 0

odbc

ODBC Support => enabled
Active Persistent Links => 0
Active Links => 0
ODBC library => unixODBC
ODBC_INCLUDE => -I/usr/local/opt/unixodbc/include
ODBC_LFLAGS => -L/usr/local/opt/unixodbc/lib
ODBC_LIBS => -lodbc

Directive => Local Value => Master Value
odbc.allow_persistent => On => On
odbc.check_persistent => On => On
odbc.default_cursortype => Static cursor => Static cursor
odbc.default_db => no value => no value
odbc.default_pw => no value => no value
odbc.default_user => no value => no value
odbc.defaultbinmode => return as is => return as is
odbc.defaultlrl => return up to 4096 bytes => return up to 4096 bytes
odbc.max_links => Unlimited => Unlimited
odbc.max_persistent => Unlimited => Unlimited

openssl

OpenSSL support => enabled
OpenSSL Library Version => OpenSSL 0.9.8za 5 Jun 2014
OpenSSL Header Version => OpenSSL 0.9.8y 5 Feb 2013

pcntl

pcntl support => enabled

pcre

PCRE (Perl Compatible Regular Expressions) Support => enabled
PCRE Library Version => 8.34 2013-12-15

Directive => Local Value => Master Value
pcre.backtrack_limit => 1000000 => 1000000
pcre.recursion_limit => 100000 => 100000

PDO

PDO support => enabled
PDO drivers => mysql, odbc, sqlite

pdo_mysql

PDO Driver for MySQL => enabled
Client API version => mysqlnd 5.0.11-dev - 20120503 - $Id: bf9ad53b11c9a57efdb1057292d73b928b8c5c77 $

Directive => Local Value => Master Value
pdo_mysql.default_socket => /tmp/mysql.sock => /tmp/mysql.sock

PDO_ODBC

PDO Driver for ODBC (unixODBC) => enabled
ODBC Connection Pooling => Enabled, strict matching

pdo_sqlite

PDO Driver for SQLite 3.x => enabled
SQLite Library => 3.8.4.3

Phar

Phar: PHP Archive support => enabled
Phar EXT version => 2.0.2
Phar API version => 1.1.1
SVN revision => $Id: a5488937a80433d434af6753d3db8517feaf91df $
Phar-based phar archives => enabled
Tar-based phar archives => enabled
ZIP-based phar archives => enabled
gzip compression => enabled
bzip2 compression => enabled
OpenSSL support => enabled


Phar based on pear/PHP_Archive, original concept by Davey Shafik.
Phar fully realized by Gregory Beaver and Marcus Boerger.
Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.
Directive => Local Value => Master Value
phar.cache_list => no value => no value
phar.readonly => Off => Off
phar.require_hash => On => On

pinba

Pinba support => enabled
Extension version => 1.1.0-dev

Directive => Local Value => Master Value
pinba.auto_flush => 1 => 1
pinba.enabled => 0 => 0
pinba.server => no value => no value

posix

Revision => $Id: 1dfa9997ed76804e53c91e0ce862f3707617b6ed $

propro

Property proxy support => enabled
Extension version => 1.0.0

raphf

Resource and persistent handle factory support => enabled
Extension version => 1.0.4

                    Persistent handles in this process                    
Provider => Ident => Used => Free

Directive => Local Value => Master Value
raphf.persistent_handle.limit => -1 => -1

readline

Readline Support => enabled
Readline library => EditLine wrapper

Directive => Local Value => Master Value
cli.pager => no value => no value
cli.prompt => \b \>  => \b \> 

redis

Redis Support => enabled
Redis Version => 2.2.5

Reflection

Reflection => enabled
Version => $Id: 31d836a7ac92a37b5c580836d91ad4736fe2f376 $

session

Session Support => enabled
Registered save handlers => files user memcached redis 
Registered serializer handlers => php_serialize php php_binary wddx 

Directive => Local Value => Master Value
session.auto_start => Off => Off
session.cache_expire => 180 => 180
session.cache_limiter => nocache => nocache
session.cookie_domain => no value => no value
session.cookie_httponly => Off => Off
session.cookie_lifetime => 0 => 0
session.cookie_path => / => /
session.cookie_secure => Off => Off
session.entropy_file => /dev/urandom => /dev/urandom
session.entropy_length => 32 => 32
session.gc_divisor => 1000 => 1000
session.gc_maxlifetime => 1440 => 1440
session.gc_probability => 1 => 1
session.hash_bits_per_character => 5 => 5
session.hash_function => 0 => 0
session.name => PHPSESSID => PHPSESSID
session.referer_check => no value => no value
session.save_handler => files => files
session.save_path => no value => no value
session.serialize_handler => php => php
session.upload_progress.cleanup => On => On
session.upload_progress.enabled => On => On
session.upload_progress.freq => 1% => 1%
session.upload_progress.min_freq => 1 => 1
session.upload_progress.name => PHP_SESSION_UPLOAD_PROGRESS => PHP_SESSION_UPLOAD_PROGRESS
session.upload_progress.prefix => upload_progress_ => upload_progress_
session.use_cookies => On => On
session.use_only_cookies => On => On
session.use_strict_mode => Off => Off
session.use_trans_sid => 0 => 0

shmop

shmop support => enabled

SimpleXML

Simplexml support => enabled
Revision => $Id: a915862ec47f9589309acc4996ca8f6179788746 $
Schema support => enabled

snmp

NET-SNMP Support => enabled
NET-SNMP Version => 5.6
PHP SNMP Version => 0.1

soap

Soap Client => enabled
Soap Server => enabled

Directive => Local Value => Master Value
soap.wsdl_cache => 1 => 1
soap.wsdl_cache_dir => /tmp => /tmp
soap.wsdl_cache_enabled => 1 => 1
soap.wsdl_cache_limit => 5 => 5
soap.wsdl_cache_ttl => 86400 => 86400

sockets

Sockets Support => enabled

SPL

SPL support => enabled
Interfaces => Countable, OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject
Classes => AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException

sqlite3

SQLite3 support => enabled
SQLite3 module version => 0.7-dev
SQLite Library => 3.8.4.3

Directive => Local Value => Master Value
sqlite3.extension_dir => no value => no value

standard

Dynamic Library Support => enabled
Path to sendmail => /usr/sbin/sendmail -t -i 

Directive => Local Value => Master Value
assert.active => 1 => 1
assert.bail => 0 => 0
assert.callback => no value => no value
assert.quiet_eval => 0 => 0
assert.warning => 1 => 1
auto_detect_line_endings => 0 => 0
default_socket_timeout => 60 => 60
from => no value => no value
url_rewriter.tags => a=href,area=href,frame=src,input=src,form=fakeentry => a=href,area=href,frame=src,input=src,form=fakeentry
user_agent => no value => no value

sysvmsg

sysvmsg support => enabled
Revision => $Id: adf1d2d6be849c46eed3c3ee6f1cbebd1448d6e5 $

tokenizer

Tokenizer Support => enabled

wddx

WDDX Support => enabled
WDDX Session Serializer => enabled

xdebug

xdebug support => enabled
Version => 2.2.5
IDE Key => debugger

Supported protocols => Revision
DBGp - Common DeBuGger Protocol => $Revision: 1.145 $

Directive => Local Value => Master Value
xdebug.auto_trace => Off => Off
xdebug.cli_color => 0 => 0
xdebug.collect_assignments => Off => Off
xdebug.collect_includes => On => On
xdebug.collect_params => 0 => 0
xdebug.collect_return => Off => Off
xdebug.collect_vars => Off => Off
xdebug.coverage_enable => On => On
xdebug.default_enable => On => On
xdebug.dump.COOKIE => no value => no value
xdebug.dump.ENV => no value => no value
xdebug.dump.FILES => no value => no value
xdebug.dump.GET => no value => no value
xdebug.dump.POST => no value => no value
xdebug.dump.REQUEST => no value => no value
xdebug.dump.SERVER => no value => no value
xdebug.dump.SESSION => no value => no value
xdebug.dump_globals => On => On
xdebug.dump_once => On => On
xdebug.dump_undefined => Off => Off
xdebug.extended_info => On => On
xdebug.file_link_format => no value => no value
xdebug.idekey => debugger => debugger
xdebug.max_nesting_level => 100 => 100
xdebug.overload_var_dump => On => On
xdebug.profiler_aggregate => Off => Off
xdebug.profiler_append => Off => Off
xdebug.profiler_enable => Off => Off
xdebug.profiler_enable_trigger => Off => Off
xdebug.profiler_output_dir => /var/tmp/ => /var/tmp/
xdebug.profiler_output_name => cachegrind.out.%p => cachegrind.out.%p
xdebug.remote_autostart => Off => Off
xdebug.remote_connect_back => Off => Off
xdebug.remote_cookie_expire_time => 3600 => 3600
xdebug.remote_enable => On => On
xdebug.remote_handler => dbgp => dbgp
xdebug.remote_host => localhost => localhost
xdebug.remote_log => no value => no value
xdebug.remote_mode => req => req
xdebug.remote_port => 9000 => 9000
xdebug.scream => Off => Off
xdebug.show_exception_trace => Off => Off
xdebug.show_local_vars => Off => Off
xdebug.show_mem_delta => Off => Off
xdebug.trace_enable_trigger => Off => Off
xdebug.trace_format => 0 => 0
xdebug.trace_options => 0 => 0
xdebug.trace_output_dir => /var/tmp/ => /var/tmp/
xdebug.trace_output_name => trace.%c => trace.%c
xdebug.var_display_max_children => 128 => 128
xdebug.var_display_max_data => 512 => 512
xdebug.var_display_max_depth => 10 => 10

xml

XML Support => active
XML Namespace Support => active
libxml2 Version => 2.9.0

xmlreader

XMLReader => enabled

xmlrpc

core library version => xmlrpc-epi v. 0.51
php extension version => 0.51
author => Dan Libby
homepage => http://xmlrpc-epi.sourceforge.net
open sourced by => Epinions.com

xmlwriter

XMLWriter => enabled

xsl

XSL => enabled
libxslt Version => 1.1.28
libxslt compiled against libxml Version => 2.9.0
EXSLT => enabled
libexslt Version => 1.1.28

zip

Zip => enabled
Extension Version => $Id: 05dd1ecc211075107543b0ef8cee488dd229fccf $
Zip version => 1.11.0
Libzip version => 0.10.1

zlib

ZLib Support => enabled
Stream Wrapper => compress.zlib://
Stream Filter => zlib.inflate, zlib.deflate
Compiled Version => 1.2.8
Linked Version => 1.2.8

Directive => Local Value => Master Value
zlib.output_compression => Off => Off
zlib.output_compression_level => -1 => -1
zlib.output_handler => no value => no value

Additional Modules

Module Name
sysvsem
sysvshm

Environment

Variable => Value
SHELL => /bin/bash
TERM => xterm-256color
TMPDIR => /var/folders/22/xl1z5mb1493bgzv63cqzvtk00000gn/T/
Apple_PubSub_Socket_Render => /private/tmp/com.apple.launchd.eJNXclxmbS/Render
AWS_AUTO_SCALING_URL => https://autoscaling.eu-west-1.amazonaws.com
USER => mkabischev
EC2_HOME => /usr/local/opt/ec2/ec2-api-tools-1.7.1.1
AWS_CREDENTIAL_FILE => /Users/mkabischev/aws/aws-credentials
SSH_AUTH_SOCK => /private/tmp/com.apple.launchd.hbt314e0DB/Listeners
__CF_USER_TEXT_ENCODING => 0x1F5:0x7:0x31
PATH => /usr/local/opt/php55/bin:/usr/local/bin/packer:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/Users/mkabischev/.composer/vendor/bin:/usr/local/opt/aws-as-tool/bin:/usr/local/opt/ec2/ec2-api-tools-1.7.1.1/bin:/Applications/Android Studio.app/sdk/platform-tools
PWD => /Users/mkabischev/work/my/fabric-connector
JAVA_HOME => /Library/Java/JavaVirtualMachines/jdk1.8.0_20.jdk/Contents/Home
XPC_FLAGS => 0x0
XPC_SERVICE_NAME => 0
SHLVL => 1
HOME => /Users/mkabischev
AWS_AUTO_SCALING_HOME => /usr/local/opt/aws-as-tool
LOGNAME => mkabischev
LC_CTYPE => ru_RU.UTF-8
AWS_ACCESS_KEY => AKIAIEUZTMRAHVQVV6OA
AWS_SECRET_KEY => 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
_ => /usr/local/opt/php55/bin/php

PHP Variables

Variable => Value
_SERVER["SHELL"] => /bin/bash
_SERVER["TERM"] => xterm-256color
_SERVER["TMPDIR"] => /var/folders/22/xl1z5mb1493bgzv63cqzvtk00000gn/T/
_SERVER["Apple_PubSub_Socket_Render"] => /private/tmp/com.apple.launchd.eJNXclxmbS/Render
_SERVER["AWS_AUTO_SCALING_URL"] => https://autoscaling.eu-west-1.amazonaws.com
_SERVER["USER"] => mkabischev
_SERVER["EC2_HOME"] => /usr/local/opt/ec2/ec2-api-tools-1.7.1.1
_SERVER["AWS_CREDENTIAL_FILE"] => /Users/mkabischev/aws/aws-credentials
_SERVER["SSH_AUTH_SOCK"] => /private/tmp/com.apple.launchd.hbt314e0DB/Listeners
_SERVER["__CF_USER_TEXT_ENCODING"] => 0x1F5:0x7:0x31
_SERVER["PATH"] => /usr/local/opt/php55/bin:/usr/local/bin/packer:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/Users/mkabischev/.composer/vendor/bin:/usr/local/opt/aws-as-tool/bin:/usr/local/opt/ec2/ec2-api-tools-1.7.1.1/bin:/Applications/Android Studio.app/sdk/platform-tools
_SERVER["PWD"] => /Users/mkabischev/work/my/fabric-connector
_SERVER["JAVA_HOME"] => /Library/Java/JavaVirtualMachines/jdk1.8.0_20.jdk/Contents/Home
_SERVER["XPC_FLAGS"] => 0x0
_SERVER["XPC_SERVICE_NAME"] => 0
_SERVER["SHLVL"] => 1
_SERVER["HOME"] => /Users/mkabischev
_SERVER["AWS_AUTO_SCALING_HOME"] => /usr/local/opt/aws-as-tool
_SERVER["LOGNAME"] => mkabischev
_SERVER["LC_CTYPE"] => ru_RU.UTF-8
_SERVER["AWS_ACCESS_KEY"] => AKIAIEUZTMRAHVQVV6OA
_SERVER["AWS_SECRET_KEY"] => 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
_SERVER["_"] => /usr/local/opt/php55/bin/php
_SERVER["PHP_SELF"] => 
_SERVER["SCRIPT_NAME"] => 
_SERVER["SCRIPT_FILENAME"] => 
_SERVER["PATH_TRANSLATED"] => 
_SERVER["DOCUMENT_ROOT"] => 
_SERVER["REQUEST_TIME_FLOAT"] => 1417443263.7602
_SERVER["REQUEST_TIME"] => 1417443263
_SERVER["argv"] => Array
(
)

_SERVER["argc"] => 0

PHP License
This program is free software; you can redistribute it and/or modify
it under the terms of the PHP License as published by the PHP Group
and included in the distribution in the file:  LICENSE

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

If you did not receive a copy of the PHP license, or have any
questions about PHP licensing, please contact license@php.net.
