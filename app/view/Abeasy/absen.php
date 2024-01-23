<div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>

    <nav class="navbar navbar-dark bg-dark sticky-navbar">
        <div class="container-fluid">
            <div class="back">
                <a class="nav-link" href="menu.html">
                    <img src="back2.png" alt="back">
                </a>
            </div>
            <span class="navbar-brand mb-0 h1">ABEASY</span>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="bg-success p-2 text-dark bg-opacity-10">
        <h1 class="p-4 text-center">ABSENSI PPLG JAYA</h1>
        <div class="container">
            <form action="" name="form_absen">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control"  name="nama" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" placeholder="Kelas">
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Keterangan" value="Hadir">
                        <label class="form-check-label">Hadir</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Keterangan" value="Izin">
                        <label class="form-check-label">Izin</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Keterangan" value="Sakit">
                        <label class="form-check-label">Sakit</label>
                    </div>
                </div>
                <div class="mb-3" id="alasan_div" style="display: none;">
                </div>
                <label class="form-label">Alasan</label>
                <input type="text" class="form-control" name="alasan" placeholder="Alasan">
                <div id="alasan_error" class="text-danger"></div>
        </div>
        <p>.</p>
        <div class="text-center mt-5">
            <button type="reset" class="btn btn-danger" name="Reset">Reset</button>
            <button type="submit" class="btn btn-success" name="Submit">Submit</button>
        </div>
        </form>
        <table class="my-5 table table-striped">
            <tr class="table-dark">
                <th>Nama</th>
                <th>Kelas</th>
                <th>Keterangan</th>
                <th>Waktu Kehadiran</th>
                <th>Alasan</th>
            </tr>
            <tr>
                <td>KHAIDAR NUR ARIF</td>
                <td>XI PPLG 2</td>
                <td>Hadir</td>
                <td>2023-10-22 10:00:00</td>
                <td></td>
            </tr>
            <tr>
                <td>DHIMAS GEPENK</td>
                <td>XI PPLG 2</td>
                <td>Izin</td>
                <td>2023-10-22 09:30:00</td>
                <td>Acara Keluarga</td>
            </tr>
        </table>
    </div>
    </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>