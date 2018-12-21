<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="阴阳师寮会首页：立秋夕烛 - 风の谷" />
    <meta name="keywords" content="阴阳师,风の谷,立秋夕烛,阴阳寮" />
    <meta name="author" content="©ZooJeek" />
    <link href="https://unpkg.com/nes.css/css/nes.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/main.css"/>
    <title>立秋夕烛 - 风の谷</title>
  </head>

  <body>
    <header>
      <h1><i class="snes-jp-logo brand"></i> 阴阳师 - 風の谷 </h1>
      <p>Happy christmas!</p>
    </header>
    <section class="nes-container with-title is-centered is-rounded is_dark">
      <h1 class="title"><img src="/image/logo.png" style="width:43px;margin-top: -10px;"> 喵 了 个 咪 </h1>
      <div>
        <button class="nes-btn is-primary"> 简 介 </button>
        <button class="nes-btn is-success"> 活 動 </button>
        <button class="nes-btn is-warning"> 登 入 </button>
        <button class="nes-btn is-error"> 註 冊 </button>
      </div>
    </section>
    <section class="nes-container with-title" style="text-align: center;">
      <h2 class="title">{{ $active_title ?? "简介" }}</h2>
      <div class="containers" id='active_body'>
        
        @yield('active_body')
        

      </div>
    </section>

    <footer class="footer">
      <p>
        <a>Author: &copy;ZooJeek</a>
        <span>-</span>
        ZooJeek@Outlook.com
      </p>
    </footer>
  </body>
</html>