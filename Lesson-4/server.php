<?php

header('Access-Control-Allow-Origin: *');

$connect = mysqli_connect('localhost', 'root', 'root_MANUVA1', 'gb');

@$countView = (int)$_POST['count_add'];  
@$startIndex = (int)$_POST['count_show'];

$result = mysqli_query($connect, "SELECT * FROM product ORDER BY id LIMIT $startIndex, $countView");

$arr = [];
while($row = mysqli_fetch_assoc($result)) {
    $arr[] = $row;
}

if(empty($arr)) {
    echo json_encode(array('result' => 'finish'));
} else {
    $html = "";
    foreach($arr as $oneElement) {
        $html .= "
        <div> 
        <b>{$oneElement['title']}</b> 
        <p>{$oneElement['description']}</p> 
        </div>";
    }
    echo json_encode(array ('result' => 'success', 'html' => $html));
}


?>