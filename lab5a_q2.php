<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php 
        $students = [
            [
                'name' => 'Chua Kai Zen',
                'programme' => 'BIS',
                'age' => 21,
            ],
            [
                'name' => 'Quek Sze Yang',
                'programme' => 'BIT',
                'age' => 22,
            ],
            [
                'name' => 'Yong Wei Di',
                'programme' => 'BIS',
                'age' => 23,
            ],
        ]
    ?>

    <table border="">
        <tr>
            <th>Name</th>
            <th>Program</th> 
            <th>Age</th> 
        </tr>
        <?php
        foreach ($students as $student) 
        {
            echo "<tr>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['programme'] . "</td>";
            echo "<td>" . $student['age'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    

</body>
</html>
