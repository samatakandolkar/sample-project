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
            $( "#shirt-block input" ).click(function() {
                let shirtAnswer = $('input[name=shirtOption]:checked', '#dressingForm').val();
                $("#shirt-block input").attr('disabled', true);
                if(shirtAnswer != 'buttons') {
                    $( "#shirt-block .text-danger" ).removeClass('d-none');
                    $( "#shirt-block .text-success" ).addClass('d-none');
                } else {
                    $( "#shirt-block .text-danger" ).addClass('d-none'); 
                    $( "#shirt-block .text-success" ).removeClass('d-none');
                }
            });  
            $( "#pant-block input" ).click(function() {
                let pantAnswer = $('input[name=pantOption]:checked', '#dressingForm').val();
                $("#pant-block input").attr('disabled', true);
                if(pantAnswer != 'belt') {
                    $("#pant-block .text-danger" ).removeClass('d-none');
                    $( "#pant-block .text-success" ).addClass('d-none');
                } else {
                    $("#pant-block .text-danger" ).addClass('d-none');
                    $("#pant-block .text-success" ).removeClass('d-none');
                }
            }); 
            $( "#shoe-block input" ).click(function() {
                let shoeAnswer = $('input[name=shoesOption]:checked', '#dressingForm').val();
                $("#shoe-block input").attr('disabled', true);
                if(shoeAnswer != 'lace') {
                    $("#shoe-block .text-danger" ).removeClass('d-none');
                    $("#shoe-block .text-success" ).addClass('d-none'); 
                } else {
                    $("#shoe-block .text-danger" ).addClass('d-none');
                    $("#shoe-block .text-success" ).removeClass('d-none');
                }
            }); 
            $( "#submit" ).click(function() {
                let pantAnswer = $('input[name=pantOption]:checked', '#dressingForm').val();
                let shoeAnswer = $('input[name=shoesOption]:checked', '#dressingForm').val();
                let shirtAnswer = $('input[name=shirtOption]:checked', '#dressingForm').val();
                console.log(pantAnswer);
                console.log(shoeAnswer);
                console.log(shirtAnswer);
               //window.location.href = pageName;
               if(!pantAnswer || !shoeAnswer || !shirtAnswer) {
                $("#required-error" ).removeClass('d-none');
               } else {
                $("#required-error" ).addClass('d-none');
               }
            });            
         }); 
    </script>
  </head>
  <body>  
    <div class="container form-container">
        <div class="form-section">
        <form method="post" id="dressingForm">
            <div id='full-form'>
                <div class="row" id="shirt-block">
                    <div class="col-sm-12">
                        <h3>Shirt</h3>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="shirtOption" id="shirtRadios1" value="buttons">
                            <label class="form-check-label" for="shirtRadios1">
                                Buttons
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="shirtOption" id="shirtRadios2" value="belt">
                            <label class="form-check-label" for="shirtRadios2">
                                Belt
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="shirtOption" id="shirtRadios3" value="lace">
                            <label class="form-check-label" for="shirtRadios3">
                                Lace
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="shirtOption" id="shirtRadios4" value="handkerchief">
                            <label class="form-check-label" for="shirtRadios4">
                                Handkerchief
                            </label>
                        </div>
                        <div class="text-danger d-none"> Answer is incorrect! </div>
                        <div class="text-success d-none"> Answer is correct! </div>
                    </div>
                </div>
                <div class="row mt-3" id="pant-block">
                    <div class="col-sm-12">
                        <h3>Pant</h3>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pantOption" id="pantRadios1" value="belt">
                            <label class="form-check-label" for="pantRadios1">
                                Belt
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pantOption" id="pantRadios2" value="sock">
                            <label class="form-check-label" for="pantRadios2">
                                Sock
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pantOption" id="pantRadios3" value="scarf">
                            <label class="form-check-label" for="pantRadios3">
                                Scarf
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pantOption" id="pantRadios4" value="tie">
                            <label class="form-check-label" for="pantRadios4">
                                Tie
                            </label>
                        </div>
                        <div class="text-danger d-none"> Answer is incorrect! </div>
                        <div class="text-success d-none"> Answer is correct! </div>
                      </div>
                    </div>
                <div class="row mt-3" id="shoe-block">
                    <div class="col-sm-12">
                        <h3>Shoes</h3>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="shoesOption" id="shoesRadios1" value="lace">
                            <label class="form-check-label" for="shoesRadios1">
                                Lace
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="shoesOption" id="shoesRadios2" value="handkerchief">
                            <label class="form-check-label" for="shoesRadios2">
                                Handkerchief
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="shoesOption" id="shoesRadios3" value="chain">
                            <label class="form-check-label" for="shoesRadios3">
                                Chain
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="shoesOption" id="shoesRadios4" value="belt">
                            <label class="form-check-label" for="shoesRadios4">
                                Belt
                            </label>
                        </div>
                        <div class="text-danger d-none"> Answer is incorrect! </div>
                        <div class="text-success d-none"> Answer is correct! </div>
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