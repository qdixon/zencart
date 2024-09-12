<?php
$oldname = 'PHPMailer.php';
$newname = 'CERT_PHPMailer.php';
if (rename($oldname, $newname )) {
    echo "OK";
} else {
    echo "FAILED.";
}
?>
<?php
$oldname = 'PHPMailer-disabled.php';
$newname = 'PHPMailer.php';
if (rename($oldname, $newname )) {
    echo "OK";
} else {
    echo "FAILED.";
}
?>