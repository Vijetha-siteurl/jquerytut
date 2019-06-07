<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Tabs</h3>
  <ul class="nav nav-tabs tabs ">
    <li data-name = "tab1"><a href="#">Tab 1</a></li>
    <li class="active" data-name="tab2"><a href="#"  name ="tab">Tab 2</a></li>
    <li data-name="tab3"><a href="#"  name ="tab">Tab 3</a></li>
    <li data-name="tab4"><a href="#"  name ="tab">Tab 4</a></li>
  </ul>
  <br>
  <div id = "tab1" class ="div-hide" style="display :none;">
      <p> tab 1</p>
  </div>
   <div id = "tab2" class ="div-hide" style="display :none;">
      <p> tab 2</p>
  </div>
   <div id = "tab3" class ="div-hide" style="display :none;">
      <p> tab 3</p>
  </div>
   <div id = "tab4" class ="div-hide" style="display :none;">
      <p> tab 4</p>
  </div>
  
</div>
    <script src = "{{asset('js/tabs.js')}}"></script>   
</html>
