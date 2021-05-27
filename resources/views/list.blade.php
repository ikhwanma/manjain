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
<div class="grid">
    @foreach($list as $item)
    <div class="grid-item">
        <div class="card">
            <img class="card-img" src="img/logo.png" alt="" >
            <div class="card-content">
                <h1 class="card-title">{{$item->judul}}</h1>
                <form action="#" class="card-button">
                    <input class="card-button-text" type="submit" value="Lihat Detail">
                </form>
                <form action="#" class="card-button">
                    <input class="card-button-text" type="submit" value="Edit Perusahaan">
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

</body>
</html>