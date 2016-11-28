<?php 
	if (!isset($_GET['cat']) && !isset($_GET['brand']) && !isset($_GET['nadji'])) {
		 $proizvodi = vratiProizvode();
	}

	if (isset($_GET['brand'])) {
		$proizvodi = vratiPro_Brend();
	}

	if (isset($_GET['cat'])) {
    	$proizvodi = vratiPro_Kategorije();
	}

	if (isset($_GET['nadji'])) {
		$search =  $_GET['search'];
		$proizvodi = nadjiProizvod($search);
  	}

 ?>