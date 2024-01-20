<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM menu WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Menu berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // Menutup koneksi setelah operasi query selesai
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Menu Kuliner</title>
</head>
<body>
    <h2>Hapus Menu</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        ID Menu yang akan dihapus: <input type="text" name="id" required><br>
        <input type="submit" value="Hapus Menu">
    </form>
</body>
</html>
