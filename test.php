<?php 
$contents = file_get_contents('http://uinames.com/api/?ext&amount=25'); 
$contents = utf8_encode($contents); 
$results = json_decode($contents); 
$d1 = [];
$d2 = [];
$d3 = [];
$d4 = [];
$d5 = [];
$d6 = [];
$d7 = [];
foreach ($results as $key => $value) { 
	$day = DateTime::createFromFormat("m/d/Y", $value->birthday->mdy)->format('l');
	if ($day=='Sunday') {
		array_push($d1, $value);
	}else if ($day=='Monday') {
		array_push($d2, $value);
	}else if ($day=='Tuesday') {
		array_push($d3, $value);
	}else if ($day=='Wednesday') {
		array_push($d4, $value);
	}else if ($day=='Thursday') {
		array_push($d5, $value);
	}else if ($day=='Friday') {
		array_push($d6, $value);
	}else if ($day=='Saturday') {
		array_push($d7, $value);
	}  
}
// foreach ($d3 as $key => $value) { 
// 	echo "<p>".$value->name."</p>";
// }
?>
<div style="width: 100%">
	<div style="display: inline-block; vertical-align: top;max-width: 14%;">
		<h3 style="text-align: center;">Sunday</h3>
	<?php 
	foreach ($d1 as $key => $value) { 
	?>
		<div style="width: 100%;margin: 10px;background: #c6c6c6">
			<p style="margin: 0px;"> name :<?php echo $value->title.' '. $value->name.' '.$value->surname ; ?></p>
			<p style="margin: 0px;"> gender :<?php echo $value->gender ; ?></p>
			<p style="margin: 0px;"> region :<?php echo $value->region ; ?></p>
			<p style="margin: 0px;"> age :<?php echo $value->age ; ?></p>
			<p style="margin: 0px;"> phone :<?php echo $value->phone ; ?></p>
			<p style="margin: 0px;"> birthday :<?php echo $value->birthday->dmy ; ?></p>
		</div>
	<?php
	}
	?>
	</div>
	<div style="display: inline-block; vertical-align: top;max-width: 14%;">
		<h3 style="text-align: center;">Monday</h3>
	<?php 
	foreach ($d2 as $key => $value) { 
	?>
		<div style="width: 100%;margin: 10px;background: #c6c6c6">
			<p style="margin: 0px;"> name :<?php echo $value->title.' '. $value->name.' '.$value->surname ; ?></p>
			<p style="margin: 0px;"> gender :<?php echo $value->gender ; ?></p>
			<p style="margin: 0px;"> region :<?php echo $value->region ; ?></p>
			<p style="margin: 0px;"> age :<?php echo $value->age ; ?></p>
			<p style="margin: 0px;"> phone :<?php echo $value->phone ; ?></p>
			<p style="margin: 0px;"> birthday :<?php echo $value->birthday->dmy ; ?></p>
		</div>
	<?php
	}
	?>
	</div>
	<div style="display: inline-block; vertical-align: top;max-width: 14%;">
		<h3 style="text-align: center;">Tuesday</h3>
	<?php 
	foreach ($d3 as $key => $value) { 
	?>
		<div style="width: 100%;margin: 10px;background: #c6c6c6">
			<p style="margin: 0px;"> name :<?php echo $value->title.' '. $value->name.' '.$value->surname ; ?></p>
			<p style="margin: 0px;"> gender :<?php echo $value->gender ; ?></p>
			<p style="margin: 0px;"> region :<?php echo $value->region ; ?></p>
			<p style="margin: 0px;"> age :<?php echo $value->age ; ?></p>
			<p style="margin: 0px;"> phone :<?php echo $value->phone ; ?></p>
			<p style="margin: 0px;"> birthday :<?php echo $value->birthday->dmy ; ?></p>
		</div>
	<?php
	}
	?>
	</div>
	<div style="display: inline-block; vertical-align: top;max-width: 14%;">
		<h3 style="text-align: center;">Wednesday</h3>
	<?php 
	foreach ($d4 as $key => $value) { 
	?>
		<div style="width: 100%;margin: 10px;background: #c6c6c6">
			<p style="margin: 0px;"> name :<?php echo $value->title.' '. $value->name.' '.$value->surname ; ?></p>
			<p style="margin: 0px;"> gender :<?php echo $value->gender ; ?></p>
			<p style="margin: 0px;"> region :<?php echo $value->region ; ?></p>
			<p style="margin: 0px;"> age :<?php echo $value->age ; ?></p>
			<p style="margin: 0px;"> phone :<?php echo $value->phone ; ?></p>
			<p style="margin: 0px;"> birthday :<?php echo $value->birthday->dmy ; ?></p>
		</div>
	<?php
	}
	?>
	</div>
	<div style="display: inline-block; vertical-align: top;max-width: 14%;">
		<h3 style="text-align: center;">Thursday</h3>
	<?php 
	foreach ($d5 as $key => $value) { 
	?>
		<div style="width: 100%;margin: 10px;background: #c6c6c6">
			<p style="margin: 0px;"> name :<?php echo $value->title.' '. $value->name.' '.$value->surname ; ?></p>
			<p style="margin: 0px;"> gender :<?php echo $value->gender ; ?></p>
			<p style="margin: 0px;"> region :<?php echo $value->region ; ?></p>
			<p style="margin: 0px;"> age :<?php echo $value->age ; ?></p>
			<p style="margin: 0px;"> phone :<?php echo $value->phone ; ?></p>
			<p style="margin: 0px;"> birthday :<?php echo $value->birthday->dmy ; ?></p>
		</div>
	<?php
	}
	?>
	</div>
	<div style="display: inline-block; vertical-align: top;max-width: 14%;">
		<h3 style="text-align: center;">Friday</h3>
	<?php 
	foreach ($d6 as $key => $value) { 
	?>
		<div style="width: 100%;margin: 10px;background: #c6c6c6">
			<p style="margin: 0px;"> name :<?php echo $value->title.' '. $value->name.' '.$value->surname ; ?></p>
			<p style="margin: 0px;"> gender :<?php echo $value->gender ; ?></p>
			<p style="margin: 0px;"> region :<?php echo $value->region ; ?></p>
			<p style="margin: 0px;"> age :<?php echo $value->age ; ?></p>
			<p style="margin: 0px;"> phone :<?php echo $value->phone ; ?></p>
			<p style="margin: 0px;"> birthday :<?php echo $value->birthday->dmy ; ?></p>
		</div>
	<?php
	}
	?>
	</div>
	<div style="display: inline-block; vertical-align: top;max-width: 14%;">
		<h3 style="text-align: center;">Saturday</h3>
	<?php 
	foreach ($d7 as $key => $value) { 
	?>
		<div style="width: 100%;margin: 10px;background: #c6c6c6">
			<p style="margin: 0px;"> name :<?php echo $value->title.' '. $value->name.' '.$value->surname ; ?></p>
			<p style="margin: 0px;"> gender :<?php echo $value->gender ; ?></p>
			<p style="margin: 0px;"> region :<?php echo $value->region ; ?></p>
			<p style="margin: 0px;"> age :<?php echo $value->age ; ?></p>
			<p style="margin: 0px;"> phone :<?php echo $value->phone ; ?></p>
			<p style="margin: 0px;"> birthday :<?php echo $value->birthday->dmy ; ?></p>
		</div>
	<?php
	}
	?>
	</div>
</div>