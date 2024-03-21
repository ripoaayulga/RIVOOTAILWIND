<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .produk {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }
        .produk-item {
            width: 30%;
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .produk-item img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .produk-item h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .produk-item p {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .produk-item .harga {
            color: #009688;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Produk</h1>
        <div class="produk">
            <div class="produk-item">
                <h3> Baju polo</h3>
                <p>Baju ini sangat enak ketika digunakan</p>
                <p class="harga">Rp100.000</p>
            </div>
            <div class="produk-item">
                <h3>Baju kemeja</h3>
                <p>baju ini cocok digunakan ketika pergi kuliah</p>
                <p class="harga">Rp150.000</p>
            </div>
            <div class="produk-item">
                <h3>Baju tidur</h3>
                <p>Baju ini sangat enak digunakan ketika tidur</p>
                <p class="harga">Rp20.000</p>
            </div>
            <!-- Tambahkan produk lainnya di sini -->
        </div>
    </div>
</body>
</html>
