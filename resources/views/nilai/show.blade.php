<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL NILAI
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/nilai" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/nilai', $nilai->id) }}/edit" class="btn btn-warning btn-tone btn-sm float-right mt-3"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">
                        DETAIL NILAI
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4 font-weight-bold">MAHASISWA</dt>
                                <dd class="col-md-8">:&nbsp; {{ $nilai->mahasiswa->nama }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4 font-weight-bold">MATA KULIAH</dt>
                                <dd class="col-md-8">:&nbsp; {{ $nilai->mata_kuliah }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4 font-weight-bold">NILAI</dt>
                                <dd class="col-md-8">:&nbsp; {{ $nilai->nilai }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4 font-weight-bold">GRADE</dt>
                                <dd class="col-md-8">:&nbsp; {{ $nilai->grade }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>