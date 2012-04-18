<?php
$this->pageTitle=Yii::app()->name;
?>
<h1>Nyktralivet</h1>
<p>Välkommen till Nyktralivets startsida</p>
<br />
<?php
$database = Yii::app()->db;
$command = $database->createCommand("SELECT * FROM test WHERE id=1");

$data = $command->queryRow();

echo "<p>$data[text]</p>";
?>