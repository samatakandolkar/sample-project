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
                let Answer4 = $('#input4').val();
                let Answer5 = $('#input5').val();
                let Answer6 = $('#input6').val();
                console.log(Answer1)
                if(Answer1 != '' && Answer2 !='' && Answer3 != '' && Answer4 != '' && Answer5 !='' && Answer6 != '') {
                    let answerStr = Answer1 + ',' + Answer2 +','+ Answer3 + ',                                   ' +  Answer4+ ',' + Answer5 +','+ Answer6;
                    localStorage.setItem("sequence-Answer", answerStr);
                    window.open('activity4.php', '_self')
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
                <div class="row" id="activity3-block">
                    <div class="col-sm-12">
                        <h6>Select the garmets in the order you will waer them.</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <img src="./images/activity3_full.jpg" alt="..." class="img-thumbnail mb-2">
                        <p class="text-center font-weight-bold">Enter Sequence</p>
                        <ol class="list-group">
                            <li class="list-group-item">1.<input type="text" name="seq1" class="form-control" id="input1" required></li>
                            <li class="list-group-item">2.<input type="text" name="seq2" class="form-control" id="input2" required></li>
                            <li class="list-group-item">3.<input type="text" name="seq3" class="form-control" id="input3" required></li>
                            <li class="list-group-item">4.<input type="text" name="seq4" class="form-control" id="input4" required></li>
                            <li class="list-group-item">5.<input type="text" name="seq5" class="form-control" id="input5" required></li>
                            <li class="list-group-item">6.<input type="text" name="seq6" class="form-control" id="input6" required></li>
                    </ol>
                    </div>
                    <div class="col-sm-6" id="activity3-optn-block">
                        <!-- <img src="./images/activity3_full.jpg" alt="..." class="img-thumbnail"> -->
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="./images/activity3-opts/1.jpg" alt="..." class="img-thumbnail">
                                <p class="text-center font-weight-bold">A</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="./images/activity3-opts/2.jpg" alt="..." class="img-thumbnail">
                                <p class="text-center font-weight-bold">B</p>
                            </div>   
                            <div class="col-sm-6">
                                <img src="./images/activity3-opts/3.jpg" alt="..." class="img-thumbnail">
                                <p class="text-center font-weight-bold">C</p>
                            </div>   
                            <div class="col-sm-6">
                                <img src="./images/activity3-opts/4.jpg" alt="..." class="img-thumbnail">
                                <p class="text-center font-weight-bold">D</p>
                            </div>   
                            <div class="col-sm-6">
                                <img src="./images/activity3-opts/5.jpg" alt="..." class="img-thumbnail">
                                <p class="text-center font-weight-bold">E</p>
                            </div>   
                            <div class="col-sm-6">
                                <img src="./images/activity3-opts/6.jpg" alt="..." class="img-thumbnail">
                                <p class="text-center font-weight-bold">F</p>
                            </div> 
                        </div>
                    </div>

                <!-- <div class="col-sm-12">
                        <h6>select the cloths worn by the boy in previous image?</h6>
                    </div>
                       -->
        
                </div>
                <div class="row">
                <div class="col-sm-12 text-center mt-3">
                    <div class="text-danger d-none" id="required-error"> All answers are required!  </div>
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