@extends('template')
@section('main')
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>NIS</label>
            <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror"
                value="{{ old('nis') }}">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                value="{{ old('nama') }}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                value="{{ old('alamat') }}">
        </div>
        <div class="form-group">
            <label>Sekolah</label>
            <select class="form-control" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
