<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}"></script>
  <title>Model-Controller</title>
</head>

<body>
  <div style="padding: 8px; margin: 0;" class="bg-primary"></div>
  <div class="container pt-3 pb-5 mb-5">
    <h2 class="text-primary fw-bold pb-3">Movie</h2>
    <div class="row flex-wrap gy-5 justify-content-evenly">

      @foreach($movies as $value)
      <div class="card " style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item fw-bold text-primary"> {{$value->title}}</li>
          <li class="list-group-item"> {{$value->original_title}}</li>
          <li class="list-group-item"> {{$value->nationality}}</li>
          <li class="list-group-item"> {{$value->date}}</li>
          <li class="list-group-item"> {{$value->vote}}</li>
        </ul>
      </div>
      @endforeach
    </div>
  </div>

</body>
</html>