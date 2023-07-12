<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DATA NILAI </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/nilai/create') }}" class="float-right btn btn-dark mb-4"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-dark text-center">
                        <th style="color: white;" width=" 10px">NO</th>
                        <th style="color: white;" width=" 90px">AKSI</th>
                        <th style="color: white;">MAHASISWA</th>
                        <th style=" color: white;">MATA KULIAH</th>
                        <th style=" color: white;">NILAI</th>
                        <th style=" color: white;">GRADE</th>
                    </thead>
                    <tbody>
                        @foreach ($list_nilai as $nilai)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/nilai" id="{{ $nilai->id }}" />
                                    <x-template.button.edit-button url="admin/nilai" id="{{ $nilai->id }}" />
                                    <x-template.button.delete-button url="admin/nilai" id="{{ $nilai->id }}" />
                                </div>
                            </td>
                            <td>{{$nilai->mahasiswa->nama}}</td>
                            <td>{{$nilai->mata_kuliah}}</td>
                            <td>{{$nilai->nilai}}</td>
                            <td>{{$nilai->grade}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>