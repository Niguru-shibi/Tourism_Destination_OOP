<?php 
/*
require("connect_db.php");
$date = date('Y-m-d h:i:s'); //initiate date
//Client Message
if (isset($_POST['send_message_btn'])) {
    $client_name = $_POST['client_name'];
    $client_email = $_POST['client_email'];
    $client_contact = $_POST['client_contact'];
    $client_message = $_POST['client_message'];

    $sql = "INSERT INTO client_tb
                        (client_name,
                        client_email,
                        client_contact,
                        client_message)
                    VALUES
                        (' $client_name',
                        '$client_email',
                        '$client_contact',
                        '$client_message')";

    $query = mysqli_query($conn, $sql);

    //check if query is a success
    if ($query == true) {
        $msg = "<label style=''color:green !important;> Message succesfully sent!</label>";
        header("Location: ../views/contact_page.php?msg=" . ($msg));
    } else {
        $msg =  "<label style=''color:red  !important;> Error. Please try again.</label>";
        header("Location: ../views/contact_page.php?msg=" . ($msg));
    }
}

//Admin Login
if (isset($_POST['login_btn'])) {
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];


    //Inpu  t Protection
    $admin_username = mysqli_real_escape_string($conn, $admin_username);

    //GET Data from database
    $sql = "SELECT admin_password FROM admin_tb WHERE admin_username = '$admin_username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['admin_password'];


        //Verify entered password
        if (password_verify($admin_password, $hashed_password)) {
            $msg = "<lable style='color:green'>Login Successfully!</lable>";
            header("Location: dashboard.php?msg=" . ($msg));
        } else {
            $msg = "<lable style='color:red'>Invalid Password!</lable>";
            header("Location: ../views/index.php?msg=" . ($msg));
        }
    } else {
        $msg = "<lable style='color:red'>Username not found!</lable>";
        header("Location: ../views/index.php?msg=" . ($msg));
    }
}

//Update Album Featured Destination
if (isset($_POST['albumBtn'])) {
    $img = $_POST['img'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $view = $_POST['view'];
    $id = $_POST['id'];

    $imgsql = "";
    $imgLink = "0";

    if (!empty($img)) {
        $imgLink = 1;
        $imgsql = ",alb_img = '$img'";
    }

     $sql = "UPDATE  `album_tb`
                       SET  `alb_img`='$img',
                            `alb_title`='$title',
                            `alb_subtitle`='$subtitle',
                            `alb_description`='$description',
                            `alb_view`='$view',
                            `album_date`='$date'
                            " . $imgsql . "
                    WHERE `alb_id`='$id'
                    ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: ../views/admin_home.php?page=admin_home');
    }
}

//Update Feature Destination
if (isset($_POST['featureBtn'])) {
    $img = $_POST['img'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    $imgsql = "";
    $imgLink = "0";

    if (!empty($img)) {
        $imgLink = 1;
        $imgsql = ",ft_img = '$img'";
    }

     $sql = "UPDATE  `feature_tb`
                       SET  `ft_img`='$img',
                            `ft_title`='$title',
                            `ft_subtitle`='$subtitle',
                            `ft_description`='$description',
                            `ft_date`='$date'
                            " . $imgsql . "
                    WHERE `ft_id`='$id'
                    ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: ../views/admin_home.php?page=admin_home');
    }
}

//Update Footer
if (isset($_POST['ftrBtn'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $desc = $_POST['desc'];
    $changeImageLink = $_POST['changeImageLink'];

    $imgLinkLoc = 0;
    $imgLinkOnl = 0;
    $imgLink = 0;
    $set_img = "";

    $changeImage = $_FILES['changeImage']['name'];

    if (!empty($changeImage)){
        $imgLinkLoc = 1;
        $set_img = ", ftr_img ='".$changeImage."', ftr_imgLink = '0'";
    }

    if (!empty($changeImageLink)){
        $term = substr($changeImageLink, 0, 8);

            if ($term == "https://"){
                $imgLinkOnl = 1;
                $set_img = ", ftr_img = '".$changeImageLink."', ftr_imgLink = '".$imgLinkOnl."'";
            }else{
                echo "<script>alert('Invalid online image link!\\r\\nOnline image link should start with https:// only.');</script>";
                echo "<script>window.history.back(-1);</script>";
                die();
            }
    }
    if ($imgLinkLoc == 1 && $imgLinkOnl == 0){
        $target_dir = "../images/";
        $filename = $_FILES['changeImage']['name'];
        $target_file = $target_dir.basename($filename);

        $allowed_ext = ['jpeg', 'jpg', 'png', 'webp', 'avif'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (in_array($ext, $allowed_ext)){
            if(move_uploaded_file($_FILES['changeImage']['tmp_name'], $target_file)){
                echo "uploading image successfully";
            }else{
                echo "error uploading image";
            }
        }else{
            echo "<script>alert('Invalid file updloaded.\\r\\nFile is not an image');</script>";
            echo "<script>window.history.back(-1);</script>";
            die();
        }
    }

    $sql = "UPDATE footer_tb
            SET ftr_name = '$name',
                ftr_position = '$position',
                ftr_desc = '$desc'
                ".$set_img."
            WHERE ftr_id = '$id'
            ";
    $query = mysqli_query($conn, $sql);

    if ($query){
        header('location: admin_footer.php?page=footer');
    }
}

//Update Services Feature
if (isset($_POST['serveBtn'])) {
    $serve = $_POST['serve'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    $id = $_POST['id'];

     $sql = "UPDATE `services_tb`
                      SET   `serv_serve`='$serve',
                            `serv_price`='$price',
                            `serv_detail`='$detail',
                            `serv_date`='$date'
                    WHERE `serv_id`='$id'
                    ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: ../views/admin_services.php?page=admin_services');
    }
}
