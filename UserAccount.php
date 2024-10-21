<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Table</title>
</head>

<body>
    <h1>User Account Table</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>LastName</th>
            <th>FirstName</th>
            <th>UserName</th>
            <th>Password</th>
        </tr>
        <?php

        require('vendor/autoload.php');
        $faker = Faker\Factory::create();

        $id = array();
        for ($i = 0; $i < 101; $i++) {
            array_push($id,$i);
        }
        

        for ($i = 0; $i < 101; $i++) {

            echo "<tr>
            <td>$id[$i]</td>
            <td>$faker->email</td>
            <td>$faker->lastName</td>
            <td>$faker->firstName</td>
            <td>$faker->userName</td>
            <td>$faker->password</td>
        </tr>";
        
        }

        ?>

    </table>
</body>

</html>