 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container">
        <div class="card mb-3" style="max-width: 25rem;">
            <div class="card-header bg-success"><h3 class="text-center">{{ $artikel->judul }}</h3></div>
            <div class="card-body">
                    <h5 class="card-title">{{$artikel->isi_artikel}}</h5>
                    <div class="">
                        <span class="text-muted">dibuat : {{$artikel->created_at->format('d F Y')}}</span>
                        <span class="text-muted">diupdate : {{$artikel->updated_at->format('d F Y')}}</>  
                    </div>
                
                <a href="{{ url('artikel/'.$artikel->id.'/edit') }}" class="card-link" title="edit artikel"><i class="fa fa-edit text-success"></i>Edit artikel</a>
                <a href="#" class="card-link" title="hapus artikel" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash text-danger"></i>Hapus artikel</a>
                <!-- Modal -->
                <form action="{{ url('artikel/'.$artikel->id) }}" method="POST">
                @csrf
                @method('delete')
                    <div class="modal fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-body">
                            <h3>Kamu yakin menghapus artikel ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Yakin</button>
                        </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
           
        </div>
    
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection