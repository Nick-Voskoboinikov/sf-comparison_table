<?php

function outputRow($a=0,$b=0) {
echo '<tr><td>'.(string)$a.'</td><td>'.(string)$b.'</td><td>'.(string)(json_encode(!$a)).'</td><td>'.(string)(json_encode($a||$b)).'</td><td>'.(string)(json_encode($a&&$b)).'</td><td>'. (string)(json_encode($a xor $b)).'</td></tr>';
}

function outEqComparisonRow($y) {
echo '<tr><th>'.(string)json_encode($y).'</th><td>'.(string)(json_encode($y == true)).'</td><td>'.(string)(json_encode($y == false)).'</td><td>'.(string)(json_encode($y == 1)).'</td><td>'.(string)(json_encode($y == 0)).'</td><td>'.(string)(json_encode($y == -1)).'</td><td>'.(string)(json_encode($y == "1")).'</td><td>'.(string)(json_encode($y == null)).'</td><td>'.(string)(json_encode($y == "php")).'</td></tr>';
}

function outIdComparisonRow($y) {
echo '<tr><th>'.(string)json_encode($y).'</th><td>'.(string)(json_encode($y === true)).'</td><td>'.(string)(json_encode($y === false)).'</td><td>'.(string)(json_encode($y === 1)).'</td><td>'.(string)(json_encode($y === 0)).'</td><td>'.(string)(json_encode($y === -1)).'</td><td>'.(string)(json_encode($y === "1")).'</td><td>'.(string)(json_encode($y === null)).'</td><td>'.(string)(json_encode($y === "php")).'</td></tr>';
}

echo '<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Verity table | Таблица истинности</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style>
table {
width: 100%;
margin: 20px 0;
border-collapse: collapse;
font-size: 16px;
}
th {
background-color: rgb(238, 238, 238);
font-weight: bold;
}
th, td {
margin: 20px 0;
padding: 10px;
border: 1px solid #c8c8c8;
}
</style>
	</head>
	<body>
<section>
<h3>PHP verity table | Таблица истинности PHP</h3>
<table>
<thead>
<tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>A xor B</th></tr>
</thead>
<tbody>';

outputRow();
outputRow('0','1');
outputRow('1','0');
outputRow('1','1');

echo '</tbody></table><br><br><br><br>
</section>
<section id="comparison">
<h3>Comparison table | Таблица сравнения</h3>
<table><caption>Equal comparison | Гибкое сравнение</caption>
<thead>
<tr><th>&nbsp;</th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>&quot;1&quot;</th><th>null</th><th>&quot;php&quot;</th></tr>
</thead>
<tbody>';

outEqComparisonRow(true);
outEqComparisonRow(false);
outEqComparisonRow(1);
outEqComparisonRow(0);
outEqComparisonRow(-1);
outEqComparisonRow("1");
outEqComparisonRow(null);
outEqComparisonRow("php");

echo '</tbody></table><br><br>


<table><caption>Identical comparison | Жесткое сравнение</caption>
<thead>
<tr><th>&nbsp;</th><th>true</th><th>false</th><th>1</th><th>0</th><th>-1</th><th>&quot;1&quot;</th><th>null</th><th>&quot;php&quot;</th></tr>
</thead>
<tbody>';

outIdComparisonRow(true);
outIdComparisonRow(false);
outIdComparisonRow(1);
outIdComparisonRow(0);
outIdComparisonRow(-1);
outIdComparisonRow("1");
outIdComparisonRow(null);
outIdComparisonRow("php");

echo '</tbody></table><br><br><br><br>
</section>
<script>
function showTruth(){
document.querySelectorAll("#comparison td").forEach(function(o){
   if(o.innerHTML === "true"){
o.style.backgroundColor="yellow";
}
});
}
</script>
<section>
<h3>Results | Выводы</h3>
Операторы сравнения позволяют сравнивать между собой значения. Т.н. жесткое и гибкое сравнение в ряде случаев подразумевают преобразование значений. Результат сравнения значений само собой зависит от "строгости" оператора сравнения.
<a href="#comparison" onclick="showTruth();">Показать значения истинности в таблицах сравнения</a>
</section>
<section>
<h3>Source code| Исходный код</h3>
Исходный PHP код доступен по ссылке:
<a href="https://nick-voskoboinikov.github.io/sf-comparison_table/index.php" download="NVoskoboinikov_comparisonTable.php">Ссылка на github</a>
</section>
	</body>
</html>';

			
?>
