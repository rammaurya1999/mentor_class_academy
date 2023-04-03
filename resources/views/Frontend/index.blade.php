<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- <script src="jquery-3.6.3.min.js"></script> -->
    <title>Document</title>
</head>
<style>
    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 20%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.btn{
    margin-top:10px;
}
</style>
<body>
<div  style="float:right;">
    <button id="myBtn">User Details</button>
    <a href="{{url('userlogout')}}">Logout</a>
   </div>

   <center><h1>Welcome to Mentor Classess</h1></center> 


<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="float:right">

    <ul style="text-decoration:none">
        <li><a class="btn btn-success" href="#">Profiles</a></li>
        <li><a class="btn btn-success" href="#">Dashboard</a></li>
        <li><a class="btn btn-success" href="#">Introduction of mentors</a></li>
        <li><a class="btn btn-success" href="#">My Courses</a></li>
        <li><a class="btn btn-success" href="#">Gift Card</a></li>
        <li><a class="btn btn-success" href="#">Settings</a></li>
    </ul>
  </div>

</div>

<div class="container">
  
  
        <div class="row">
            <div class="col-md-2 col-md-offset-6 text-right">
                <strong>Select Language: </strong>
            </div>
            <div class="col-md-4">
                <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                </select>
            </div>
        </div>
    
        <h1>{{ __('messages.title') }}</h1>
     
    </div>
    <script type="text/javascript">
  
  var url = "{{ url('lang_change') }}";

  $(".changeLang").change(function(){
    // alert();
      window.location.href = url + "?lang="+ $(this).val();
  });

</script>

   <!-- <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>
</html>