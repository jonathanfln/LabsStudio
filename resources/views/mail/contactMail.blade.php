<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
</head>
<body>
  <p>
    Le sujet est : {{$request->subject}}
  </p>
  <p>
    le message est : {{$request->message}}
  </p>
  <p>
    De la part de : {{$request->name}}
  </p>
</body>
</html>