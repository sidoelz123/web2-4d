<?php
$conn_string = "host=john.db.elephantsql.com port=5432 dbname=wdygtsnu user=wdygtsnu  password=WpB5XgGx_IA1nyzCsvjleOsPHhG8pV5y";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi database berhasil tersambung";
} else {
    echo "Koneksi dengan database GAGAL tersambung";
}
?>