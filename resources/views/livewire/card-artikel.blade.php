<div>
  <div class="card border-info">
      <div class="card-header bg-success text-light justify-content-center d-flex">
        <strong>Artikel Terbaru</strong> 
      </div>
      <div class="card-body">
          @foreach ($art as $data)
          <h5 class="card-title">{{ $data->judul }}</h5>
          <p class="card-text">{{ $data->deskripsi }}</p>
          @endforeach
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>
