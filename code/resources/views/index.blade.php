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
      <h1><i class="snes-jp-logo brand"></i>立秋夕烛 - 风の谷</h1>
      <p>Happy christmas!</p>
    </header>
    <section class="nes-container with-title is-centered is-rounded is_dark">
      <h1 class="title"> 首 页 </h1>
      <div>
        <button class="nes-btn is-primary"> 简 介 </button>
        <button class="nes-btn is-success"> 活 动 </button>
        <button class="nes-btn is-warning"> 留 言 板 </button>
        <button class="nes-btn is-error"> QQ 群 </button>
      </div>
    </section>
    <section class="nes-container with-title is-dark">
      <h2 class="title">{{ $active_body ?? "简介" }}</h2>
      <div class="containers" id='active_body'>
        <p>不定期举行抽奖等活动，均在本页面举行。<p>
        <p>请先注册账号，昵称和游戏中吻合，否则无效。</p>
        <p>遇到解决不了的问题请在群里 @花落悲秋老郑客</p>
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