<?php
// impostare la lunghezza della password
if(isset($_GET['passLenght'])){
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <section class="container col-5">
        <h3 class="text-center">Strong Password Generator</h3>
        <h4 class="text-center">Genera una Password Sicura</h4>
        <div class="py-4">Genera una password di lunghezza compressa fra 8 e 32</div>

        <form action="landPage.php" method="GET">

            <!-- Input lenght  password -->
            <div class="d-flex justify-content-between pb-3">
                <label  class="form-label">Lunghezza Password</label>
                <input type="number" id="passLenght" name="passLenght">
            </div>


            <div class="d-flex justify-content-between">
                <div>Consenti ripetizioni di uno o piu caratteri</div>
                <div class="d-flex flex-column g-3">
                    <!-- check-radio SI -->
                    <div>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Si">
                        <label class="form-check-label" for="flexRadioDefault1">Si</label>
                    </div>
                    <!-- check-radio NO -->
                    <div>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="No" checked>
                        <label class="form-check-label" for="flexRadioDefault2">No</label>
                    </div>
                    <!-- checkbox Lettere -->
                    <div>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label">
                            Lettere
                        </label>
                    </div>

                    <!-- checkbox  Numeri -->
                    <div>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label">
                            Numeri
                        </label>
                    </div>

                    <!-- checkbox  Simboli -->
                    <div>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label">
                            Simboli
                        </label>
                    </div>
                </div>
            </div>

            <!-- bottone submit  -->
            <button type="submit" class="btn btn-primary">Invia</button>
            <!-- bottone reset -->
            <button type="reset" class="btn btn-primary">Anulla</button>

        </form>
    </Section>
</body>

</html>