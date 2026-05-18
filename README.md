## Mengenal Laravel
Dokumentasi penting wajib dibaca [Laravel Documentation](https://laravel.com/docs/) untuk memahami konsep dasar Laravel.


## Tes aplikasi
 
Buka **http://127.0.0.1:8000/tugas** — tambah beberapa tugas, lihat data muncul di halaman daftar.
 
> **Dokumentasi:**
> - Controller: https://laravel.com/docs/controllers
> - Validation: https://laravel.com/docs/validation
> - Form & CSRF: https://laravel.com/docs/csrf
 
---

## Tantangan Mandiri
 
Lanjutkan sendiri pakai dokumentasi:
 
1. **Tampilkan detail tugas** — lengkapi method `show($id)` dan view `tugas/show.blade.php`
2. **Edit tugas** — lengkapi `edit($id)` dan `update($id)`, jangan lupa `@method('PUT')`
3. **Hapus tugas** — lengkapi `destroy($id)` dengan form `@method('DELETE')`
4. **Coba styling pakai Tailwind atau Bootstrap** via CDN

## Error Umum & Solusi
 
| Error | Penyebab | Solusi |
|---|---|---|
| `could not find driver (Connection: sqlite)` | File `.sqlite` belum dibuat | Buat file `database/database.sqlite` |
| `Class "App\Models\Tugas" not found` | Lupa `use App\Models\Tugas;` | Tambahkan di atas controller |
| `419 Page Expired` | Lupa `@csrf` di form | Tambahkan `@csrf` setelah `<form>` |
| `SQLSTATE: no such table: tugas` | Belum migrate | Jalankan `php artisan migrate` |
| `Add [judul] to fillable property` | `$fillable` belum di-set di Model | Tambah `protected $fillable = [...];` |
| Halaman kosong / blank | Cek `storage/logs/laravel.log` | Baca pesan error di file log |
 
**Tips debugging:** Tambahkan `dd($variable);` di controller untuk lihat isi variabel.
 
---