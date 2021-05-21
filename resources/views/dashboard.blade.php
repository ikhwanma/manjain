<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   
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
@foreach($data as $item)
    <div class="listPerusahaan" style="margin-left: 400px;" style="border: 200px black;">
        <img src="img/logo.png" alt="" id="logoPerusahaan">
        <table>
        <tr>
            <td>Nama Perusahaan</td>
            <td>: {{$item['perusahaan']}}</td>
        </tr>
        <tr>
            <td>Nama Pemilik</td>
            <td>: {{$item['pemilik']}}</td>
        </tr>

        </table>
        
    </div>
        
    @endforeach
</body>
</html>
    
    
    
    </x-app-layout>
