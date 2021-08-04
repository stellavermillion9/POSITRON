@extends('layouts/app')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('css/style1.css') !!}">
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        @endforeach
        @endif
        <form action="{{ route('maba.store') }}" method="POST">
            @csrf
            <div class="form-group ">
                <label>Nama Maba <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" />
            </div>
            <div class="form-group ">
                <label>NIM <span class="text-danger">*</span></label>
                <input class="form-control" type="int" name="nim" value="{{ old('nim') }}" />
            </div>
            <div class="form-group ">
                <label>Offering <span class="text-danger">*</span></label>
                <input class="form-control" type="int" name="offering" value="{{ old('offering') }}" />
            </div>
            <div class="form-group ">
                <label>Peran <span class="text-danger">*</span></label>
                <input class="form-control" type="int" name="peran" value="{{ old('peran') }}" />
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