<x-app-layout :title="$title" :header="$header">
    @if (!$pegawai)
        <div>Data tidak ditemukan</div>
    @else
        <div class="card">
            <div class="card-header">
                @if ($pegawai->gambar)
                    <img src="{{ asset('storage/profil/' . $pegawai->gambar) }}" alt="Gambar {{ $pegawai->nama }}" class="img-fluid mx-auto d-block" style="max-width:150px;">
                @else
                    <p class="text-center">Tidak ada gambar</p>
                @endif
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nama:</strong> {{ $pegawai->nama }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ $pegawai->jenis_kelamin }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ $pegawai->tanggal_lahir }}</p>
                        <p><strong>Agama:</strong> {{ $pegawai->agama }}</p>
                    </div>
                </div>
            </div>
        </div>
        
    @endif
</x-app-layout>
