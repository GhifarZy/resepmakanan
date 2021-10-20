@extends('layout.app')
@section('title' , 'katagori makanan')
@section('content')

  <form method="post" action="{{ url('update_katagori/' . $katagori->id) }}" style="padding: 30px;" >
    @csrf
    <div class="row">
      <div class="col-lg">
          <div class="mb-3">
              <input style="text-transform: capitalize;" type="text" class="form-control" value="{{ $katagori->katagori }}" name="katagori"  aria-describedby="emailHelp">
            </div>
          <div class="mb-3">
              <input style="text-transform: capitalize;" type="text" class="form-control" value="{{ $katagori->keterangan }}" name="keterangan"  aria-describedby="emailHelp">
            </div>
      </div>
    </div>

    <button type="submit" style="  background-color: #1c5b90;"  class="btn btn-primary">update</button>
</form>

  
@endsection
