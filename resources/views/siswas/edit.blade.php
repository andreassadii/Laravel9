@extends('template.default')
@section('body')
<h2>Edit Data</h2>

<div class="card">
    <div class="card-body">
        <form action="{{ route('siswas.update', $siswa->id) }}" class="" method="post">  
            @csrf  
            @method('PUT')
<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" name="example-text-input" 
        placeholder="Masukan Nama" value="{{ $siswa->nama }}">
</div>

<div class="mb-3">
    <label class="form-label">nis</label>
    <input type="text" name="nis" class="form-control" name="example-text-input" 
        placeholder="Masukan nis" value="{{ $siswa->nis }}">
</div>

<div class="mb-3">
    <label class="form-label">alamat</label>
    <input type="text" name="alamat" class="form-control" name="example-text-input" 
        placeholder="Masukan alamat" value="{{ $siswa->alamat }}">
</div>

<div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" name="jurusan" class="form-control" name="example-text-input" 
        placeholder="Masukan Jurusan" value="{{ $siswa->jurusan }}">
</div>

<div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>

</form>
</div>
</div>
@endsection