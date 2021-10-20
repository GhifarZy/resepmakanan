@extends('layout.app')
@section('title' , 'resep makanan')
@section('content')

  <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="
    margin: 22px;
    background-color: #1c5b90;
    border: none;" >Buat Resep Baru</button>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Buat Resep Makanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="/proses_input" style="padding: 30px;">
                @csrf
                <div class="row">
                  <div class="col-lg">
                      <div class="mb-3">
                          <input type="text" placeholder="masukkan makanan"  class="form-control " value="" name="jenis_makanan" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                      <div class="mb-3">
                        <textarea name="bahan_makanan" id="" class="form-control" placeholder="masukkan bahan makanan"  cols="30" rows="10"></textarea>
                        </div>
                      <div class="mb-3">
                        <select class="form-control "  name="katagori_makanan" id="">
                            <option value="">katagori resep</option>
                            @foreach ($katagori as $item)
                            <option value="{{ $item->katagori }}">{{ $item->katagori }}</option>
                            @endforeach
                          </select>
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
        @foreach ($resep as $item)
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
            <div class="card-body">
            <h4 class="card-title">{{ $item->jenis_makanan }}</h4>
            <p class="card-text">{{ $item->katagori_makanan }}</p>
            <a href="/resep/{{ $item->id }}/edit_resep" class="badge badge-primary">edit</a>
            <a href="/resep/{{ $item->id }}/lihat_resep" class="badge badge-success">lihat</a>
            <form action="{{ url('delete_resep/' . $item->id) }}" method="post" >
                @method('delete')
                @csrf
                <button href="#" class="badge badge-danger" style="border:none;" onclick="return confirm('apakah anda ingin menghapus data ini ?')" >hapus</button>
            </form>
            </div>
        </div>
        </div>
        @endforeach

   </div>
  
@endsection