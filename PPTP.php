<?php

error_reporting(0);
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
function input($echo) {
	echo $echo." ⏭️⏭️ : ";
}
menu:
$d = system('date "+%a %b %Y"');
$jam = system('date "+%H:%M"');
system($bersih);
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";
$yellow = "\e[1;33m";
$white = "\e[1;37m";
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
$white  = "\e[1;37m";
echo "\n$red
 	       ⚠️⚠️ Author  : Hakutaka ⚠️⚠️
$white Code    : 🔰 PPTP VPN ANDROID MASA AKTIF (7 HARI) 🔰
$red Github  : 🔰 http://github.com/hakutaka1234       🔰
$white Team    : 🔰 Only Hakutaka 	   		   🔰
$red Version : 🔰 NEW V2				   🔰
$white Jam     :$yellow 🔰 $jam				   🔰
$red Hari    : 🔰 $d			   🔰
$white Note : JIKA USERNAME TIDAK TERSEDIA ITU BERARTI ERROR
$red Note : JIKA USERNAME TIDAK TERSEDIA KEMUNGKINAN SERVER FULL
$white Note : SEMOGA BERMANFAAT\n";
echo "$green ☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰\n";
echo " ║01║$brown PPTP VPN FRANCE\n";
echo " ║02║$cyan PPTP VPN INDIAN\n";
echo " ║03║$purple PPTP VPN KOREA\n";
echo " ║04║$lightcyan PPTP VPN SINGAPORE\n";
echo " ║05║$lightred PPTP VPN USA SERVER 3\n";
echo " ║06║$lightblue PPTP VPN USA SERVER 2\n";
echo " ║07║$brown PPTP VPN PREMIUM CZECH(REPUBLIK CHEKO)\n";
echo " ║08║$lightpurple CONTOH USERNAME\n";
echo " ║09║$lightcyan PPTP VPN SERVER 1 NETHERLANDS\n";
echo " ║10║$lightred PPTP VPN SERVER 2 NETHERLANDS\n";
echo " ║00║$brown EXIT\n";
echo "$green ☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰ $brown\n";
input(" CHOSE");
$pilih=trim(fgets(STDIN));
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
haku:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1mfr2.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku;
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
haku1:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1min3.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku1;
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
haku2:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1mkr2.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku2;
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
haku3:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1msgv1.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku3;
}elseif($pilih == "5" OR $pilih == "05") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN USA SERVER 3\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=usa3&type=PPTP&negara=USA");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
haku4:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1musa3.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku4;
}elseif($pilih == "6" OR $pilih == "06") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN USA SERVER 2\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=usa2&type=PPTP&negara=USA");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
haku6:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1musa2.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku6;
}elseif($pilih == "7" OR $pilih == "07") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN CZECH V1(PREMIUM)\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=cz1&type=PPTP&negara=Czech%20Republic");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
haku5:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1mcz1.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku5;
}elseif($pilih == "8" OR $pilih == "08") {
echo "$red\nUSERNAME :$lightpurple hakut5\n";
echo "$brown\nTEKAN ENTER UNTUK KELUAR";
		fgets(STDIN);
		goto menu;
}elseif($pilih == "9" OR $pilih == "09") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN NETHERLANDS V1(PREMIUM)\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=nl1&type=PPTP&negara=Netherlands");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
haku8:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1mnl1.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku8;
}elseif($pilih == "10" OR $pilih == "010") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN NETHERLANDS V2(PREMIUM)\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=nl2&type=PPTP&negara=Netherlands");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$username = explode('</h5>Username: <h5>', $result)[1];
$username = explode('</h5>',$username)[0];
haku9:
echo"
\33[31;1mUSERNAME : \33[32;1m$username
\33[31;1mPASSWORD : \33[32;1m$C
\33[31;1mSERVERHOST(ALAMAT SERVER) : \33[32;1mnl2.vpnjantit.com
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku9;
}elseif($pilih == "0" OR $pilih == "00") {
system(exit);
}
goto menu;