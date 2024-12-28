<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediksi Harga Rumah Menggunakan Regresi Linear</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #2c3e50, #3498db);
        }

        /* Container to center the form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        /* Form container styling */
        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        /* Heading */
        .form-container h1 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }

        /* Label styling */
        label {
            display: block;
            font-size: 1em;
            margin-bottom: 8px;
            text-align: left;
            color: #333;
        }

        /* Input field styling */
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        /* Button styling */
        button {
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }

            .form-container h1 {
                font-size: 1.5em;
            }

            input, select {
                font-size: 0.9em;
            }

            button {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Prediksi Harga Rumah</h1>
            <form method="post" action="/predict">
                <?= csrf_field() ?>
                <label for="luas_tanah">Luas Tanah (m²):</label>
                <input type="number" id="luas_tanah" name="luas_tanah" required>

                <label for="jumlah_kamar">Jumlah Kamar:</label>
                <input type="number" id="jumlah_kamar" name="jumlah_kamar" required>

                <label for="lokasi">Lokasi:</label>
                <select name="lokasi" id="lokasi">
                    <option value="Kota A">Kota A</option>
                    <option value="Kota B">Kota B</option>
                </select>

                <button type="submit">Prediksi</button>
            </form>
        </div>
    </div>
</body>
</html>
