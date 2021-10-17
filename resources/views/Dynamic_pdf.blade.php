<!DOCTYPE html>
<head>
    <title>Contoh Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 

            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
            margin-left:40px;
            color:black;
        }

    </style>

</head>

<body>
 
 @foreach($post as $post)
<br />
  <div class="container">
   <h3 align="center">Generate Surat To PDF</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Pegawai Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="/Dynamic_Pdf/{{$post->id}}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />

   <br></br>


    <div id=halaman>
        <h3 id=judul>SURAT PERNYATAAN {{ $post->jenis_surat }}</h3>

        <h5 style="font-size:17px;margin-top:15px">Saya yang bertanda tangan di bawah ini :</h5>

        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $post->nama_pegawai }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Email</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $post->email }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $post->alamat }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Isi Surat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $post->isi }}</td>
            </tr>
        </table>
         <h5 style="font-size:17px;margin-top:5px;margin-bottom:6px">menyatakan dengan sebenar-benarnya akan bersungguh-sungguh belajar dan bekerja.</h5>
      

        <div style="width: 50%; text-align: left; float: right;">Jakarta, 17 Oktober 2021</div><br>
        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">{{ $post->nama_pegawai }}</div>

        
    </div>
    <br></br>
    @endforeach
</body>

</html>