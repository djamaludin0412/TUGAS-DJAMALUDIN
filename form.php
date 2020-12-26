<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Data barang</title>
    </head>
    <body>
        <h2>**Input Data Barang**</h2>
        <h2>====================</h2>
        <form action="proses.php" method="post">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td> <input type="text" name="nama_barang" value=""> </td>
                </tr>
                <tr>
                    <td>Kode Barang</td>
                    <td>:</td>
                    <td>
                        <select name="kode_barang">
                            <option value="p001">P001</option>
                            <option value="m001">M001</option>
                            <option value="h001">H001</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Merk</td>
                    <td>:</td>
                    <td>
                        <select name="merk">
                            <option value="asus">ASUS</option>
                            <option value="acer">ACER</option>
                            <option value="lenovo">LENOVO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Prosesor</td>
                    <td>:</td>
                    <td><input type="radio" name="prosesor" value="i3"/>i3 <br>
                        <input type="radio" name="prosesor" value="i5"/>i5
                    </td>
                </tr>
                <tr>
                    <td>Fitur</td>
                    <td>:</td>
                    <td><input type="checkbox" name="fitur" value="vga"/>VGA<br>
                    <input type="checkbox" name="fitur" value="ssd"/>SSD<br>
                    <input type="checkbox" name="fitur" value="retina"/>Retina
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Proses"> 
                        <input type="reset" value="Batal"> 

                    </td>

                </tr>
            </table>
        </form>
    </body>
</html>