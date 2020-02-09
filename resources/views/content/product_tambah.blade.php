@extends('layout.layout')
@section('content')

   <div class="card-body">
                    <br>
                    <form method="post" action="/product/store" id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama product ..">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input name="harga" class="form-control" placeholder="Harga product .."></input>

                             @if($errors->has('jumlah'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jumlah</label>
                            <input name="jumlah" class="form-control" placeholder="Jumlah product .."></input>

                             @if($errors->has('jumlah'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah')}}
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
                            <input type="submit" class="btn btn-info" value="Simpan">
                        </div>

                    </form>

                </div>

@stop