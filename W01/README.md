# Website Portfolio 

Website portfolio modern dan responsif yang dibangun dengan vanilla HTML, CSS, dan JavaScript. Proyek ini menampilkan latar belakang, keterampilan, proyek, dan informasi kontak dengan desain yang bersih, profesional, dan pengalaman pengguna yang lancar.

## 📋 Daftar Isi

- [Ikhtisar](#ikhtisar)
- [Fitur](#fitur)
- [Struktur Proyek](#struktur-proyek)
- [Teknologi yang Digunakan](#teknologi-yang-digunakan)
- [Pengaturan dan Instalasi](#pengaturan-dan-instalasi)
- [Penggunaan](#penggunaan)
- [Bagian-Bagian](#bagian-bagian)
- [Fungsionalitas JavaScript](#fungsionalitas-javascript)
- [Desain Responsif](#desain-responsif)
- [Optimasi Kinerja](#optimasi-kinerja)
- [Pustaka Eksternal dan CDN](#pustaka-eksternal-dan-cdn)
- [Pengembangan Masa Depan](#pengembangan-masa-depan)
- [Lisensi](#lisensi)

## 🔍 Ikhtisar

Website portfolio ini berfungsi sebagai showcase profesional saya, Arief F-sa Wijaya, mahasiswa D3 Teknik Informatika di Politeknik Negeri Bandung. Situs ini menampilkan desain modern dengan animasi yang halus, tata letak responsif, dan informasi komprehensif tentang keterampilan, pengalaman, proyek, dan prestasi.

## ✨ Fitur

- **Desain Responsif**: Tata letak yang sepenuhnya adaptif berfungsi pada semua ukuran perangkat
- **Animasi Halus**: Efek fade-in dan transisi yang mulus
- **Sistem Navigasi**: Navbar tetap yang berubah tampilan saat di-scroll
- **Menu Ramah Seluler**: Navigasi yang dapat dilipat untuk perangkat seluler
- **Elemen Interaktif**: Efek hover dan tombol yang dianimasikan
- **Validasi Formulir**: Formulir kontak dengan keamanan captcha
- **Struktur Kode yang Bersih**: HTML, CSS, dan JavaScript yang terorganisir dengan baik
- **Aset yang Dioptimalkan**: Pemuatan dan rendering gambar yang efisien

## 📁 Struktur Proyek

```
index.html               # File HTML utama
LICENSE                  # Lisensi proyek
README.md                # Dokumentasi proyek
src/                     # Direktori sumber
├── css/                 # Gaya CSS
│   └── style.css        # Stylesheet utama
├── img/                 # Aset gambar
│   └── ...
└── js/                  # File JavaScript
    └── script.js        # File script utama
```

## 🛠️ Teknologi yang Digunakan

- **HTML5**: Struktur markup semantik
- **CSS3**: Styling lanjutan dengan flexbox, grid, transitions
- **JavaScript**: Elemen interaktif dan manipulasi DOM
- **Pustaka Font**: Google Fonts (Poppins, Ubuntu)
- **Pustaka Ikon**: Boxicons
- **Pemrosesan Formulir**: Formspree untuk pengiriman formulir
- **Keamanan**: hCaptcha untuk perlindungan formulir

## 🚀 Pengaturan dan Instalasi

1. **Clone repositori**
   ```bash
   git clone https://github.com/yourusername/portfolio-website.git
   cd portfolio-website
   ```

2. **Buka di editor kode**
   - VSCode direkomendasikan dengan ekstensi Live Server

3. **Jalankan website**
   - Gunakan Live Server atau buka `index.html` langsung di browser Anda

4. **Tidak diperlukan proses build**
   - Situs menggunakan HTML, CSS, dan JavaScript vanilla tanpa alat build

## 💻 Penggunaan

Website ini dirancang agar intuitif dan ramah pengguna. Pengguna dapat:

- Menavigasi melalui berbagai bagian menggunakan menu navigasi
- Membaca tentang latar belakang dan keterampilan Arief
- Melihat proyek dengan deskripsi dan tautan ke repositori GitHub
- Terhubung melalui tautan media sosial
- Mengirim pesan melalui formulir kontak

## 📑 Bagian-Bagian

Website portfolio ini terdiri dari bagian-bagian utama berikut:

1. **Home**: Perkenalan dan informasi kontak dasar
2. **About**: Latar belakang pribadi dan filosofi profesional
3. **Skills**: Keterampilan teknis, alat, dan bahasa pemrograman
4. **Education**: Timeline latar belakang akademik
5. **Experience**: Pengalaman profesional dan peran
6. **Achievements**: Prestasi dan partisipasi yang menonjol
7. **Projects**: Kartu proyek unggulan dengan deskripsi
8. **Contact**: Formulir kontak dan tautan media sosial

## 🔧 Fungsionalitas JavaScript

File `script.js` berisi beberapa fungsi kunci:

- `initStickyNavigation()`: Mengubah tampilan navigation bar saat di-scroll
- `initMobileMenu()`: Menangani toggle menu seluler dengan animasi
- `initContactFormValidation()`: Memvalidasi pengiriman formulir kontak
- `setInitialNavLinkColors()`: Mengatur warna awal untuk link navigasi
- `updateFooterYear()`: Memperbarui tahun copyright secara dinamis

## 📱 Desain Responsif

Website ini menerapkan pendekatan desain responsif yang komprehensif:

- **Seluler (max-width: 480px)**: Dioptimalkan untuk layar kecil
- **Tablet (481px - 768px)**: Tata letak yang disesuaikan untuk perangkat berukuran sedang
- **Desktop (769px - 1200px)**: Tata letak desktop standar
- **Desktop Besar (>= 1201px)**: Tata letak yang ditingkatkan untuk layar besar

Desain responsif memastikan bahwa website terlihat dan berfungsi dengan baik di semua ukuran perangkat.

## ⚡ Optimasi Kinerja

Beberapa teknik digunakan untuk mengoptimalkan kinerja:

- **CSS yang Efisien**: CSS terorganisir dengan komponen yang dapat digunakan kembali
- **Gambar yang Dioptimalkan**: Gambar dengan ukuran dan kompresi yang tepat
- **JavaScript Minimal**: Fungsionalitas yang fokus tanpa bloat
- **Lazy Loading**: Gambar dimuat saat memasuki viewport
- **Sumber Daya yang Di-cache**: Sumber daya eksternal di-cache bila memungkinkan

## 📚 Pustaka Eksternal dan CDN

Proyek ini menggunakan pustaka eksternal berikut yang dimuat melalui CDN:

1. **Google Fonts**
   ```
   https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap
   ```
   - Menyediakan keluarga font Poppins dan Ubuntu

2. **Boxicons**
   ```
   https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css
   ```
   - Pustaka ikon untuk media sosial, navigasi, dan elemen UI

3. **Bootstrap Icons (HANYA ICON)**
   ```
   https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css
   ```
   - Pustaka ikon tambahan untuk elemen UI

4. **hCaptcha**
   ```
   https://js.hcaptcha.com/1/api.js
   ```
   - Perlindungan anti-bot untuk formulir kontak

5. **Formspree**
   - Digunakan untuk menangani pengiriman formulir tanpa kode sisi server
   - Endpoint: `https://formspree.io/f/mzzeavab`

## 🔮 Pengembangan Masa Depan

Peningkatan potensial untuk versi mendatang:

- **Mode Gelap**: Menambahkan toggle untuk tema terang/gelap
- **Bagian Blog**: Menambahkan blog untuk berbagi artikel teknis
- **Dukungan Multi-bahasa**: Menambahkan opsi bahasa
- **Pemfilteran Proyek**: Menambahkan kategori dan filter untuk proyek
- **Testimoni**: Menambahkan bagian untuk testimoni klien/kolega
- **Progressive Web App**: Mengaktifkan fungsionalitas offline
- **Peningkatan Animasi**: Menambahkan lebih banyak animasi dan transisi yang halus

## 📄 Lisensi

Proyek ini dilisensikan di bawah ketentuan yang tercantum dalam file [LICENSE](LICENSE).

---

Dibuat oleh Arief F-sa Wijaya | © 2025
