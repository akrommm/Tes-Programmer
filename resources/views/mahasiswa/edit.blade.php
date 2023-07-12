<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT DATA MAHASISWA
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/mahasiswa" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Mahasiswa
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/mahasiswa', $mahasiswa->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NIM</label>
                                    <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Program Studi</label>
                                    <input type="text" name="prodi" class="form-control" value="{{ $mahasiswa->prodi }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">No Handphone</label>
                                    <input type="text" name="no_hp" class="form-control" value="{{ $mahasiswa->no_hp }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-tone float-right"><i class="far fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>