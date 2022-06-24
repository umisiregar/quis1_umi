@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
        <div class="card-title"><h5>Data Pelanggan</h5></div>
        <p class="card-text">
            <form action="{{ route('pelanggan') }}" method="POST">
                @csrf @method('PUT')
                <input type="hidden" name="id" value="{{ $pelanggan->id }}">
                <div class="form-group mt-2">
                    <label for="">Golongan</label>
                    <select name="golongan_id" class="form-control" id="">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach($golongan as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $pelanggan->golongan_id) 
                                selected
                            @endif
                        >
                            {{ $item->gol_kode}} - {{ $item->gol_nama }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">User</label>
                    <select name="user_id" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach($pengguna as $item)
                        <option value="{{ $item->id }}"
                            @if ($item->id == $pelanggan->user_id) 
                                selected
                            @endif
                        >
                            {{ $item->email }} - {{ $item->nama }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">No Pelanggan</label>
                    <input type="text" name="no" class="form-control" value="{{ $pelanggan->no }}">
                </div>
                <div class="form-group mt-2">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $pelanggan->nama }}">
                </div>
                <div class="form-group mt-2">
                    <label for="">KTP</label>
                    <input type="number" name="ktp" class="form-control" value="{{  $pelanggan->ktp }}">
                </div>
                <div class="form-group mt-2">
                    <label for="">Seri</label>
                    <input type="text" name="seri" class="form-control" value="{{  $pelanggan->seri }}">
                </div>
                <div class="form-group mt-2">
                    <label for="">Meteran</label>
                    <input type="text" name="meteran" class="form-control" value="{{  $pelanggan->meteran }}">
                </div>
                <div class="form-group mt-2">
                    <label for="">Status</label>
                    <select name="aktif" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <option value="1"
                        @if ($pelanggan->aktif == 1)
                            selected
                        @endif
                        >Aktif</option>
                        <option value="0"
                        @if ($pelanggan->aktif == 0)
                            selected
                        @endif
                        >Tidak Aktif</option>
                    </select>
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