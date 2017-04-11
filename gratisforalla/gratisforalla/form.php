<html>

<head>
    <meta charset="utf-8">
    <title>Formulär</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header">
        <p class="form_title">Fyll i formuläret för att ansöka</p>
        <p class="form_text">Kom ihåg att fylla i allt utom de som det står är frivilligt</p>
        <a href="index.php"><button type="button" class="btn btn-secondary" id="tillbaka">Tillbaka</button></a>
    </div>
    <div class="formular">
        <div class="form-group">
            <label for="formGroupExampleInput">Organisation/Företag :</label>
            <input name="firstname" type="text" class="form-control" id="formGroupExampleInput" placeholder="Organisation AB">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Vad gör ni :</label>
            <textarea class="form-control" rows="3" placeholder="Beskrivning"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail :</label>
            <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exempel@gmail.com">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telefonnummer :</label>
            <input name="mail" type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefonnummer">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Beskrivning av önskad hemsida :</label>
            <textarea class="form-control" rows="6" placeholder="Beskrivning"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Design(frivillig)</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Om en önskad design finns ladda upp här.</p>
            <button type="button" class="btn <btn-success></btn-success>">Submit</button>
        </div>
    </div>
    <?php
   include("include/footer.php");
    ?>
        </div>
</body>

</html>
