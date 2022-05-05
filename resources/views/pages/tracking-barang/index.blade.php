@extends('layout.dashboard')
@section('titlePage', 'Daftar Tracking Barang')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Daftar Tracking Barang</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
					<table class="table table-striped" id="tracking_barang_datatables">
						<thead>
							<tr>
								<th class="text-center">
									#
								</th>
								<th>No Surat Jalan</th>
								<th>Nama Customer</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
	<script>
		const DATATABLES_URL_AJAX = "{{ route('tracking-barang.datatables') }}";

		$('#tracking_barang_datatables').DataTable({
			processing: true,
			serverSide: true,
			responsive: true,
			ajax: DATATABLES_URL_AJAX,
			columns: [
				{
					data: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					data: 'no_surat_jalan'
				},
				{
					data: 'nama_customer'
				},
				{
					data: 'status',
					render: function(data){
						const color = data == 'diproses' ? 'warning' : data == 'dikirim' ? 'info' : 'success';
						return `<div class="badge badge-${color} text-capitalize">${data}</div>`;
					}
				},
				{
					data: 'no_surat_jalan_crypt',
					render: function(data){
						let DETAIL_TRACKING_URL = "{{ route('tracking-barang.detail.view', ':no_surat_jalan') }}";

						DETAIL_TRACKING_URL = DETAIL_TRACKING_URL.replace(':no_surat_jalan', data);

						return `
							<a class="btn btn-success btn-sm text-capitalize" href="#">update</a>
							<a class="btn btn-danger btn-sm text-capitalize mx-2 delete_tracking" href="">delete</a>
							<a class="btn btn-info btn-sm text-capitalize" href="${DETAIL_TRACKING_URL}">detail</a>
						`;
					}
				}
			],
			initComplete: function(settings, json) {
          $('.delete_tracking').each(function(index){
              $(this).on('click', function(event){
                const question = confirm('apakah anda yakin menghapus data tracking ini?');
                
                if(question){
                  return;
                }else{
                  event.preventDefault();
                }
              });
          });
        },
		});
	</script>
@endpush