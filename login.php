<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];   
    $linkstatus=$_POST['link-status'];  
	$loggedin=$_POST['logged-in'];
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/css/index.css?v=1.0" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/css/slide.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/css/font-awesome.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/js/unescape.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/js/input.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/js/chat.js"></script>
        <title><?php echo $identity; ?></title>
    </head>
    <body>
        <?php echo $chapid; ?>
        <form name="sendin" action="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" method="post">
            <input type="hidden" name="username" />
            <input type="hidden" name="password" />
            <input type="hidden" name="ip" value="<?php echo $ip; ?>" />
            <input type="hidden" name="mac" value="<?php echo $mac; ?>" />
            <input type="hidden" name="ssid" value="<?php echo $identity; ?>" />
            <input type="hidden" name="dst" value="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" />
            <input type="hidden" name="popup" value="true" />
        </form>
        <script src="./md5.js"></script>
        <script type="text/javascript">
            function doLogin() {
				<?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
                document.sendin.username.value = document.login.username.value;
                document.sendin.password.value = hexMD5("<?php echo $chapid; ?>" + document.login.password.value + "<?php echo $chapchallenge; ?>");
                document.sendin.submit();
                return false;
            }
        </script>
        <div class="container">
            <nav class="navbar">
                <span class="nav-logo">
                    <a href="#" onclick="location.reload()"><img src="assets/img/logo.png" /></a>
                </span>

                <ul class="nav-menu">
                    <li class="nav-menu-item">
                        <a class="text-default" href="#cara-pakai" role="button" data-toggle="modal"><i class="fa fa-question-circle"></i> Cara Pakai</a>
                    </li>
                    <li class="nav-menu-item has-dropdown">
                        <a>Ind<span class="icon-dropdown"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-item"></li>
                            <li style="cursor: pointer;" class="dropdown-menu-item">
                                <a onclick="changeLanguage('indonesian');">Ind</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div id="main" class="row">
                <div id="loginform" class="animated rotateInDownleft col-sm-6 text-center">
                    <div class="well">
                        <div class="cssplay_auto">
                            <img src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/img/banner/banner.jpg" />
                            <img id="img_01" src="https://cdn.jsdelivr.net/gh/rizky-raditya/wificloudns@master/login/assets/img/banner/banner.jpg" />
                        </div>
                    </div>

                    <div class="trial text-danger text-center">
                        <div class="panel-group">
                            <div class="panel-default">
                                <div id="panel-element-1" class="panel-collapse collapse alert-success">
                                    <div class="panel-body text-left"></div>
                                </div>
                            </div>
                            <div class="panel-default"></div>
                        </div>
                    </div>
                </div>
                <div id="content" class="animated rotateInDownLeft col-sm-6 text-center">
                    <div class="col-sm12">
                        <div style="text-align: center;" class="panel-footer clearfix panel-footer-sm panel-footer-primary"></div>

                        <a class="btn-warning" onclick="openLogin(event,'KV')" id="kodevoucher"> </a>
                        <a class="btn-success" onclick="openLogin(event,'UP')" id="userpass"> </a>
                        <div id="KV" class="tabcontent">
                            <div class="panel-default">
                                <h4>
                                    <p align="left"><b>Login Voucher <?php echo $identity; ?></b></p>
                                </h4>
                                <p class="text-default" align="left">
                                    Belum punya voucher?
                                    <a href="#harga-voucher" data-toggle="modal">
                                        <font color="#749ba6"><b>Beli voucher disini!</b></font>
                                    </a>
                                </p>
                                <br />
                            </div>
                            <br />
                            <?php echo $chapid; ?>
                            <form name="sendinkv" action="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" method="post">
                                <input type="hidden" name="username" />
                                <input type="hidden" name="password" />
                                <input type="hidden" name="ip" value="<?php echo $ip; ?>" />
                                <input type="hidden" name="mac" value="<?php echo $mac; ?>" />
                                <input type="hidden" name="ssid" value="<?php echo $identity; ?>" />
                                <input type="hidden" name="dst" value="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" />
                                <input type="hidden" name="popup" value="true" />
                            </form>
                            <script src="./md5.js"></script>
                            <script type="text/javascript">
                                function doLoginkv() {
									<?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
                                    document.sendinkv.username.value = document.loginkv.usernamekv.value;
                                    document.sendinkv.password.value = hexMD5("<?php echo $chapid; ?>" + document.loginkv.passwordkv.value + "<?php echo $chapchallenge; ?>");
                                    document.sendinkv.submit();
                                    return false;
                                }
                            </script>
                            <?php endif; ?>
                            <form name="loginkv" action="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" method="post" <?php echo $chapid; ?> onSubmit="return doLoginkv()" <?php endif; ?>>
                                <input type="hidden" name="dst" value="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" />
                                <input type="hidden" name="popup" value="true" />
                                <center>
                                    <b>
                                        <?php echo $error; ?><br />
                                        <div style="color: #ff8080; font-size: 14px;" class="alert alert-danger"><i class="icon-attention-circled"></i><?php echo $error; ?></div>
                                        <?php endif; ?>
                                    </b>
                                </center>
                                <div class="form-group">
                                    <p class="text-default" align="left">Kode Voucher</p>

                                    <input
                                        type="text"
                                        class="form-control input"
                                        id="user"
                                        name="usernamekv"
                                        onchange="updateInput(this.value)"
                                        placeholder="xxxxxxxx"
                                        style="text-align: center;"
                                        value="<?php echo $username ?>"
                                        required="required"
                                        autocomplete="off"
                                    />
                                    <input type="hidden" class="form-control input" id="pass" name="passwordkv" placeholder="password" required="required" autocomplete="off" />
                                </div>
                                <script type="text/javascript">
                                    function updateInput(a) {
                                        document.getElementById("pass").value = a;
                                    }
                                </script>

                                <?php if($loggedin == 'yes') : ?> <?php else; ?> <?php if($trial == 'yes') : ?> <?php else; ?> <?php endif; ?> <?php endif; ?>
                                <button type="submit" class="btn btn-warning" style="width: 35%;">LOGIN</button>
                            </form>
                            <hr style="margin-bottom: 30px; margin-top: 20px;" />
                            <div class="panel-default">
                                <h5 class="text-center text-warning">
                                    <font color="#000000"><b>Atau login dengan :</b></font>
                                </h5>
                                <a class="button-md" href="https://qrsnapper.appspot.com/" role="button" style="width: 20%;"><i class="fa fa-qrcode"></i> QR Code</a>
                                <a class="button-md" onclick="openLogin(event,'UP')" id="userpass" style="width: 20%;"><i class="fa fa-users"></i> Member</a>
                            </div>
                        </div>
                    </div>
                    <div id="UP" class="tabcontent">
                        <div class="panel-default">
                            <h4>
                                <p align="left"><b>Login Member <?php echo $identity; ?></b></p>
                            </h4>
                            <p class="text-default" align="left">
                                Belum punya paket?
                                <a href="#harga-paket" data-toggle="modal">
                                    <font color="#749ba6"><b>Beli paket disini!</b></font>
                                </a>
                            </p>
                            <br />
                        </div>
                        <br />
                        <?php echo $chapid; ?>
                        <form name="sendinup" action="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" method="post">
                            <input type="hidden" name="username" />
                            <input type="hidden" name="password" />
                            <input type="hidden" name="ip" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="mac" value="<?php echo $mac; ?>" />
                            <input type="hidden" name="ssid" value="<?php echo $identity; ?>" />
                            <input type="hidden" name="dst" value="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" />
                            <input type="hidden" name="popup" value="true" />
                        </form>
                        <script src="md5.js"></script>
                        <script type="text/javascript">
                            function doLoginup() {
								<?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
                                document.sendinup.username.value = document.loginup.usernameup.value;
                                document.sendinup.password.value = hexMD5("<?php echo $chapid; ?>" + document.loginup.passwordup.value + "<?php echo $chapchallenge; ?>");
                                document.sendinup.submit();
                                return false;
                            }
                        </script>
                        <?php endif; ?>
                        <form name="loginup" action="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" method="post" <?php echo $chapid; ?> onSubmit="return doLoginup()" <?php endif; ?>>
                            <input type="hidden" name="dst" value="$(link-login-only)?ip=$(ip)&mac=$(mac)&ssid=$(identity)" />
                            <input type="hidden" name="popup" value="true" />
                            <center>
                                <b>
                                    <?php echo $error; ?><br />
                                    <div style="color: #ff8080; font-size: 14px;" class="alert alert-danger"><i class="icon-attention-circled"></i><?php echo $error; ?></div>
                                    <?php endif; ?>
                                </b>
                            </center>
                            <div class="form-group">
                                <p class="text-default" align="left">Username</p>

                                <input type="text" class="form-control input" name="usernameup" placeholder="xxxxxxxx" value="<?php echo $username ?>" style="text-align: center;" required="required" autocomplete="off" />
                                <p class="text-default" align="left">Password</p>
                                <input type="password" class="form-control input" id="myInput" name="passwordup" placeholder="***" style="text-align: center;" required="required" autocomplete="off" />
                                <input type="checkbox" onclick="myFunction()" /> Lihat Password
                            </div>

                            <?php if($loggedin == 'yes') : ?> <?php else; ?> <?php if($trial == 'yes') : ?> <?php else; ?> <?php endif; ?> <?php endif; ?>
                            <button type="submit" class="btn btn-warning" style="width: 35%;">LOGIN</button>
                        </form>
                        <hr style="margin-bottom: 30px; margin-top: 20px;" />
                        <div class="panel-default">
                            <h5 class="text-center text-warning">
                                <font color="#000000"><b>Atau login dengan :</b></font>
                            </h5>
                            <a class="button-md" href="https://qrsnapper.appspot.com/" role="button" style="width: 20%;"><i class="fa fa-qrcode"></i> QR Code</a>
                            <a class="button-md" onclick="openLogin(event,'KV')" id="kodevoucher" style="width: 20%;"><i class="fa fa-credit-card"></i> Voucher</a>
                        </div>
                    </div>
                </div>

                <?php echo $error; ?> <?php endif; ?>
                <script src="assets/js/tab.js"></script>
            </div>
            <div class="trial text-danger text-center">
                <div class="panel-group">
                    <div class="panel-default">
                        <div id="panel-element-1" class="panel-collapse collapse alert-success">
                            <div class="panel-body text-left"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 column text-center">
                <div class="modal fade" id="cara-pakai" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content pricing-table-header-2 btn-text">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-window-close"></i></button>
                                <h4 class="modal-title" id="myModalLabel">
                                    <?php echo $identity; ?>
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-xs-12 column text-left">
                                    <br />
                                    <h4>Cara Beli Paket</h4>
                                    <p>
                                        Voucher <?php echo $identity; ?> bisa didapatkan secara gratis setelah anda order makanan dan minuman di Kedai Aunty. baca
                                        <a style="cursor: pointer;" href="#syarat-ketentuan" onclick="showButton();" data-toggle="modal"><b>Syarat & Ketentuan.</b></a>
                                    </p>
                                    <br />
                                    <h4>Menghubungkan</h4>
                                    <p>Sambungkan gadget anda dengan wifi hotspot, dengan nama '<?php echo $identity; ?>'</p>
                                    <p>Jika sudah tersambung maka akan secara otomatis menampilkan welcome page <?php echo $identity; ?>.</p>
                                    <br />
                                    <p>Untuk Pengguna IOS welcome page dilakukan secara manual ketik di browser "http://guest.wire.id".</p>
                                    <br />
                                    <h4>Login</h4>
                                    <p>Lakukan login pada welcome page dengan metode Voucher atau Member yang ingin anda gunakan.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 column text-center">
                <div class="modal fade" id="harga-paket" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content pricing-table-header-2 btn-text">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-window-close"></i></button>
                                <h4 class="modal-title" id="myModalLabel">
                                    <?php echo $identity; ?>
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-xs-12 column text-left">
                                    <div style="padding: 15px;">
                                        <h4>
                                            <center>PAKET MEMBER</center>
                                        </h4>
                                        <table class="arknet_tpaketwifi" style="font-size: 10px;">
                                            <tr>
                                                <th>PAKET</th>
                                                <th>AKTIF</th>
                                                <th>HARGA</th>
                                                <th>&#10004;</th>
                                            </tr>
                                            <tr>
                                                <td>Harian</td>
                                                <td>1 Hari</td>
                                                <td>Rp 5.000</td>
                                                <td>
                                                    <a href="javascript:void(Tawk_API.toggle())"><b>Beli</b></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mingguan</td>
                                                <td>7 Hari</td>
                                                <td>Rp 20.000</td>
                                                <td>
                                                    <a href="javascript:void(Tawk_API.toggle())"><b>Beli</b></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bulanan</td>
                                                <td>30 Hari</td>
                                                <td>Rp 50.000</td>
                                                <td>
                                                    <a href="javascript:void(Tawk_API.toggle())"><b>Beli</b></a>
                                                </td>
                                            </tr>
                                        </table>
                                        <br />
                                        <small>
                                            <li>Harga dapat berubah Sewaktu-waktu.</li>
                                            <li>Kecepatan akses up to 3 Mbps, Bergantung kepada kondisi jam / waktu pemakaian dan banyaknya Pelanggan.</li>
                                            <li>
                                                Menggunakan Layanan <?php echo $identity; ?>, maka Pelanggan sepakat untuk tunduk pada
                                                <a style="cursor: pointer;" href="#syarat-ketentuan" onclick="showButton();" data-toggle="modal"><b>Syarat & Ketentuan.</b></a>
                                            </li>
                                        </small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 column text-center">
                    <div class="modal fade" id="harga-voucher" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content pricing-table-header-2 btn-text">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-window-close"></i></button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        <?php echo $identity; ?>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-xs-12 column text-left">
                                        <div style="padding: 15px;">
                                            <h4>
                                                <center>PAKET VOUCHER</center>
                                            </h4>
                                            <table class="arknet_tpaketwifi" style="font-size: 10px;">
                                                <tr>
                                                    <th>PAKET</th>
                                                    <th>AKTIF</th>
                                                    <th>HARGA</th>
                                                    <th>&#10004;</th>
                                                </tr>
                                                <tr>
                                                    <td>1 Ribu</td>
                                                    <td>2 Jam</td>
                                                    <td>Rp 1.000</td>
                                                    <td>
                                                        <a href="javascript:void(Tawk_API.toggle())"><b>Beli</b></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2 Ribu</td>
                                                    <td>3 Jam</td>
                                                    <td>Rp 2.000</td>
                                                    <td>
                                                        <a href="javascript:void(Tawk_API.toggle())"><b>Beli</b></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3 Ribu</td>
                                                    <td>6 Jam</td>
                                                    <td>Rp 3.000</td>
                                                    <td>
                                                        <a href="javascript:void(Tawk_API.toggle())"><b>Beli</b></a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br />
                                            <small>
                                                <li>Harga dapat berubah Sewaktu-waktu.</li>
                                                <li>Kecepatan akses up to 3 Mbps, Bergantung kepada kondisi jam / waktu pemakaian dan banyaknya Pelanggan.</li>
                                                <li>
                                                    Menggunakan Layanan <?php echo $identity; ?>, maka Pelanggan sepakat untuk tunduk pada
                                                    <a style="cursor: pointer;" href="#syarat-ketentuan" onclick="showButton();" data-toggle="modal"><b>Syarat & Ketentuan.</b></a>
                                                </li>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 column text-center">
                        <div class="modal fade" id="syarat-ketentuan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content pricing-table-header-2 btn-text">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-window-close"></i></button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            <?php echo $identity; ?>
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-xs-12 column text-left">
                                            <br />
                                            <h4>Syarat & Ketentuan</h4>
                                            <li>Dengan Pelanggan setuju menggunakan Layanan <?php echo $identity; ?>, maka Pelanggan sepakat untuk tunduk pada setiap ketentuan dalam Syarat dan Ketentuan Ini.</li>
                                            <li>
                                                Dalam hal Pelanggan menolak untuk tunduk pada setiap perubahan Syarat dan Ketentuan ini maka Pelanggan berhak untuk mengakhiri Syarat dan Ketentuan ini dengan berhenti menggunakan Layanan
                                                <?php echo $identity; ?>.
                                            </li>
                                            <li>Cukup dengan bayar biaya operasional yang mencakup (Listrik,Maintenance), anda sudah dapat menikmati internet secara gratis.</li>
                                            <li>
                                                Pelanggan menyadari sepenuhnya bahwa kecepatan akses Layanan <?php echo $identity; ?> dapat bervariasi tergantung dengan beberapa faktor dan <?php echo $identity; ?> tidak memberikan jaminan kecepatan yang diterima
                                                Pelanggan.
                                            </li>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
