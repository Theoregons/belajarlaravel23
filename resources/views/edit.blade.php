@extends('template')
@section('main')
<h2>Edit Data</h2>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>NIS</label>
            <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $data->alamat }}">
        </div>
        <div class="form-group">
            <label>Sekolah</label>
            <select class="form-control" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}" @selected($data->sekolah_id == $item->id)>{{ $item->nama_sekolah }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
