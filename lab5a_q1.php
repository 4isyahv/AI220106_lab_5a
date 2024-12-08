<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    // Define variables with your details
    $name = "Aisyah binti Abu Bakar";
    $matricNumber = "AI220106";
    $course = "Bachelor of Computer Science";
    $yearOfStudy = "3rd Year";
    $address = "No.18, Jalan Merak 3, Taman Sri Jeram 2, Bakri, 84000, Muar, Johor.";
    ?>
    <table border="1">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>