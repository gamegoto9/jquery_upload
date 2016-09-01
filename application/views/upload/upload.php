<!doctype html>
<html>
<head>
    <!-- Metro UI bootstrap-->
    <link href="<?php echo base_url("assets/css/metro.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/metro-responsive.css")?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/metro-icons.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/metro-schemes.css");?>">
    <!-- END bootstrap-->
    <!-- Dropzone CSS-->
    <link href="<?php echo base_url("assets/plugin/dropzone/min/dropzone.min.css")?>" rel="stylesheet">
    <!-- End Css Dropzone-->
    <!-- Load javascript-->
    <script src="<?php echo base_url("assets/js/jquery-2.1.3.min.js");?>"></script>
    <script src="<?php echo base_url("assets/plugin/dropzone/dropzone.js")?>"></script>
    <script src="<?php echo base_url("assets/js/metro.js");?>"></script>
    <script src="<?php echo base_url("assets/js/metro.min.js");?>"></script>
    <!-- End Javascript-->

    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body class="container">
   <div class="grid">
    <div class="row">
        <div class="cell">
            <form action="upload/upload_file" class="dropzone" id="my-dropzone">
            </form>
            <!-- <div class="dropzone" id="my-dropzone"></div> -->

            <button id="submit-all">Submit all files++</button>
        </div>
    </div>
    <div class="row">
        <div class="cell">
            <div class="set-border padding10 no-padding-top no-padding-bottom">
              <label class="input-control radio small-check">
                  <input type="radio" name="r1" value="default" checked="">
                  <span class="check"></span>
                  <span class="caption">default</span>
              </label>
              <label class="input-control radio small-check">
                  <input type="radio" name="r1" value="list-type-icons">
                  <span class="check"></span>
                  <span class="caption">Icons</span>
              </label>
              <label class="input-control radio small-check">
                  <input type="radio" name="r1" value="list-type-tiles">
                  <span class="check"></span>
                  <span class="caption">Tiles</span>
              </label>
              <label class="input-control radio small-check">
                  <input type="radio" name="r1" value="list-type-listing">
                  <span class="check"></span>
                  <span class="caption">Listing</span>
              </label>
          </div>
          <div class="listview set-border padding10 default" data-role="listview" id="lv1" >

          </div>
      </div>
  </div>
</div>
</body>
<script type="text/javascript">
    $(document).ready(function(e) {




     Dropzone.options.myDropzone = {

  // Prevents Dropzone from uploading dropped files immediately
  autoProcessQueue: false,

  init: function() {
    var submitButton = document.querySelector("#submit-all")
        myDropzone = this; // closure

        submitButton.addEventListener("click", function() {
      myDropzone.processQueue(); // Tell Dropzone to process all queued files.
  });

    // You might want to show the submit button only when 
    // files are dropped here:
    this.on("addedfile", function() {
      // Show submit button here and/or inform user to click it.
  });

}
};



     var dropzone = new Dropzone('.dropzone', {
        parallelUploads: 2,
        acceptedFiles: 'image/*,.pdf,.avi,.mp4,.flv',
        filesizeBase: 1024,
        maxFilesize:25000,
        createImageThumbnails: true,
        addRemoveLinks: true,
        dictDefaultMessage: "Drop files here to upload",
        dictFallbackMessage: "Browser anda tidak suport drag'n'drop file upload.",
        dictFileTooBig: "Ukuran file terlalu besar Max ukuran file: {{maxFilesize}}Mb.",
        dictInvalidFileType: "You can't upload files of this type.",
        dictResponseError: "Server responded with {{statusCode}} code.",
        dictCancelUpload: "Cancel upload",
        dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
        dictRemoveFile: "Remove file",
        dictRemoveFileConfirmation: null
    });





        // dropzone.on("complete", function(file) {
        //     //get_file();
        //     var int = setTimeout(function(){
        //        dropzone.removeFile(file);},
        //        5000);
        // });
        // get_file();
    });




    // function get_file()
    // {
    //     $.ajax({
    //         url:"<?php echo base_url()?>upload/get_file",
    //         success: function(data)
    //         {
    //             var dt = JSON.parse(data)
    //             $("#lv1").html(dt.content);
    //         }
    //     });
    // }
</script>
</html>
