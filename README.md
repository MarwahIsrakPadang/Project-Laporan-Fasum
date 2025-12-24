# 🏛️ LAPORAN FASUM (Layanan Aspirasi Fasilitas Umum)

Aplikasi berbasis web untuk memudahkan masyarakat dalam melaporkan kerusakan fasilitas publik secara transparan dan efisien.

---

## Fitur Utama

### Autentikasi & Keamanan

-   **Middleware Auth**: Dashboard dan seluruh fitur pengelolaan data diproteksi secara ketat. Hanya pengguna yang sudah login yang dapat mengakses fungsi utama sistem.
-   **Sistem Register & Login**: Manajemen akun pengguna untuk memastikan setiap laporan dapat dipertanggungjawabkan.

### Manajemen Laporan (CRUD System)

Aplikasi ini menyediakan sistem pengelolaan data (CRUD) yang lengkap:

-   **Create**: Pengguna dapat mengirimkan laporan kerusakan baru dengan mengisi form yang tersedia.
-   **Read**: Menampilkan daftar laporan dalam bentuk tabel yang rapi, lengkap dengan detail statusnya.
-   **Update**: Memungkinkan pengguna atau admin untuk memperbarui informasi laporan jika terdapat kesalahan atau perubahan status.
-   **Delete**: Menghapus data laporan dari sistem jika data tersebut sudah tidak relevan.

---

## Teknologi yang Digunakan

-   **Framework**: Laravel 12
-   **Database**: MySQL / MariaDB
-   **Frontend**: Blade Templating & Tailwind CSS
-   **Autentikasi**: Laravel Breeze / Jetstream (sesuaikan dengan yang Anda pakai)

---

## Cara Instalasi

1. Clone repositori ini:
    ```bash
    git clone [https://github.com/MarwahIsrakPadang/Project-Laporan-Fasum.git](https://github.com/MarwahIsrakPadang/Project-Laporan-Fasum.git)
    ```
