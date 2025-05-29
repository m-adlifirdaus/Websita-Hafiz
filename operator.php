<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>LATIHAN SOAL PHP</title>
        <style>
            body {
                background-color: white;
                padding-top: 10%;
            }
            

            .Container-Navbar {
                background-color: white;
                width: 100%;
                height: 100px;
                position: fixed;
                box-shadow: 0 8px 20px rgba(32, 102, 22, 1.5);
                top: 0;
                z-index: 999;
            }

            .Navbar-Wrapper {
                display: flex;
                justify-content: space-between; /* kiri & kanan */
                align-items: center;
                height: 100%;
                padding: 0 40px;
            }

            .ul-Navbar-Left {
                font-size: 20px;
                font-weight: bold;
                color: black;
                font-family: "Noto Sans", sans-serif;
                list-style: none;
                justify-content: flex-start;
                font-size: 20;
            }

            .ul-Navbar-Right {
                height: 100px;
                display: flex;
                align-items: center;
                margin: 0;
                padding: 0 40px;
                list-style: none;
                justify-content: flex-end;
                font-size: 17px;
                font-family: "Noto Sans", sans-serif;
                gap: 20px;
            }

            .li-Navbar-Right {
                margin: 0 15px;
                display: flex;
                align-items: center;
                height: 100%;
            }

            .a-Navbar:hover {
                background-color: #b8b6b6;
                transition: 0.3s ease-in-out;
                transition-delay: 0.1s;
                border-radius: 25px;
                padding: 15px 25px;
                display: inline-block;
            }

            .a-Navbar {
                font-size: 20;
                color: black;
                text-decoration: none;
                font-weight: 500;
            }

            .Container-Content-fluid px-0 {
                margin: 0;
                background-color: white;
                justify-content: center;
                align-items: center;
                display: flex;
                height: 1000cm;
                box-shadow: none;
                border-top: 1px solid #ccc;
                border-bottom: 1px solid #ccc;
                width: 100%;
                padding: 40px 0;
                border-radius: 0;
                box-sizing: border-box;
            }

            .a-Content {
                display:flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: left;
                color: black;
                text-decoration: none;
            }

            p {
                text-align: justify;
            }

            .hr-batas {
                border: none; 
                height: 2px; 
                background: linear-gradient(to right,rgb(0, 0, 0), #222); 
                margin: 40px auto; 
                width: 60%;
            }

            .container-fluid px-0 {
                max-width: 100%;
                margin: 0;
                background: #ffffff;
                padding: 0;
                border-radius: 12px;
                box-shadow: 0 8px 20px rgba(10,255,90,0);
            }


            .btn-link {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color:rgb(32, 102, 22);
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s;
            font-family: "Noto Sans", sans-serif;
            }

            .btn-link:hover {
                background-color: black;
            }

            .h1-php {
                text-align: center;
                color: #222;
                margin-bottom: 20px;
                font-family: "Noto Sans", sans-serif;
            }

            .h2-php {
                color: #222;
                border-left: 6px solid rgb(32, 102, 22);
                padding-left: 12px;
                margin-top: 40px;
                font-family: "Noto Sans", sans-serif;
            }

            .output {
                background-color: #f1f8ff;
                padding: 20px;
                border-left: 5px solid rgb(47, 180, 29);;
                border-radius: 8px;
                font-family: 'Courier New', monospace;
                margin-top: 15px;
                margin: 0 30px;
            }

            .output p {
                margin: 10px 0;
                font-size: 16px;
            }

            strong {
                color: rgb(104, 4, 117);
            }

            .Container-Footer {
                background-color: #111;
                box-shadow: none;
                font-family: "Noto Sans", sans-serif;
            }

            .h1-Footer {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 20px;
                color: white;
            }

            .h4-Footer {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 15px;
                height: 40px;
                color: white;
            }

            .Container-Footer h3 {
                margin-bottom: 10px;
                font-size: 18px;
                color: #f0f0f0;
            }

            .Container-Footer a:hover {
                text-decoration: underline;
            }


        </style>
    </head>
    <body>
        <!-- NAVIGATION BAR -->
        <div class="Container-Navbar">
            <div class="Navbar-Wrapper">
                <ul class="ul-Navbar-Left">
                    <li class="li-Navbar-Left">
                        <a>AHMAD HAFIZ</a>
                    </li>
                </ul>
                
                <ul class="ul-Navbar-Right">
                    <li class="li-Navbar-Right">
                        <a href="index.html" class="a-Navbar">Home</a>
                    </li>
                    <li class="li-Navbar-Right">
                        <a href="tipedata.php" class="a-Navbar">Tipe Data</a>
                    </li>
                    <li class="li-Navbar-Right">
                        <a href="operator.php" class="a-Navbar" style="font-weight: bold; border-bottom: 3px solid rgb(32, 102, 22); padding-bottom: 5px;">Soal</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- NAVIGATION BAR END -->

         <!-- NAME OF CONTENT -->
        </div>
            <div class="container-fluid px-0">
                <h1 class="h1-php">LATIHAN SOAL PHP</h1>
                <h2 class="h1-php">by AHMAD HAFIZ</h2>
                <h2 class="h1-php">XI-4</h2>


                <h2 class="h2-php">1. Soal Operator PHP</h2>
                <div class="output">
                    <?php
                    $bilangan1 = 12;
                    $bilangan2 = 5;
                    
                    echo "Diketahui bilangan a adalah 12 dan bilangan b adalah 5. Tentukan Hasil dari Semua Operator PHP pada dua bilangan tersebut! <br>";
                    echo "Jawab :  <br><br>";
                    echo "Penjumlahan = a + b = " . ($bilangan1 + $bilangan2). "<br>" ;
                    echo "Pengurangan = a - b = " . ($bilangan1 - $bilangan2) . "<br>";
                    echo "Perkalian = a * b = " . ($bilangan1 * $bilangan2) . "<br>";
                    echo "Pembagian = a / b = " . ($bilangan1 / $bilangan2) . "<br> ";
                    echo "Perpangkatan a ** b = " . ($bilangan1 ** $bilangan2) . "<br> ";
                    echo "Modulus(sisabagi) = a % b = " . ($bilangan1 % $bilangan2) . "<br>";
                    ?>
                </div>

                <h2 class="h2-php">2. Soal Keliling dan Luas Persegi Panjang</h2>
                <div class="output">
                    <?php
                    $panjang = 16;
                    $lebar = 5;
                    $luas = $panjang * $lebar;
                    $Keliling = 2 * ($panjang + $lebar);

                    echo "Diketahui suatu persegi panjang dengan panjang 16 cm, lebar 5 cm. Tentukan Luas dan Keliling persegi panjang tersebut! <br>";
                    echo "(Luas = Panjang x Lebar) <br>";
                    echo "(Keliling = 2 x (Panjang + Lebar) <br>";
                    echo "Jawab :  <br><br>";
                    echo "Luas = $luas <br>" ;
                    echo "Keliling = $Keliling <br>" ;
                    ?>
                </div>

                <h2 class="h2-php">3. Soal Kubus</h2>
                <div class="output">
                    <?php
                    $sisi = 8;
                    $volume = $sisi **3;
                    $luaspermukaan = 6* ($sisi**2);

                    echo "Diketahui suatu kubus dengan sisi 8 cm. Tentukan Volume dan Luas Permukaan Kubus tersebut! <br>";
                    echo "(Volume = sisi x sisi x sisi) <br>";
                    echo "(Luas Permukaan = 6 x (sisi x sisi) <br>";
                    echo "Jawab :  <br><br>";
                    echo "Volume = $volume <br>" ;
                    echo "Luas Permukaan = $luaspermukaan <br>" ;
                    ?>
                </div>

                <h2 class="h2-php">4. Soal Analisis</h2>
                <div class="output" style="margin-bottom: 20px;">
                    <?php
                    $a = 10;
                    $b = 2.5;
                    $c ="3";
                    $d= "hello";

                    echo "a + b = " . ($a + $b) . "<br>";
                    echo "a + c = " . ($a + $c) . "<br>";
                    echo "a + d = Fatal error <br>";

                    ?>
                </div>

                <a href="index.html" class="btn-link" style="margin-bottom: 100px;">Back</a>
            </div>    
         </div>
         
        <!-- NAME OF CONTENT END -->

        <!-- FOOTER -->
        <div class="Container-Footer">
            <div style="display: flex; justify-content: space-around; padding: 40px 20px; flex-wrap: wrap; color: white; font-family: 'Noto Sans', sans-serif;">
                <div>
                    <h3>About Me</h3>
                    <p>Ahmad Hafiz<br>Siswa SMA Negeri 7 Banjarmasin</p>
                </div>
                <div>
                    <h3>Quick Links</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="index.html" style="color: white; text-decoration: none;">Home</a></li>
                        <li><a href="tipedata.php" style="color: white; text-decoration: none;">Tipe Data</a></li>
                        <li><a href="operator.php" style="color: white; text-decoration: none;">Latihan Soal</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Follow Me at</h3>
                    <p>
                        <a href="https://www.instagram.com/hi_fizz?igsh=ajg5d2lhZ20yNG9m&utm_source=qr" style="color: white; text-decoration: none;">Instagram</a><br>
                    </p>
                </div>
            </div>
            <div style="text-align: center; padding: 10px; background-color: black; color: white;">
                © 2025 Ahmad Hafiz. All Rights Reserved.
            </div>
        </div>

        <!-- FOOTER END -->
    </body>
</html>