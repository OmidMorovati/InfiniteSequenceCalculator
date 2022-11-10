<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Infinite Sequence</title>
</head>
<body>

<h2>Infinite Sequence Calculator</h2>

<form action="/" method="POST">
    Enter nth element:
    <input type="text" name="sequence">
    <input type="submit" value="Submit">
</form>

<?php if (isset($_POST['sequence'])): ?>
    <h3> <?php echo $_POST['sequence'].'th element = '. \Src\Action::digitsSequence($_POST['sequence']); ?> </h3>
<?php endif ?>

</body>
</html>
