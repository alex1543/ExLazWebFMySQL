<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<title>Учебная программа, как можно обойтись без Apache.</title>
		<meta name="description" content="Отчёт для печати" /> 
		<meta name="Keywords" content="ОТЧЁТ, ПЕЧАТЬ" />
	</head>

  	<style>
body {
	font-family: sans-serif;
	text-align: center;
}
table {
	width: 90%;
	margin-left: auto;
    margin-right: auto;
    text-align: left;
	border-collapse: collapse;
	table-layout: fixed;
}
tr:first-child {
	background-color: #8b7eac; 
	font-weight: bold;

}
tr:nth-child(odd) { 
	background-color: #9587b9; 
}
tr:nth-child(even) { 
	background-color: #cac3dc; 
}
tr {
	opacity: 0.77;
}
tr:hover {
	color: #fff;
	cursor: pointer;
	font-weight: bold;
	background-color: #7967a6;
}
td {
	padding: 5px;
    position: relative;
    border: 1px solid #333;
    height: 20px;
}
td:first-child {
	width: 35px;
	text-align: center;
}
h1, h1 a:visited {
	color: #9587b9;
    background-color: #fff;
	font-size: 30px;
	font-family: Roboto, Geneva, Arial, Helvetica, sans-serif;
}
h1 a:hover {
	color: #cac3dc;
}
a {
	text-decoration: none;
}   

	</style>
	<body>
    <h1><a href=".">Учебная программа, как можно обойтись без Apache</a></h1>
	<p>Исходники программы на Lazarus, PHP и MySQL для обучения, <br />как можно обойтись без сервера Apache (из таблицы myarttable, база: MySQL)</p>
	<table>
		<tr>
			<td>id</td>
			<td>text</td>
			<td>description</td>
			<td>keywords</td>
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

	$sqlTM="SELECT * FROM myarttable WHERE id>14 ORDER BY id DESC";  // ASC - по возрастанию; DESC - по убыванию.
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
	<p>Web server: Lazarus (библиотека <b>Synapse</b>), таблица: myarttable из MySQL и получение данных из таблицы: PHP (с драйвером PDO)</p>
	</body>
</html>
