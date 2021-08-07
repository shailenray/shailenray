<?php
    if(isset($_POST['submit_data'])){
        $name = $_POST['std_name'];
        $dept = $_POST['dept'];
        $ins_name = $_POST['ins_name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $blood = $_POST['blood'];

        $img_name = $_FILES['upload_img']['name'];
        $tmp_name = $_FILES['upload_img'] ['tmp_name'];
        move_uploaded_file($tmp_name, "upload/".$img_name);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Student ID Card Using PHP</title>
    <link rel="stylesheet" href="idcard_style.css">
</head>
<body>

    <div class="idcard">

        <div class="idbody">
            <table>
                <tr>
                    <div class="photopreview">
                        <td colspan="2""><img class="image_show" src="upload/<?php if(isset($img_name)){echo $img_name;} ?>"></td>
                    </div>
                </tr>
                <tr><td>Student Name</td>
                    <td><?php if(isset($_POST['std_name'])){echo $name;}?></td>
                </tr>
                <tr><td>Department</td>
                    <td><?php if(isset($_POST['dept'])){echo $dept;}?></td>
                </tr>
                <tr><td>Institute Name</td>
                    <td><?php if(isset($_POST['ins_name'])){echo $ins_name;}?></td>
                </tr>
                <tr><td>Address</td>
                    <td><?php if(isset($_POST['address'])){echo $address;}?></td>
                </tr>
                <tr><td>Contact Number</td>
                    <td><?php if(isset($_POST['contact'])){echo $contact;}?></td>
                </tr>
                <tr><td>Blood Group</td>
                    <td><?php if(isset($_POST['blood'])){echo $blood;}?></td>
                </tr>
                
                

            </table>

        </div>



    </div>
    


</body>
</html>

