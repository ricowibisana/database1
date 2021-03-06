@extends('layout.layout')
@section('content')

<div class="card-body">
                    <a href="/product" class="btn btn-secondary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/product/update/{{ $product->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama product .." value=" {{ $product->nama }}">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Harga product .." value=" {{ $product->harga }}">

                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" label for="file-upload" id="file-drag">Choose file</label>
                            </div>
                          </div>


                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah product .." value=" {{ $product->jumlah }}">

                            @if($errors->has('jumlah'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah')}}
                                </div>
                            @endif

                        </div>

                        </div>



                        <div class="form-group">
                            <input type="submit" class="btn btn-dark" value="Simpan">
                        </div>

                    </form>

                </div>

    

@stop