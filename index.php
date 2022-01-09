<!DOCTYPE html>
<html>

<head>
    <title>Hasan Osman Reverse MD5 Hash</title>
</head>

<body>
    <h1>MD5 cracker</h1>
    <p>This application takes an MD5 hash of a four digit pin and
        check all 10,000 possible four digit PINs to determine the PIN.</p>
    <pre>
Debug Output:

<?php
$goodtext = "Not found";
if (isset($_GET['md5'])) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];
    $show = 15;

    for ($i = 0; $i < 100; $i++) {
        $ch1 = $i;
        if ($ch1 < 10) {
            $ch1 = "0" . $ch1;
        }
        for ($j = 0; $j < 100; $j++) {
            $ch2 = $j;
            if ($ch2 < 10) {
                $ch2 = "0" . $ch2;
            }
            $try = $ch1 . $ch2;
            $check = hash('md5', $try);
            if ($check == $md5) {
                $goodtext = $try;
                break;
            }
            if ($show > 0) {
                echo "$check $try \n";
                $show = $show - 1;
            }
        }
    }
    $time_post = microtime(true);
    print("\nElapsed Time:");
    print($time_post - $time_pre);
    echo "\n";
}


?>
     </pre>

    <!-- Use the very short syntax and call htmlentities() -->
    <p>Pin: <?= htmlentities($goodtext); ?></p>
    <form method="GET">
        <input type="text" name="md5" size="40" />
        <input type="submit" value="Crack MD5" />
    </form>
    <ul>
        <li><a href="index.php">Reset</a></li>

    </ul>

<p><a href='*'>Source code</a></p>
</body>

</html>

