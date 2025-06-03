<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "MUHAMMAD IZZAT EMIR BIN ZAINAL ABIDIN";
        $matricNumber = "CI230106";
        $course = "BANCHELOR OF COMPUTER SCINCE";
        $yearOfStudy = "2";
        $address = "TAMAN WAJA";
    ?>

    <table border="1" cellpadding="1" >
        <tr>
            <td>Name: </td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>MATRIC NUMBER: </td>
            <td><?php echo "$matricNumber"; ?></td> 
        </tr>
        <tr>
            <td>COURSE: </td>
            <td><?php echo " $course"; ?></td> 
        </tr>
        <tr>
            <td>YEAR OF STUDY: </td>
            <td><?php echo " $yearOfStudy"; ?></td> 
        </tr>
        <tr>
            <td>ADDRESS: </td>
            <td><?php echo "$address"; ?></td> 
        </tr>
            
    </table>
    
</body>
</html>
