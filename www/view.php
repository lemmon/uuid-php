<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Online UUID Version 4 Generator and Microservice</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="https://www.lemmonjuice.com/favicon.ico">
  <style media="screen">
  .reset {
       -moz-appearance: none;
    -webkit-appearance: none;
            appearance: none;
    display: block;
    border: 0;
    padding: 0;
    margin: 0;
    font: inherit;
    line-height: inherit;
    width: 100%;
  }
  /*
  .pre-wrap {
     white-space: pre-wrap;
     white-space: -moz-pre-wrap;
     white-space: -pre-wrap;
     white-space: -o-pre-wrap;
     word-wrap: break-word;
   }
   */
  </style>
  <link rel="stylesheet" href="https://abrusco.com/master.css">
</head>
<body class="col max80 mx">

  <header class="max51 py2 sd-px1 md-p2">
    <div class="p075">
      <h1 class="p025 h2 lh2 fw700">UUID Version 4</h1>
      <div class="p025">
        <p class="lh4 color-black-50">Online generator and microservice.</p>
      </div>
    </div>
  </header>

  <div class="max51 md-px1">
    <hr class="px1 div color-black-10">
  </div>

  <main class="span1 max75 py1 sd-px1 md-py2"><div class="py05">

    <div class="px1">

        <section class="py1 md-px1 md-py2"><div class="py05">
          <div class="copy lh4">
            <h2>Your UUID v4</h2>
            <figure>
              <input type="text" id="uuid" class="reset code pre-wrap ac bg-black-05 p2 lh5" name="uuid" value="<?= $data['uuid'] ?>" readonly autofocus>
            </figure>
          </div>
        </div></section>
        <script>
        uuid.focus();
        uuid.select();
        </script>

        <section class="py1 md-px1 md-py2"><div class="py05">
          <div class="copy lh4">
            <h2>Microservice</h2>
            <h3>JSON</h3>
            <pre class="cli"><code class="dollar">curl --header "Accept: application/json" uuid.lemmonjuice.com</code></pre>
            <pre class="cli"><code><?= json_encode($data) ?></code></pre>
            <h3>Plain Text</h3>
            <pre class="cli"><code class="dollar">curl --header "Accept: text/plain" uuid.lemmonjuice.com</code></pre>
            <pre class="cli"><code><?= $data['uuid'] ?></code></pre>
          </div>
        </div></section>

        <section class="py1 md-px1 md-py2"><div class="py05">
          <div class="copy lh4">
            <h2>UUID Elsewhere</h2>
            <ul>
              <li><a target="_blank" href="https://en.wikipedia.org/wiki/Universally_unique_identifier">Wikipedia</a></li>
            </ul>
          </div>
        </div></section>

    </div>

  </div></main>

  <div class="max51 md-px1">
    <hr class="px1 div color-black-10">
  </div>

  <footer class="max51 py2 sd-p1 md-p2">
    <nav class="lh4">
      <ul class="row flex-wrap py05">
        <li class="px1 py05"><a class="ul" target="_blank" href="https://github.com/lemmon/uuid-php">github</a></li>
        <li class="px1 py05">created by <a class="ul" target="_blank" href="http://www.lemmonjuice.com/">lemmon</a></li>
      </ul>
    </nav>
  </footer>

</body>
</html>
