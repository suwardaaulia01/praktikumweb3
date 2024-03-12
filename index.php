<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div style="background-color: #E5C287; margin:30px 30px; border: 1px solid black; border-radius:10px;">
<h2 style= "margin-left:90px; margin-top:30px;">Form Nilai Mahasiswa</h2>
    <div class="container mt-5" >
        <div class="row" >
            <div class="col-md-12" >
                <form action="hasil_nilai.php" method="post">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-8">
                            <select id="matakuliah" name="matakuliah" class="custom-select">
                                <option value="">Pilih Mata Kuliah</option>
                                <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                <option value="Basis Data I">Basis Data I</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="Bahasa inggris">bahasa inggris</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai Ujian Tengah Semester</label>
                        <div class="col-8">
                            <input id="uts" name="uts" placeholder="Nilai Ujian Tengah Semester" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai Ujian Akhir Semester</label>
                        <div class="col-8">
                        <input id="uas" name="uas" placeholder="Nilai Ujian Akhir Semester" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas Harian</label>
                        <div class="col-8">
                            <input id="tugas" name="tugas" placeholder="Nilai Tugas Harian" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
                <div class="col-8">
                <hr>
            </div>
        </div>
    </div>
</fieldset>
</div>
</body>
</html>