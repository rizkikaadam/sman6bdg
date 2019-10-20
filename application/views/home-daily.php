<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daily Activity</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!--link javascript untuk textfield dinamis-->
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- script untuk membuat texfield dinamis -->
    <script>

      $(document).ready(function(){
         
        $('#add').click(function(){
         
        var inp = $('#box');
         
        var i = $('input').size() + 1;
         
        $('<div id="box' + i +'" style="padding-top:2%;"><div id="footer" class="row" ><div class="col-md-16" style="background-color:navy;color:white;text-align:center;"><textarea class="form-control" rows="3" placeholder="Deskripsikan dengan singkat dan jelas kegiatan/aktifitas anda pada tanggal tersebut"></textarea><img src="http://findicons.com/files/icons/753/gnome_desktop/64/gnome_edit_delete.png" title="Hapus"  width="32" height="32" border="0" align="top" class="add" id="remove" /></div></div> </div>').appendTo(inp);
         
         i++;
         
        });
         
         
        $('body').on('click','#remove',function(){
         
        $(this).parent('div').remove();
         
        });
         
      });

    </script>
    </head>
  <body>
    <div id="wrapper" class="">
      <div id="header" class="row">
        <div class="col-md-12" style="background-color:lavender;"><center><h1>DAILY ACTIVITY FULL INNOVATION</h1></center></div>
      </div>
      <div id="body" class="row badan">
      <!--awal body-->
        <div class="col-md-12 grid-badan" style="">
        <!--awal kotak vertical-->
          <div class="col-md-2 balok">
            <!--body image-->
            <h5><i class="glyphicon glyphicon-user" style="color:grey;"></i> Willy Adhi Wiguna</h5>
            <div class="fotoprofil" >  
               <img src="<?php echo base_url() ?>assets/sumberdaya/foto/bau.jpg" class="img-thumbnail" alt="willy">   
            </div>        
            <!--body image-->
            <!-- awal script kartu-->
            <div class="col-md-12 card">
              <div class="col-md-12 cardicon">
               <i class="glyphicon glyphicon-exclamation-sign iconsmall" style="color:red;"></i>  <i class="glyphicon glyphicon glyphicon-ok iconsmall" style="color:green;"></i>
              </div>
              <div class="col-md-12 cardlabel-judul">
               Activity 1 yuhuuuuu ......
              </div>
              <div class="col-md-12 cardlabel-judul">
               <i class="glyphicon glyphicon-tags icongrey"></i> 1 <i class="glyphicon glyphicon-comment icongrey"></i>
              </div>
            </div>
            <!-- akhir script kartu -->
            <!-- awal tombol tambah -->
            <div class="col-md-12 btn-tambah" >
              <a class="btn btn-default" href="#" role="button" id="add" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus icongrey" ></i></a>
            </div>
            <!-- akhir tombol tambah -->
          </div>
        <!--akhir kotak vertical-->
        </div>
      <!--akhir body-->
      </div>
      <div id="footer" class="row" >
        <div class="col-md-12 bawah" >Copyright @ FULL INNOVATION 2016</div>
        <!-- awal modal input data -->
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Aktifitas</h4>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Aktifitas</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Judul Aktifitas">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi Aktifitas</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsikan dengan singkat dan jelas kegiatan/aktifitas anda pada tanggal tersebut"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kendala</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsikan dengan singkat dan jelas kendala anda pada aktifitas tersebut"></textarea>
                  </div>
                  <label for="exampleInputEmail1">Progres</label>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                      60% Complete
                    </div>
                  </div>
                  <label for="exampleInputEmail1">Komentar</label>
                  <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Tulis komentar mu"></textarea>
                  </div>
              </form> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div> 
        <!-- akhir modal input data -->
      </div>
    </div>
  </body>
</html>