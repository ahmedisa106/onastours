<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
</head>
<body>
<h1 style="text-align: center"><?php echo e($data['name']); ?> has booked a trip</h1>
<p>mobile : <?php echo e($data['mobile']); ?></p>
<p>abbreviation : <?php echo e($data['abbreviation']); ?></p>
<p> adults number : <?php echo e($data['adults_number']); ?></p>
<p> kids number : <?php echo e($data['kids_number']); ?></p>
<p>arrival date : <?php echo e($data['arrival_date']); ?></p>
<p>departure date : <?php echo e($data['departure_date']); ?></p>


<?php if(isset($data['notes'])): ?>
    <textarea> notes : <?php echo e($data['notes']); ?></textarea>
<?php endif; ?>


</body>
</html>
