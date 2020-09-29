<?php
define('EUR_CZK_RATE', 27);
define('USD_CZK_RATE', 23);
define('GPK_CZK_Rate', 30);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



<form action="index.php" method="post">

 <p> Kolik penež <input type="text" name="penize"> </p>
 <p> Czk do Eur <input type="radio" value="czkdoeuro" name="converter"> </p>
 <p> Euro do czk <input type="radio" value="eurodoczk" name="converter"> </p>

 <input type="submit" name="submit" value="Odeslat">

</form>

</body>

</html>