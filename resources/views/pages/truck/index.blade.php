@extends('layout.dashboard')
@section('titlePage', 'Daftar Truck')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Daftar Truck</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
					<table class="table table-striped" id="truck_datatables">
						<thead>
							<tr>
								<th class="text-center">
									#
								</th>
								<th>Nama Truck</th>
								<th>Gambar</th>
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
		const DATATABLES_URL_AJAX = "{{ route('truck.datatables') }}";

		$('#truck_datatables').DataTable({
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
					data: 'nama'
				},
				{
					data: 'gambar',
					render: function(data){
						let IMAGE_URL = "{{ asset('storage/:path') }}";
						IMAGE_URL = IMAGE_URL.replace(':path', data);

						return `<img src="${IMAGE_URL}" alt="${data}" class="img-thumbnail" width="150px">`;
					}
				},
				{
					data: 'id_crypt',
					render: function(data){
						let DELETE_TRUCK_URL = "{{ route('truck.delete.action', ':id') }}";
						let UPDATE_TRUCK_URL = "{{ route('truck.update.view', ':id') }}";
						let DETAIL_TRUCK_URL = "{{ route('truck.detail.view', ':id') }}";
						
						DELETE_TRUCK_URL = DELETE_TRUCK_URL.replace(':id', data);
						UPDATE_TRUCK_URL = UPDATE_TRUCK_URL.replace(':id', data);
						DETAIL_TRUCK_URL = DETAIL_TRUCK_URL.replace(':id', data);

						return `
							<a class="btn btn-success btn-sm text-capitalize" href="${UPDATE_TRUCK_URL}">update</a>
							<a class="btn btn-danger btn-sm text-capitalize mx-2 delete_truck" href="${DELETE_TRUCK_URL}">delete</a>
							<a class="btn btn-info btn-sm text-capitalize" href="${DETAIL_TRUCK_URL}">detail</a>
						`;
					}
				}
			],
			initComplete: function(settings, json) {
				$('.delete_truck').each(function(index){
						$(this).on('click', function(event){
							const question = confirm('apakah anda yakin menghapus data truck ini?');
							
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