<?php
$oldname = 'PHPMailer.php';
$newname = 'PHPMailer-disabled.php';
if (rename($oldname, $newname )) {
    echo "OK";
} else {
    echo "FAILED.";
}
?>
<?php
$oldname = 'CERT_PHPMailer.php';
$newname = 'PHPMailer.php';
if (rename($oldname, $newname )) {
    echo "OK";
} else {
    echo "FAILED.";
}
?>