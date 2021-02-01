<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
function input($echo) {
	echo $echo." --> ";
}
menu:
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
echo "\n$yellow
 #    #   ##   #    # #    #
#    #  #  #  #   #  #    #
###### #    # ####   #    #
#    # ###### #  #   #    #
#    # #    # #   #  #    #
#    # #    # #    #  ####";
echo "\n$blue
Author  : Hakutaka
Code    : PPTP VPN ANDROID
Github  : http://github.com/hakutaka1234
Team    : Only Hakutaka
Version : NEW
Language : PHP
Date    : 01-02-2021
Note : Jika Error Kemungkinan Username Tidak Valid
Note : Jika Error Kemungkinan Server Penuh\n";
echo "$red=========================== PPTPVPN ))=====(@)>".$green."\n";
echo "(01) PPTP VPN FRANCE\n";
echo "(02) PPTP VPN INDIAN\n";
echo "(03) PPTP VPN KOREA\n";
echo "(04) PPTP VPN SINGAPORE\n";
echo "(05) EXIT\n";
echo "$red=========================== PPTPVPN ))=====(@)>".$green."\n";
input("Chose");
$pilih=trim(fgets(STDIN));
echo "$red=========================== PPTPVPN ))=====(@)>".$green."\n";
if($pilih == "1" OR $pilih == "01") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN FRANCE SERVER\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=fr2&type=PPTP&negara=France");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1mfr2.vpnjantit.com
";
echo "\nENTER UNTUK KEMBALI";
		fgets(STDIN);
		goto menu;
}elseif($pilih == "2" OR $pilih == "02") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN INDIA SERVER\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=in3&type=PPTP&negara=India");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1min3.vpnjantit.com
";
echo "\nENTER UNTUK KEMBALI";
		fgets(STDIN);
		goto menu;
}elseif($pilih == "3" OR $pilih == "03") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN KOREA SERVER\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=kr2&type=PPTP&negara=South%20Korea");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1mkr2.vpnjantit.com
";
echo "\nENTER UNTUK KEMBALI";
		fgets(STDIN);
		goto menu;
}elseif($pilih == "4" OR $pilih == "04") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN SINGAPORE SERVER\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=sgv1&type=PPTP&negara=Singapore");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1msgv1.vpnjantit.com
";
echo "\nENTER UNTUK KEMBALI";
		fgets(STDIN);
		goto menu;
}elseif($pilih == "5" OR $pilih == "05") {
system("exit");
}