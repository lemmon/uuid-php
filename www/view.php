<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Online UUID Version 4 Generator and Microservice</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/abrusco@0.6.3/css/abrusco.min.css">
  <style media="screen">
  .pre-wrap {
   white-space: pre-wrap;
   white-space: -moz-pre-wrap;
   white-space: -pre-wrap;
   white-space: -o-pre-wrap;
   word-wrap: break-word;
  }
  </style>
</head>
<body class="col justify-between">

  <header class="p05 sd-p1">
    <h1 class="p05 sd-p1 h4 lh4 fw600">UUID Version 4</h1>
    <nav class="p05 sd-p1">
      <a class="ul" href="https://github.com/lemmon/uuid-php">Github</a>
    </nav>
  </header>

  <main class="max48">

    <section class="sd-p1">
      <div class="p05">

        <h1 class="p05 fw600 lh4">Your UUID v4</h1>

        <div class="p05">
          <pre id="uuid-result" class="code pre-wrap ac bg-black-05 p2 lh5"><?= $data['uuid'] ?></pre>
        </div>
        <script>
        window.getSelection().selectAllChildren(document.getElementById('uuid-result'));
        </script>

      </div>
    </section>
    <section class="sd-p1">
      <div class="p05">

        <h1 class="p05 fw600 lh4">Microservice</h1>

        <h2 class="p05">JSON</h2>

        <div class="p05">
          <pre class="code pre-wrap f2 lh4 bg-black-05 p1"><code class="">curl --header "Accept: application/json" uuid.lemmonjuice.com
<span class="color-black-40"><?= json_encode($data) ?></span></code></pre>
        </div>

        <h2 class="p05">Plain Text</h2>

        <div class="p05">
          <pre class="code pre-wrap f2 lh4 bg-black-05 p1"><code class="">curl --header "Accept: text/plain" uuid.lemmonjuice.com
<span class="color-black-40"><?= $data['uuid'] ?></span></code></pre>
        </div>

        <h1 class="p05 fw600 lh4">UUID Elsewhere</h1>

        <ul class="p05 lh4 ml1">
          <li><a class="ul" target="_blank" href="https://en.wikipedia.org/wiki/Universally_unique_identifier">Wikipedia</a></li>
        </ul>

      </div>
    </section>

  </main>

  <footer class="p1 sd-p2 color-black-20">
    <p>created by
      <a class="a-ul color-black-40" href="http://www.lemmonjuice.com">lemmon</a> |
      <a class="a-ul color-black-40" href="https://github.com/lemmon/uuid-php">github</a></p>
  </footer>

</body>
</html>
