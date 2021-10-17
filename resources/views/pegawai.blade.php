<!DOCTYPE html>
<html>
 
<head>
    <title>CRUD AJAX LARAVEL</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- MULAI STYLE CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
   
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  
   
    
    

  
    
    
 
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{ asset('css/pegawai.css') }}" rel="stylesheet">
    <!-- AKHIR STYLE CSS -->
 
</head>
 
<body>
  

  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: black;">
     
    <button class="navbar-toggler mt-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <a class="navbar-brand mt-3 " href="#" >
        <img src="{{ asset('image/LogoCompany.png') }}" alt="" width="100" height="100" style="">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" style="margin-left: ;">
          <a class="nav-link" href="#" style="color: #fff;  ">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#s" style="color: #fff;">Surat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" style="color: #fff;">Register</a>
        </li>
      </ul>
    </div>
  </nav>
 
    <!-- MULAI CONTAINER -->
    <div class="container" style="margin-top:50px">

         <div class="row" style="width:100%">

            
          <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="card shadow">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('image/LogoCompany.png') }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3  profil">
                      <h4>Tokopd</h4>
                
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn button ">Aboute Us</button>
                   
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3 mb-3 shadow">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item " style="text-align: center;" id="header-socialmedia">
                     <h4> SOCIAL MEDIA </h4>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">Tokopd</span>
                  </li>
                 
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@Tokopd</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">Tokopd</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">Tokopd</span>
                  </li>
                </ul>
              </div>
              <div class="list-group" style="margin-bottom:30px">  
					<a href="#" class="list-group-item">
						<i class="fa fa-asterisk"></i> &nbsp;&nbsp;Activity Feed
						<i class="fa fa-chevron-right list-group-chevron"></i>
					</a> 
					<a href="#" class="list-group-item">
						<i class="fa fa-book"></i> &nbsp;&nbsp;Projects
						<i class="fa fa-chevron-right list-group-chevron"></i>
						<span class="badge">3</span>
					</a> 
					<a href="#" class="list-group-item">
						<i class="fa fa-envelope"></i> &nbsp;&nbsp;Messages
						<i class="fa fa-chevron-right list-group-chevron"></i>
					</a> 
					<a href="#" class="list-group-item">
						<i class="fa fa-group"></i> &nbsp;&nbsp;Partners
						<i class="fa fa-chevron-right list-group-chevron"></i>
						<span class="badge">7</span>
					</a> 
					<a href="#" class="list-group-item">
						<i class="fa fa-cog"></i> &nbsp;&nbsp;Settings
						<i class="fa fa-chevron-right list-group-chevron "></i>
					</a> 
				</div> <!-- /.list-group -->
            </div>
 
        
           <div class="col-lg-9 col-md-9 col-sm-2" >
           

                
                <div class="card"  id="#card" style="padding:10px;">
                 
                 <div class="bdy">
                   <!-- MULAI TOMBOL TAMBAH -->
                    <a href="javascript:void(0)" class="btn tambah" id="tombol-tambah">Tambah PEGAWAI</a>
                    <br><br>
                    <!-- AKHIR TOMBOL -->
                 </div>
               
                    
                   
                    <!-- MULAI TABLE -->
                
                     <div class="col-lg-12 col-sm-12 hero-feature" >
                        <div class="table-responsive">

                             <table class="table table-striped table-bordered table-sm" id="table_pegawai" >
                        <thead style=" background-image: linear-gradient(to bottom right, #fa6969, #f7f7f7);" >
                            <tr>
                                <th >Surat</th>
                                <th>Nama</th>
                                <th>Isi Surat</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>

                        </div>
                     </div>
                    
                   
                    <!-- AKHIR TABLE -->

                
                    
                
                
                </div>

            <div class="row">
                   <!--Mulai Best Employe-->
                <div class="col-sm-5 mb-3 mt-4" >
                        <div class="panel">
                             <div class="panel-heading">
                                <span class="panel-icon">
                                     <i class="fa fa-star"></i>
                                </span>
                              <span class="panel-title"> Best employee</span>
                        </div>
                         <div class="panel-body pn">
                             <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                                  <thead>
                                    <tr class="hidden">
                                    <th class="mw30">#</th>
                                    <th>Name</th>
                                    <th>Complete Task</th>
                                    </tr>
                                  </thead>
                                 <tbody>
                                      <tr>
                                        <td>
                                             <span class="fa fa-user text-primary"></span>
                                        </td>
                                         <td>Mita</td>
                                         <td><i class="fa fa-caret-up text-info pr10"></i>100%</td>
                                         </tr>
                                    <tr>
                                         <td>
                                          <span class="fa fa-user text-primary"></span>
                                             </td>
                                                 <td>Elly</td>
                                              <td>
                                     <i class="fa fa-caret-down text-danger pr10"></i>80%</td>
                                    </tr>
                 
                                     </tbody>
                                </table>
                                </div>
                                </div>

                </div>
        <!--Akhir Best Employe-->

        <!--Mulai Line Charts-->
            <div class="col-sm-7 mb-3 mt-4">
                       <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                    <h5 class="mb-0 mb-4">Ratings Company</h5>
                    <div class="graph-star-rating-header">
                      
                        
                    </div>
                    <div class="graph-star-rating-body">
                        <div class="rating-list">
                            <div class="rating-list-left text-black">
                                5 
                            </div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div style="width: 56%;" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar ">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-list-right text-black">56%</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left text-black">
                                4 
                            </div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div style="width: 23%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar ">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-list-right text-black">23%</div>
                        </div>
                        <div class="rating-list">
                            <div class="rating-list-left text-black">
                                3
                            </div>
                            <div class="rating-list-center">
                                <div class="progress">
                                    <div style="width: 11%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar ">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-list-right text-black">11%</div>
                        </div>
                       
                    </div>
                  
                </div>

            </div>


            </div>
     
            </div>
        
     
               
        </div>
        
            
        


         </div>


    </div>
    <!-- AKHIR CONTAINER -->
 
    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">
 
                                <input type="hidden" name="id" id="id">
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Jenis Surat</label>
                                    <div class="col-sm-12">
                                        <select name="jenis_surat" id="jenis_surat" class="form-control required">
                                            <option value="">Pilih Jenis Surat</option>
                                            <option value="IZIN">Surat Izin</option>
                                            <option value="LAMARAN">Surat Lamaran</option>
                                        </select>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Nama Pegawai</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                                            value="" required>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Isi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="isi" name="isi"
                                            value="" required>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">E-mail</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" id="email" name="email" value=""
                                            required>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label for="name" class="col-sm-12 control-label">Alamat</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="alamat" id="alamat" required></textarea>
                                    </div>
                                </div>
 
                            </div>
 
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">Simpan
                                </button>
                            </div>
                        </div>
 
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->
 
    <!-- MULAI MODAL KONFIRMASI DELETE-->
 
    <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERHATIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Jika menghapus Pegawai maka</b></p>
                    <p>*data pegawai tersebut hilang selamanya, apakah anda yakin?</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                        Data</button>
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->
 
 
 
    <!-- LIBARARY JS -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
 
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
 
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
 
 

    
   
    <!-- AKHIR LIBARARY JS -->
 
    <!-- JAVASCRIPT -->
    <script>
        //CSRF TOKEN PADA HEADER
        //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#tombol-tambah').click(function () {
            $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Pegawai Baru"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        $(document).ready(function () {
            $('#table_pegawai').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "{{ route('pegawai.index') }}",
                    type: 'GET'
                },
                columns: [{
                        data: 'jenis_surat',
                        name: 'jenis_surat'
                    },
                    
                    {
                        data: 'nama_pegawai',
                        name: 'nama_pegawai'
                    },
                    {
                        data: 'isi',
                        name: 'isi'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ],
                order: [
                    [0, 'asc']
                ]
            });
        });
        //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
        if ($("#form-tambah-edit").length > 0) {
            $("#form-tambah-edit").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Sending..');
                    $.ajax({
                        data: $('#form-tambah-edit')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('pegawai.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_pegawai').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('
                                success ')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
                    });
                }
            })
        }
        //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('pegawai/' + data_id + '/edit', function (data) {
                $('#modal-judul').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id').val(data.id);
                 $('#jenis_surat').val(data.jenis_surat);
                $('#nama_pegawai').val(data.nama_pegawai);
                $('#isi').val(data.isi);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
            })
        });
        //jika klik class show (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
   
       
        $('body').on('click', '.show-post', function () {
           
            dataId = $(this).attr('id');
             
           
               $.ajax({
                   url:"DynamicPdf/"+dataId ,
                    success:function(data) {
                      $("body").html(data);
                      
                     // This will navigate to your preferred location
                     window.location.href = url;   
                },
                   
               })
               
        });
 
           // $('#tombol-show').click(function () {
                
       // });
    
        
 
        //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "pegawai/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_pegawai').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('
                        delete ')}}',
                        position: 'bottomRight'
                    });
                }
            })
        });

       


    </script>
 
    <!-- JAVASCRIPT -->
</body>
 
</html>