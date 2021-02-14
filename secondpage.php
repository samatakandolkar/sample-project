
<?php 
$name = $age = $gender = $diagnosis = $reference = '';
// $name = "Samata"; $age ="16"; $gender ="Female"; $diagnosis ='Test'; $reference = 'Test';
 ?>
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
    function showHidePerson(value) {
        if(value == 'yes') {
            document.getElementById("person-id").style.display = 'block';
            document.getElementById("full-form").style.display = 'none';
        } else {
            document.getElementById("person-id").style.display = 'none';
            document.getElementById("full-form").style.display = 'block';
        }
    }

    function onPersonChange(person) {
        if(person) {
            document.getElementById("person-id").style.display = 'block';
            document.getElementById("full-form").style.display = 'block';
        }
    }
    </script>
  </head>
  <body>  
    <div class="container form-container">
        <div class="form-section">
        <form method="post" action="thirdpage.php">
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">Are you existing user?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes" onclick="showHidePerson('yes')">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" onclick="showHidePerson('no')">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div> -->
            <!-- <div class="form-group"  id='person-id'>
                <label for="exampleFormControlSelect1"> Select Person</label>
                <select class="form-control" id="exampleFormControlSelect1" onchange="onPersonChange(this.value);">
                <option value="1">Person 1</option>
                <option value="2">Person 2</option>
                <option value="3">Person 3</option>
                <option value="4">Person 4</option>
                <option value="5">Person 5</option>
                </select>
            </div> -->
            <div id='full-form'>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" value="<?php echo $name;?>" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" required >
                    </div>
                    <div class="col-sm-6">
                            <label for="exampleFormControlInput1">Age</label>
                            <input type="text" name="age" value="<?php echo $age;?>" class="form-control" id="exampleFormControlInput1" placeholder="Enter Age" required>
                    </div>
                    <div class="col-sm-6">
                            <label for="exampleFormControlInput1">Gender</label>
                            <select class="form-control">
                                <option>Female</option>
                                <option>Male</option>
                                <option>Others</option>
                            </select>
                            <!-- <input type="text" name="gender" value="<?php echo $gender;?>" class="form-control" id="exampleFormControlInput1" placeholder="Enter Gender" required> -->
                    </div>
                    <div class="col-sm-12">
                            <label for="exampleFormControlInput1">Diagnosis</label>
                            <input type="text" name="diagnosis" value="<?php echo $diagnosis;?>" class="form-control" id="exampleFormControlInput1" placeholder="Enter Diagnosis" required>
                    </div>
                    <div class="col-sm-12">
                            <label for="exampleFormControlInput1">Reference</label>
                            <input type="text" name="reference" value="<?php echo $reference;?>" class="form-control" id="exampleFormControlInput1" placeholder="Enter Reference" required>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-check-input m-l-3" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label p-l-20" for="defaultCheck1">
                            I agree to take the test
                        </label>
                    </div>
                    <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
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