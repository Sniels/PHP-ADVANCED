<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taak5</title>
</head>
<body>
    <?php
        $klassen = array(

            "voornaam" => "Jan",
            "achternaam" => "Janssen",
            "klas" => "9A",
            "Leeftijd" => 17,
            "Woonplaats" => "Amstelveen"
        );
        foreach ($klassen as $key => $value) {
        echo "$key => $value "."<br>";
        }
    
    ?>
    <table> 
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Klas</th>
                <th>Leeftijd</th>
                <th>Woonplaats</th>
            </tr>
        </thead>

        <tbody>
                <?php foreach ($klassen as $x){ ?>
                <td> <?php echo $x['voornaam']; ?> </td>
                <td> <?php echo $x['achternaam']; ?> </td>
                <td> <?php echo $x['klas']; ?> </td>
                <td> <?php echo $x['leeftijd']; ?> </td>
                <td> <?php echo $x['woonplaats']; ?> </td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</body>
</html>