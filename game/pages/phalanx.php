<?php

if (CheckSession ( $_GET['session'] ) == FALSE) die ();
if ( key_exists ('cp', $_GET)) SelectPlanet ($GlobalUser['player_id'], $_GET['cp']);
$now = time();
UpdateQueue ( $now );
$aktplanet = GetPlanet ( $GlobalUser['aktplanet'] );
ProdResources ( $GlobalUser['aktplanet'], $aktplanet['lastpeek'], $now );
UpdatePlanetActivity ( $aktplanet['planet_id'] );
UpdateLastClick ( $GlobalUser['player_id'] );
$session = $_GET['session'];

$unitab = LoadUniverse ();
$uni = $unitab['num'];

?>
<html>
 <head>
  <link rel='stylesheet' type='text/css' href='css/default.css' />
  <link rel='stylesheet' type='text/css' href='css/formate.css' />
  <link rel="stylesheet" type="text/css" href="<?=UserSkin();?>formate.css" />

  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="css/combox.css">

<title>Вселенная <?=$uni;?> ОГейм</title>

  <script src="js/utilities.js" type="text/javascript"></script>
  <script language="JavaScript">
    var session = "<?=$session;?>";
  </script>
<script type="text/javascript" src="js/overLib/overlib.js"></script>
<!-- HEADER -->

</head>
<body style="scrollbars: auto;" onunload="" >
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<!-- END HEADER -->

<!-- LEFTMENU -->


<!-- END LEFTMENU -->

<!-- CONTENT AREA -->


<br>
<table width="519">
 <tr>
  <td class="c" colspan="4">
Доклад сенсора с луны на координатах <a href="javascript:showGalaxy(1,260,4)" >[1:260:4]</a> (Andorianin)  </td>

 </tr>
 <tr>
  <td colspan="4" class="c">Передвижения флота</td>
 </tr>
 
<tr class=''><th><div id='bxx1' title='18'star='1233351233'></div></th>
<th colspan='3'><span class='phalanx_fleet'>Боевой <a href='#' onmouseover='return overlib("&lt;font color=white&gt;&lt;b&gt;Численность кораблей: 145 &lt;br&gt;Бомбардировщик 45&lt;br&gt;Линейный крейсер 100&lt;br&gt;&lt;/b&gt;&lt;/font&gt;");' onmouseout='return nd();' class='phalanx_fleet'>флот</a><a href='#' title='Численность кораблей: 145 Бомбардировщик 45Линейный крейсер 100'></a> игрока Andorianin <a href='#' onclick='showMessageMenu(167658)'><img src='<?=UserSkin();?>img/m.gif' title='Написать сообщение' alt='Написать сообщение'></a> с  Frigid Moon (Луна) <a href="javascript:showGalaxy(1,260,4)" attack>[1:260:4]</a> отправлен на планету Andromeda <a href="javascript:showGalaxy(1,263,9)" attack>[1:263:9]</a>. Задание: Атаковать</span>

<br /><br /><span class='phalanx_fleet'>Боевой <a href='#' onmouseover='return overlib("&lt;font color=white&gt;&lt;b&gt;Численность кораблей: 1 &lt;br&gt;Шпионский зонд 1&lt;br&gt;&lt;/b&gt;&lt;/font&gt;");' onmouseout='return nd();' class='phalanx_fleet'>флот</a><a href='#' title='Численность кораблей: 1 Шпионский зонд 1'></a> игрока Andorianin <a href='#' onclick='showMessageMenu(167658)'><img src='<?=UserSkin();?>img/m.gif' title='Написать сообщение' alt='Написать сообщение'></a> с  Frigid Moon (Луна) <a href="javascript:showGalaxy(1,260,4)" federation>[1:260:4]</a> отправлен на планету Andromeda <a href="javascript:showGalaxy(1,263,9)" federation>[1:263:9]</a>. Задание: Совместная атака</span>
<br /><br /></th>
</tr>
<script language=javascript>anz=1;t();</script>

</table>

<!-- END CONTENT AREA -->

 </body>
</html>
<?php
ob_end_flush ();
?>