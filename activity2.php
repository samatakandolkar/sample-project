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
       $( window ).on( "load", function() {
        console.log( "window loaded" );
        setTimeout(function(){ 
            $("#activity2-block").addClass('d-none'); 
            $("#activity2-optn-block").removeClass('d-none');
            $("#submit-block").removeClass('d-none'); }, 3000);
    });
        $( document ).ready(function() {    
            $( "#submit" ).click(function() {
                let check = $("input:checkbox[class=form-check-input]:checked").length;
                if(check) {
                    var answers = '';
                    $("#required-error").addClass('d-none');
                    $("input:checkbox[class=form-check-input]:checked").each(function () {
                        answers += $(this).val() + ',';
                    });
                    //alert(answers);
                    localStorage.setItem("memory-answer", answers);
                    window.open('activity3.php', '_self')

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
                <h1>Activity Time</h1>
             </div>
            </div>
                <div class="row" id="activity2-block">
                    <div class="col-sm-12">
                        <h6>Observe the image</h6>
                    </div>
                    <div class="col-sm-4">
                        <img src="./images/activity2_full.jpg" alt="..." class="img-thumbnail">
                    </div>
        
                </div>
                <div class="row d-none" id="activity2-optn-block">
                <div class="col-sm-12">
                        <h6>select the cloths worn by the boy in previous image?</h6>
                    </div>
                    <div class="col-sm-4">
                        <img src="./images/activity-opts/1.jpg" alt="..." class="img-thumbnail-new">
                        <input class="form-check-input" type="checkbox" value="1" id="check1">
                    </div>
                    <div class="col-sm-4">
                        <img src="./images/activity-opts/2.jpg" alt="..." class="img-thumbnail-new">
                        <input class="form-check-input" type="checkbox" value="2" id="check2">
                    </div>   <div class="col-sm-4">
                        <img src="./images/activity-opts/3.png" alt="..." class="img-thumbnail-new">
                        <input class="form-check-input" type="checkbox" value="3" id="check3">
                    </div>   <div class="col-sm-4">
                        <img src="./images/activity-opts/4.png" alt="..." class="img-thumbnail-new">
                        <input class="form-check-input" type="checkbox" value="4" id="check4">
                    </div>   <div class="col-sm-4">
                        <img src="./images/activity-opts/5.jpg" alt="..." class="img-thumbnail-new">
                        <input class="form-check-input" type="checkbox" value="5" id="check5">
                    </div>   <div class="col-sm-4">
                        <img src="./images/activity-opts/6.jpg" alt="..." class="img-thumbnail-new">
                        <input class="form-check-input" type="checkbox" value="6" id="check6">
                    </div>   <div class="col-sm-4">
                        <img src="./images/activity-opts/7.jpg" alt="..." class="img-thumbnail-new">
                        <input class="form-check-input" type="checkbox" value="7" id="check7">
                    </div>  
        
                </div>
                <div class="row d-none" id="submit-block">
                <div class="col-sm-12 text-center mt-3">
                    <div class="text-danger d-none" id="required-error"> Please select atleast one image </div>
                        <button type="button" class="btn btn-primary mt-2" id="submit">Submit</button>
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