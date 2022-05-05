@extends('layout.dashboard')
@section('titlePage', 'Ubah Tracking Barang')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Ubah Tracking Barang</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('tracking-barang.update.action', encrypt($tracking->no_surat_jalan)) }}" method="post">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="no_surat_jalan">No Surat Jalan</label>
            <input type="text" class="form-control" id="no_surat_jalan" name="no_surat_jalan" value="{{ $tracking->no_surat_jalan }}" placeholder="masukkan no surat jalan ex: (RJA/VII/030522)..." autofocus>
            @error('no_surat_jalan')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="nama_customer">Nama Customer</label>
            <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="{{ $tracking->nama_customer }}" placeholder="masukkan nama customer...">
            @error('nama_customer')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="alamat_tujuan">Alamat Tujuan</label>
            <input type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" value="{{ $tracking->alamat_tujuan }}" placeholder="masukkan alamat tujuan...">
            @error('alamat_tujuan')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="status">Status Tracking</label>
            <select class="form-control" id="status" name="status">
              @foreach ($status as $loopItem)
                @if ($loopItem == $tracking->status)
                  <option value="{{ $loopItem }}" class="text-capitalize" selected>{{ $loopItem }}</option>
                @else
                  <option value="{{ $loopItem }}" class="text-capitalize">{{ $loopItem }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-success ubah_data">Ubah Data Tracking</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  $('.ubah_data').on('click', function(event){
    const question = confirm('apakah anda yakin mengubah data tracking?');

      if (question) {
        return;
      } else {
        event.preventDefault();
      }
  });
</script>
@endpush