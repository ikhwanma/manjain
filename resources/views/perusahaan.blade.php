<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perusahaan') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylePerusahaan.css">
</head>
<body>
<div class="grid" style="margin-left: 57rem;">
    
    <div class="grid-item">
        <div class="card">
            <img class="card-img" src="img/logo.png" alt="" >
            <div class="card-content">
                <h1 class="card-title">{{$perusahaan['perusahaan']}}</h1>
                <h3>{{$perusahaan['pemilik']}}</h3>
                <h3>{{$perusahaan['deskripsi']}}</h3>
                <form action="{{Route('buatLowonganPerusahaan', $perusahaan) }}" class="card-button">
                <input class="card-button-text" type="submit" value="Buat Lowongan">
                </form>
                <form action="{{'editPerusahaan'}}" class="card-button">
                    <input class="card-button-text" type="submit" value="Edit Perusahaan">
                </form>
            </div>
        </div>
    </div> 
</div>
    
</body>
</html>
</x-app-layout>