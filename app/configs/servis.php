<?php
include 'config.php';
if (isset($_POST['kirim'])) {
    if (isset($_GET['servis'])) {
        $srv = $_GET['servis'];

        if ($srv == 'tugas') {
            $nd = $_POST['nd'];
            $nb = $_POST['nb'];
            $nama = $nd . $nb;

            $wa = $_POST['wa'];
            $tugas = $_POST['tugas'];
            $pesan = $_POST['pesan'];

            tugasC($nama, $wa, $tugas, $pesan);

            $token = '8GWge62pz0Ke8YT7MsY0';
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.fonnte.com/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'target' => $wa,
                    'message' => "Ada tugas masbrow dari $nd $nb"
                ),
                CURLOPT_HTTPHEADER => array(
                    "Authorization: $token"
                ),
            ));

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                $error_msg = curl_error($curl);
            }
            curl_close($curl);

            if (isset($error_msg)) {
                echo $error_msg;
            }
        }
    }
} else {
    header("location:../../");
}
