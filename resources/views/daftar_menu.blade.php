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
                    Menu Makanan - <a href="https://www.larashop/menu" target="_blank">www.larashop/menu.com</a>
                </div>
                <div class="card-body">
                    <a href="/food/tambah" class="btn btn-primary">Input Menu Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Menu Makanan</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($foods as $f)
                            <tr>
                                <td>{{ $f->gambar }}</td>
                                <td>{{ $f->menu }}</td>
                                <td>{{ $f->harga }}</td>
                                <td>
                                    <a href="/food/edit/{{ $f->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/food/hapus/{{ $f->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>