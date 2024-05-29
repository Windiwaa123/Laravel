<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="img/lotso.png">
    <title style="">Form Registrasi </title> 
</head> 
<body> 

    <div class="container pt-4 bg-white"> 
    <div class="row"> 
    <div class="col-md-8 col-xl-6">
        <h1>Pendaftaran Mahasiswa</h1> 
        <hr> 
        <!--        @if($errors->any())
        <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
            @endif 
-->
        <form action="{{url('/proses-form-request')}}" method="POST"> 
            @csrf
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old ('nim') }}"> 
                @error('nim')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="form-group mt-2">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror 
            </div> 
            <div class="form-group mt-2">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror 
            </div> 
            <div class="form-group mt-2">
                <label>Jenis kelamin</label> 
            </div> 
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{old('jenis_kelamin')=='L'? 'checked':''}}> 
                <label class="form-check-label" for="laki_laki">Laki-laki</label>
            </div>
                <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="radio" name="jenis_kelamin"id="perempuan" value="P" {{old('jenis_kelamin')=='P'? 'checked':'' }}>
                <label class="form-check-label" for="perempuan">Perempuan</label> 
            </div>
        </div>
        @error('jenis_kelamin')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
        <div class="form-group mt-2">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" name="jurusan" id="jurusan">
                <option value="Teknik Informatika"{{ old('jurusan')=='Teknik Informatika'?'selected':'' }}>Teknik Informatika</option> 
                <option value="Sistem Informasi"{{ old('jurusan')=='Sistem Informasi'?'selected':'' }}>Sistem Informasi</option>
                <option value="Ilmu Komputer"{{ old('jurusan')=='Ilmu Komputer'?'selected':'' }}>Ilmu Komputer</option>
                <option value="Teknik Komputer"{{ old('jurusan')=='Teknik Komputer'?'selected':'' }}>Teknik Komputer</option>
                <option value="Teknik Telekomunikasi"{{ old('jurusan')=='Teknik Telekomunikasi'?'selected':'' }}>Teknik Telekomunikasi</option> 
            </select>
            @error('jurusan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group mt-2">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3"
            name="alamat" >{{ old('alamat') }}</textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mb-2 mt-3">Daftar</button>
        </div>
    </form>
</div>
</div>
</div>
</body>
</html>