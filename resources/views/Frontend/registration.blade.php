<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    html {
    height: 100%;
    width: 100%;
}

body {
    background: url("https://images.unsplash.com/photo-1485802007047-7774de7208e5?dpr=1&auto=compress,format&fit=crop&w=1800&h") no-repeat center center fixed;
    background-size: cover;
    font-family: 'Droid Serif', serif;
}

#container {
    background: rgba(3, 3, 55, 0.5);
    width: 18.75rem;
    height: 25rem;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

header {
    text-align: center;
    vertical-align: middle;
    line-height: 3rem;
    height: 3rem;
    background: rgba(3, 3, 55, 0.7);
    font-size: 1.4rem;
    color: #d3d3d3;
}

fieldset {
    border: 0;
    text-align: center;
}

input[type="submit"] {
    background: rgba(235, 30, 54, 1);
    border: 0;
    display: block;
    width: 70%;
    margin: 0 auto;
    color: white;
    padding: 0.7rem;
    cursor: pointer;
}

input {
    background: transparent;
    border: 0;
    border-left: 4px solid;
    border-color: #FF0000;
    padding: 10px;
    color: white;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    outline: 0;
    background: rgba(235, 30, 54, 0.3);
    border-radius: 1.2rem;
    border-color: transparent;
}

::placeholder {
    color: #d3d3d3;
}

/*Media queries */

@media all and (min-width: 481px) and (max-width: 568px) {
    #container {
        margin-top: 10%;
        margin-bottom: 10%;
    }
}
    @media all and (min-width: 569px) and (max-width: 768px) {
        #container {
            margin-top: 5%;
            margin-bottom: 5%;
        }
    }
</style>
<body>
    
      <div id="container">
         <header>Register Your Profile</header>
         <form  enctype="multipart/Form-data" id="form_data">
         @csrf
            <fieldset>
               <br/>
               <input type="file" name="user_image" id="user_image">
               <br/>
               <span style="color:white" id="image"></span><br/>
              
               <input type="text" name="user_name" id="user_name" placeholder="Enter Your Name" >
               <br/>
               <span style="color:white" id="name"></span>
               <br/>
               <input type="text" name="user_city" id="user_city" placeholder="Enter Your location" >
               <br/>
               <span style="color:white" id="location"></span>
               <br/>
               <input type="text" name="user_function" id="user_function" placeholder="Enter your job" >
               <br/>
               <span style="color:white" id="job"></span>
               <br/>
               <input type="text" name="user_password" id="user_password" placeholder="Enter your password" >
               <br/>
               <br/>
               <textarea name="user_summary" id="user_summary" cols="35" rows="3" placeholder="Enter your job"></textarea>
               <br/>
               <span style="color:white" id="summary"></span>
               <br/>
               
               <input type="button" name="submit" id="submit" value="REGISTER">
            </fieldset>
         </form>
      </div>
      <script src="{{url('/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/plugins')}}/dist/js/adminlte.min.js"></script>
      <script>
            $('#submit').click(function(){
                var user_image = $('#user_image').val();
                var user_name = $('#user_name').val();
                var user_city = $('#user_city').val();
                var user_function = $('#user_function').val();
                var user_summary = $('#user_summary').val();
                var token = '<?php echo csrf_token();?>'
                if(user_image == " " || user_image == "" || user_image == null){
                    var a = "Please upload the your image";
                    $('#image').text(a);
                }
                else if(user_name == '' || user_name == '' || user_name == null){
                    var b = "please Enter Your Name";
                    
                    $('#name').text(b);
                }
                else if(user_city == "" || user_city ==" " || user_city==null){
                    var c = "Please Enter Your City";
                    $('#location').text(c);
                }
                else if(user_function == "" || user_function ==" " || user_function==null){
                    var d = "Please Enter Your LOcation";
                    $('#job').text(d);
                }
                else if(user_summary == "" || user_summary ==" " || user_summary==null){
                    var e = "Please Enter Your Summary";
                    $('#summary').text(e);
                }
                else{
                    $('#image').text('');
                    $('#name').text('');
                    $('#location').text('');
                    $('#job').text('');
                    $('#summary').text('');
                }
                data = new FormData( $("#form_data")[0] );
                $.ajax({
                    type:"POST",
                    url:"{{url('userRegistration')}}",
                    data:data,
                    async : false,
                    contentType : false,
                    cache : false,
                    processData: false,
                    success:function(data){
                        console.log(data);

                    }
                    
                });

            });

      </script>

   </body>
</html>