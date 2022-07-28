<!DOCTYPE html>
<html>
<head>
    <title>{{ $data->nama }} | {{ config('app.name') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


video {
      width: 100%;
      height: 56.25vw; /* 100 * (9/16) */
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: absolute;
  top: 0;
  left: 0;
  object-fit: cover;
  width: 100%;
  height: 100%;
  pointer-events: none;
  min-width: 100%;
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  text-decoration: none;
  border: none;
  border-radius: 12px;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
</head>
<body>

<video autoplay loop id="myVideo"  frameborder="0" allowfullscreen>
  <source src="{{ asset('upload') }}/{{ $data->video }}" type="video/mp4">
  Browsermu tidak mendukung video HTML5.
</video>

<div class="content">
  <h1>{{ $data->nama }}</h1>
  <button id="myBtn" onclick="myFunction()">Pause</button>
  <a id="myBtn" href="{{ route('posting.show', $data->id) }}">Kembali</a>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>


</body>
</html>
