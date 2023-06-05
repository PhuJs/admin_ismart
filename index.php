<?php
require "./layouts/header.php";
?>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "pages/" . $page . ".php";
if (file_exists($path)) {
    require $path;
} else {
    echo "Lỗi 404";
}
?>


<?php
require "./layouts/footer.php";
?>