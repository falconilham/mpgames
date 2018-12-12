<html>
    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="asset/css/mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="asset/js/bootstrap.min.js"></script>
        <script src="asset/jquery/jquery-3.2.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>

        <div class="topnav">
            <a onclick="reload()" href=".">Home</a>
            <a href="#about">Jual/Tukar</a>
            <a href="login.php" style="float: right;">Login</a>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </header>
    <body>

        <div id="container">
            <div class="list_transaksi">
            <?php
                $id_jual = $_GET['id_jual'];
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "mpgames";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT transaksi_jual.id_jual, game.img, game.trailer, user.nama, game.judul, harga, lokasi FROM transaksi_jual INNER JOIN user on transaksi_jual.id_user = user.id_user LEFT JOIN game ON transaksi_jual.id_game = game.id_game where id_jual = '$id_jual'";
                $result = mysqli_query($conn, $sql);
                while($row = $result->fetch_assoc()) {      
            ?>
            <h4><?php echo $row['judul']; ?></h4>
                <div id="product">
                    <div id="gambar">
                        <img src="<?php echo $row['img']; ?>">
                    </div>
                    
                    <div id="keterangan">
                        
                        Harga<h3><?php echo $row['harga']; ?></h3>

                        Penjual<h3><?php echo $row['nama']; ?></h3>
                        Lokasi<h3><?php echo $row['lokasi']; ?></h3>
                        Nomor Telepon <h3>08121212</h3>
                        <input type="checkbox" checked="checked" name="WA" disabled/>Whatsapp Available<br>
                        <input type="checkbox" checked="checked" name="call" disabled/> Call Available
                    </div>
                    <div class="deskripsi"><h4 style="text-align: center;">Trailer</h4>
                    <div class="garis"></div>
                        <iframe src="<?php echo $row['trailer']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                 </div><?php } ?>

                <div class="rekomendasi">
                <div class="garis-judul"></div>
                <h2 style="text-align: center;"> Rekomendasi Game Untuk Anda </h2>
                <div class="wts">
                <?php 
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "mpgames";
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = "SELECT transaksi_jual.id_jual, game.img, user.nama, game.judul, harga, lokasi FROM transaksi_jual INNER JOIN user on transaksi_jual.id_user = user.id_user LEFT JOIN game ON transaksi_jual.id_game = game.id_game LIMIT 6";
                                    
                        $result = mysqli_query($conn, $sql);

                        while($row = $result->fetch_assoc()) { ?>
                
                <div class="game-wts" style="margin-top: 2px">
                    <a href="#">
                        <img src="<?php echo $row['img']; ?>">
                        </a>
                        <div class="judul-game"><?php echo $row['judul']; ?>
                            <p><?php echo $row['harga']; ?>
                                <?php echo $row['lokasi']; ?>
                    </a></div>
                </div>
            <?php } ?>
            </div></div>
        </div>        
    </body>
</html>
