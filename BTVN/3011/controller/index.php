<?php
global $db;

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action = "";
}
switch ($action) {
    case 'add':
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $gia = $_POST['gia'];
            $soLuong = $_POST['soLuong'];
            if (empty($name) || empty($soLuong) || empty($gia)) {
                $error = "Not null";
            }else{
                $this->db->execute('INSERT INTO products (name, gia, SoLuong) VALUES (:name, :gia, :soLuong)');
                header("Location:index.php?controller=products");
            }
        }

        require_once './views/add.php';
        break;

        case 'edit':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                foreach ($db-> getData("SELECT * FROM student WHERE id = '$id'") as $row) {
                    $name = isset($row['name'])?$row['name']:'';
                    $gia = isset($row['gia'])?$row['gia']:'';
                    $soLuong = isset($row['soLuong'])?$row['soLuong']:'';
                }
            }
            //uppdate

            if (isset($_POST['submit'])) {
                $name_new = $_POST['name'];
                $gia_new = $_POST['gia'];
                $soLuong_new = $_POST['soLuong'];
                if (empty($name) || empty($soLuong) || empty($gia)) {
                    $error = "Not null";
                }else{
                    $db ->action("UPDATE products Set name='$name_new', gia='$gia_new', soLuong='$soLuong' WHERE id = '$id'");
                    header("Location:index.php?controller=products");
                }
            }
            require_once './views/edit.php';
            break;

            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $db ->action("DELETE FROM student WHERE id = '$id'");
                    header("Location:index.php?controller=products");
                }
                break;

                default:
                    $data =$db->getData('select * from products');
                    require_once './views/index.php';
                    break;
}