@extends('layout.dashboard')
@section('titlePage', 'Detail Truck')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Detail Truck</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-header">
        <h4>Detail {{ $truck->nama }}</h4>
      </div>
      <div class="card-body">
          <div class="form-group">
            <label for="nama">Nama Truck</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $truck->nama }}" readonly>
          </div>
          <div class="form-group">
            <label for="gambar">Gambar Truck</label>
            <img src="{{ asset('storage/' . $truck->gambar) }}" alt="{{ $truck->deskripsi }}" class="img-thumbnail d-block mb-3" width="250px">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi Truck</label>
            <p>{{ $truck->deskripsi }}</p>
          </div>
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