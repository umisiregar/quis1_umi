@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; min-height: 550px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Golongan</h5></div>
            <p class="card-text">
            <form action="{{ route('golongan') }}" method="POST">
                @csrf @method('PUT')
                <input type="hidden" name="id" value="{{ $golongan->id }}">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="gol_nama" value="{{ $golongan->gol_nama }}">
                </div>
                <div class="form-group mt-4">
                  <label for="">Kode</label>
                  <input type="text" class="form-control" name="gol_kode" value="{{ $golongan->gol_kode }}">
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                </div>
            </form>
            </p>
        </div>
    </div>
</div>
@endsection