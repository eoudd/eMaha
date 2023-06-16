@extends('layouts/main')
@section('title', 'eMaha - Form Student')
@section('content')
    <div class="card at-4">
        <div class="card-header"><strong>Form Data Student</strong></div>
        <div class="card-body">
                <form action="/student/save" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="nim">Nim</label>
                        <input type="number" class="form-control" id="nim" placeholder="Masukan Nim" name="nim">
                    </div>
                    <div class="form-group">
                     <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                    </div>
                    <label for="gender">Gender</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="gender" name="gender" value="pria" checked>
                        <label for="gender">Pria</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="gender" name="gender" value="wanita" >
                        <label for="gender">Wanita</label>
                    </div>

                    <div class="form-group">
                        <label for="prodi">prodi</label>
                        <select class="form-control" id="prodi" name="prodi">
                            <option value="0">--Pilih Program Studi--</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teologi">Teologi</option>
                            <option value="Kedokteran">Kedokteran</option>
                            <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Desain Produk">Desain Produk</option>
                        </select>
                    </div>
                    <label for="minat">Minat</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Artifical Intelegent" name="minat[]" 
                        value="Artifical Intelegent" checked>
                        <label for="Artifical Intelegent">Artifical Intelegent</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Web Devoloper" name="minat[]" value="Web Devoloper">
                        <label for="Web Devoloper">Web Devoloper</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Web Devoloper" name="minat[]" value="Web Devoloper">
                        <label for="Web Devoloper">Database Engineer</label>
                    </div>
                    <div class="modal-footer">
                        <a type="reset" class="btn btn-secondary" data-dismiss="modal" href="/mahasiswa">Close</a>
                        <button type="submit"  class="btn btn-primary ">Save</button>
                    </div>
                    <div class="form-group">
                        <button type="submit" role="button" class="btn btn-primary">Submit</button>
                    </div>
            </div>
            
            </form>
@endsection