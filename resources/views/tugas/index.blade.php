<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas</title>
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; }
        li { padding: 10px; border-bottom: 1px solid #eee; }
        a.btn { background: #4f46e5; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>📋 Daftar Tugas</h1>
    <p><a href="{{ route('tugas.create') }}" class="btn">+ Tambah Tugas</a></p>

    <ul>
        @forelse ($semuaTugas as $tugas)
            <li>
                <strong>{{ $tugas->judul }}</strong>
                @if ($tugas->deskripsi)
                    <br><small>{{ $tugas->deskripsi }}</small>
                @endif
            </li>
        @empty
            <li>Belum ada tugas. Yuk tambahkan!</li>
        @endforelse
    </ul>
</body>
</html>