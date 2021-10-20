@extends('layout.app')
@section('title' , 'katagori makanan')
@section('content')

  <form method="post" action="{{ url('update_resep/' . $resep->id) }}" style="padding: 30px;" >
    @csrf
    <div class="row">
      <div class="col-lg">
          <div class="mb-3">
              <input style="text-transform: capitalize;" type="text" class="form-control" value="{{ $resep->jenis_makanan }}" name="jenis_makanan"  aria-describedby="emailHelp">
            </div>
          <div class="mb-3">
            <textarea name="bahan_makanan" id="" class="form-control" cols="30" rows="10">{{ $resep->bahan_makanan }}</textarea>
          </div>
          <div class="mb-3">
            <select class="form-control "  name="katagori_makanan" id="">
                <option value="{{ $resep->katagori_makanan }}">{{ $resep->katagori_makanan }}</option>
                @foreach ($katagori as $item)
                <option value="{{ $item->katagori }}">{{ $item->katagori }}</option>
                @endforeach
              </select>
            </div>
      </div>
    </div>

    <button type="submit" style="  background-color: #1c5b90;"  class="btn btn-primary">update</button>
</form> 
@endsection
