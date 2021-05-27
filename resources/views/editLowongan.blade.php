
<!DOCTYPE html>
<html>
<head>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

<h1 style="text-align: center;">Edit Lowongan</h1>
<form action="{{ url('/dashboard') }}">
    Judul Lowongan :  <input type="text" name="judul" placeholder="Masukkan Judul" value="{{old('judul')}}">
    <span style="color: red;">@error('judul'){{$message}} @enderror</span><br>
    Kategori Pekerjaan : <input type="text" name="kategori" placeholder="Masukkan Kategori" value="{{old('kategori')}}">
    <span style="color: red;">@error('kategori'){{$message}} @enderror</span><br>
    Alamat Kantor : <input type="text" name="alamat" placeholder="Masukkan Alamat Kantor" value="{{old('alamat')}}">
    <span style="color: red;">@error('alamat'){{$message}} @enderror</span><br>
    Gaji : <input type="text" name="gaji" placeholder="Masukkan Gaji" value="{{old('gaji')}}"> 
    <span style="color: red;">@error('gaji'){{$message}} @enderror</span><br>
    Jadwal Kerja : <input type="text" name="jadwal" placeholder="Masukkan jadwal" value="{{old('jadwal')}}"> 
    <span style="color: red;">@error('jadwal'){{$message}} @enderror</span><br>
    Deskripsi Perusahaan : <textarea name="deskripsi"  cols="30" rows="6" placeholder="Masukkan Deskripsi Perusahaan" value="{{old('deskrpsi')}}"></textarea>
    <span style="color: red;">@error('deskripsi'){{$message}} @enderror</span><br>
    Cara Melamar: <textarea name="cara"  cols="30" rows="6" placeholder="Masukkan Cara Melamar" value="{{old('deskrpsi')}}"></textarea><br>
    <span style="color: red;">@error('cara'){{$message}} @enderror</span><br>
<input type="submit" name="button" class="inputp" value="Edit">
</form>

</body>
</html>
