@extends('template.default')

@section('body')
<h2>Tambah Data</h2>

<div class="card">
    <div class="card-body">
        <form action="/siswas" class="" method="post">  
            @csrf  
<div class="mb-3">
    <label class="form-label">Nama Sekolah</label>
    <input type="text" name="nama" class="form-control" name="example-text-input" placeholder="Masukan Nama Sekolah">
</div>
<div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" name="nis" class="form-control" name="example-text-input" placeholder="Masukan Alamat">
</div>
<div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" name="alamat" class="form-control" name="example-text-input" placeholder="Masukan Nama Jurusan">
</div>
<div class="mb-3">
    <label class="form-label">Jumlah Guru</label>
    <input type="text" name="jurusan" class="form-control" name="example-text-input" placeholder="Masukan Jumlah Guru">
</div>

<div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>

</form>
</div>
</div>
@endsection