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
            readfile($page+'.html')
            if($month==3){
                echo"<h2>まだアパートを決めていない人へ</h2>
                <p>物件はどんどん埋まっていっています。今すぐに不動産屋にアポを取って、このウェブサイトである程度土地について勉強してから物件探しをしてみてください。";
            };
            echo"<details>
            <summary>浜キャン生はこちら!</summary>
            <h2>坂上と坂下について</h2>
            <p>浜キャンは台地の上にあります。<br>
            その台地の上と下をつなぐ道路の坂がかなりあるため、毎日の通学を考えるとかなり大変かもしれません。<br>
            下に表示されているGoogleストリートビューは浜キャンから150メートルほど離れた場所です。<br>
            見て分かる通り、かなり急な長い坂になっています。因みに、坂の先にある建物は浜キャンの建物の一つです。</p>
            <iframe src=","https://www.google.com/maps/embed?pb=!4v1646491301177!6m8!1m7!1svODgy7NAaoLXwj9PMnF-SQ!2m2!1d34.72891481290574!2d137.7144885379222!3f153.99774243815293!4f-5.418017547228487!5f1.598266724894137"," width=","100%"," height=","450px"," style=","border:0;"," allowfullscreen=",""," loading=","lazy","></iframe>
            <p>坂上も坂下もスーパーなどは一通り揃っているので生活の便利さに大きな差はありませんが、通学にの便利さには大きな差があると言えるでしょう。<br>
            また、原付での通学は2Km以上でないといけないので大学近くの坂下のアパートを借りてしまうと「キツイから原付にする」という事もできません。<br>
            <b>ただし、坂上の家賃は坂下の大体1.5倍ほどします。</b>お財布と相談しながら物件を決めてはいかがでしょうか？。<br>
            因みに大学から浜松駅までは自転車で20分ほどです。自転車でよく駅近くに向かいたい方は浜キャンの南～東側の物件をおすすめします。<br>
            また、下のGoogleマップの通り、スーパーなどはキャンパスの北西～北東にかけて多いです。<br>
            ただし、キャンパスのすぐ南にあるドラッグストアは比較的食料品が豊富なのでキャンパス南に住むと買い物に苦労するという事はあまりありません。</p>
            <iframe src=","https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13116.714724393394!2d137.7221326507909!3d34.72589021113813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z44K544O844OR44O8!5e0!3m2!1sja!2sjp!4v1646495360235!5m2!1sja!2sjp"," width=","100%"," height=","450"," style=","border:0;"," allowfullscreen=",""," loading=","lazy","></iframe>
            
            </details>
            <details>
            <summary>静キャン生はこちら!</summary>
            <h2>大谷と小鹿、池田の違いについて</h2>
            <p>静大生向けアパートにはこれら三つの地名がよく出ると思います。<br>
            これら三つの地域にはそれぞれ特徴がありますのでアパート選びの参考にしてくださいね!</p>
            <ul>
                <li>大谷</li>
                <p>大谷は、一言で言うと静大のお膝元です。単純に通学を楽にしたいのであれば、大谷一択でしょう。<br>
                しかしながら、大谷の静大生向けのアパートが集中しているスーパーや薬局など地域は生活に必要な施設からはかなり離れています。<br>
                コンビニはありますが、生活必需品の購入などのために遠出する必要があります。</p>
                <li>小鹿</li>
                <p>小鹿は静大から一歩離れた地域です。静大から徒歩で10分から20分ほど離れています。<br>
                大谷と比べると静大生行きつけの飲食店や、スーパーなどがあります。そのため生活をするためには比較的便利な地域だと言えると思います。<br>
                徒歩で通学することのできる地域はここまでだと思います。</p>
                <li>池田</li>
                <p>池田は東静岡駅周辺の地域です。このあたりでは最も発展した地域だと言えるでしょう。<br>
                そのため、生活に困ることはないでしょう。ただし、この地域から静大までは徒歩で40分ほど、自転車だと15分ほど掛かります。<br.
                キャンパス内での移動を考えると、朝に強い人でないといけないかもしれません。</p>
            </ul>
            <p>静大周辺の地域の特性上、自転車は必須になると思います。また、この下に参考のために小鹿の地図を挿入しました。</p>
            <iframe src=","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13077.436108975902!2d138.42748202249592!3d34.9726707280903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a365cde44aa6d%3A0x7ff997de188a91c5!2z44CSNDIyLTgwMjEg6Z2Z5bKh55yM6Z2Z5bKh5biC6ae_5rKz5Yy65bCP6bm_!5e0!3m2!1sja!2sjp!4v1646325394556!5m2!1sja!2sjp"," width=","100%"," height=","450"," style=","border:0;"," allowfullscreen=",""," loading=","lazy","></iframe>
            </details>
            </details>
            <details>
            <summary>浜キャン生に知ってほしいこと</summary>
            <h2>ウェルカムキャンパス</h2>
            <p>みんなでレクリエーションをすることによって友達作りができるかもしれません<br>
            また、先輩とも交流できるかもしれません</p>
            <details>
            <summary>行動情報学科の人へ</summary>
            <p>一年後期のプログラミングは三つの学科の中で一番きついと言われています。<br>
            今のうちにjavaをやっておいて損はないと思います。</br>
            また、この学科はよく言えば自由、悪く言えば自分のやりたいことが明確に無いと迷いやすいのでこのつかの間の休息期間を使って自分のやりたいことを探してみるといいと思います。<br>
            べつに勉強に関わることでなくても、例えば「サークルをがんばる！」だとか「友達を作る」でもいいのでそういった自分の生活のハリになるような目標を立ててみると充実した大学生活を送ればいいのではないかと思います。</p>
            </details>
            </details>
            <details>
            <summary>静キャン生に知ってほしいこと</summary>
            <h2>プレ入学式</h2>
            <p>みんなでレクリエーションをすることによって友達作りができるかもしれません<br>
            また、先輩とも交流できるかもしれません</p>
            <details>
            <summary>夜間主の人へ</summary>
            <p>昼間なら2・3年生配当の科目が1年生から履修できるのは夜間のアドバンテージです。<br>
            今年開講された科目が来年開講されるとは限りません。<br>
            興味のある分野の科目は、多少無理をしてでも取っておくことをおすすめします。</p>
            </details>
            </details>
           
            <p>不安なことや慣れないことが多くて大変だと思いますが、大学生活は楽しいこともたくさんありますよ!<br>
            なにか分からないことがあったらTwitterにいる先輩達に聞いてくださいね!<br>
            (中の人含め）みんな喜んで答えてくれると思います！</p>
            </div>";
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