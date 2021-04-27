<?php
echo "Menampilkan Huruf N <br/>";
$jumlah = 6;
for ($row = 0; $row < $jumlah; $row++)
{
	for ($column=0; $column <= $jumlah; $column++)
	{
		if ($column == 0 or $column == 5 or ($row == $column and $column != 0 and $column != 5))
			echo "*";    
		else
			echo "&nbsp ";     
	}        
	echo "<br/>";
}

?>


<?php
echo "Menampilkan Huruf Z <br/>";
$jumlah = 7;
for ($row = 0; $row < $jumlah; $row++)
{
	for ($column = 0; $column <= $jumlah; $column++)
	{
		if ((($row == 0 or $row == 6) and $column >= 0 and $column <= 6) or $row + $column == 6)
			echo "*";    
		else  
			echo "&nbsp ";    
	}        
	echo "<br/>";
}

?>


<?php 
echo "Menampilkan Pola Tambah <br/>";
$jumlah = 8;
for($i = 1; $i <= $jumlah; $i++)  
{  
	if($i == (($jumlah / 2) + 1 ))  
	{  
		for($j = 0; $j <= $jumlah; $j++)  
		{  
			echo "*";  
		}  

	} else {  
		for($j = 1; $j <= $jumlah/2; $j++)  
		{  
			echo "&nbsp ";  
		}  
		echo "*";  
	}
	echo "<br/>";  
}
return 0;
?>


