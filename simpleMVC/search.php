<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>
<body>
<h1>Search Results for "<?php echo $name; ?>"</h1>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Occupation</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php $person = $_GET['person']; ?>
        <td><?php echo $person->getName(); ?></td>
        <td><?php echo $person->getAge(); ?></td>
        <td><?php echo $person->getOccupation(); ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>

