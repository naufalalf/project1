
@section('content')
<h3>Tampil Data Produk</h3>
<a class="btn btn-success" href="{{route('tambahdaftar')}}"><i class="fa fa-plus"></i> Tambah Produk</a><br><br>
<table class="table table-bordered table-hover">
  <tr>
    <th>#ID</th>
    <th>Nama Produk</th>
    <th>Image</th>
    <th>Harga</th>
    <th>Stock</th>
  </tr>
  @foreach($daftar as $d) 
  <tr>
    <td>{{$d->id_produk}}</td>
    <td>{{$d->nama_produk}}</td>
    <td>{{$d->image}}</td>
    <td>{{$d->harga}}</td>
    <td>{{$d->stock}}</td>
    <td>
      <a href="/daftar/ubah/{{$d->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/daftar/hapus/{{$d->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
@endsection