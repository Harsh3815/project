<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Thank You - Organ Donation Demo</title>
<!-- Add this inside <head> -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

<style>
  /* Reset & base */
  *, *::before, *::after {
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
    background: #f4f7f6;
    color: #333;
    margin: 0;
    padding: 0;
  }
  header {
    background: #008080;
    color: white;
    padding: 1.5rem 2rem;
    text-align: center;
    font-weight: 600;
    font-size: 1.8rem;
    letter-spacing: 1px;
  }
  main {
    max-width: 720px;
    margin: 3rem auto;
    background: white;
    padding: 2.5rem 3rem;
    border-radius: 12px;
    box-shadow: 0 6px 16px rgba(0,0,0,0.1);
  }
  a.button {
    background-color: #008080;
    color: white;
    padding: 0.8rem 2rem;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    transition: background-color 0.3s ease;
  }
  a.button:hover {
    background-color: #005f5f;
  }
  h1, h2 {
    font-weight: 700;
  }
  p {
    line-height: 1.6;
    margin-bottom: 1.4rem;
  }
  form label {
    font-weight: 600;
    display: block;
    margin: 1rem 0 0.5rem 0;
  }
  input[type="text"],
  input[type="email"],
  input[type="date"],
  select {
    width: 100%;
    padding: 0.65rem 1rem;
    border-radius: 8px;
    border: 1.5px solid #ccc;
    font-size: 1rem;
    transition: border-color 0.3s ease;
  }
  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="date"]:focus,
  select:focus {
    border-color: #008080;
    outline: none;
  }
  select[multiple] {
    height: 130px;
  }
  button {
    margin-top: 1.5rem;
    background-color: #008080;
    color: white;
    padding: 0.9rem 2rem;
    font-size: 1.1rem;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 700;
    transition: background-color 0.3s ease;
  }
  button:hover {
    background-color: #005f5f;
  }
  footer {
    text-align: center;
    margin: 3rem 0;
    color: #999;
    font-size: 0.9rem;
  }
  /* Responsive */
  @media (max-width: 600px) {
    main {
      margin: 2rem 1rem;
      padding: 2rem 1.5rem;
    }
    header {
      font-size: 1.5rem;
      padding: 1rem 1rem;
    }
  }
</style>

</head>
<body>

<header>
  <h1>Thank You for Registering!</h1>
</header>

<main>
  <p>Your commitment to organ donation can save many lives.</p>
  <p>We will keep your details securely and inform the relevant authorities.</p>
  <a href="index.php" class="button">Back to Home</a>
</main>

<footer style="text-align:center; padding:1rem; color:#666; margin-top:3rem;">
  Organ Donation Demo Website &copy; 2025
</footer>

</body>
</html>
