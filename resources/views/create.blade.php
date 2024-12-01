<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pegawai</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form Tambah Data Pegawai</h2>
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            
            <div class="form-group">
                <label for="posisi">Posisi:</label>
                <input type="text" class="form-control" id="posisi" name="posisi">
            </div>
            
            <div class="form-group">
                <label for="gaji">Gaji:</label>
                <input type="number" class="form-control" id="gaji" name="gaji">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
