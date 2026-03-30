# Minpro2PBW

# 1. Teknologi Yang Digunakan
## A. HTML
HTML (HyperText Markup Language) adalah bahasa standar yang digunakan untuk membuat struktur dasar dan konten halaman web, seperti paragraf, judul, gambar, dan link. HTML bukan bahasa pemrograman, melainkan bahasa markup (penanda) yang menggunakan tag untuk memberitahu browser cara menampilkan informasi. Ini adalah pondasi utama web bersama CSS dan JavaScript.

## B. CSS
CSS (Cascading Style Sheets) adalah bahasa style sheet yang digunakan untuk mengatur tampilan, tata letak (layout), warna, dan font dari dokumen HTML atau XML. CSS memisahkan konten dari desain visual, membuat website lebih menarik, fleksibel, dan responsif, serta mempermudah pemeliharaan tampilan di banyak halaman.

## C. BOOSTRAP5
Bootstrap 5 adalah framework CSS, HTML, dan JavaScript open-source terpopuler untuk pengembangan front-end yang responsif dan mobile-first. Dirilis tahun 2021, versi ini menghapus ketergantungan pada jQuery, beralih ke vanilla JavaScript, serta menghapus dukungan IE11, menjadikannya lebih cepat dan ringan dengan fitur modern seperti dark mode dan sistem grid yang lebih fleksibel.

# 2. Tampilan Section/Fitur
## A. Home
<img width="1348" height="990" alt="image" src="https://github.com/user-attachments/assets/0fd484b4-757a-4fdd-84b6-683153bf9cc8" />

## B. About Me
<img width="1346" height="990" alt="image" src="https://github.com/user-attachments/assets/0de38481-a2ee-4e4c-87b0-f09356f91c3d" />

## C. Achievment
<img width="1345" height="745" alt="image" src="https://github.com/user-attachments/assets/0783248a-9a77-48c5-a447-f170ac3c7061" />

## D. Certicate
<img width="1348" height="990" alt="image" src="https://github.com/user-attachments/assets/b44db324-baa6-4466-929f-ba5f431ecc84" />

# 3. Penjelasan Kode Section/Fitur
# 3.1 Bagian HTML
## A. Doctype html 
<img width="275" height="58" alt="image" src="https://github.com/user-attachments/assets/7e2bad6b-42e1-4590-8a56-b1a4eba76394" />


(!DOCTYPE html) berfungsi untuk memberi tahu browser bahwa dokumen menggunakan standar HTML5 sehingga ditampilkan dengan benar dan 
(html lang="id") berfungsi sebagai elemen utama pembungkus seluruh halaman HTML sekaligus menentukan bahasa utama halaman yaitu Bahasa Indonesia.

## B. Bagian Head
<img width="760" height="200" alt="image" src="https://github.com/user-attachments/assets/5a225e27-c7fd-4f60-9165-eb16e2cfe078" />

- (head)

  berfungsi sebagai bagian yang menyimpan informasi dan konfigurasi halaman yang tidak ditampilkan langsung di layar, seperti pengaturan metadata dan file pendukung.
- (meta charset="UTF-8")

  berfungsi untuk menentukan jenis encoding karakter agar teks dan simbol dapat ditampilkan dengan benar.
- (meta name="viewport" content="width=device-width, initial-scale=1")

  berfungsi untuk mengatur skala tampilan agar website responsif dan menyesuaikan ukuran layar perangkat.
- (title>Portfolio Fhr</title)

  berfungsi untuk menampilkan judul halaman pada tab browser.
- (link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet")

  berfungsi untuk menghubungkan framework Bootstrap sehingga dapat menggunakan sistem grid, komponen, dan desain responsif.
- (link rel="stylesheet" href="style.css")

  berfungsi untuk menghubungkan file CSS eksternal yang berisi styling tambahan sesuai desain yang dibuat.

## C. Navbar
<img width="744" height="351" alt="image" src="https://github.com/user-attachments/assets/f23ae5a5-6613-4a8c-bfa5-da440ca2bb04" />

Navbar berfungsi sebagai menu navigasi utama pada halaman portofolio. Desainnya sticky-top sehingga tetap terlihat saat pengguna scroll, dengan tampilan modern berwarna gelap dan link ke setiap section utama seperti Home, About Me, Achievement, dan Certificates.

- (nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm")

  berfungsi sebagai elemen navigasi utama website yang menggunakan Bootstrap untuk membuat navbar responsif, berwarna gelap, memiliki bayangan, dan tetap menempel di bagian atas saat discroll.
- (div class="container")

  berfungsi untuk membatasi lebar konten navbar agar rapi dan sejajar dengan section lainnya.
- (a class="navbar-brand fw-bold" href="#">Mfchr</a)

   berfungsi sebagai logo atau nama brand website yang tampil di sisi kiri navbar.
- (button class="navbar-toggler")

   berfungsi sebagai tombol menu berbentuk hamburger yang muncul pada layar kecil (mobile) untuk menampilkan atau menyembunyikan menu navigasi.
- (div class="collapse navbar-collapse" id="navbarNav")

  berfungsi untuk membungkus menu navigasi agar bisa dibuka dan ditutup saat mode mobile.
- (ul class="navbar-nav ms-auto")

  berfungsi sebagai daftar menu navigasi dan ms-auto membuat menu rata ke kanan.
- (li class="nav-item"><a class="nav-link" href=")

   berfungsi sebagai link navigasi yang akan mengarahkan pengguna ke section tertentu di dalam halaman (Home, About Me, Achievement, Certificates) melalui sistem anchor scroll.

## D. Hero
<img width="764" height="464" alt="image" src="https://github.com/user-attachments/assets/64c4bc71-aacf-4d3a-b0d9-c6378883bc4b" />

Hero berisi perkenalan singkat, headline utama, deskripsi, dan gambar atau ilustrasi pendukung. Fungsinya untuk menarik perhatian pengunjung dan memberikan gambaran singkat tentang siapa pemilik website atau isi utama website tersebut.

- (section id="home" class="hero-section d-flex align-items-center text-white")

  berfungsi sebagai bagian pembuka (hero section) dari website yang menjadi tampilan pertama saat halaman dibuka. Atribut id="home" digunakan agar navbar bisa mengarah ke bagian ini saat menu Home diklik. Class d-flex align-items-center dari Bootstrap membuat isi section berada di tengah secara vertikal, sedangkan text-white mengatur warna teks menjadi putih agar kontras dengan background gelap.
- (div class="container")

  berfungsi membatasi lebar konten agar rapi dan tidak terlalu melebar di layar besar.
- (div class="row align-items-center")

  digunakan untuk membuat layout berbasis grid Bootstrap dan menyusun konten dalam satu baris yang sejajar secara vertikal.
- (div class="col-lg-6 fade-up")

  membagi kolom menjadi setengah layar pada ukuran besar (large) dan berisi teks perkenalan. Class fade-up digunakan untuk animasi muncul dari bawah saat discroll.
- (h1 class="fw-bold")

  berfungsi sebagai judul utama perkenalan dan (span class="highlight") digunakan untuk memberi warna khusus pada nama agar lebih menonjol.
- (p class="mt-3")

  berisi deskripsi singkat tentang diri, dengan mt-3 memberi jarak atas agar tidak terlalu rapat dengan judul.
- (a href="#about" class="btn btn-warning mt-3")

  berfungsi sebagai tombol yang ketika diklik akan mengarahkan ke section About Me. "Class btn btn-warning" memberi gaya tombol berwarna kuning khas Bootstrap.
- (div class="col-lg-6 text-center fade-right")

  adalah kolom kedua yang berisi gambar, ditampilkan setengah layar pada ukuran besar. text-center membuat gambar berada di tengah dan fade-right memberi efek animasi muncul dari kanan.
- (img src="fotofhr (1).png" class="img-fluid hero-img" alt="Mahasiswa")

  berfungsi menampilkan gambar profil. Class img-fluid membuat gambar responsif mengikuti ukuran layar, sedangkan hero-img digunakan untuk styling tambahan seperti border radius dan shadow di CSS.

## E. About me
<img width="674" height="671" alt="image" src="https://github.com/user-attachments/assets/65b22905-0f3d-4851-a7b0-1087a5033198" />

Section About Me menampilkan deskripsi diri secara lebih detail, daftar project yang pernah dikerjakan, dan skill yang digambarkan melalui progress bar. Layout dua kolom membuat teks dan visual tetap rapi, dan progress bar memberikan representasi visual kemampuan dalam bidang teknologi informasi, desain jaringan, dan pemrograman berbasis objek.

- (section id="about" class="py-5 bg-white")

  berfungsi sebagai bagian About Me yang menampilkan informasi lebih detail tentang diri. Atribut id="about" digunakan agar menu navbar dapat mengarahkan ke bagian ini, sedangkan py-5 memberi jarak atas dan bawah agar section tidak terlalu rapat, dan bg-white memberi latar belakang putih agar kontras dengan section lain.

- (div class="container")

  membatasi lebar konten agar tetap rapi dan sejajar dengan section lainnya.
  
- (h2 class="text-center fw-bold mb-5 fade-up">About Me</h2)

  berfungsi sebagai judul section yang ditampilkan di tengah, dengan teks tebal dan jarak bawah (mb-5). Class fade-up memberi efek animasi muncul saat discroll.

- (div class="row")

  digunakan untuk membagi konten menjadi dua kolom menggunakan sistem grid Bootstrap.
- (div class="col-lg-6 fade-left")

  berisi deskripsi diri dan daftar project. Class col-lg-6 membuat kolom menjadi setengah layar pada ukuran besar, dan fade-left memberi animasi muncul dari kiri.
- (p)

  digunakan untuk membuat paragraph teks dan berfungsi untuk menstrukturkan dokumen web agar lebih mudah dibaca.
- (h5 class="mt-4">Project</h5)

  menjadi subjudul untuk daftar project dan (ul class="project-list") menampilkan beberapa project akhir yang pernah dikerjakan selama perkuliahan sebagai bukti pengalaman akademik.

- (div class="col-lg-6 fade-right")

  berisi daftar skill dengan animasi muncul dari kanan, lalu (h5 class="mb-3">Skills</h5) sebagai subjudul.
- (p), (div class="progress"), dan (div class="progress-bar")

  (p) untuk menampilkan nama skill, lalu (div class="progress") dan (div class="progress-bar") digunakan untuk membuat progress bar dari Bootstrap. Properti style="width:74%", 78%, dan 60% menunjukkan tingkat pemahaman atau penguasaan pada masing-masing bidang, yaitu Sistem Basis Data, Desain Jaringan Komputer, dan Pemrograman Berbasis Objek.
  
## F. Achievment
<img width="736" height="318" alt="image" src="https://github.com/user-attachments/assets/4d60b578-5d96-4ad4-9707-24fdc5a4bad2" />

Achievement menampilkan pencapaian penting seperti Beasiswa Bakti BCA dalam kotak dekoratif (.achievement-box) dengan sudut membulat, bayangan, dan efek hover interaktif. Efek ini membuat kotak terlihat menonjol dan menarik perhatian pengunjung saat mouse berada di atasnya.

- (section id="achievement" class="py-5 bg-light")

  berfungsi sebagai bagian Achievement yang menampilkan pencapaian atau prestasi. Atribut id="achievement" digunakan agar navbar bisa mengarahkan ke bagian ini, sedangkan py-5 memberi jarak atas dan bawah, dan bg-light memberi latar belakang abu muda agar berbeda dari section sebelumnya.
- (div class="container")

  menjaga agar konten tetap rapi dan tidak terlalu melebar.
- (h2 class="text-center fw-bold mb-5 fade-up">Achievement</h2)

  adalah judul section yang ditampilkan di tengah, dengan teks tebal dan jarak bawah. Class fade-up memberi animasi muncul saat discroll.
- (div class="row justify-content-center")

  digunakan untuk membuat layout grid dan memposisikan konten tepat di tengah secara horizontal.
- (div class="col-md-6 fade-up")

  membuat lebar konten setengah layar pada ukuran medium ke atas, serta memberi animasi muncul dari bawah.
- (div class="achievement-box text-center")

  adalah kotak utama yang menampilkan isi achievement. Class ini diatur di CSS untuk memiliki background putih, padding, border radius, shadow, dan efek hover agar terlihat seperti card modern. text-center membuat seluruh isi di dalamnya rata tengah.
- (h2>🏅</h2) menampilkan ikon medali sebagai simbol pencapaian.
- (h5 class="fw-bold">Awardee Beasiswa Bakti BCA</h5)

  menampilkan nama pencapaian dengan teks tebal agar lebih menonjol.
- (p class="mb-0 text-center">Tahun 2026</p)

  menampilkan tahun pencapaian tanpa margin bawah agar lebih rapat dengan teks di bawahnya.
- (small)

  berisi deskripsi singkat tentang award tersebut, menjelaskan bahwa beasiswa diberikan setelah melalui proses seleksi oleh pihak Bank BCA.

## G. Certificate
<img width="434" height="586" alt="image" src="https://github.com/user-attachments/assets/a78a902f-f415-4a91-96b8-1e68c1fb1aba" />

Certificates menampilkan daftar sertifikat dalam bentuk kartu dengan gambar dan judul. Setiap kartu menggunakan efek hover untuk memperbesar gambar dan mengangkat kartu sedikit, memberi kesan interaktif dan modern. Layout responsif memastikan kartu tetap rapi pada berbagai ukuran layar.

- (<section id="certificates" class="py-5 bg-dark text-white")

  berfungsi sebagai bagian Certificates yang menampilkan daftar sertifikat yang pernah diperoleh. Atribut id="certificates" digunakan agar navbar bisa mengarahkan ke section ini, py-5 memberi jarak atas dan bawah agar tidak terlalu rapat, bg-dark memberi latar belakang gelap, dan text-white membuat teks berwarna putih agar kontras dengan background.
- (div class="container")

  menjaga tata letak agar tetap rapi dan sejajar dengan section lain.
- (h2 class="text-center fw-bold mb-5 fade-up">Certificates</h2)

  adalah judul section yang ditampilkan di tengah dengan teks tebal dan jarak bawah. Class fade-up memberi efek animasi muncul saat discroll.
- (div class="row g-4")

  digunakan untuk membuat layout grid Bootstrap, sedangkan g-4 memberi jarak antar kolom (gap) agar card tidak saling menempel.
- (div class="col-md-4 fade-up")

  membagi baris menjadi tiga kolom pada ukuran medium ke atas (masing-masing 1/3 lebar layar) dan akan otomatis turun ke bawah saat layar lebih kecil. Class fade-up memberi animasi muncul dari bawah.
- (<div class="card h-100")

  berfungsi sebagai wadah setiap sertifikat. Class h-100 membuat tinggi card sama rata dalam satu baris.
- (img src="inporca, bca, spmidx" class="card-img-top")

  menampilkan gambar sertifikat di bagian atas card. Class card-img-top dari Bootstrap membuat gambar otomatis menyesuaikan dengan desain card.
- (div class="card-body text-center")
  adalah bagian isi card yang berisi teks dan dibuat rata tengah.
- (h5)
  menampilkan nama sertifikat, seperti Edukasi Literasi Keuangan by BCA, Kepengurusan INFORSA 2025, dan Sekolah Pasar Modal by IDX.
  
# 3.2 Bagian CSS
## A. CSS Dasar
<img width="275" height="251" alt="image" src="https://github.com/user-attachments/assets/1f6bb8e7-e1e4-4cde-8e05-94250d65c70a" />

- (margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif;)
  dalah universal selector yang berlaku untuk semua elemen HTML. margin: 0; dan padding: 0; digunakan untuk menghapus jarak default bawaan browser agar layout lebih konsisten. box-sizing: border-box; membuat perhitungan lebar dan tinggi elemen menjadi lebih mudah karena padding dan border dihitung ke dalam ukuran total elemen. font-family: 'Segoe UI', sans-serif; mengatur jenis font utama yang digunakan di seluruh website agar tampilan teks konsisten.
- (html { scroll-behavior: smooth; })
  
  berfungsi untuk membuat efek scroll menjadi halus saat pengguna mengklik link navigasi yang mengarah ke section tertentu (misalnya dari navbar ke About atau Certificates).
- (body { background: #f8fafc; color: #1e293b; line-height: 1.7; overflow-x: hidden; })

  mengatur tampilan dasar halaman, di mana background memberi warna latar belakang utama website, color menentukan warna teks default, line-height: 1.7; memberi jarak antar baris agar teks lebih nyaman dibaca, dan overflow-x: hidden; mencegah munculnya scroll horizontal akibat elemen yang melebar keluar layar.

## B. Navbar
<img width="381" height="262" alt="image" src="https://github.com/user-attachments/assets/fc6265b7-e0ee-4526-8a07-bac342c24157" />

- (.navbar { transition: all 0.4s ease;})

  Bagian ini memberi efek transisi halus pada seluruh elemen navbar selama 0.4 detik. Artinya, jika ada perubahan properti (misalnya warna atau posisi), perubahannya tidak langsung kasar, tetapi bergerak smooth.
- (.nav-link {transition: all 0.3s ease;})
  Ini memberi efek transisi halus pada setiap link menu (Home, About Me, dll) selama 0.3 detik ketika terjadi perubahan seperti hover.
- (.nav-link:hover {color: #ffc107 !important; transform: translateY(-2px);})
  Bagian ini aktif saat kursor diarahkan ke menu. color: #ffc107 mengubah warna teks menjadi kuning saat di-hover, dan transform: translateY(-2px); membuat teks sedikit naik ke atas 2px sehingga terlihat lebih interaktif. !important digunakan agar warna ini tidak kalah oleh warna bawaan Bootstrap.

## c. Hero
<img width="511" height="705" alt="image" src="https://github.com/user-attachments/assets/59398b95-82cd-4fe4-8644-4afbf9ab6e0e" />

- (.hero-section)
  
  Mengatur tampilan utama (hero) agar setinggi layar penuh (100vh) dengan background gradasi gelap. position: relative dipakai supaya bisa menempatkan elemen dekorasi di dalamnya, dan overflow: hidden supaya tidak ada elemen yang keluar dari batas section.
- (hero-section::after)

  Pseudo-element untuk membuat efek lengkungan putih di bagian bawah hero. Menggunakan position: absolute agar bisa diatur posisinya, lalu border-radius membentuk setengah oval sebagai pemisah ke section berikutnya.
- (fade-up p { text-align: justify; line-height: 1.8; })
  
  Mengatur paragraf agar rata kiri-kanan dan jarak antar baris lebih lega supaya lebih nyaman dibaca.
- (.highlight { color: #ffc107; })

  Memberi warna kuning pada teks tertentu agar terlihat menonjol.
- (.hero-img { border-radius: 20px; box-shadow)

  Mengatur tampilan gambar agar sudutnya membulat, memiliki bayangan, dan punya efek animasi halus saat terjadi perubahan.
- (.hero-img:hover { transform: scale(1.03); })

  Memberi efek zoom kecil saat gambar disentuh kursor.
- (section { position: relative; })

  Membuat semua section bisa menampung elemen dekorasi dengan posisi absolut.
- (section:not(.hero-section)::before)

  Membuat efek lengkungan di bagian atas setiap section selain hero. Menggunakan background: inherit agar warnanya mengikuti section tersebut dan border-radius untuk membentuk lengkungan.

## D. Project List
<img width="325" height="238" alt="image" src="https://github.com/user-attachments/assets/158b8bad-bdee-41ae-9eb2-ba9cdb97de3e" />

- (.project-list { list-style: disc; padding-left: 20px; })

  Mengatur tampilan daftar project agar menggunakan bullet (titik) dan memberi jarak ke dalam di sisi kiri supaya teks tidak terlalu mepet ke pinggir.
- (.project-list li:hover { transform: translateX(5px); color: #ffc107; transition: 0.3s; })

  Memberikan efek interaktif saat item project disentuh kursor: teks bergeser sedikit ke kanan dan berubah warna menjadi kuning, dengan animasi halus selama 0.3 detik.
- (.progress { height: 8px; border-radius: 20px; })

  Mengatur tampilan progress bar agar lebih tipis (tinggi 8px) dan memiliki sudut membulat sehingga terlihat modern.
- (.progress-bar { transition: width 1.5s ease-in-out; })

  Memberikan animasi pada perubahan lebar progress bar, sehingga saat nilainya muncul atau berubah, pergerakannya terlihat halus selama 1.5 detik.
  
## E. Progress
<img width="403" height="236" alt="image" src="https://github.com/user-attachments/assets/2e8053be-821a-494a-a20b-1c91c5f4b17c" />

- (.progress-bar { transition: width 1.5s ease-in-out; })

  Kode ini digunakan untuk mengatur tampilan progress bar di halaman “About Me” agar lebih tipis dengan tinggi 8px dan memiliki sudut membulat. Hal ini membuat progress bar terlihat lebih modern dan elegan, serta garisnya tidak kaku, sehingga setiap indikator skill yang ditampilkan terasa lebih halus dan nyaman dilihat.
- (.progress-bar { transition: width 1.5s ease-in-out; })

  Kode ini memberikan efek animasi pada perubahan lebar progress bar, sehingga saat nilai skill (misal Sistem Basis Data 74%, Desain Jaringan Komputer 78%, Pemrograman Berbasis Objek 60%) muncul atau berubah, pergerakannya terlihat halus selama 1,5 detik. Efek ease-in-out membuat perubahan dimulai dan diakhiri secara lembut, sehingga tampilan skill terasa lebih dinamis dan menarik.
  
## F. Achievment
<img width="479" height="274" alt="image" src="https://github.com/user-attachments/assets/5fa1c102-03cc-4ed5-9040-d994fa637c6d" />

- (.achievement-box { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition: 0.4s; })

  Mengatur tampilan kotak achievement agar terlihat bersih dan modern dengan latar putih, memberi jarak isi kotak dari tepi menggunakan padding 30px agar rapi, dan membulatkan sudut dengan border-radius 20px supaya elegan. Box-shadow digunakan untuk memberi efek kedalaman sehingga kotak terlihat mengambang, sementara transition 0.4s membuat setiap perubahan properti, seperti saat hover, bergerak dengan halus.
- (.achievement-box:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(0,0,0,0.15); })

  Memberikan efek interaktif saat mouse berada di atas kotak, di mana kotak sedikit terangkat ke atas menggunakan transform translateY(-8px) dan bayangan diperbesar serta digelapkan dengan box-shadow, membuat kotak terlihat menonjol dan lebih fokus, sekaligus mempertahankan transisi halus dari pengaturan sebelumnya.

## G. Certificate
<img width="469" height="507" alt="image" src="https://github.com/user-attachments/assets/a47bcff2-ef76-4c5b-bf99-7b875b906701" />

- (.card { border: 4px solid #ffc107; border-radius: 30px; overflow: hidden; transition: 0.4s; padding: 15px; background: white; })

  Mengatur tampilan kartu sertifikat agar memiliki border tebal berwarna kuning (#ffc107) yang menonjolkan batas kartu, dengan sudut membulat 30px supaya terlihat elegan dan modern. Overflow diset ke hidden supaya konten di dalam kartu tidak keluar dari batas saat ada efek transformasi, sementara padding 15px memberi jarak antara isi kartu dan tepi. Background putih membuat isi kartu terlihat jelas, dan transition 0.4s memastikan setiap perubahan properti, seperti hover, bergerak dengan halus.
- (.card img { height: 240px; object-fit: cover; transition: 0.5s; border-radius: 20px; })

  Mengatur gambar di dalam kartu agar memiliki tinggi 240px dan menyesuaikan proporsinya tanpa merusak rasio asli menggunakan object-fit cover. Border-radius 20px membuat sudut gambar sedikit membulat agar serasi dengan bentuk kartu, dan transition 0.5s membuat setiap perubahan, seperti saat zoom hover, terlihat halus.
- (.card:hover img { transform: scale(1.08); })

  Memberikan efek interaktif pada gambar ketika mouse hover, di mana gambar sedikit diperbesar 8% dengan transform scale(1.08), sehingga tampilan kartu menjadi lebih hidup dan menarik perhatian.
- (.card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.2); })

  Saat mouse berada di atas kartu, seluruh kartu sedikit terangkat ke atas menggunakan translateY(-8px) dan bayangan diperbesar serta digelapkan dengan box-shadow untuk memberi efek kedalaman, membuat kartu terlihat menonjol dan interaktif, sekaligus menjaga transisi halus dari pengaturan awal.
  
## H. Animasi
<img width="423" height="402" alt="image" src="https://github.com/user-attachments/assets/7359c865-afb1-4135-82fd-02b69230991a" />

- (.fade-up, .fade-left, .fade-right { opacity: 0; transition: all 1s ease; })
  
  Mengatur elemen-elemen yang memiliki kelas fade agar awal tampilannya tersembunyi dengan opacity 0, dan setiap perubahan properti akan terjadi secara halus dalam 1 detik menggunakan easing ease. Ini menyiapkan elemen untuk animasi masuk ketika pengguna scroll ke bagian tertentu.
- (.fade-up { transform: translateY(40px); })
  
  Menentukan elemen dengan kelas fade-up akan tergeser ke bawah 40px saat awal tampilannya, sehingga saat animasi terjadi, elemen terlihat bergerak ke atas ke posisi semula saat muncul.
- (.fade-left { transform: translateX(-40px); })

  Menentukan elemen dengan kelas fade-left akan tergeser ke kiri 40px di awal, sehingga saat animasi muncul, elemen bergerak ke kanan ke posisi aslinya, memberi efek masuk dari kiri.
- (.fade-right { transform: translateX(40px); })
  
  Menentukan elemen dengan kelas fade-right akan tergeser ke kanan 40px di awal, sehingga saat animasi muncul, elemen bergerak ke kiri ke posisi semula, memberi efek masuk dari kanan.
- (.show { opacity: 1 !important; transform: translate(0) !important; })

  Kelas show digunakan oleh JavaScript untuk menampilkan elemen saat terlihat di viewport. Semua elemen fade yang mendapatkan kelas show akan menjadi sepenuhnya terlihat (opacity 1) dan kembali ke posisi normal (tidak bergeser), dengan efek transisi halus sesuai pengaturan sebelumnya.
  
- (#about p { text-align: justify; })
  
  Mengatur paragraf di section About Me agar teks rata kanan-kiri, sehingga tampilan tulisan lebih rapi dan mudah dibaca, terutama untuk teks yang panjang seperti deskripsi pengalaman dan project.
  
## I. Responsif
<img width="413" height="331" alt="image" src="https://github.com/user-attachments/assets/b2e08696-9fa8-45fb-9a2c-8765d6097f86" />

- (@media (max-width: 768px) { .hero-img { margin-top: 30px; } })

  Kode ini digunakan agar tampilan halaman lebih responsif pada layar kecil seperti tablet atau smartphone. Pada lebar layar maksimal 768px, gambar hero (.hero-img) diberi margin-top 30px supaya ada jarak antara gambar dan elemen lain di atasnya, sehingga layout tetap rapi dan tidak menempel ke tepi atas layar.
- (@media (max-width: 768px) { .hero-section::after { height: 80px; } })

  Bagian ini mengatur pseudo-elemen ::after di hero section agar tingginya menjadi 80px pada layar kecil, biasanya untuk menjaga jarak dekoratif atau efek visual tetap proporsional, sehingga tampilan hero tetap seimbang meski layar lebih sempit.
- (@media (max-width: 768px) { #about p { text-align: left; } })

  Kode ini mengubah perataan teks paragraf di section About Me dari justify menjadi left saat layar kecil. Hal ini dilakukan agar teks lebih mudah dibaca pada perangkat dengan lebar sempit, karena justify pada layar kecil sering membuat jarak antar kata tidak merata dan terlihat kurang rapi.
