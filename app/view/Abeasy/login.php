<div class="container flex">
      <div class="login-page flex">
        <div class="text">
          <h1>Abeasy</h1>
          <p>Solusi absen mudah dan cepat,</p>
          <p>ayo absen jangan sampai lupa!</p>
        </div>
        <form method="post">
          <input type="text" placeholder="username" name="username">
          <input type="password" placeholder="Password" name="password">
          <div class="link">
            <a type="submit" class="login" name="login" href="menu.php">Login</a>
          </div>
        </form>
      </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
    const logo = document.querySelector(".container");

    // Munculkan gambar setelah 1 detik
    setTimeout(() => {
        logo.style.opacity = "1";
        logo.style.filter = "blur(0px)";
        logo.style.color = "black";
    }, 500);
    overlay.style.backgroundColor = 'black';
                overlay.style.opacity = '1';
                overlay.style.pointerEvents = 'auto';

  });
    </script>
