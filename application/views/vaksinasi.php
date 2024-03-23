<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title>Pendaftaran Vaksinasi Covid Keliling Universitas!</title>
    <style type="text/css">
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

header {
    background-color: #4caf50;
    padding: 15px;
    color: #fff;
    text-align: center;
}

h1 {
    margin: 0;
    font-size: 2em;
}

p {
    margin: 5px 0;
}

nav {
    display: flex;
    justify-content: center;
    background-color: #333;
    padding: 10px;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 15px;
    font-weight: bold;
}

nav a:hover {
    color: #4caf50;
}

section {
    padding: 20px;
    text-align: center;
}

.vaccine-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.vaccine-card {
    margin: 10px;
    padding: 15px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.vaccine-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 10px;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 8px;
}

input,
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

.registration-box {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 0 auto;
}

.registration-box label {
    display: block;
    margin-bottom: 8px;
}

.registration-box input,
.registration-box select {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

.registration-box button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

.registration-box button:hover {
    background-color: #45a049;
}

.hidden {
    display: none;
}  

section#kontak {
    padding: 20px;
    text-align: center;
    background-color: #fff;
    margin: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    width: 80%;
    margin: 0 auto;
}

label,
textarea,
input {
    display: block;
    width: 100%;
    margin-bottom: 16px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

.hidden {
    display: none;
}  
</style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('registration-form');
        const successSection = document.getElementById('berhasil-daftar');
    
        document.getElementById('submit-button').addEventListener('click', function () {

    
            showSuccessBox();
        });
    
        function showSuccessBox() {
            successSection.classList.remove('hidden');
            setTimeout(function () {
                successSection.classList.add('hidden');
            }, 30000); 
        }
    });
    </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('registration-form');
            const successSection = document.getElementById('berhasil-kontak');
        
            document.getElementById('submit-button-kontak').addEventListener('click', function () {
    
        
                showSuccessBox();
            });
        
            function showSuccessBox() {
                successSection.classList.remove('hidden');
                setTimeout(function () {
                    successSection.classList.add('hidden');
                }, 30000); 
            }
        });
        </script>
</head>

<body>
    <header>
        <h1>Pendaftaran Vaksinasi Covid</h1>
        <p>Vaksinasi Keliling Kampus! Vaksinasi Diadakan di Universitas BSI Cimone!</p>
    </header>

    <nav>
        <a href="#home">Beranda</a>
        <a href="#vaksin">Jenis Vaksin</a>
        <a href="#daftar">Pendaftaran</a>
        <a href="#Loc">Lokasi Vaksin</a>
        <a href="#kontak">Kontak</a>
    </nav>

    <section id="home">
        <div style="text-align: center;">
            <h2>Vaksinsinasi Keliling Universitas Bina Sarana Informatika!</h2>
            <p>Dengan menaiknya tingkat terjangkit Virus Covid-19 ditahun ini, Kami organisasi Mahasiswa Universitas BSI menyelenggarakan Vaksinasi Keliling Universitas Bina Sarana Informatika. 
                Kami akan mengunjungi Setiap Cabang-cabang Universitas Bina Sarana Informatika untuk mengadakan Vaksinasi dan juga memastikan setiap warga yang tinggal dekat kampus mendapatkan Vaksinasi.</p>
            </div>
        </div>
    </section>

    <Section id="vaksin">
        <div class="vaccine-container">
            <div class="vaccine-card">
                <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1615869563/attached_image/vaksin-sinovac.jpg" width="200px" height="400px" alt="Sinovac" class="vaccine-image">
                <p>Sinovac</p>
            </div>
            <div class="vaccine-card">
                <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1620702377/attached_image/ini-fakta-keamanan-vaksin-astrazeneca-untuk-covid-19.jpg" width="200px" height="400px" alt="AstraZeneca" class="vaccine-image">
                <p>AstraZeneca</p>
            </div>
            <div class="vaccine-card">
                <img src="https://d1bpj0tv6vfxyp.cloudfront.net/articles/492003_26-5-2021_11-27-12.jpeg" width="200px" height="400px" alt="Pfizer" class="vaccine-image">
                <p>Pfizer</p>
            </div>
            <div class="vaccine-card">
                <img src="https://cdn-images-1.medium.com/max/800/0*Dg13OzeyWx0sNPxO"  width="200px" height="400px" alt="Moderna" class="vaccine-image">
                <p>Moderna</p>
            </div>
        </Section>

    <section id="berhasil-daftar" class="hidden">
        <div class="success-box">
            <p>Pendaftaran Anda berhasil! Silahkan Kunjungi Universitas Bina Sarana Informatika di Waktu dan Tanggal yang ditentukan untuk melakukan Vaksinasi!.</p>
        </div>
    </section>

    <section id="daftar">
        <form action="#" method="post" class="registration-box">
            <h2>Pendaftaran Vaksinasi 25 Desember 2023</h2>
            <form action="#" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
    
                <label for="umur">Umur:</label>
                <input type="number" id="umur" name="umur" required>
    
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
    
                <label for="jenis_vaksin">Jenis Vaksin:</label>
                <select id="jenis_vaksin" name="jenis_vaksin" required>
                    <option value="sinovac">Sinovac</option>
                    <option value="astrazeneca">AstraZeneca</option>
                    <option value="pfizer">Pfizer</option>
                    <option value="moderna">Moderna</option>
                </select>
    
                <button type="button" id="submit-button">Daftar</button>
            </form>
        </form>
    </section>

    <section id="berhasil-kontak" class="hidden">
        <div class="success-box">
            <p>Pesan Anda Sudah Terkirim Mohon Tunggu Balasan Kami Terimakasih Atas Perhatiannya Semoga Sehat Selalu!</p>
        </div>
    </section>

<section id="kontak">
    <h2>Hubungi Kami</h2>
    <p>Jika Anda memiliki pertanyaan lebih lanjut, silakan hubungi kami melalui formulir di bawah ini:</p>

    <form action="#" method="post">
        <label for="nama_kontak">Nama:</label>
        <input type="text" id="nama_kontak" name="nama_kontak" required>

        <label for="email_kontak">Email:</label>
        <input type="email" id="email_kontak" name="email_kontak" required>

        <label for="pesan_kontak">Pesan:</label>
        <textarea id="pesan_kontak" name="pesan_kontak" rows="4" required></textarea>

        <button type="button" id="submit-button-kontak">Kirim</button>
    </form>
</section> 

<section id="Loc">
    <h2>Lokasi Vaksin Universitas Bina Sarana Informatika Cimone</h2>
    <div class="vaccine-container">
        <div class="vaccine-card">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126915.61944842571!2d106.61634789809385!3d-6.248823517747059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fed92813c0fd%3A0xbc4ad5911aa639b9!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Tangerang%20(UBSI%20Tangerang)!5e0!3m2!1sid!2sid!4v1596787556106!5m2!1sid!2sid" width="500" height="400" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    <footer>
        <p>&copy; 2023 Website Vaksinasi Keliling by Audy Ravael, Rayhan Putra Devandra, Alfin Simbolon</p>
    </footer>
</body>
</html>
