<?php
session_start();

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kbb";
$db = mysqli_connect($server, $user, $password, $nama_database);
if (!$db) {
    die("Error".mysqli_connect_error());
}

function base_url()
{
    return 'https://www.xlhomewifibandung.com/';
}

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// $c_d = query("SELECT * FROM admin WHERE id = 'Un!X1d@4pp'")[0];
// $_SESSION['title_page'] = $c_d['TitleHome'];
// $_SESSION['logo'] = $c_d['logo'];

// function login($ilog){
//     $user = htmlspecialchars($ilog['username']);
//     $pass = htmlspecialchars($ilog['password']);
//     $cek = query("SELECT * FROM admin WHERE id = 'Un!X1d@4pp'")[0];
//     if ($cek['user'] === $user && $cek['pass'] === $pass) {
//         $_SESSION['inapp'] = 1;
//         return true;
//     }
//     return false;
// }

function logout(){
    $_SESSION['inapp'] = 0;
    session_destroy();
    return true;
}

function upload($foto, $tem){
    // return false;
    $namafile   = $_FILES[$foto]['name'];
    $ukuranfile = $_FILES[$foto]['size'];
    $error      = $_FILES[$foto]['error'];
    $tmpname    = $_FILES[$foto]['tmp_name'];
    $lokasi     = "../img/$tem/";
    // var_dump($_POST);
    // var_dump($_FILES);
    // var_dump($ukuranfile);
    // die;

    // cek apakah tidak ada foto yang di upload
    if ($error === 4) {
        echo "
				<script>
					alert('masukkan foto terlebih dahulu!');
				</script>
			";
        return false;
    }

    // cek valid gambar
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo "
				<script>
					alert('yang anda masukkan bukan gambar!');
				</script>
			";
        return false;
    }


    // batas ukuran file
    if ($ukuranfile > 1050000) {
        echo "
				<script>
					alert('ukuran gambar terlalu besar!');
				</script>
			";
        return false;
    }

    // lolos pengecekan
    // generate nama baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    if (move_uploaded_file($tmpname, $lokasi . $namafilebaru)) {
        // echo "The file ". htmlspecialchars(basename($namafilebaru). " has been uploaded.";
    } else {
        echo "
				<script>
					alert('Upload gambar gagal!');
				</script>
			";
        return false;
    }

    return $namafilebaru;
}

function absen($inabsen){

}