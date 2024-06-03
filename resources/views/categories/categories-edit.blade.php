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
                <li><a href="/category">Back</a></li>
            </ul>
        </nav>
        <center>
        <main>
            <div class="login">
            <h3 class="textlogin">Masukkan Data Kategori Baru</h3>
                <form 
                action="{{url('/category/update/' . $category->id_jk)}}"
                method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                    <input class="input" type="text" name="jenis_keamanan" 
                    id="" placeholder="Nama Keamanan"
                    value="{{ old('jenis_keamanan', $category->jenis_keamanan) }}">
                    <input class="input" type="number" name="harga" 
                    id="" placeholder="Harga Keamanan"
                    value="{{ old('harga', $category->harga) }}">
                    <button class="submit"type="submit" name="edit">Submit</button>
                </form>
            </div>
        </main>
        </center>
    </body>