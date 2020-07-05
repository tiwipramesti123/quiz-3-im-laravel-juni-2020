!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="card">
        <div class="card-body">
            <form action="{{url('/artikel')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul artikel</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old('judul')}}" placeholder="Ketik judul artikel">
                    @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi">Isi artikel</label>
                    <input type="text" class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" value="{{old('isi')}}"placeholder="Tuliskan artikel anda">
                    @error('isi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug')}}"placeholder="Slug">
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tag">Isi artikel</label>
                    <input type="text" class="form-control @error('tag') is-invalid @enderror" id="tag" name="tag" value="{{old('tag')}}"placeholder="Tag">
                    @error('tag')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection