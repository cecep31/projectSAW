<!DOCTYPE html>
<html>
<head>
    <title>metode SAW</title>
    <link rel="stylesheet" type="text/css" href="gaya.css" />
</head>
<body>
<nav>
    <ul>
        <li><a href="/projectsaw">Home</a></li>
        <li><a href="?p=kriteriaadd">tambah kategori</a></li>
        <li><a href="?p=alternatifadd">tambah alternatif</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</nav>

<?php
include "koneksi.php";

// if($_GET["p"] == "kategoriadd"){
//   include "kategoriadd.php";
// }else if($_GET["p"] == "kriteriaedit"){
//   include "kriteriaedit.php";
// }else{
//     include "home.php";
// }


if(isset($_GET['p'])){
    $page = $_GET['p'];

    switch ($page) {
        case 'kriteriaadd':
            include "kriteriaadd.php";
            break;
        case 'cedit':
            include "kriteriaedit.php";
            break;    
        case 'kriteriaedit':
            include "kriteriaedit.php";
            break;			
        default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
    }
}else{
    include "home.php";
}


?>


</body>
</html>