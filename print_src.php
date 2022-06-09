<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>Отчёт для печати</title>
	<meta name="description" content="Отчёт для печати" /> 
    <meta name="Keywords" content="ОТЧЁТ, ПЕЧАТЬ" />
  	<style>
    
	 body {
		font-family:Verdana, Geneva, Tahoma, sans-serif;
		font-size:12px;
	}
	content {
		width:100%;
		min-width:960px;
		margin:0 auto;
		border: 0px;
	}
	main {
		margin:0px;
		float: left;
		min-width:960px;
		min-height:495px;
	}
	main table {
		margin:10px;
		border-collapse: collapse;
		border: 1px solid #000;
	}
	main table tr td {
		padding:5px;
		border: 1px solid #000;
	}
	main table tr {
		vertical-align:top;
	}
	 
   .cl {
		border-top:0px;
		border-bottom:0px;
		text-align:left;
	}	 
   .cr {
		border-top:0px;
		border-bottom:0px;
		text-align:right;
    }
   .c2 {
		text-align:center;
		padding:5px;
		font-size:24px;
		border:0px;
		width:100%;
    }
	
   .cH td {
		text-align:center;
		font-weight:bold;
    }	
	</style>
</head>
<body>
	<header>
		<h3>&nbsp;</h3>
	</header>
	<content>	
		<main>
					
			<form action="" method="get">
			<table class="c2" style="width:530px">
			<tr><td class="c2">Печать таблицы myarttable из MySQL<br /></td></tr>
			</table>
			
			<table>
			
			<tr class="cH">
				<td style="width:180px;">id</td>
				<td style="width:180px;">text</td>
				<td style="width:180px;">description</td>
				<td style="width:180px;">keywords</td>
			</tr>	
		
<?php 
// блок инициализации
try {
	$pdoSet = new PDO('mysql:dbname=test;host=localhost', 'root', '');
	$pdoSet->query('SET NAMES utf8;');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

	$sqlTM="SELECT * FROM myarttable WHERE id>14 ORDER BY id ASC";  // ASC - по возрастанию; DESC - по убыванию.
//echo $sqlTM;
	$stmt = $pdoSet->query($sqlTM);
	$resultMF = $stmt->fetchAll();
	
//var_dump($resultMF);
	for($iC=0; $iC<Count($resultMF); $iC++) {
		?><tr>
		<?php
		for($iR=0; $iR<4; $iR++) {
			?><td><?php echo $resultMF[$iC][$iR];?></td>
			<?php
		}
		?></tr>

		<?php
	}
?>
	</table>
			</form>
			
			<p>Web server: Lazarus (библиотека Synapse), таблица: myarttable из MySQL и получение данных из таблицы: PHP (с драйвером PDO)</p>
		</main>
	</content>
	<footer>
		<div>&nbsp;</div> 
	</footer>	
</body>
</html>
