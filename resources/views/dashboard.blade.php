<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
    <form action="{{ url('/buatLowongan') }}">
    <input type="submit" name="button" class="inputp" value="Buat Lowongan Baru">
</form>
    <form action="{{ url('/buatPerusahaan') }}">
    <input type="submit" name="button" class="inputp" value="Buat Perusahaan">
</form>
    <form action="{{ url('/halamanLowongan') }}">
    <input type="submit" name="button" class="inputp" value="Halaman Lowongan">
</form>
    <form action="{{ url('/profilPerusahaan') }}">
    <input type="submit" name="button" class="inputp" value="Profil Perusahaan">
</form>
</form>
    <form action="{{ url('/editLowongan') }}">
    <input type="submit" name="button" class="inputp" value="Edit Lowongan">
</form>
</x-app-layout>
