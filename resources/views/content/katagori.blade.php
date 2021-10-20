@extends('layout.app')
@section('title' , 'katagori makanan')
@section('content')

  <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="
    margin: 22px;
    background-color: #1c5b90;
    border: none;" >tambah katagori</button>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">katagori Makanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="/proses_input_katagori" style="padding: 30px;" >
                @csrf
                <div class="row">
                  <div class="col-lg">
                      <div class="mb-3">
                          <input style="text-transform: capitalize;" placeholder="masukkan katagori" type="text" class="form-control  " value="" name="katagori"  aria-describedby="emailHelp">
                        </div>
                      <div class="mb-3">
                          <input style="text-transform: capitalize;" placeholder="masukkan keterangan"  type="text" class="form-control  " value="" name="keterangan"  aria-describedby="emailHelp">
                        </div>
                  </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" style="  background-color: #1c5b90;" >Simpan</button>
        </div>
    </form>
      </div>
    </div>
  </div>

<div class="row">
@foreach ($katagori as $item)
<div class="col-sm-6">
  <div class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;" >
    <div class="card-body">
      <h3 class="card-title" id="katagori" >{{ $item->katagori }}</h3>
      <a href="/katagori/{{ $item->katagori }}/Allkatagori" class="badge badge-success" style="text-transform: capitalize;" >jenis makanan</a>
      <a href="/katagori/{{ $item->id }}/edit_katagori" class="badge badge-info" style="text-transform: capitalize;" >edit</a>
     <form action="{{ url('delete_katagori/' . $item->id) }}" method="post" >
      @method('delete')
      @csrf
      <button type="submit" class="badge badge-danger" style="text-transform: capitalize;border:none;" onclick="return confirm('apakah ingin menghapus data ini ?')"  >hapus</button>
     </form>
    </div>
  </div>
</div>
@endforeach

</div>
  
@endsection
