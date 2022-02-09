 <!-- CSS -->
 <style>
    #my_camera {
       width: 320px;
       height: 240px;
       border: 1px solid black;
    }
 </style>


 <!-- -->
 <div class="row">
    <div class="col-md-4">
       <div id="my_camera"></div>
       <br />
       <button type="button" id="btn_take_photo" data-id="<?= $params['post']->Matricule ?>"> Take Snapshot</button>
       <br />
    </div>
    <div class="col-md-4">
       <div id="results"></div>

    </div>
    <div class="col-md-4">
       <div id="results"></div>
    </div>
 </div>

 <!-- Script -->
 <!-- <script type="text/javascript" src="webcam.min.js"></script> -->

 <!-- Code to handle taking the snapshot and displaying it locally -->
 <script language="JavaScript">
    // Configure a few settings and attach camera
    Webcam.set({
       //  width: 320,
       //  height: 240,
       // //  dest_width : 157 , 
       // //  dest_height : 246 , 
       crop_width: 157,
       crop_height: 200,
       image_format: 'jpeg',
       jpeg_quality: 100
    });

    //  Webcam . set ( { 
    // 	largeur : 320 , 
    // 	hauteur : 240 , 
    // 	dest_width : 640 , 
    // 	dest_height : 480 , 
    // 	image_format : 'jpeg' , 
    // 	jpeg_quality : 90 , 
    // 	force_flash : false , 
    // 	flip_horiz : true , 
    // 	fps : 45 
    // });
    Webcam.attach('#my_camera');

    $(document).on('click', '#btn_take_photo', function() {
       //  function take_snapshot() {
       var ID = $(this).attr('data-id');


       // take snapshot and get image data
       Webcam.snap(function(data_uri) {

          document.getElementById('results').innerHTML =
             '' +
             '<img src="' + data_uri + '" style=" width: 200px; height: 246px; "> <br> <br>' +
             '<button type="button" value="" data-id="' + ID + '" id="save_snapshot">save photo</button>';

       });
    })
    ////////////////////////////////////////
    $(document).on('click', '#save_snapshot', function() {
       //  function save_snapshot() {
       var ID = $(this).attr('data-id');
       Webcam.snap(function(data_uri) {
          //  var dataArray =[];
          //  dataArray[0] = data_uri;
          //  dataArray[1] = ID;

          Webcam.upload(data_uri, 'saveimage', function(code, text, Name) {


          });
       });
    })
 </script>