<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 4px; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #4f46e5; color: white; padding: 10px 20px; border: none; border-radius: 4px; margin-top: 16px; cursor: pointer; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>➕ Tambah Tugas Baru</h1>

    @if ($errors->any())
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('tugas.store') }}" method="POST">
        @csrf

        <label for="judul">Judul</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}">

        <label for="deskripsi">Deskripsi (opsional)</label>
        <textarea id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>

        <button type="submit">Simpan</button>
        <a href="{{ route('tugas.index') }}">Batal</a>
    </form>
</body>
</html>