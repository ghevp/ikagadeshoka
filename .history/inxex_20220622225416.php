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
            readfile($page+'_welcome.html');
            };
        if("behavior"==$page){
            readfile($page+'.html');
            
        };
        if("notice"==$page){
            echo"<div class=","notice",">
            <h1>見てくれた皆さんへのお知らせ</h1>
            <p>宣伝欄と更新履歴についてです。</p>
            <h2>アマゾンアソシエイト</h2>
            <p>
            皆さんが<a href=","https://amzn.to/37gSfSB",">こちら</a>のリンクを踏んでアマゾンに飛んでいただけると僕に少しばかり紹介料が入る仕組みになっています。<br>
            もちろん、皆さんが損するような仕組みではないのですが、月額680円のサーバー代金などの足しにさせていただけると幸いです。<br>
            また、僕が得するのはいやだという方もいらっしゃると思うので、今後アフィリエイトリンク等を使用することがあれば、僕にお金の入らないリンクを併記いたしますのでよろしくお願いします。
            </p>
            <h2>学情チャンプロジェクト</h2>
            <p>学務情報システムというあまり優秀ではないことでおなじみのシステムの擬人化コンテンツの運営委員会です。<br>
            不定期でイラストコンテストなどを開催しています。過去のコンテストについてや、公式の楽曲等について、創作ガイドライン等もあるのでぜひ<a href=","https://gakujochan.com",">学情チャンのウェブサイト</a>をチェックしてみてください。<br>
            もしもこのプロジェクトに参加したくなった場合は<a href=","https://twitter.com/gakujochan_info",">学情チャンプロジェクトの運営Twitter</a>にDMを送ってください!<br>
            また、ファンアートについてはいつでもお待ちしています！</p>
            <a class=","twitter-timeline"," data-lang=","ja"," data-height=","500"," href=","https://twitter.com/Gakuzyo_chan?ref_src=twsrc%5Etfw",">Tweets by Gakuzyo_chan</a> <script async src=","https://platform.twitter.com/widgets.js"," charset=","utf-8","></script> 
            <h2>更新履歴</h2>
            <time datetime=","2022-03-11",">2022/3/6</time>
            <p>アマゾンアソシエイトについてを追記しました<br>
            また、新入生へのネットリテラシーについての情報更新も行いました。</p>
            <time datetime=","2022-03-06",">2022/3/6</time>
            <p>このウェブサイトを新規製作しました</p>
            <time datetime=","2022-03-08",">2022/3/8</time>
            <p>不具合の修正を行いました</p>
            </div>";
        };
        if("question"==$page){
            echo"
            <div class=","question",">
            <h2>ウェブサイト運営者への質問</h2>
            <p>質問や訂正事項,掲載してほしい情報等がありましたら、<a href=","https://twitter.com/ghevp",">私のTwitter</a>にダイレクトメッセージを送ってくださると幸いです。<br>
            また、もしも何か質問があればいつでも待っているのでそちらに関してもDMへどうぞ<br>
            また、このウェブサイトの一番下にシレっとフォローボタンを配置しています。フォローしてくださると中の人が喜ぶのでフォローよろしくお願いします。</p>
            <a href=","https://twitter.com/messages/compose?recipient_id=&ref_src=twsrc%5Etfw"," class=","twitter-dm-button"," data-screen-name=","ghevp"," data-show-count=","false",">Message @ghevp</a><script  async  src=","https://platform.twitter.com/widgets.js","  charset=","utf-8","></script>
            <h2>協力者募集</h2>
            <p>このウェブサイトでは今後も更新作業を続ける予定です。もしも更新作業に協力してくれるという方がいましたら、作業用のdiscordに招待致しますのでDMを送ってくださると幸いです。</p>
            </div>";
        };
        if("discord"==$page){
            echo"
            <div class=","discord",">
            <h2>discordの大学鯖って何？</h2>
            <p>discordの機能の一つで大学のメールアドレス認証で同じ学校に通っている人のみが参加できるものです。<br>
            ゲームをしたり、授業についての情報交流を行ったりしています。実は中の人、その中でamong usをしていろんな人と仲良くなったりしました<br>
            この機能を使ってみることを強くお勧めします。</p>
            <details>
            <summary>discordの大学hubへの入り方</summary>
            <p>まず最初に、discordのアカウントを持っていない人はアカウントを作成しましょう。<br>
            それが終わったら、discordを起動しましょう。</p>
            </details>

            ";

        };
       
        
           
    ?>
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="静浜学生情報サイトを見てきました！" data-url="https://studinfo-shizuhama.ghevp.com/index.php?page=home" data-via="ghevp" data-lang="ja" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </main>
    <footer class="footer">

    
    <nav class="site-menu">
                    <ul>
                    <li><a href="index.php?page=home">ホーム</a></li>
                        <li><a href="index.php?page=newstudents">過去の言動</a></li>
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