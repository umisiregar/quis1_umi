@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px;min-height: 550px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title">
                    <h5>Data Pelanggan</h5>
                </div>
                <a href="{{ route('pelanggan.create') }}">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-stripped">
                    <tr>
                        <th>Nama Golongan</th>
                        <th>Nama</th>
                        <th>Nomor</th>
                        <th>KTP</th>
                        <th>Seri</th>
                        <th>Meteran</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($pelanggan as $item)
                    <tr>
                        <td>{{ $item->golongan->gol_kode }} - {{ $item->golongan->gol_nama }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->no }}</td>
                        <td>{{ $item->ktp }}</td>
                        <td>{{ $item->seri }}</td>
                        <td>{{ $item->meteran }}</td>
                        <td>{{ $item->user->email }}</td>
                        <td>
                            @if ($item->aktif == 0)
                                <span class="badge bg-primary">
                                    Aktif
                                </span>
                            @else
                                <span class="badge bg-secondary">
                                    Tidak Aktif
                                </span>
                            @endif
                        </td>
                        <td style="width: 25%">
                        <a href="{{ route('pelanggan.edit', $item->id) }}">
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        <form method="POST" style="display: inline">
                            <input type="text" name="id" value="{{ $item->id }}" style="display:none">
                            <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </p>
        </div>
    </div>
</div>
@endsection