<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

<style>

    h1{

        text-align: center;

    }

</style>

    <?php 
    
        $testoOriginale = "Io sono il testo originale senza censura.";

        $word = $_GET["word"];

        $testoCensurato = str_replace($word , "***", $testoOriginale);

    ?>

    <h1>PHP Badwords</h1>

    <h2>Testo originale: 
        
        <p>

            <?php echo $testoOriginale; ?> 

        </p> 

    </h2>

    <h2>Testo censurato:

        <p>

            <?php echo $testoCensurato; ?> 

        </p> 

    </h2>

</body>
</html>