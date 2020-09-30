<?php
$medewerkers = [
      [
        'voornaam' => 'Willem',
        'achternaam' => 'van Oranje',
        'functie'  => 'koning'
      ],
      [
        'voornaam' => 'Donald', 
        'achternaam' => 'Trump',
        'functie'  => 'president'
      ],
]; 
?>
<table>
<thead>

  <th>Voornaam</th>
  <th>Achternaam</th>
  <th>Functie</th>
    <?php
    foreach ($medewerkers as $value):
     ?>
    <tr>
     <td><?php echo $value['voornaam']; ?></td>
     <td><?php echo $value['achternaam']; ?></td>
     <td><?php echo $value['functie']; ?></td>

     <?php endforeach; ?>
    </tr>