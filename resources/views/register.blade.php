<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=asset('css/style.css')?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Album - Register</title>
  </head>

  <body>
    <div class="page">
    <div class="n4-bg">
        <img src="<?=asset('img/logo_n4.png')?>" class="n4-logo mb-3" alt="">
        <p style="text-align:center;font-size: 18px;margin-bottom:5px;font-weight:600;color:orangered">REGISTRASI PILOT AGENT ALBUM DEPLOY</p>
        <p style="font-weight: 600">DASHBOARD ALBUM TBM PTPN III</p>
        <div class="n4-box">
            <img class="drone" src="<?=asset('img/drone_dji_mavic2_pro.png')?>" alt="">
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                @if(session('success'))
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="sap" class="form-label">NIK SAP <span style="color: red">*</span></label>
                            <input type="text" pattern="[0-9]*" class="form-control" id="sap" name="nik_sap" required maxlength="10" value="{{ old('nik_sap') }}" >
                            @error('nik_sap')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="name" class="form-label">Nama Lengkap <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="nama" required maxlength="50" value="{{ old('nama') }}" >
                            @error('nama')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="jabatan" class="form-label">Jabatan <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" required maxlength="50" pattern="[A-Za-z]*" value="{{ old('jabatan') }}" >
                            @error('jabatan')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="hp" class="form-label">No HP (WA) <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="hp" name="no_hp" required maxlength="20" pattern="[0-9]*" value="{{ old('no_hp') }}" >
                            @error('no_hp')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="email" class="form-label">Email <span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}" >
                            @error('email')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="username" class="form-label">Username <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="username" name="username" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="password" class="form-label">Password <span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" required maxlength="20" minlength="8" value="{{ old('password') }}" >
                            @error('password')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="password_confirmation" class="form-label">Konfirmasi Password <span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required maxlength="20" minlength="8" value="{{ old('password_confirmation') }}" >
                            @error('password_confirmation')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="kebun" class="form-label">Kebun <span style="color: red">*</span></label>
                            <select id="kebun" name="kode_kebun" class="form-select" required>
                                 @if($kebun)
                                    @foreach ($kebun as $k)
                                        <option value="{{$k->kode_kebun}}" {{ old('kode_kebun') == $k->kode_kebun ? 'selected' : '' }}  >{{$k->nama_kebun}}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('kode_kebun')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="afdeling" class="form-label">Afdeling <span style="color: red">*</span></label>
                            <input type="number" max='99' class="form-control" id="afdeling" name="afdeling" required value="{{ old('afdeling') }}" >
                            @error('afdeling')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                            @error('username')
                                <div class="text-danger" style="font-size:12px">
                                    This Afdeling haven't more pilots. Please choose another afdeling for this plant
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary form-control">Register</button>
                    </div>
                </div>
            </form>
        </div>
        <p style="margin-top:30px;font-size:14px;color:#555;font-weight:600">Created @ By PTPN IV REGIONAL II</p class="mt-3">
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        // Fungsi untuk memperbarui nilai username dan teks label
        function updateUsername() {
            // Ambil nilai dari kode_kebun dan afdeling
            var kodeKebun = document.querySelector("select#kebun").value;
            var afdeling = document.querySelector("input#afdeling").value;

            // Gabungkan nilai-nilai tersebut untuk membentuk username
            const text = parseInt(afdeling) >= 10 ? 'AFD' : 'AFD0'
            var username =  'N003' +kodeKebun + text + afdeling

            // Set nilai dari elemen username
            document.querySelector("input#username").value = username;
        }

        // Tambahkan event listener pada kode_kebun dan afdeling
        document.querySelector("select#kebun").addEventListener("change", updateUsername);
        document.querySelector("input#afdeling").addEventListener("input", updateUsername);
        document.addEventListener('DOMContentLoaded', updateUsername);
    </script>

  </body>
</html>
