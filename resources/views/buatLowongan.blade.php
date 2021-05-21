<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Lowongan') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html>
<head>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<h1>Buat Lowongan</h1>
<form action="{{ url('/dashboard') }}">
Judul Lowongan : &nbsp <input type="text" name="judul"  ><br>
Kategori Pekerjaan: <input type="text" name="kategori"><br>
Lokasi : <input type="text" name="lokasi"><br>
Gaji: <input type="text" name="gaji"><br>
Tipe Jadwal Kerja: <input type="text" name="tipe"><br>
Deskripsi: <input type="text" name="deskripsi"><br>
Cara Melamar: <input type="text" name="cara"><br>

<input type="submit" name="button" class="inputp" value="Submit">
</form>

</body>
</html>
</x-app-layout>