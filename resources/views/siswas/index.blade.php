@extends('template.default')

@push('page-action')
     <a href="{{ route ('siswas.tambah')}}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('body')
<h1>SMKN 1 SAYUNG</h1>

<div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nis</th>
                                <th>Alamat</th>
                                <th>Jurusan</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                            <tr>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->jurusan }}</td>
                                <td>
                                    <a href="{{ route('siswas.edit', $siswa->id) }}">Edit</a>
                                    <form action="{{ route('siswas.hapus', $siswa->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                       <input type="submit" value="hapus" class="btn btn-danger btn">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection