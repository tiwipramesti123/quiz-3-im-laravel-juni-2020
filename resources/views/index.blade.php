<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="card">
        <div class="card-header">
            <h4>List artikel</h4>
            <a href="{{url('artikel/create')}}" class="btn btn-primary rounded-pill btn-sm float-right" title="tambah artikel"><i class="fa fa-plus"></i></a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Isi artikel</th>
                  <th>Slug</th>
                  <th>tag</th>
                  <th>Tanggal dibuat</th>
                  <th>Tanggal diedit</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($artikel as $data)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$data->judul }}</td>
                      <td>{{$data->isi_artikel }}</td>
                      <td>{{$data->slug }}</td>
                      <td>{{$data->tag }}</td>
                      <td>{{$data->created_at->format('d F Y H:i')}}</td>
                      <td>{{$data->updated_at->format('d F Y H:i')}}</td>
                      <td>
                          
                      </td>
                    </tr>                   
                  @endforeach
                </tbody>
          </table>
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection





