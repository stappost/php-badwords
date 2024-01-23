<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="dashboard.php" method="GET">
                    <div class="row">
                        <div class="col-6 my-2">
                            <label for="text" >Testo</label>
                            <textarea name="text" id="text" cols="30" rows="10" placeholder="inserire il testo da censurare" class="form-control"></textarea>

                        </div>
                        <div class="col-6 my-2">
                            <label for="word">Parola da censurare</label>
                            <input type="text" placeholder="inserire la parola da censurare" name="word" class="form-control">

                        </div>
                        <div class="col-12">

                            <button type="submit" class="btn btn-sm btn-success">Invia</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>