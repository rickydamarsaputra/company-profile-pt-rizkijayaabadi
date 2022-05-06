@extends('layout.dashboard')
@section('titlePage', 'Tambah Truck')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Tambah Truck</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('truck.create.action') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Truck</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama truck..." autofocus>
            @error('nama')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="gambar">Gambar Truck</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="gambar" name="gambar">
              <label class="custom-file-label" for="gambar">upload gambar truck...</label>
            </div>
            @error('gambar')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi Truck</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi truck..." rows="3"></textarea>
            @error('deskripsi')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <button type="submit" class="btn btn-primary tambah_data">Tambah Data Truck</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  $('.tambah_data').on('click', function(event){
    const question = confirm('apakah anda yakin menambahkan data truck?');

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