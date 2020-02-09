@extends('layout.layout')
@section('content')

 <div class="card mt-5">
                <div class="card-body">
                    
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Gambar</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                               	<td>{{ $p->harga }}</td>
                                <td>{{ $p->jumlah }}</td>
                                <td> <img src="{{ url('image/'.$p->image) }}" width="150px"> </td>
                                <td>
                                	<a href="/product/tambah/" class="btn btn-danger">Tambah</a>
                                    <a href="/product/edit/{{ $p->id }}" class="btn btn-secondary">Edit</a>
                                    <a href="/product/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@stop