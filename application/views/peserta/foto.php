<script src="<?php echo base_url();?>peserta/assets/js/ajaxfileupload.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#my-form').submit(function(e) {
		e.preventDefault();
      $.ajaxFileUpload({
         url         	:'<?php echo site_url(); ?>peserta/home/simpan_foto', 
         secureuri      :false,
         fileElementId  :'Foto',
         dataType    	: 'json',
		 data        	: {
            'NoDaftar'           : $('#NoDaftar').val()
         },
         success  : function (data,status){
			if(data.status != 'error'){
			   window.location.assign("<?php echo site_url();?>peserta/home/ijazah");
            }
            alert(data.msg);
         }
      });
      return false;
   });
   
});
</script>
<div class="ui-widget">
  <div class="ui-state-highlight ui-corner-all">
    <p><i class="icon-user"></i>
    <strong><?php echo $judul;?></strong></p>
  </div>
</div>
<form id="my-form" name="my-form" method="POST" action="" enctype="multipart/form-data">
<input type="hidden" name="NoDaftar" id="NoDaftar" value="<?php echo $this->session->userdata('nim');?>" />
<table class="table table-bordered table-striped table-hover">
<tbody>
<tr>
	<td colspan="2"><h4>C. Silahkan Upload Foto Anda ukuran 6x4 tidak lebih dari 2Mb.</h4></td>
</tr>    
<tr>
	<td class="span4">Upload Foto</td>
	<td><input type="file" name="Foto" id="Foto" class="span4"></td>
</tr>
<tr>
	<td colspan="2">Contoh Foto <br />
    <img src="<?php echo base_url();?>peserta/foto/contoh_2.jpg" width="140" height="160" />
    <img src="<?php echo base_url();?>peserta/foto/contoh_3.jpg" width="140" height="160" />
    </td>
</tr>
<tr>
	<td colspan="2">Silahkan Klik Lanjut !!!</td>
</tr>  
<tr>
	<td colspan="2"><center>
    <a href="<?php echo base_url();?>index.php/peserta/home/index" class="btn btn-info"><i class="icon-hand-left icon-white"></i> Kembali</a>
    <button type="submit" name="simpan" id="simpan" class="btn btn-primary"><i class="icon-hand-right icon-white"></i> Lanjut Ke Step 3</button>
    <a href="<?php echo base_url();?>index.php/peserta/home/ijazah" class="btn btn-info"><i class="icon-thumbs-up icon-white"></i> Abaikan</a>
    </center>
</tbody>
</table>
</form>
<div id="files"></div>