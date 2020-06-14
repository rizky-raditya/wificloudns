<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
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
    $linkredirect=$_POST['link-redirect'];	
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=refresh content="3; url=https://wifi.cloudns.pro/landing.html">
    <meta http-equiv=pragma content=no-cache />
    <meta http-equiv=expires content=-1 />
    <link rel=icon href=favicon.ico />
    <link rel=stylesheet type="text/css" href="assets/css/style.css">
	<frameset><frame src="<?php echo $linkorig; ?>/check.html"></frame></frameset>
<script language="JavaScript">
    function startClock() {
        $(if popup == 'true')
        open('$(link-status)', 'hotspot_status', 'toolbar=0,location=0,directories=0,status=0,menubars=0,resizable=1,width=290,height=200');
	$(endif)
	location.href = '$(link-redirect)';
    }
</script>
</head>
<body onLoad="startClock()">
<body class=arknet_body>
    <div class=arknet_konten style=text-align:center>
        <div class=arknet_detail>
            <div style=text-align:center;padding:10px;background:#FFFAFA><img src="assets/img/logo.png" alt=arknet style="width:250px;height:auto" /></div>
            <div class=arknet_isi style>
                <div style=padding:0px><b>Login berhasil</b></div>
                <p style=display:block;margin-bottom:80px>Anda telah terhubung dengan <?php echo $identity; ?><img src="assets/img/loading.gif" /></p>
                <center><a style="padding:10px;background:#ffc300;color:#111;border:1px solid #efefef;text-decoration:none" href=<?php echo $linkredirect; ?>><b>&raquo; Lanjutkan</b></a></center>
            </div>
        </div>
    </div>
    <div class=arknet_bawah><i><?php echo $identity; ?> &copy; <i id=copyright>2020</i></i>
    </div>
</body>

</html>