<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ 'Selamat Datang ' }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <a class="btn btn-success" style="background-color: orange; border-color: orange; border-radius: 3px" href="/
    ">Edit Informasi</a>
    <a class="btn btn-success" style="background-color: orange; border-color: orange; border-radius: 3px" href="/
    ">Home</a>
    <table class="table table-bordered">

        <tr class="table-dark">

            <th>ID</th>
            <th>Gambar</th>
            <th>Kategori</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Alamat</th>
            <th>Kondisi</th>
            <th>Harga</th>
            <th width="280px">Action</th>

        </tr>


        <tr>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td>

                <form
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>


    </table>
    <style>
        th {
            background-color: aliceblue;
            color: black;
        }
    </style>
</body>
</html>
