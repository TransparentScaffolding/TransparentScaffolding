<?PHP
include('../secure_passwords.php');
$db = new mysqli($db_ip,$db_username,$db_password,$db_dbname);

// check connection
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
?>
