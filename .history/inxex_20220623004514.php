<!DOCTYPE html>
<html lang="ja"> 
<?php
    if(isset($_GET['page'])){
     $page=$_GET['page'];
    };
     if(isset($page)){
        
      
     }else{
                   $page="home";     
     };
     $title = array('home' => "ホーム",
     'behavior' => "過去の言動",
     'notice'=>"おしらせ",
     'question'=>"困った時",
    'discord'=>"discordの大学hubについて");  
    
?>
    <head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6911517647778874"
     crossorigin="anonymous"></script>
        <meta charset="UTF-8">
       <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0P8XN7BCL8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0P8XN7BCL8');
</script>
        <meta name="author" content="ぐゑ">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@ghevp">
        <meta property="og:url" content="https://studinfo-shizuhama.ghevp.com">
        <meta property="og:title" content="いかがでしょうかサイト">
        <meta name="og:description" content="このウェブサイトは世の中に溢れるいかがでしょうかサイトを揶揄しています。">
        <meta property="og:image" content="https://studinfo-shizuhama.ghevp.com/img/con1.png">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">  
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/style.css"><!--後でphpのif文の作成-->
      <title> <?php 
      if (isset($title) == "") {
        echo "いかがでしょうかサイト";
    } else {
        echo "" . $title[$page] . " - いかがでしょうかサイト";
    }
       ?>
      </title><!--後で変更-->
    </head>
    <body>
   
    <header class="header">
        <div class="header-inner">
            <a href="index.php?page=home"><img src="img/logo.png"></a>
            <div class="header-mobile-button">
                <button class="toggle-menu-button"></button>
            </div>
            <div class="header-site-menu">
                <nav class="site-menu">
                    <ul>
                        <li><a href="index.php?page=home">ホーム</a></li>
                        <li><a href="index.php?page=behavior">過去の言動</a></li>
                        <li><a href="index.php?page=notice">おしらせ</a></li>
                        <li><a href="index.php?page=question">質問など</a></li><!--増やすときはボタンの使用で変更-->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="pic">
        <div class="ikagadeshoka-main">
            <p>いかがでしょうかサイト</p>
        </div>
    </div>
    <main class="main">
   
    <?php
     date_default_timezone_set('Asia/Tokyo');
        $month = date("m");
        if("home"==$page){
        if ($month==2||$month==3){
            readfile($page+"_welcome.html');
            };
            readfile($page+'.html');
        };
        if("behavior"==$page){
            readfile($page+'.html');
            };
        if("notice"==$page){
            readfile($page+'.html');
        };
        if("question"==$page){
            readfile($page+'.html');
        };
        if("discord"==$page){
            readfile($page+'.html');
        };
       
        
           
    ?>
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="静浜学生情報サイトを見てきました！" data-url="https://studinfo-shizuhama.ghevp.com/index.php?page=home" data-via="ghevp" data-lang="ja" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </main>
    <footer class="footer">

    
    <nav class="site-menu">
                    <ul>
                    <li><a href="index.php?page=home">ホーム</a></li>
                        <li><a href="index.php?page=behavior">過去の言動</a></li>
                        <li><a href="index.php?page=notice">おしらせ</a></li>
                        <li><a href="index.php?page=question">質問など</a></li><!--増やすときはボタンの使用で変更-->
                    </ul>
                </nav>

                <a class="footer-logo" href="index.php?page=home"><img src="img/logo.png"></a>
                <p class="attention">注意:このウェブサイトは静岡大学をはじめとした大学・企業・その他機関とは一切関係ありません。</p>
                <p class="copyright"><small>copyright <a href="https://ghevp.com">ぐゑ</a> all rights reserved.</small></p>
                <a href="https://twitter.com/ghevp?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">このウェブサイト作成者のTwitterをフォロー</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </footer>   
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  </body>
</html>