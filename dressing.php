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
                let Answer1 = $('#input1').val();
                let Answer2 = $('#input2').val();
                let Answer3 = $('#input3').val();
                if(Answer1 != '' || Answer2 !='' || Answer3 != '') {
                    let answerStr = Answer1 + ',' + Answer2 +','+ Answer3;
                    localStorage.setItem("garment-Answer", answerStr);
                    window.open('activity2.php', '_self')
                    
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
                <div class="row" >
                    <div class="col-sm-12">
                        <h6>Name the following garments?</h6>
                    </div>
                </div>

                <div class="row">
                <div class="col-sm-4">
                        <img src="./images/saree.jpg" alt="..." class="img-thumbnail-new"> 
                        <input type="text" name="answer1" value="" class="form-control" id="input1" placeholder="Enter Answer" required >
                    </div>
                    <div class="col-sm-4">
                    <img src="./images/suit.jpg" alt="..." class="img-thumbnail-new"> 
                    <input type="text" name="answer2" value="" class="form-control" id="input2" placeholder="Enter Answer" required >
                    </div>
                    <div class="col-sm-4">
                         <img src="./images/tie.jpg" alt="..." class="img-thumbnail-new">
                         <input type="text" name="answer3" value="" class="form-control" id="input3" placeholder="Enter Answer" required >
                    </div>
                </div>
               
                <div class="row">
                <div class="col-sm-12 text-center mt-3">
                    <div class="text-danger d-none" id="required-error"> All answers are required! </div>
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