<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="card">
        <div class="card-body">
            <form action="{{url('artikel/'.$artikel->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="judul">Judul artikel</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ $artikel->judul}}" placeholder="Ketik judul artikel">
                    @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi">Isi artikel</label>
                    <input type="text" class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" value="{{$artikel->isi_artikel}}" placeholder="Tuliskan artikel anda">
                    @error('isi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control @error('isi') is-invalid @enderror" id="slug" name="slug" value="{{$artikel->slug}}" placeholder="Slug">
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control @error('isi') is-invalid @enderror" id="tag" name="tag" value="{{$artikel->tag}}" placeholder="tag">
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