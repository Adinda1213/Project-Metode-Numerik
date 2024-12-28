<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Prediksi Harga Rumah</title>
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

        /* Container to center the content */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            flex-direction: column;
        }

        /* Form container styling */
        .result-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        /* Heading styling */
        .result-container h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }

        /* Styling for result paragraphs */
        .result-container p {
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #333;
        }

        /* Back button styling */
        .back-button {
            display: inline-block;
            margin-top: 20px;
            font-size: 1.1em;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #2980b9;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .result-container {
                padding: 20px;
            }

            .result-container h1 {
                font-size: 1.8em;
            }

            .result-container p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Result container -->
        <div class="result-container">
            <h1>Hasil Prediksi Harga Rumah</h1>
            
            <?php if (isset($error)): ?>
                <!-- Error message if prediction failed -->
                <p style="color: red;"><?= $error ?></p>
            <?php else: ?>
                <!-- Predicted price -->
                <p>Harga Rumah yang Diprediksi:</p>
                <p><strong>Rp <?= number_format($prediksi, 0, ',', '.') ?></strong></p>
            <?php endif; ?>
            
            <!-- Back button -->
            <a href="/" class="back-button">Kembali</a>
        </div>
    </div>
</body>
</html>
