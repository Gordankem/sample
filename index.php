<?php 
/**
 * @author Design & Accessible Team 07.06.2017 ( gordankem@gmail.com Игорь Кальдиков)
 * @package -
 * @subpackage -
 * @copyright Copyright (C) 2017 Open Source Matters. All rights reserved.
 * @license GNU/GPL
*/
?>
<!doctype html>
<html lang="en" ng-app="FirstProject">
<head>
	<?php date_default_timezone_set('Asia/Krasnoyarsk'); ?>
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<script src="angular/angular.min.js"></script>
	<meta charset="UTF-8">
	<title>Сайт про шитьё</title>
</head>
<body ng-app>
	<div id="content">
		<input type="text" ng-model="name">
		Hello {{name}}<br/>
		<input type="checkbox" ng-model="ShowCheck">
		<div ng-show="ShowCheck">Текст отображается после выбора чек-бокса</div>
		<p>Nothing here {{'yet'+'!'}}</p>
		<p>1 + 8 = {{1 + 8}}</p>
		<p>Делаем новый одностраничный сайт</p>
		<p>Учимя работать с GIT</p>

	</div>
</body>
</html>