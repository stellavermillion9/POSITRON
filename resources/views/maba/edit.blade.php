@extends('layouts/app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        @endforeach
        @endif
        <form action="{{ route('maba.update', $row) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="{{ old('nama', $row->nama) }}" />
            </div>
            <div class="form-group">
                <label>NIM <span class="text-danger">*</span></label>
                <input class="form-control" type="nim" name="nim" value="{{ old('nim', $row->nim) }}" />
            </div>
            <div class="form-group">
                <label>Offering <span class="text-danger">*</span></label>
                <input class="form-control" type="offering" name="offering" value="{{ old('offering', $row->offering) }}" />
            </div>
            <div class="form-group">
                <label>Peran <span class="text-danger">*</span></label>
                <input class="form-control" type="peran" name="peran" value="{{ old('peran', $row->peran) }}" />
            </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('maba.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection