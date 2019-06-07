<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
            .container{
                margin-top: 20px;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="container">
           <div class="row">
            <div class="col col-sm-8">
               <form action="/reg" method="post">
                   {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" id="name" name ="name" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>   
                   <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="gender" value="Male" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="gender" value="Female">
                          <label class="form-check-label" for="exampleRadios2">
                            Female
                          </label>
                        </div>
                   </div>
                   
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Stream</label>
                        <select class="form-control" id="stream">
                          <option>CSE</option>
                          <option>ISE</option>
                          <option>EEE</option>
                          <option>ECE</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="exampleFormControlSelect1">Hobbies</label>
                        <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="hobbies" value = "Cricket">
                        <label class="form-check-label" for="exampleCheck1">Cricket</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="hobbies" value = "Music">
                        <label class="form-check-label" for="exampleCheck1">Music</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="hobbies" value = "Reading Book">
                        <label class="form-check-label" for="exampleCheck1">Reading Book</label>
                        </div>
                             
                    </div>
                   <div class="form-group">
                        <label for="exampleInputName">DOB</label>
                        <input type="date" class="form-control" id="dob" aria-describedby="emailHelp" placeholder="Enter email">
                    </div> 
                    <button  class="btn btn-primary" id="submit">Submit</button>
                </form>
            </div>
            <div class="col col-sm-4">
                <div class="form-group">
                        <label for="exampleInputName">Name :</label>
                        <div id ="name1"></div>
                </div>
                <div class="form-group">
                        <label for="exampleInputName">Gender :</label>
                        <div id ="gender1"></div>
                </div>
                <div class="form-group">
                        <label for="exampleInputName">Stream :</label>
                        <div id ="stream1"></div>
                </div>
                <div class="form-group">
                        <label for="exampleInputName">Hobbies :</label>
                        <div id ="hobbies1"></div>
                </div>
                <div class="form-group">
                        <label for="exampleInputName">DOB :</label>
                        <div id ="dob1"></div>
                </div>
            </div>
           </div>
        </div>
        <script>
           
            $(document).submit(function(){               
                    
                var name = $("#name").val();
                var gender = $("#gender").val();
                var stream = $("#stream").val();
                var hobbies = $("#hobbies").val();
                var dob = $("#dob").val();
                   
                if(!name){
                    $('#name1').html() = name;

                }
                });   
            
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
