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
            $( "#screening-option" ).click(function() {
                $(".screening-options").removeClass('d-none');
                // $(".screening-options").removeClass('d-none');
                }); 
            $( "#submit" ).click(function() {
                let option = $('input[name=screeningOption]:checked', '#screenForm').val();
                let pageName = option + '.php'
               // $("#div1").load(p);
               window.location.href = pageName;
            });     
         }); 
    </script>
  </head>
  <body>  
    <div class="container form-container">
        <div class="form-section">
        <form method="post" action="fouthpage.php" id="screenForm">
            <div id='full-form'>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Evaluation</h3>
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="screening-option" name="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Screening</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline p-l-20">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" disabled name="inlineCheckbox1" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Standard Evaluation</label>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 screening-options d-none form-check-inline">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="screeningOption" id="exampleRadios1" value="dressing">
                        <label class="form-check-label" for="exampleRadios1">
                            Dressing
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="screeningOption" id="exampleRadios2" value="grooming" disabled>
                        <label class="form-check-label" for="exampleRadios2">
                            Grooming
                        </label>
                        </div>
                        <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="screeningOption" id="exampleRadios3" value="eating" disabled> 
                        <label class="form-check-label" for="exampleRadios3">
                            Eating
                        </label>
                    </div>
                  </div>
                    <div class="col-sm-12 text-center mt-3">
                            <button type="button" class="btn btn-primary" id="submit">Submit</button>
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