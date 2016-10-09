<?php 

$limit_chrome = 100; //limit chrome ua

$limit_firefox = 100; //limit firefox ua

$chrome_version = array (
		'min' => 47,
		'max' => 53 //lastest version now is 53
	); 
//random chrome ua version from $chorme_version['min'] to $chrome_version['max']

$firefox_version = array (
		'min' => 45,
		'max' => 49 //lastest version now is 49
	); 
//random chrome ua version from $firefox_version['min'] to $firefox_version['max']

$windows_os = array (
		'Windows NT 5.1', //Windows xp
		'Windows NT 5.1; WOW64', //64 bit version
		'Windows XP',
		'Windows XP; WOW64', //64 bit version
		'Windows NT 6.0', //Windows Vista 
		'Windows NT 6.0; WOW64', //Windows Vista x64 
		'Windows NT 6.1', // Windows 7
		'Windows NT 6.1; WOW64', // Windows 7 x64
		'Windows NT 6.2', // Windows 8
		'Windows NT 6.2; WOW64', // Windows 8 x64
		'Windows NT 10.0', //Windows 10
		'Windows NT 10.0; WOW64', //Windows 10 x64
	);
$linux_os = array (
		'Linux x86_64',
		'Linux i686',
	);
$mac_os = array (
		'Macintosh; U; Intel Mac OS X 10_'.rand(0,9).'_'.rand(0,9).'; en-US',
		'Macintosh; Intel Mac OS X 10_'.rand(0,12).'_'.rand(0,9)
	);
$_os = array_merge($windows_os, $linux_os, $mac_os);
$style_chrome = 'Mozilla/5.0 ($os) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/$version Safari/537.36';
$style_firefox = 'Mozilla/5.0 ($os) Gecko/20100101 Firefox/$version';

for ( $i=0;$i<$limit_chrome;$i++ ){
	$os = $_os[rand ( 0, count ($_os) - 1 ) ];
	$version = rand ( $chrome_version['min'], $chrome_version['max'] ) . '.0.' . rand  (1000,4000) . '.' . rand (100, 400);
	$ua = str_replace('$os', $os, $style_chrome);
	$ua = str_replace('$version', $version, $ua);
	echo $ua . "\n";
}
for ( $i=0;$i<$limit_firefox;$i++ ){
	$os = $_os[rand ( 0, count ($_os) - 1 ) ];
	$version = rand ( $firefox_version['min'], $firefox_version['max'] ) . rand (0,9);
	$ua = str_replace('$os', $os, $style_firefox);
	$ua = str_replace('$version', $version, $ua);
	echo $ua . "\n";
}
