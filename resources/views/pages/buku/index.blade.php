@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Datatable
          <a href="{{ route('buku.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Create Data"><i class="icon-plus"></i> Create</a>
      </h3>
    </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Penulis</th>
                      <th>Judul</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  
              </tbody>
              <tfoot>
                  <tr>
                      <th>No</th>
                      <th>Penulis</th>
                      <th>Judul</th>
                      <th></th>
                  </tr>
              </tfoot>
          </table>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.buku') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'penulis', name: 'penulis'},
                {data: 'judul', name: 'judul'},
                {data: 'action', name: 'action'}
            ],
        });
    </script>
@endpush