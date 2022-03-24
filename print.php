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

<tr><td>15</td><td>Ivanov</td><td>Engeneer</td><td>2 class</td></tr><tr><td>16</td><td>Smirnov</td><td>Cook</td><td>5 level</td></tr><tr><td>18</td><td>Petrov</td><td>Cleaner</td><td>none</td></tr><tr><td>19</td><td>Nikitin</td><td>Programmer</td><td>High lev.</td></tr><tr><td>20</td><td>Kozlovskiy</td><td>Actor</td><td>first</td></tr>				</table>
			</form>
			
			<p>Web server: Lazarus (библиотека Synapse), таблица: myarttable из MySQL и получение данных из таблицы: PHP (с драйвером PDO)</p>
		</main>
	</content>
	<footer>
		<div>&nbsp;</div> 
	</footer>	
</body>
</html>
