<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT DATA NILAI
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/nilai" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Nilai
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/nilai', $nilai->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Mahasiswa</label>
                                    <select class="select2" name="id_mahasiswa" style="width: 100%;" disabled required>
                                        <option>{{ $nilai->mahasiswa->nama }}</option>
                                        @foreach ($list_mahasiswa as $mahasiswa)
                                        <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Mata Kuliah</label>
                                    <input type="text" name="mata_kuliah" class="form-control" value="{{ $nilai->mata_kuliah }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" min="0" max="100" value="{{ $nilai->nilai }}" required>
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