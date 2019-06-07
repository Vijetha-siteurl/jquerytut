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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- Styles -->

    </head>
    <body >
        <div class="container" >
            <div class="row">
                <div class="col col-sm-12">
                <button type="button" class="btn btn-info addUserPopup">Add User</button>
                </div>
            </div>

            <div class="row">
                <div class="col col-sm-12">
                    <table class="table table-bordered" id = "datatable" >
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Stream</th>
                                <th>Hobbies</th>
                                <th>DOB</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody >

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="addUser" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"> User</h4>
                        </div>
                        <div class="modal-body">
                            <form id="employee_reg">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" id="name" name ="name" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>   
                                <div class="form-group">
                                    <div class="radio">
                                        <label><input type="radio" id ="male" name="gender" data-name='Male'>Male</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" id =" female" name="gender" data-name='Female'>Female</label>
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
                                        <input type="checkbox" class="form-check-input" id="hobbies" name ="hobbies" value = "Cricket">
                                        <label class="form-check-label" for="exampleCheck1">Cricket</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="hobbies" name ="hobbies" value = "Music">
                                        <label class="form-check-label" for="exampleCheck1">Music</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="hobbies" name ="hobbies" value = "Reading Book">
                                        <label class="form-check-label" for="exampleCheck1">Reading Book</label>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">DOB</label>
                                    <input type="date" class="form-control" id="dob" aria-describedby="emailHelp" placeholder="Enter email">
                                </div> 
                                <button  class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="{{asset('js/employee.js')}}"></script>
    </body>
</html>
