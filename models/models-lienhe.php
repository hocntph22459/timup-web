<?php 

function load_all_lienhe(){
    $sql = "select * from contact";
    $list = pdo_execute($sql);
    return $list;
}

function insert_lienhe()
{
    if (isset($_POST['btn'])) {
        $name = $_POST['name'];
        $noidung = $_POST['noidung'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO `contact`(`name`, `noidung`, `email`, `phone`) VALUES ('$name','$noidung','$email','$phone')";
        pdo_execute($sql);
    }

}