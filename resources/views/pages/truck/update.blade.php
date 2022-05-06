@extends('layout.dashboard')
@section('titlePage', 'Ubah Truck')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Ubah Truck</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('truck.update.action', encrypt($truck->id)) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="nama">Nama Truck</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $truck->nama }}" placeholder="masukkan nama truck..." autofocus>
            @error('nama')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="gambar">Gambar Truck</label>
            <img src="{{ asset('storage/' . $truck->gambar) }}" alt="{{ $truck->deskripsi }}" class="img-thumbnail d-block mb-3" width="250px">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="gambar" name="gambar">
              <label class="custom-file-label" for="gambar">upload gambar truck...</label>
            </div>
            @error('gambar')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi Truck</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi truck..." rows="3">{{ $truck->deskripsi }}</textarea>
            @error('deskripsi')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <button type="submit" class="btn btn-success ubah_data">Ubah Data Truck</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  $('.ubah_data').on('click', function(event){
    const question = confirm('apakah anda yakin mengubah data truck?');

      if (question) {
        return;
      } else {
        event.preventDefault();
      }
  });

  $('#gambar').on('change',function(){
      const fileName = $(this).val();
      $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endpush