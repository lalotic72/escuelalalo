<?php
if($_GET)
{
    $idu=$_GET['idu'];
    $tipo=$_GET['tipo'];
    if ($tipo=="1")
    {
        SetCookie('id_usuario', $idu);
        session_start();
        $_SESSION['id_usuario']=$idu;
        print "<meta http-equiv='refresh' content='0; url=index2.php'>";
    }
    else
    {
        SetCookie('id_usuario', $idu);
        session_start();
        $_SESSION['id_usuario']=$idu;
        print "<meta http-equiv='refresh' content='0; url=index2.php'>";
        exit;
    }
    if ($tipo=="2")
    {
        SetCookie('id_usuario', $idu);
        session_start();
        $_SESSION['id_usuario']=$idu;
        print "<meta http-equiv='refresh' content='0; url=index3.php'>";
    }
    else
    {
        SetCookie('id_usuario', $idu);
        session_start();
        $_SESSION['id_usuario']=$idu;
        print "<meta http-equiv='refresh' content='0; url=index3.php'>";
        exit;
    }
}
?>