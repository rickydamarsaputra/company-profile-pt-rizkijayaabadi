@extends('layout.dashboard')
@section('titlePage', 'Update Timeline Tracking Barang')

@section('content')
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Update Timeline Tracking Barang</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-header">
        <h4>Ubah Timeline Tracking Pengiriman {{ $tracking->no_surat_jalan }}</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('tracking-barang.timeline.update.action', encrypt($timeline->id)) }}" method="post">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="no_surat_jalan">No Surat Jalan</label>
            <input type="text" class="form-control" id="no_surat_jalan" name="no_surat_jalan" value="{{ $tracking->no_surat_jalan }}" readonly>
          </div>
          <div class="form-group">
            <label for="title">Title Timeline</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $timeline->title }}" placeholder="masukkan title timeline...">
            @error('title')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="sub_title">Sub Title Timeline</label>
            <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $timeline->sub_title }}" placeholder="masukkan sub title timeline...">
            @error('sub_title')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <button type="submit" class="btn btn-success ubah_data">Ubah Data Timeline</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  $('.ubah_data').on('click', function(event){
    const question = confirm('apakah anda yakin mengubah data timeline?');

      if (question) {
        return;
      } else {
        event.preventDefault();
      }
  });
</script>
@endpush