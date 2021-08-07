<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Student ID Card Using PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="class_6_std_id_2nd.php" method="post" enctype="multipart/form-data">
        <table class="form_tab">
            <tr><td class="std_data">Student Name</td>
                <td><input class="inp_box1" type="text" name="std_name" placeholder="Full name" required></td>
            </tr>
            <tr>
                <td class="std_data">Department</td>
                <td><input class="inp_box2" type="text" name="dept" placeholder="Department" required></td>
            </tr>
            <tr>
                <td class="std_data">Institute Name</td>
                <td><input class="inp_box3" type="text" name="ins_name" placeholder="Institute name" required></td>
            </tr>
            <tr>
                <td class="std_data">Address</td>
                <td><input class="inp_box4" type="text" name="address" placeholder="Village, Thana, District" required></td>
            </tr>
            <tr>
                <td class="std_data">Contact Number</td>
                <td><input class="inp_box5" type="number" name="contact" placeholder="Mobile name" required></td>
            </tr>
            <tr>
                <td class="std_data">Blood Group</td>
                <td><input class="inp_box6" type="text" name="blood" placeholder="Blood group" required></td>
            </tr>
            <tr>
                <td class="std_data">Photograph</td>
                <td><input type="file" name="upload_img" class="photo" value="Photo" required></td>
            </tr>

            <tr>
                <td colspan="2" align="right"><input class="btn" type="reset" value="Reset Data">
                    <input class="btn" type="submit" name="submit_data" value="Submit Data"></td>
            </tr>
            
        </table>
    </form>


</body>
</html>