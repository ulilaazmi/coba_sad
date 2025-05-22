<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Layanan</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; padding: 0 20px; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
        button { margin-top: 20px; padding: 10px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .success-message { margin-top: 20px; padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; }
        .error-message { margin-top: 20px; padding: 10px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px; }
    </style>
</head>
<body>

    <h1>Tambah Layanan Baru</h1>

    <!-- Tampilkan pesan sukses -->
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tampilkan pesan error validasi -->
    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.layanan.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama_layanan">Nama Layanan</label>
        <input type="text" id="nama_layanan" name="nama_layanan" value="{{ old('nama_layanan') }}" required>

        <label for="detail_layanan">Detail Layanan</label>
        <textarea id="detail_layanan" name="detail_layanan" rows="4" required>{{ old('detail_layanan') }}</textarea>

        <label for="harga_layanan">Harga Layanan</label>
        <input type="number" id="harga_layanan" name="harga_layanan" min="0" step="any" value="{{ old('harga_layanan') }}" required>

        <label for="img">Upload Gambar Layanan (opsional)</label>
        <input type="file" id="img" name="img" accept="image/*">

        <button type="submit">Tambah Layanan</button>
    </form>

</body>
</html>
