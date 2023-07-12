<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL MAHASISWA
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/mahasiswa" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/mahasiswa', $mahasiswa->id) }}/edit" class="btn btn-warning btn-tone btn-sm float-right mt-3"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">
                        DETAIL MAHASISWA
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4 font-weight-bold">NIM</dt>
                                <dd class="col-md-8">:&nbsp; {{ $mahasiswa->nim }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4 font-weight-bold">NAMA</dt>
                                <dd class="col-md-8">:&nbsp; {{ $mahasiswa->nama }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4 font-weight-bold">PROGRAM STUDI</dt>
                                <dd class="col-md-8">:&nbsp; {{ $mahasiswa->prodi }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4 font-weight-bold">No. HANDPHONE</dt>
                                <dd class="col-md-8">:&nbsp; {{ $mahasiswa->no_hp }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>