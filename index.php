<?php

include "data.php";
include "utility.php";


$parsed_data = getFormatedData($data);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Test</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="#">
            <h1>Student Info</h1>
        </a>
    </nav>

    <div class="container">

        <table>
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Marks</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($parsed_data as $row) : ?>
                    <tr>
                        <td><?php echo $row["student_id"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["class"] ?></td>
                        <td><?php echo $row["marks"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</body>

</html>