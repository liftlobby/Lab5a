<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Chua Kai Zen";
        $matricNo = "AI220259";
        $course = "BIS";
        $yearOfStudy = 3;
        $address = "No. 1, Jalan 2, Taman Aman, 43000 Kajang, Selangor";
    ?>

    <table border="">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric No</td>
            <td><?php echo "$matricNo"; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo "$yearOfStudy"; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
