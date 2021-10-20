@extends('layout.app')
@section('title' , 'resep makanan')
@section('content')
<center>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Resep Masakan </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    <div class="row">
      @forelse ($lihat as $item)
      <div class="col-sm-4">
        <div class="card"  style="width: 18rem;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
          <div class="card-body">
            <h5 class="card-title" style="
              font-size:15px;
              text-transform:capitalize;
            "  >{{ $item->jenis_makanan }}</h5>
            <a href="/resep/{{ $item->id }}/lihat_resep" class="badge badge-info" style="text-transform: capitalize;">lihat resep masakan</a>
          </div>
        </div>
      </div>
      @empty
      <center><h3 class="display-5 fw-bold" style="color:rgb(0, 0, 0), 0, 0);font-family: 'Secular One', sans-serif; " >Jenis makanan belum tersedia</h3></center>
      @endforelse
      
    </div>
@endsection