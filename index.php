<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Character Generator</title>
    <style>
    body {
        background: #252526;
        color: #e5e510;
        word-wrap: break-word;
    }
</style>
</head>
<body>
<?php
// header("Content-Type: text/plain");

$random_code = [];
$chars = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
shuffle($chars);

foreach (range(0, 100) as $i) {
    $chosen_char = null;
    foreach (range(0, 9) as $key) {
        $chosen_char .=  $chars[rand(0, count($chars) - 1)];
    }
    if (!in_array($chosen_char, $random_code, true)) {
        array_push($random_code,  $chosen_char);
    }
}
// print_r(implode(',', $random_code));
foreach ($random_code as $char) {
    echo $char . '<br/>';
 }
 exit;
?>
</body>
</html>