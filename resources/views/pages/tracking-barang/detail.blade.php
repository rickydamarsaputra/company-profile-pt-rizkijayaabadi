@extends('layout.dashboard')
@section('titlePage', 'Detail Tracking Barang')

@section('content')
<section class="section" x-data="{ open: 'tracking' }">
  <div class="section-header d-flex justify-content-between">
    <h1>Detail Tracking Barang</h1>
    <div>
      <button type="button" x-on:click="open = 'tracking'" x-bind:class="open == 'tracking' ? 'btn btn-primary btn-sm mr-2' : 'btn btn-info btn-sm mr-2'">Tracking Pengiriman</button>
      <button type="button" x-on:click="open = 'timeline'" x-bind:class="open == 'timeline' ? 'btn btn-primary btn-sm' : 'btn btn-info btn-sm'">Tambah Timeline</button>
    </div>
  </div>

  <div class="section-body">
    <div class="card" x-show="open == 'tracking'">
      <div class="card-header">
        <h4>Tracking Pengiriman {{ $tracking->no_surat_jalan }}</h4>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="no_surat_jalan">No Surat Jalan</label>
          <input type="text" class="form-control" id="no_surat_jalan" value="{{ $tracking->no_surat_jalan }}" readonly>
        </div>
        <div class="form-group">
          <label for="nama_customer">Nama Customer</label>
          <input type="text" class="form-control" id="nama_customer" value="{{ $tracking->nama_customer }}" readonly>
        </div>
        <div class="form-group">
          <label for="alamat_tujuan">Alamat Tujuan</label>
          <input type="text" class="form-control" id="alamat_tujuan" value="{{ $tracking->alamat_tujuan }}" readonly>
        </div>
        <div class="form-group">
          <label for="alamat_tujuan">Status Tracking</label>
          <button type="button" class="btn {{ ($tracking->status == 'diproses') ? 'btn-warning' : (($tracking->status == 'dikirim')  ? 'btn-info' : 'btn-success') }} btn-block text-capitalize">{{ $tracking->status }}</button>
        </div>
        <div class="container-timeline">
          <div class="wrapper">
            <h1>Timeline Tracking</h1>
            <ul class="sessions">
              @if ($tracking->status == 'sampai')
                <li>
                  <div class="time">Sampai</div>
                  <p>{{ date_format($tracking->updated_at, 'd M Y, H:i') . ' WIB' }}</p>
                  <p>Barang Sampai</p>
                </li>
              @endif
              @foreach ($timeline as $loopItem)
                <li>
                  <div class="time"><a href="{{ route('tracking-barang.timeline.update.view', encrypt($loopItem->id)) }}">{{ $loopItem->title }}</a></div>
                  <p>{{ date_format($loopItem->created_at, 'd M Y, H:i') . ' WIB' }}</p>
                  <p>{{ $loopItem->sub_title }}</p>
                </li>
              @endforeach
              <li>
                <div class="time">Di Proses</div>
                <p>{{ date_format($tracking->created_at, 'd M Y, H:i') . ' WIB' }}</p>
                <p>Barang Di Proses</p>
              </li>
            </ul>
          </div>
        </div> 
      </div>
    </div>
    <div class="card" x-show="open == 'timeline'">
      <div class="card-header">
        <h4>Tambah Timeline Tracking Pengiriman {{ $tracking->no_surat_jalan }}</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('tracking-barang.create.timeline.action', $no_surat_jalan) }}" method="post">
          @csrf
          <div class="form-group">
            <label for="no_surat_jalan">No Surat Jalan</label>
            <input type="text" class="form-control" id="no_surat_jalan" name="no_surat_jalan" value="{{ $tracking->no_surat_jalan }}" readonly>
          </div>
          <div class="form-group">
            <label for="title">Title Timeline</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="masukkan title timeline...">
            @error('title')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="sub_title">Sub Title Timeline</label>
            <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="masukkan sub title timeline...">
            @error('sub_title')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="form-group">
            <label for="step">Step</label>
            <input type="text" class="form-control" id="step" name="step" value="{{ $current_step }}" readonly>
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
    const question = confirm('apakah anda yakin menambahkan data timeline?');

      if (question) {
        return;
      } else {
        event.preventDefault();
      }
  });
</script>
@endpush

@push('styles')
<style>
ul, li {
  list-style: none;
  padding: 0;
}

.container-timeline {
	display: flex;
	/* justify-content: center; */
	/* align-items: center; */
	/* padding: 3rem 1rem; */
}

.container-timeline .wrapper {
	/* padding: 2rem; */
	border-radius: 15px;
}

.container-timeline h1 {
	font-size: 1.1rem;
	font-family: sans-serif;
  margin-bottom: 2rem;
}

.container-timeline .sessions {
	/* margin-top: 2rem; */
	margin: 0;
	border-radius: 12px;
	position: relative;
}

.container-timeline li {
	padding-bottom: 0.5rem;
	border-left: 1px solid #abaaed;
	position: relative;
	padding-left: 20px;
	margin-left: 10px;
  display: flex;
  flex-direction: column;
}

.container-timeline li:last-child {
	border: 0px;
	padding-bottom: 0;
}

.container-timeline li:before {
    content: '';
    width: 15px;
    height: 15px;
    background: #838994;
    /* border: 1px solid #4e5ed3; */
    box-shadow: 3px 3px 0px #bab5f8;
    box-shadow: 0px 0px 0px 4px #e5e7e9;
    border-radius: 50%;
    position: absolute;
    /* left: -10px; */
    left: -8px;
    top: 0px;
}

.container-timeline li:first-child:before {
  background: #4fd15a;
  border: 1px solid #4fd15a;
  border-radius: 50%;
  box-shadow: 0px 0px 0px 4px #d6ffde;
}

.container-timeline li:last-child:before {
  left: -7px;
}

.container-timeline .time {
  color: #2a2839;
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
  text-transform: capitalize;
  margin-top: -5px;
}

.container-timeline .time a{
  color: #2a2839;
	font-family: 'Poppins', sans-serif;
	font-weight: 600;
  text-transform: capitalize;
  text-decoration: underline;
}

.container-timeline p,
.container-timeline .time span {
	color: #4f4f4f;
	font-family: sans-serif;
	line-height: 1.5;
	margin-top: 0.4rem;
  text-transform: capitalize;
  opacity: 0.8;
}

@media screen and (min-width: 601px) {
	.container-timeline .time {
		font-size: .9rem;
	}
}

@media screen and (max-width: 600px) {
	.container-timeline .time {
		margin-bottom: .3rem;
		font-size: 0.85rem;
	}
}

@media screen and (max-width: 600px) {
	.container-timeline p {
		font-size: .9rem;
	}
}
</style>
@endpush