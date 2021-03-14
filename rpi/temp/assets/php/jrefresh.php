<?
// ce fichier doit être sauvé sous le nom "jrefresh.php", en utf8 sans BOM.
 
header( "Content-type : text/html; charset=utf-8" );
header( "Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0" );
header( "Pragma: no-cache" );
 

if( $_GET["ajax"] )
{
    setlocale( LC_TIME, "fr_FR.utf8" );
     
?>   Page ajax<br />
    Timestamp : <?= strftime( "%c" ) ?><br />
    Compteur : <?= $_GET['compteur'] ?><br />
<?
}
?>