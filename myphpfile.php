<!doctype html>
<?php 
$url = "https://od-api.newhomesource.com/api/v2/Search/Communities?partnerid=1&City=Austin&SortBy=Random&SortSecondBy=None&marketid=269";
$response = json_decode(file_get_contents($url),true);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body class="index">
  <center>
   <h1>The List of the Communities is :</h1>
		<ul>
			<?php 
				$arr = $response['Result'];
				foreach($arr as $comm){
					?>
				<img src='<?php echo $comm['Thumb1']; ?>' height='200' width='200'>
				<br/>
				<b>Name :</b>  <?php echo $comm['Name'];?><br/>
				<b>Bedroom :</b> <?php echo $comm['BrLo']." to ".$comm['BrHi'];?><br/>
				<b>Bathroom :</b> <?php echo $comm['BaLo']." to ".$comm['BaHi'];?><br/>
				<b>Address :</b> <?php echo $comm['Addr'];?><br/>
				<b>Area :</b> <?php echo $comm['SftLo']." to ".$comm['SftHi'];?><br/>
				<b>Price Range :</b><?php echo $comm['PrLo']." to ".$comm['PrHi'];?>
				<br/>
				<hr>
				<?php 	
				}
				 ?>
		
		</ul>
		</center>
   
  </body>
</html>