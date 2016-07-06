<div class="col-md-6">


  <div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image', null) !!}
  </div>
<br>

<label>select multiple files</label>
<div class="form-group">
    <input type="file"  id="multiple" class="form-control" name="name" value="" multiple="">
</div>

<input type="text" id="size" name="name" value="">
<div id="disp_tmp_path"></div>
<div id="image-container">
<div id="path">

</div>

</div>

<script type="text/javascript">

function humanFileSize(bytes, si) {
     var thresh = si ? 1000 : 1024;
     if(bytes < thresh) return bytes + ' B';
     var units = si ? ['kB','MB','GB','TB','PB','EB','ZB','YB'] : ['KiB','MiB','GiB','TiB','PiB','EiB','ZiB','YiB'];
     var u = -1;
     do {
         bytes /= thresh;
         ++u;
     } while(bytes >= thresh);
     return bytes.toFixed(1)+' '+units[u];
 }

 $('#file_upload').on('change' , function(event) {
       var tmppath = URL.createObjectURL(event.target.files[0]);
       $("img").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
       console.log(tmppath);
       $("#disp_tmp_path").html("Temporary Path(Copy it and try pasting it in browser address bar) --> <strong>["+tmppath+"]</strong>");
  });
  $('#multiple').on('change', function(){
      console.log(this.files);
      renderImage(this.files[0])
  });

  function renderImage(file){
    var reader = new FileReader();
    // mostramos la imagen
    reader.onload = function(event){
    the_url = event.target.result

    $('#image-container').html("<img src='" + the_url + "' />");}
    document.getElementById('size').value = (humanFileSize(file.size, "MB"))
    reader.readAsDataURL(file);
  }
</script>
<br>
</div>
