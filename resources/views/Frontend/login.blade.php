<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap");
body {
  background: linear-gradient(to right top, #272b35, #2f343f, #383d4a, #404655, #494f60);
  background: #2B2F3A;
  margin: 0;
}

* {
  font-family: "Julius Sans One", sans-serif;
  letter-spacing: 3px;
}

div {
  display: flex;
  justify-content: center;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: start;
  background: #4B5F5B;
  margin: 20px 50px;
  padding: 30px;
  width: 320px;
  height: 380px;
  border-radius: 15px;
  box-shadow: 0px 5px 9px 3px #64896A;
}

h1 {
  color: #C0E66E;
  margin: 30px 0 50px 0;
}

input {
  padding: 0 15px;
  width: -webkit-fill-available;
  margin: 15px;
  height: 35px;
  border-radius: 20px;
  font-weight: bold;
  background: #F8F2A7;
  border: 2px solid #F8F2A7;
  outline: none;
  color: #4B5F5B;
  transition: all 500ms ease-out;
}
input:focus {
  border: 2px solid #C0E66E;
}

button {
  padding: 0 15px;
  width: -webkit-fill-available;
  margin: 15px;
  height: 35px;
  border-radius: 20px;
  font-weight: bold;
  background: #C0E66E;
  border: 1px solid #64896A;
  margin: 60px 15px 20px 15px;
  color: #4B5F5B;
  transition: all 500ms ease-out;
  animation: lights 4000ms infinite ease-in;
}
button:hover {
  border: 1px solid #F8F2A7;
  box-shadow: 0px 0px 10px 2px #F8F2A7;
  animation: none;
}

@keyframes lights {
  0% {
    box-shadow: 0px 0px 10px 2px #F8F2A7;
    border: 1px solid #64896A;
  }
  50% {
    box-shadow: 0px 0px 10px 2px #C0E66E;
    border: 1px solid #C0E66E;
  }
  70% {
    box-shadow: 0px 0px 10px 2px #64896A;
    border: 1px solid #64896A;
  }
  100% {
    box-shadow: 0px 0px 10px 2px #F8F2A7;
    border: 1px solid #64896A;
  }
}
a {
  color: #F8F2A7;
  text-decoration: none;
  font-size: 10px;
  font-weight: bolder;
  opacity: 0.6;
  transition: all 300ms ease-in-out;
}
a:hover {
  opacity: 0.9;
}
</style>
<body>
  <div class="container">

  <form action = "{{url('loginsuccess')}}">
    <h1>Log in</h1>
    <input type="text" name= "name" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" value="submit">
    @if (Session::has('msg'))
<span style="color:red">{!! session::get('msg') !!}</span>
@endif
  </form>
</div>
</div>
</body>
</html>