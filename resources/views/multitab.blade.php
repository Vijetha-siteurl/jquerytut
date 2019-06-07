<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>

        <div class="container" >

            <ul class="nav nav-tabs tabs " style="margin-top: 20px;">
                <li class="active" id ="ftab" data-name = "tab1"><a href="#">Name Details</a></li>
                <li id ="stab" data-name="tab2"><a href="#"  name ="tab">Edu Details</a></li>
                <li id ="ttab" data-name="tab3"><a href="#"  name ="tab">City Details</a></li>
            </ul>
            <br>
            <form name = "validate">
            <div id = "tab1" class ="div-hide" style="display :none;">
                <div class="form-group">
                    <label for="exampleInputName">First Name</label>
                    <input type="text" class="form-control" id="fname" name ="fname" aria-describedby="emailHelp" placeholder="Enter First Name">
                    <span id ="fnameerr"></span>
                </div> 
                <div class="form-group">
                    <label for="exampleInputName">Middle Name</label>
                    <input type="text" class="form-control" id="mname" name ="mname" aria-describedby="emailHelp" placeholder="Enter Middle Name">
                    <span id ="mnameerr"></span>
                </div> 
                <div class="form-group">
                    <label for="exampleInputName">Last Name</label>
                    <input type="text" class="form-control" id="lname" name ="lname" aria-describedby="emailHelp" placeholder="Enter Last Name">
                    <span id ="lnameerr"></span>
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary next1" data-current ="tab1" data-next="tab2" >Next</button>
                </div>
            </div>
            <div id = "tab2" class ="div-hide" style="display :none;">
                <div class="form-group">
                    <label for="exampleInputName">School Name</label>
                    <input type="text" class="form-control" id="school" name ="school" aria-describedby="emailHelp" placeholder="Enter School Name">
                    <span id ="schoolerr"></span>
                </div> 
                <div class="form-group">
                    <label for="exampleInputName">College Name</label>
                    <input type="text" class="form-control" id="college" name ="college" aria-describedby="emailHelp" placeholder="Enter College Name">
                    <span id ="collegeerr"></span>
                </div> 

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary prev" >Prev</button>
                    <button type="button" class="btn btn-primary next1" data-current ="tab2" data-next="tab3">Next</button>
                </div>
            </div>
            <div id = "tab3" class ="div-hide" style="display :none;">
                <div class="form-group">
                    <label for="exampleInputName">City</label>
                    <input type="text" class="form-control" id="city" name ="city" aria-describedby="emailHelp" placeholder="Enter City Name">
                    <span id ="cityerr"></span>

                </div> 
                <div class="form-group">
                    <label for="exampleInputName">State</label>
                    <input type="text" class="form-control" id="state" name ="state" aria-describedby="emailHelp" placeholder="Enter State Name">
                    <span id ="stateerr"></span>

                </div> 
                <div class="form-group">
                    <label for="exampleInputName">Nationality</label>
                    <input type="text" class="form-control" id="nation" name ="nation" aria-describedby="emailHelp" placeholder="Enter Nationality">
                    <span id ="nationerr"></span>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary prev" >Prev</button>

                    <button type="submit" class="btn btn-primary " >Submit</button>
                </div>
            </div>
            </form>

        </div>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js"></script>
        <script src = "{{asset('js/multi.js')}}"></script>   
</html>


