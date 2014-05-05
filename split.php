<?
error_reporting( E_ALL );
$s = $_GET[ 's' ];
$o = $_GET[ 'o' ];
$l = ( $s * 4 * $s );

$f = fopen( 'pi-billion.txt', 'r' );
if( $f ) {
	fseek( $f, $o );
	$p = fread( $f, $l );
	if( strlen( $p ) <  $l ) {
		$p = str_pad( $p, $l, '0', STR_PAD_RIGHT );
	}
	echo $p;
	fclose( $f );
} else {
	echo 'Error';
}
?>