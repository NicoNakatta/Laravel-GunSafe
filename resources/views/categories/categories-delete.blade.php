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
    <div class="login">
    <h3>Hapus Categories</h3>
            <h4>Ingin Menghapus Data ?</h4>
            <button type="submit" name="hapus" style= "margin-top : 20px;">
                <a href={{ url('/category/destroy/' . $category->id_jk ) }}>
                  Yes
                </a>
              </button>
              <button type="submit" name="tidak" style= "margin-top : 20px;">
                <a href="/category">
                  No
                </a>
              </button>
          </div>
    </center>
    </body>