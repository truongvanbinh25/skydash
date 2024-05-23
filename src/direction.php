<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
echo $_SESSION['role'];
if ($_SESSION['role'] == 'GiaoVien') {
    header("Location: \skydash\src\GiaoVien\dashboardGV.php");
    exit();
} else if ($_SESSION['role'] == 'SinhVien') {
    header("Location: \skydash\src\SinhVien\dashboardSV.php");
    exit();
} else if ($_SESSION['role'] == 'admin') {
    header("Location: \skydash\src\Admin\dashboardAdmin.php");
    exit();
}
 else {
    echo "Invalid role!";
    exit();
}
?>