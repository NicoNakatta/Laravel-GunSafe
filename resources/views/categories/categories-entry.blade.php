<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="{{asset('assets/logo.jpg')}}">
        <title>Penitipan Senjata Api</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav>
            <div class="logo"><img src="{{asset('assets/logo.jpg')}}" alt=""/></div>
            <ul>
                <li><a href="/dashboard">Beranda</a></li>
                <li><a class="active" href="/category">Kategori</a></li>
                <li><a href="client/client.php">Client</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        <center>
        <main>
            <div class="login">
                <form action="{{url('category/store')}}" method="POST">
                    @csrf
                    <h3 class="textlogin">Masukkan Kategori Baru</h3>
                    <input class="input" type="text" name="jenis_keamanan" id="" placeholder="Nama Keamanan">
                    <input class="input" type="number" name="harga" id="" placeholder="Harga Keamanan">
                    <button class="submit"type="submit" name="simpan">Submit</button>
                </form>
            </div>
        </main>
        </center>
    </body>