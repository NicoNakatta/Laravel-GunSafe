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
                <li><a class="active"href="/category">Kategori</a></li>
                <li><a href="client/client.php">Client</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    <div class="tabel">
        <h3 class="kategori">KATEGORI</h3>
        <center>
        <button type="submit" class="databaru"><b><a href="/category/tambah">Data Baru</a><b></button>

        <table border="1" class="globel">
            <thead>
            <thead>
					<tr>
						<th>Jenis Keamanan</th>
						<th>Harga</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{$category->jenis_keamanan}}</td>
                            <td>Rp. {{number_format ($category->harga)}}</td>
                            <td >
                            <a class='btn-edit' href="/category/edit/{{$category->id_jk}}" style='margin:10px'>
                                    Edit
                            </a> | 
                            <a class='hapus' href="/category/hapus/{{$category->id_jk}}" style='margin:10px'> Hapus </a>                   
                            </td>
                        </tr>
                    @empty
                    <tr><td colspan='5' align='center'>Data Kosong</td></tr>
                    @endforelse
				</tbody>
        </table>
    </div>
    </center>
    </body>