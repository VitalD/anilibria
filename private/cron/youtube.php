#!/usr/bin/php
<?php
$_SERVER['DOCUMENT_ROOT'] = '/var/www/anilibria/root';
require('/var/www/anilibria/root/private/config.php');
require('/var/www/anilibria/root/private/init/mysql.php');
require('/var/www/anilibria/root/private/init/memcache.php');
require('/var/www/anilibria/root/private/func.php');
require('/var/www/anilibria/root/private/auth.php');

updateYoutube();
updateYoutubeStat();
