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
$red Github  : 🔰 http://github.com/hakutaka1234       🔰
$white Team    : 🔰 Only Hakutaka 	   		   🔰
$red Version : 🔰 NEW V3				   🔰
$white Jam     :$yellow 🔰 $jam				   🔰
$red Hari    : 🔰 $d			   🔰
$white Note : JIKA USERNAMENYA ALAMAT SERVER KEMUNGKINAN SERVER FULL
$red Note : COBA SERVER YANG LAIN
$white Note : LIHAT CONTOH USERNAME NYA 
$red Whatshapp : +1(252)250-2299
\n";
echo "$green ☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰\n";
echo " ║01║$brown PPTP VPN ROMANIA 1\n";
echo " ║02║$cyan PPTP VPN INDIAN\n";
echo " ║03║$purple PPTP VPN KOREA\n";
echo " ║04║$lightcyan PPTP VPN SINGAPORE V1\n";
echo " ║05║$lightred PPTP VPN USA SERVER 3\n";
echo " ║06║$lightblue PPTP VPN USA SERVER 2\n";
echo " ║07║$brown PPTP VPN PREMIUM CZECH(REPUBLIK CHEKO)\n";
echo " ║08║$lightpurple CONTOH USERNAME\n";
echo " ║09║$lightcyan PPTP VPN SERVER 1 NETHERLANDS\n";
echo " ║10║$lightred PPTP VPN SERVER 2 NETHERLANDS\n";
echo " ║11║$lightpurple PPTP VPN SINGAPORE V2\n";
echo " ║00║$brown EXIT\n";
echo "$green ☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰☰ $brown\n";
input(" CHOSE");
$pilih=trim(fgets(STDIN));
if($pilih == "1" OR $pilih == "01") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN ROMANIA1 SERVER\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?type=PPTP&server=ro1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('ro1.vpnjantit.com');
$h5 = explode('</h5>Location:<br>Romania</h5>Max Login: <br>Romania</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
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
haku1:
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('in3.vpnjantit.com');
$h5 = explode('</h5>Location:<br>India</h5>Max Login: <br>India</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7
";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku1;
fgets(STDIN);
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
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('kr2.vpnjantit.com');
$h5 = explode('</h5>Location:<br>South Korea</h5>Max Login: <br>South Korea</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
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
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('sgv1.vpnjantit.com');
$h5 = explode('</h5>Location:<br>Singapore</h5>Max Login: <br>Singapore</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
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
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('usa3.vpnjantit.com');
$h5 = explode('</h5>Location:<br>India</h5>Max Login: <br>India</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
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
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('usa2.vpnjantit.com');
$h5 = explode('</h5>Location:<br>India</h5>Max Login: <br>India</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
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
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('cz1.vpnjantit.com');
$h5 = explode('</h5>Location:<br>India</h5>Max Login: <br>India</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
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
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('nl1.vpnjantit.com');
$h5 = explode('</h5>Location:<br>India</h5>Max Login: <br>India</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
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
haku9:
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('nl2.vpnjantit.com');
$h5 = explode('</h5>Location:<br>India</h5>Max Login: <br>India</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku9;
}elseif($pilih == "11" OR $pilih == "011") {
sleep(3);
echo "		\33[31;1mCREATE NEW PPTP VPN SINGAPORE V2(PREMIUM)\n";
echo "\n\033[0;32mUsername: \033[0;34m";
$M = trim(fgets(STDIN));
echo "\033[0;32mPassword: \033[0;34m";
$C = trim(fgets(STDIN));
$data = "user=$M&pass=$C";
$ua = array(
"User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:24.0) Gecko/20100101 Firefox/24.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vpnjantit.com/create-free-account.html?server=sg6&type=PPTP&negara=Singapore");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
haku19:
$g = explode('<h5>',$result)[1];
$g1 = explode('<h5>',$result)[2];
$g2 = explode('<h5>',$result)[3];
$g3 = explode('<h5>',$result)[4];
$g4 = explode('<h5>',$result)[5];
$h = explode('<br></h5>',$g)[0];
$h1 = explode('</h5>Password:',$g1)[0];
$h2 = explode('<a ',$g2)[0];
$h7 = ('sg6.vpnjantit.com');
$h5 = explode('</h5>Location:<br>India</h5>Max Login: <br>India</h5>Max Login: <br>',$g3)[1];
$h3 = explode('</h5>Location:<br>',$g3)[1];
$h4 = explode('</h5>Max Login: <br>',$g4)[0];
echo"
🔰Welcome !!!$h5
🔰Username : $h1
\033[0;32m🔰Password : \33[31;1m$h2
\033[0;32m🔰Expired Data : 7 Hari $h3
🔰Location VPN : $h4
🔰Alamat Server : $h7";
echo "$brown\nTEKAN CTRL+Z UNTUK KELUAR";
		fgets(STDIN);
		goto haku19;
}elseif($pilih == "0" OR $pilih == "00") {
system(exit);
}
goto menu;