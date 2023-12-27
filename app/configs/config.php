<?php

    function tugasC($nama, $wa, $tugas, $pesan)
    {   
        include 'db.php';
        $query = $conn->query("INSERT INTO tugas (nama,whatsapp,tugas,pesan) VALUES ('$nama','$wa','$tugas','$pesan') ");
        if (!$query) {
            return 'GAGAL';
        }
    }

    function tugasU($id,$nama,$wa,$tugas,$pesan)
    {
        include 'db.php';
        $query = $conn->query("UPDATE tugas SET nama='$nama', whatsapp='$wa', tugas='$tugas', pesan='$pesan' WHERE id = '$id'");
        if (!$query) {
            return 'GAGAL';
        }
    }

// SEMUA
    function READ_all()
    {
        include 'db.php';
        $query = $conn->query("SELECT * FROM $tbl");
        return $query;
    }

    function READSEARCH_all($tbl,$id)
    {
        include 'db.php';
        $query = $conn->query("SELECT * FROM $tbl WHERE id = '$id'");
        return $query;
    }

    function DELETE_all($tbl,$id)
    {
        include 'db.php';
        $query = $conn->query("DELETE FROM $tbl WHERE id = '$id'");
        if (!$query) {
            return 'GAGAL';
        }
    }