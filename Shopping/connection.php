<?php
    /*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
    $Connect = pg_connect("postgres://gettcqzxdyllga:ab954ac871a0798bbf7d5b85deed43a92388d26750445afecdbb2d9548844ef0@ec2-3-227-149-67.compute-1.amazonaws.com:5432/dbdqeuqd7ev7qf");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>