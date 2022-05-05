@extends('layout.dashboard')
@section('titlePage', 'Tambah Tracking Barang')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Tambah Tracking Barang</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('tracking-barang.create.action') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="no_surat_jalan">No Surat Jalan</label>
            <input type="text" class="form-control" id="no_surat_jalan" name="no_surat_jalan" placeholder="masukkan no surat jalan ex: (RJA/VII/030522)..." autofocus>
            @error('no_surat_jalan')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="nama_customer">Nama Customer</label>
            <input type="text" class="form-control" id="nama_customer" name="nama_customer" placeholder="masukkan nama customer...">
            @error('nama_customer')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="alamat_tujuan">Alamat Tujuan</label>
            <input type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" placeholder="masukkan alamat tujuan...">
            @error('alamat_tujuan')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <button type="submit" class="btn btn-primary tambah_data">Tambah Data Tracking</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  $('.tambah_data').on('click', function(event){
    const question = confirm('apakah anda yakin menambahkan data tracking?');

      if (question) {
        return;
      } else {
        event.preventDefault();
      }
  });
</script>
@endpush