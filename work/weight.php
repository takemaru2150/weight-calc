<h3>入力頂いた体重</h3>
<?php
$weight_now = $_POST['input_data_now'];
$weight_goal = $_POST['input_data_goal'];

echo '<h3>現在： '.$weight_now.'kg</h3>';
echo '<h3 style="color:red">目標： '.$weight_goal.'kg</h3>';

$weight_plus_minus = $weight_now - $weight_goal;
echo '<hr><h3>目標体重との差：'.abs($weight_plus_minus).' kg</h3>';
?>