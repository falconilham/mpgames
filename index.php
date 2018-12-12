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
            <a class="active" onclick="reload()" href="">Home</a>
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
                <h4>Want To Sell ( WTS )</h4>
                <div class="garis-judul"></div>
                <h4 style="float: none; text-align: right; top: 0">Postingan Terbaru</h4>
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
                    <div class="game-wts">
                        <h4 hidden/><?php echo $row['id_jual']; ?></h4>
                        <a href="product.php?id_jual=<?php echo $row['id_jual']; ?>">
                            <img src="<?php echo $row['img']; ?>">
                        </a>
                        <div class="judul-game"><?php echo $row['judul']; ?>
                            <p>RP<?php echo $row['harga']; ?>
                                <?php echo $row['lokasi']; ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <script src="asset/js/main.js"></script>
        </div>
    </body>
</html>