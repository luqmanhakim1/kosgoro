<?php

/**
 * PSB Online - SMK Kosgoro Nganjuk
 * ------------------------------------------------------------------------
 * @package     PSB Online
 * @author      Luqman Hakim <luckman.heckem@gmail.com>
 * @copyright   Copyright (c) 2016
 * @link        github.com/luqmanhakim1
 * ------------------------------------------------------------------------
 * Template by www.startbootstrap.com
 */

?>

<link href="../dist/bootstrap-wysihtml5/bootstrap.min.css" rel="stylesheet" type="text/css">

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"> Data Informasi</h3>
    </div>
</div>
<div class="panel panel-default"> 
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-10">

            <form id="defaultForm" action="?p=info.action" method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label>Judul Informasi</label>
                    <input type="text" name="info_judul" class="form-control" placeholder="Judul Informasi" required/>
                </div><br/>
                <div class="form-group" >
                <label>Isi Informasi</label>
                    <div class="write">
                        <form class="margin-b-20">
                        <p><textarea class="textarea form-control wysihtml5-textarea" name="info_isi" placeholder="Enter text ..." style="height:270px; width:100%;" required/></textarea></p>

                        </form>
                    </div>
                <br/>
                <button type="submit" name="insert" class="btn btn-success" style="line-height:5px; padding: 9px 11px 9px; font-size: 14px; "><i class="fa fa-check fa-fw"></i> Save</button>
                <a href="?p=info.view" class="btn btn-warning" style="line-height:5px; padding: 9px 11px 9px; font-size: 14px; "><i class="fa fa-rotate-left fa-fw"></i> Cancel</a>
            </form>
            
            </div>
        </div>
    </div>
</div>

<script>
  /* BOOTSTRAP WYSIHTML5 */
  $('.textarea').wysihtml5();
</script>
