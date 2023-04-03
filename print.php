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
		
<tr>
		<td>99</td>
			<td>Alexey</td>
			<td>Engineer</td>
			<td>ITMO</td>
			</tr>

		<tr>
		<td>98</td>
			<td>Ivan</td>
			<td>Student</td>
			<td>LETI</td>
			</tr>

		<tr>
		<td>97</td>
			<td>Fedor</td>
			<td>Loader</td>
			<td>St. Petersburg State University</td>
			</tr>

		<tr>
		<td>96</td>
			<td>Matvey</td>
			<td>Programmer</td>
			<td>Metropolitan College</td>
			</tr>

		<tr>
		<td>95</td>
			<td>Ilya</td>
			<td>Salesman</td>
			<td>Hypermarket</td>
			</tr>

		<tr>
		<td>94</td>
			<td>Nikita</td>
			<td>Student</td>
			<td>Technological Institute</td>
			</tr>

		<tr>
		<td>93</td>
			<td>Andrew</td>
			<td>Poet</td>
			<td>First Electrotechnical University</td>
			</tr>

		<tr>
		<td>92</td>
			<td>Daniel</td>
			<td>Artist</td>
			<td>Theater Saturday</td>
			</tr>

		<tr>
		<td>20</td>
			<td>Fedorov</td>
			<td>Cpp, Delphi, PHP, JS</td>
			<td>3t</td>
			</tr>

		<tr>
		<td>17</td>
			<td>Baranov</td>
			<td>Engeneer</td>
			<td>Ivanov</td>
			</tr>

			</table>
	<p>Web server: Lazarus (библиотека <b>Synapse</b>), таблица: myarttable из MySQL и получение данных из таблицы: PHP (с драйвером PDO)</p>
	</body>
</html>
