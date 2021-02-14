<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Functional Cognitive Evaluation</title>
    <?php include('_header_includes.php'); ?>
    <?php include('_header.php'); ?>
    <script>
        $( document ).ready(function() {    
            $( "#submit" ).click(function() {
                var myFile = $('#fileinput').prop('files')[0];
                if(myFile) {
                    $("#required-error").addClass('d-none');
                    window.open('observation.php', '_self')
                } else {
                    $("#required-error").removeClass('d-none');
                }
               
            });
            $( "#fileinput" ).change(function() {
                var myFile = $('#fileinput').prop('files')[0];
                if(myFile) {
                    console.log('I m in')
                    $("#vid-player").removeClass('d-none');
                } else {
                    $("#required-error").removeClass('d-none');
                }
               
            });
            
         }); 
    </script>
  </head>
  <body>  
    <div class="container form-container">
        <div class="form-section">
        <form id="dressingForm">
            <div id='full-form'>
            <div class="row">
            <div class="col-sm-12">
                <h1>Performance</h1>
             </div>
            </div>
                <div class="row" id="activity3-block">
                    <div class="col-sm-12">
                        <h6>Take a shirt from cupboard, dress up and uplaod a video</h6>
                    </div>  
                    <div class="col-sm-12" id="file-input">
                        <div class="file btn btn-lg btn-primary">
							<input type="file" name="file" id="fileinput"/>
						</div>
                    </div>
                    <div class="col-sm-12 mt-2 mb-3 d-none" id="vid-player">
                    <video width="320" height="240" controls>
                        <source src="https://www.w3schools.com/html/movie.mp4" type="video/mp4">
                        <source src="https://www.w3schools.com/html/movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    </div>
                    <div class="col-sm-12 mt-3">
                       <p>Disclaimer: This activity is to be carried out in presence of caregiver.</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-12 text-center mt-3">
                    <div class="text-danger d-none" id="required-error"> Please uplaod video!  </div>
                        <button type="button" class="btn btn-primary mt-2" id="submit">Next</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <?php include('_script_includes.php'); ?>
</body>
</html>       