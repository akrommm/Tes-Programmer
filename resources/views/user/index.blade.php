<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DATA USER </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/user/create') }}" class="float-right btn btn-dark mb-4"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-dark text-center">
                        <th style="color: white;" width=" 10px">NO</th>
                        <th style="color: white;" width=" 90px">AKSI</th>
                        <th style="color: white;">NAMA</th>
                        <th style=" color: white;">USERNAME</th>
                    </thead>
                    <tbody>
                        @foreach ($list_user as $user)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/user" id="{{ $user->id }}" />
                                    <x-template.button.edit-button url="admin/user" id="{{ $user->id }}" />
                                    <x-template.button.delete-button url="admin/user" id="{{ $user->id }}" />
                                </div>
                            </td>
                            <td>{{$user->nama}}</td>
                            <td>{{$user->username}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>