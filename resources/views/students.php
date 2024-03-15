<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <h1>List of students</h1>
    <ul>
        <?php foreach ($students as $student) : ?>
        <li><?php echo $student->name ?> in class <?php echo $student->class ?> is <?php echo $student->age ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>