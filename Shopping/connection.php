<?php
    /*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
    $Connect = pg_connect("postgres://yzfoonhojmrkll:bd52f898a24de3e881f9e3f4ffabbff73c1410ebd352b280ed2ac82d8ae02ee7@ec2-107-20-127-127.compute-1.amazonaws.com:5432/dcau7oi0lua5sv");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>