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

    $refreshtimeoutsec=$_POST['refresh-timeout-sec'];   

    $linkstatus=$_POST['link-status'];

    $remainbytesout=$_POST['remain-bytes-out'];

    $remainbytestotalnice=$_POST['remain-bytes-total-nice'];  

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv=refresh content="30;url=<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap2.min.css">
    <link rel="stylesheet" href="assets/css/index.css?v=1.0">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/status.js"></script>
    <title><?php echo $identity; ?></title>
    <?php echo $refreshtimeout; ?> <?php endif; ?>
</head>
<body>
    <script language=JavaScript>
        function openLogin() {
            if (window.name != 'hotspot_logout') {
                return true
            }
            open('$(link-logout)?erase-cookie=on', 'hotspot_logout', '');
            window.close();
            return false
        }
    </script>
<div id="footer">
    <div class="fleft text-success"></div>
</div>
<div class="container">
    <nav class="navbar">

        <span class="nav-logo">
            <a href="#" onclick="location.reload()"><img src="assets/img/logo.png"></a>
        </span>

    </nav>
    <div id="main" class="row">
        <div id="loginform" class="animated bounceInDown col-sm-12 text-center">
            <center>
                <br>
                <br>
                <table style="max-width:450px;" class="table table-bordered">
                    <tbody>
                        <tr class="danger">
                            <td width="30%">Alamat IP</td>
                            <td width="42%"><?php echo $ip; ?></td>
                        </tr>
                        <tr class="danger">
                            <td>Sisa Kuota</td>
                            <td><?php echo $remainbytesout; ?> <?php echo $remainbytestotalnice; ?></td>
                        </tr>
                        <tr class="danger">
                            <td>Pemakaian</td>
                            <td>Upload :<?php echo $bytesinnice;?>
                                <br>Download :<?php echo $bytesoutnice; ?></td>
                        </tr>
                        <?php echo $sessiontimeleft; ?>
                        <tr class="danger">
                            <td>Sisa Waktu</td>
                            <td><?php echo $sessiontimeleft; ?></td>
                        </tr>
                        <?php else; ?>
                        <tr class="danger">
                            <td>Waktu Aktif</td>
                            <td><?php echo $uptime; ?></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </center>
				<form action="<?php echo $linkloginonly; ?>?ip=<?php echo $ip; ?>&mac=<?php echo $mac; ?>&ssid=<?php echo $identity; ?>" name="login" onSubmit="return openLogin()">
            <input type="submit" value="Kembali">
           </form>
		   <br>
        </div>
    </div>
    <p class="text-center">$(identity) &copy; 2020</p>
</div>
</body>
</html>