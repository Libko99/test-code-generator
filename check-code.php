<?php
require 'generate-codes-oop.php'; // pridanie generate-codes pre funkcnost

// osetrenie generovania kodov iba ak neexistuje subor - overenie existencie suboru
if (is_file('codes.txt')){ 
    if (!empty($_GET['code'])) {
        echo 'Checking code ' . $_GET['code'] . '<br>';
        $codes = file_get_contents('codes.txt');
        $codes = json_decode($codes, TRUE);
        if (!empty($codes[$_GET['code']])) {
            echo 'FOUND!!!';

            unset($codes[$_GET['code']]); // osetrenie opakovania kodu - odstranenie zo zoznamu
            file_put_contents("codes.txt", json_encode($codes));
            // var_dump($codes); // pomocny vypis pre overenie funkcnosti   
        } else {
            echo 'NOT FOUND :(';
            // var_dump($codes); // pomocny vypis pre overenie funkcnosti  
        }
    }
}
// osetrenie generovania kodov iba ak neexistuje subor
else{
    $gen_code = new GenerateCode();
    $gen_code->generateRandomCodes(3);
    echo 'File doesn`t exist!<br>New file was created..<br> Chceck your CODE again!';
}

echo '<html>
<body>

<form action="check-code.php" method="get">
Code: <input type="text" name="code"><br>
<input type="submit">
</form>

</body>
</html>'
;