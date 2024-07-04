<x-app-layout :title="$title" :header="$header">
    <div class="container">
        <div>
            <a href="{{ route('pegawai.create') }}">
                <button type="button" class="btn btn-success">Tambah Data</button>
            </a>
        </div>
        <br />
        <table class="data-table table table-striped table-bordered text-center">
            <thead>
                <tr class="table-info">
                    {{-- <th>#</th> --}}
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_pegawai as $index => $item)
                    <tr>
                        {{-- <td>{{ $index + 1 }}</td> --}}
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->jenis_kelamin}}</td>
                        <td>{{ $item->tanggal_lahir}}</td>
                        <td>{{ $item->agama}}</td>
                        <td>
                            <a href="{{ route('pegawai.show', ['id' => $item['id']]) }}" class="btn btn-primary">Lihat</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>