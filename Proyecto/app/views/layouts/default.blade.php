<!DOCTYPE html>
<html>
<head>
  <title>My Task</title>
  {{HTML::script('js/jquery.js');}} 
  {{HTML::style('style/ccs.css');}}
  {{HTML::script('js/usuarios.js');}}
</head>
<body>
  <h2>My Task</h2>
  {{ $content }}
</body>
</html>