<div class="sidebar close">
    <div class="logo-details">
      <img src="logo.png" alt="Logo" class="logo">
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
        </a>
        <ul class="sub-menu blank">
          <li><a class="absen" href="absen.php">Absen</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection'></i>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        
        <ul class="sub-menu">
          <li><a class="jadwalPiket" href="piket.php">Jadwal Piket</a></li>
          <li><a href="mapel.php">Jadwal Mapel</a></li>
        </ul>
      </li>

      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="logoutj.png" alt="profileImg">
          </div>
          <div class="name-job">
            <ul class="sub-menu blank">
              <li><a class="logout" href="login.php">Logout</a></li>
            </ul>

      </li>
    </ul>
  </div>
  <section class="home-section">
    <span class="text">Welcome to Abeasy!</span>
    <h3>
      Di sini, kamu bisa mencatat kehadiranmu dengan mudah dan cepat. <br> Mari kita mulai belajar bersama dan jangan lupa
      untuk selalu absen setiap hari ya!
    </h3> <br>
    <img src="welcome.jpg" alt="">
  </section>
  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>