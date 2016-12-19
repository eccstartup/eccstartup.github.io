<? ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>Try Haskell! An interactive tutorial in your browser</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="google-site-verification"
          content="q3BH34YRyNZdPysYNE0FbM4bJl2hkY67BK0tEExs1a4">
    <meta name="description" content="Try Haskell in your browser! An interactive tutorial for the Haskell programming language.">
    <style type="text/css" media="screen">
      <? readfile('css/reset.css'); ?>
      <?=str_replace('url(../','url(',file_get_contents("css/tryhaskell.css")); ?>
    </style>
    <!--[if lte IE 6]>
        <style type="text/css" media="screen">
          div.primary-content { width:600px;margin-left:70px;float:left }
        </style>
        <![endif]-->
    <link rel="stylesheet" href="http://webchat.freenode.net/static/two/css/qui-0a87676e5b8b.css" type="text/css"/>
    <script type="text/javascript"
            src="http://webchat.freenode.net/static/two/js/qui-0a87676e5b8b.js"></script>
    <script type="text/javascript" src="js/lib.min.js"></script>
    <script type="text/javascript">
      jQuery.noConflict(); 
    </script>
    <script type="text/javascript" src="js/jquery.console.js"></script>
    <script type="text/javascript" src="js/tryhaskell.js"></script>
    <script type="text/javascript" src="js/raphael-min.js"></script>
  </head>
  <body>
    <div class="page-wrap">
      <div class="primary-content">
        <div class="main-wrapper bgs2">
          <div class="main-wrapper-top sprites"></div>
          <div class="main-wrapper-borders bgs">
            <h1 class="main-header sprites">Try Haskell! An interactive tutorial in your
              browser</h1>
            <div class="menu clearfix">
              <a class="reset-btn sprites" href="javascript:">
                <span>Reset</span>
              </a>
            </div>
            <div class="clear"></div>
            <div class="console-wrapper">
              <div class="console-wrapper-top sprites"></div>
              <div class="console-wrapper-borders bgs">
                <div class="console">
                </div>
              </div>
              <div class="console-wrapper-bottom sprites"></div>
            </div>
            <div class="guide-wrapper" style="margin-bottom:10px">
              <div class="guide-wrapper-top sprites"></div>
              <div class="guide-wrapper-borders bgs">
                <div id="raphael">
                </div>
              </div>
              <div class="guide-wrapper-bottom sprites"></div>
            </div>
            <div class="guide-wrapper">
              <div class="guide-wrapper-top sprites"></div>
              <div class="guide-wrapper-borders bgs">
                <div class="guide">
                  <p>
                    Welcome to your first taste of Haskell! Let's try Haskell right now!
                  </p>
                  <h3>Beginners</h3>
                  <div class="indent">
                    <p>Type <code>help</code> to start the
                      tutorial. Type <code>lessons</code> to see the
                      list of lessons.</p>
                    <p>Or try typing these out and see what happens
                      <small class="note">(click to insert)</small>:</p>
                    <ul>
                      <li>
                        <code>23*36</code>
                      </li>
                      <li>
                        <code>reverse "hello"</code>
                      </li>
                    </ul>
                  </div>
                  <div id="learn-more">
                    <h3>Learn More</h3>
                    <div class="indent">
                      <p class="clearfix">
                        <a class="tryhaskellcover sprites"
                           href="http://book.realworldhaskell.org/"
                           title="Real World Haskell"><span>Real World Haskell!</span></a>
                        Get stuck into a book with
                        <a href="http://book.realworldhaskell.org/">Real
                          World Haskell</a> <small class="note">
                          (readable online!)</small>, published by O'Reilly Media.
                        Check out
                        <a href="http://haskell.org/"
                           title="Haskell home page">Haskell.org</a>
                        for more information about Haskell.
                       For more fun, use <a href="http://codepad.org/">codepad.org</a>
                        to run full Haskell programs.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="guide-wrapper-bottom sprites"></div>
            </div>
          </div>
          <div class="main-wrapper-bottom sprites"></div>
        </div>
        <div class="footer-wrapper bgs2 clearfix">
          <div class="footer-wrapper-top sprites"></div>
          <div class="footer-wrapper-borders bgs">
            <div class="footer">
              <p>
                <a href="http://chrisdone.com/posts/2010-04-05-haskell-json-service-tryhaskell.html">Evaluation
                  service</a>
                and <a href="http://github.com/chrisdone/tryhaskell">Try
                  Haskell</a> by
                <a href="http://chrisdone.com/">
                  Chris Done,
                </a>
                concept and interface blatantly copied from
                <a href="http://tryruby.org/"
                   title="_why's Try Ruby">
                  _why's Try Ruby!</a>,
                Haskell evaluator powered by a patched version of
                <a href="http://hackage.haskell.org/package/mueval"
                   title="mueval on Hackage">
                  Gwern Branwen's mueval</a>,
                <a href="http://github.com/chrisdone/jquery-console">console
                  library</a> proudly written in
                <a href="http://jquery.com/">
                  JQuery.
                </a>
              </p>
            </div>
          </div>
          <div class="footer-wrapper-bottom sprites"></div>
        </div>
      </div>
    </div>
    <? if ($_SERVER['HTTP_HOST'] != "kiboki" && $_SERVER['HTTP_HOST'] != "kiboki.net") { ?>
    <script type="text/javascript">
      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
      try {
      var pageTracker = _gat._getTracker("UA-7443395-9");
      pageTracker._setDomainName("none");
      pageTracker._setAllowLinker(true);
      pageTracker._trackPageview();
      } catch(err) {}</script>
    <? } ?>
  </body>
</html>
<? $c = ob_get_clean(); ob_start("ob_gzhandler"); echo preg_replace('/>[ ]+</','><',preg_replace("/[ \n\t\r]+/"," ",$c)); ?>
