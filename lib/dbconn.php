<?
    $connect=mysql_connect( "localhost", "root", "daisy7024") or
        die( "SQL server에 연결할 수 없습니다..");

    mysql_select_db("bobdb",$connect);
?>
