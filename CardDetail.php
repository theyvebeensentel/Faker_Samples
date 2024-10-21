<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Detail Table</title>
</head>

<body>
    <h1>Card Detail Table</h1>
    <table>
        <tr>
            <th>CCID</th>
            <th>CreditCardType</th>
            <th>CreditCardNumber</th>
            <th>CreditCardExpirationDate</th>
            <th>UserIdNumber</th>
        </tr>
        <?php
        require_once 'vendor/autoload.php';
        $faker = Faker\Factory::create();

        
        for ($i = 0; $i < 21; $i++) {
            $card = $faker->creditCardDetails();
            echo "<tr>
            <td>". $faker->randomNumber(5, true)."</td>
            <td>". $card["type"]."</td>
            <td>".$card["number"]."</td>
            <td>".$card["expirationDate"]."</td>
            <td>$i</td>
            </tr>";
        }

    ?>

    </table>
</body>

</html>