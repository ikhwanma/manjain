<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>{{$perusahaan['perusahaan']}}</h1>
    <h2>Pemilik: {{$perusahaan['pemilik']}}</h2>
    <h3>{{$perusahaan['deskripsi']}}</h3>
    <form action="{{'buatLowongan'}}" class="card-button">
        <input class="card-button-text" type="submit" value="Buat Lowongan">
    </form>
</body>
</html>
