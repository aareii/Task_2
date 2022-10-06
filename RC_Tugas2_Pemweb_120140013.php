<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="rei.css">
</head>

<body>
   <form action="RC_Tugas2_Pemweb_120140013.php" method="GET">
        <table border="1px">
            <center>
                <h1>Pengecekan Barang Di Gudang</h1>
            </center>
            <tr>
                <td>Nama Produk : </td>
                <td><?php echo $_GET["nama"]; ?></td>
            </tr>
            <tr>
                <td>Seri Produk : </td>
                <td><?php echo $_GET["seri"]; ?></td>
            </tr>
            <tr>
                <td>Jumlah Produk : </td>
                <td><?php echo $_GET["produk"]; ?></td>
            </tr>
            <tr>
                <td>Status Produk : </td>
                <td><?php echo $_GET["status"]; ?></td>
            </tr>
        </table>
    </form>
</body>

</html>