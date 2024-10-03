<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di Contatto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }

        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77c5ff 3px solid;
        }

        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            padding: 0;
            list-style: none;
        }

        header ul li {
            display: inline;
            padding: 0 20px 0 20px;
        }

        .main {
            padding: 20px;
            background: #fff;
        }

        .main img {
            max-width: 100%;
            height: auto;
        }

        .main h1 {
            text-align: center;
            color: #333;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container input, .form-container textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .form-container input[type="submit"] {
            background: #333;
            color: #fff;
            border: 0;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background: #77c5ff;
        }
    </style>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcPeu0pAAAAAHtl49zh7Je278TeQthriQhJPQTO"></script>
</head>
<body>
    <header>
        <div class="container">
            <h1>Pagina di Contatto</h1>
        </div>
    </header>
    <div class="container main">
        <h1>Benvenuto alla nostra Pagina di Contatto</h1>
        <img src="https://via.placeholder.com/1200x400" alt="Immagine di Benvenuto">
        <div class="form-container">
            <h2>Contattaci</h2>
            <form action="process_form.php" method="post">
                <input type="text" name="name" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" rows="5" placeholder="Messaggio" required></textarea>
                <input type="submit" value="Invia">
            </form>
        </div>
    </div>
</body>
<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LcPeu0pAAAAAHtl49zh7Je278TeQthriQhJPQTO', {action: 'LOGIN'});
    });
  }
</script>
</html>
