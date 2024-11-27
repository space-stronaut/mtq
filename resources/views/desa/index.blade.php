@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between justify-align-center">
                    <div>
                        Desa List
                    </div>
                    <div>
                        <a href="{{ route('desa.create') }}" class="btn btn-primary">+ Create desa</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <th>
                                #
                            </th>
                            <th>
                                Nama Desa
                            </th>
                            <th>
                                Action
                            </th>
                        </thead>
                        <tbody>
                            @forelse ($desas as $item)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $item->nama_desa }}
                                    </td>
                                    <td class="d-flex justify-align-center">
                                        <div>
                                            <a href="" class="btn btn-warning">Edit</a>
                                        </div>
                                        <div>
                                            <a href="{{ route("desa.destroy", $item->id) }}" class="btn btn-danger l-2">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>
                                        Data Desa Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection