@extends('layouts.main')
@section('title', 'eMaha - Student')
@section('content')
<div class="card mt-2">
        <div class="card-header">
            <a class="btn btn-primary" href="/student/formtambah" role="button"><i class="bi bi-folder-plus"></i> Tambah Data</a>
            
            <form action="/student/pencarian" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              </form>
        </div>
        <div class="card-body">
          @if(session('flash'))
          @php
          $flashType = session('flash_type');
          $alertClass = '';
          
          switch ($flashType) {
              case 'success':
                  $alertClass = 'alert-success';
                  break;
              case 'primary':
                  $alertClass = 'alert-primary';
                  break;
              case 'danger':
                  $alertClass = 'alert-danger';
                  break;
              default:
                  $alertClass = 'alert-warning';
                  break;
          }
        @endphp
      <div class="alert {{ $alertClass }} alert-dismissible fade show" role="alert">
        <strong>{{ session('flash') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
          @endif
          
          <div class="table-responsive">
        <table class="table table-hover mt-2">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Prodi</th>
                <th scope="col">Minat</th>
                <th scope="col" colspan="2" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mhs as $idx => $data)
                <tr>
                   <td>{{ $mhs->firstitem() + $idx }}</td>
                   <td>{{ $data->nim }}</td>
                   <td>{{ $data->nama }}</td>
                   <td>{{ $data->gender }}</td>
                   <td>{{ $data->prodi }}</td>
                   <td>{{ $data->minat }}</td>
                   <td>
                    <a href="/student/updatemahasiswa/{{ $data->id }}" class="btn btn-success" role="button">
                      <i class="bi bi-pencil-square"></i></a>
                   </td>
                   <td>
                    <a href="/student/delete/{{ $data->id }}" class="btn btn-danger" role="button" onclick="return confirm('Apakah yakin ingin menghapus ?')">
                      <i class="bi bi-trash-fill"></i></a>
                   </td>
                  </tr> 
                @endforeach
            </tbody>
          </table>
          <span class="float-right">{{$mhs->links()}}</span>

        </div>
</div>
</div>
@endsection