<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <form action="" method="post">
        <label for="selector">Tria un color: </label>
        <select name="elementos" id="selector">
            <option value="tierra" <?php if(isset($_POST['elementos']) && $_POST['elementos']=="tierra") echo "selected"; ?>>Tierra</option>
            <option value="agua" <?php if(isset($_POST['elementos']) && $_POST['elementos']=="agua") echo "selected"; ?>>Agua</option>
            <option value="fuego" <?php if(isset($_POST['elementos']) && $_POST['elementos']=="fuego") echo "selected"; ?>>Fuego</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

	<?php 
	if (isset($_POST['elementos'])) {
		echo htmlspecialchars($_POST['elementos']);
	}




 	?>
	
</body>
</html>