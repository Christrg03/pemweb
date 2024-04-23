<!DOCTYPE html>
<html>
<head>
    <title>Mengolah Nama Keluarga</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        form {
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Program Mengolah Nama Keluarga</h2>
        <form method="post">
            <label for="nama">Masukkan Nama Keluarga:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>
            <input type="submit" value="Submit">
        </form>

        <div class="result">
            <?php
            function sjei_sisj_($input) {
                // Fungsi yang mungkin diperlukan untuk memanipulasi nama
                return ucwords(strtolower($input));
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = $_POST["nama"];

                $Nama = sjei_sisj_($nama);
                echo "Nama : $Nama<br>";

                // 1. Menghitung jumlah kata dalam input
                $jumlah_kata = str_word_count($nama);

                // 2. Menampilkan jumlah kata
                echo "Jumlah Kata: $jumlah_kata<br>";

                // 3. Menampilkan jumlah huruf
                $jumlah_huruf = strlen($nama);
                echo "Jumlah Huruf: $jumlah_huruf<br>";

                // 4. Menampilkan kebalikan dari nama
                $kebalikan_nama = strrev($nama);
                echo "Kebalikan Nama: $kebalikan_nama<br>";

                // 5. Menampilkan jumlah konsonan dan vokal pada nama
                $jumlah_konsonan = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $nama);
                $jumlah_vokal = preg_match_all('/[aeiou]/i', $nama);
                echo "Jumlah Konsonan: $jumlah_konsonan<br>";
                echo "Jumlah Vokal: $jumlah_vokal<br>";
            }
            ?>
        </div>
    </div>
</body>
</html>
