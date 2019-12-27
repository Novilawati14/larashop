<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Title</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Menu Makanan - <strong>Edit Menu</strong> - <a href="https://www.larashop/menu" target="_blank">www.larashop/menu.com</a>
                </div>
                <div class="card-body">
                    <a href="/food" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/food/update/{{ $foods->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Menu Makanan</label>
                            <input type="text" name="menu" class="form-control" placeholder="Menu Makanan" value=" {{ $foods->menu }}">
 
                            @if($errors->has('menu'))
                                <div class="text-danger">
                                    {{ $errors->first('menu')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Harga</label>
                            <textarea name="harga" class="form-control" placeholder="Harga Makanan"> {{ $foods->harga }} </textarea>
 
                             @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <textarea name="gambar" class="form-control" placeholder="Gambar Makanan"> {{ $foods->gambar }} </textarea>
 
                             @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>