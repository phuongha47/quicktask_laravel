@extends('layouts.master')
@section('title','home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ベトナム料理</title>
    <link href="node_modules\bootstrap\dist\css\bootstrap.min.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" href="css/home.css">
    <script src="home.js"></script>
</head>
<body>       
<div>
      <section class="info">
        <div class = "phone_mail">
          <div class="phone">
            <a href="#">+84 123 456 789</a>
          </div>
          <div class="mail">
            <a href="#">bentory@gmail.com</a>          </div>
          </div>
        
        <div class= "social">
          <div class="fb">
            <i class= "fab fa-facebook"></i>
          </div>
          <div>
            <i class ="fab fa-instagram"></i>
          </div>    
        </div>
      </section>

      <header class="header section-padding">
        <a class ="header__logo" href="#">BENTORY</a>
        <nav class= "header__nav"> 
          <ul>
              <li class="active"><a href="">{{ __('home.home') }}</a></li>
              <li><a href="{{ route('post_show') }}">{{ __('home.post') }}</a></li>
              <li><a href="#">{{ __('home.about') }}</a></li>
              <li><a href="#">{{ __('home.contact') }}</a></li>
          </ul>                      
        </nav>
      </header>
      
      <section class="carousel">
        <div class="carousel__content">
          <h1>{{ __('home.theme') }}</h1>
        </div>
      </section>

      <section class="intro">
        <div class="intro__items  intro_tradition">
          <div>
            <h2>お米が基本のベトナム料理</h2>
            <p>ベトナムの主食は、日本と同じくお米です。また、お米から作った麺類やライスペーパーも料理によく使われ、ベトナム料理では、お米が基本中の基本となっています。</p>
          </div>
        </div>

        <div class="intro__items intro__img1">
          <img src="img\banhmi.jpg" alt="">
        </div>

        <div class="intro__items  intro_creativity">
          <div>
            <h2>それぞれの地域で発達した食文化</h2>
            <p>南北に長いベトナムでは、地域によって気候や環境が大きく違うため、それぞれの地域で食文化が発達していきました。南部は、砂糖を多用し、ココナッツミルクなどもよく使うことから全体的に甘い味付けで、生野菜や香草が食材として使われています。中部では、唐辛子などを使った比較的辛い味付けで、米粉を水で溶いて蒸した料理や、かつて王朝が置かれていたことから宮廷風の料理が名物となっています。中国に隣接する北部は、塩や醤油を使った料理が多く、日本人好みの味と言われています</p>
          </div>
        </div>

        <div class="intro__items intro__bakes">
          <div>
            <h2>みんな大好き♥ベトナムの国民食のフォーの魅力</h2>
          <p>ベトナム料理で最も有名な麺のひとつに、フォーが挙げられます。日本でも人気が高い料理なので、口にしたことがある人も多いかもしれませんね。フォーの麺は、小麦ではなくお米でできていて、細く切った平打ちタイプです。牛の骨からダシをとったスープで牛肉を乗せたものをフォー・ボーと呼び、鶏ガラスープで鶏肉を乗せたものはフォー・ガーと呼ばれています。フォーも地域によって味が異なり、北部ではシンプルな盛りつけが多いのに対して、南部では香草類がたっぷりと入っています。</p>
          </div>
        </div>
              
        <div class="intro__items  intro_img2">
          <img src="img\ab1.jpg" alt="">
        </div>

        <div class="intro__items  intro_quality">
          <div>
            <h2>ベトナム料理が人気のワケ</h2>
            <p>中国とフランスの食文化をミックスしてできたベトナムの料理。油が控えめ、辛くない、野菜が多いベトナム料理は、健康でヘルシーな料理として人気を集めてますよね♪ また、巻いて食べる料理が多いこともベトナム料理の特徴のひとつ。巻いて食べることで早食いすることが難しく、食べ過ぎることなく、ゆっくり時間をかけて適切な量の食事を楽しむことができるのです！</p>
          </div>
        </div>

        <div class="intro__items  intro_img3">
          <img src="img\goicuon.jpg" alt="">
        </div>

        <div class="intro__items  intro_tasty">
          <div>
            <h2>ベトナム料理・食べ物は日本人に合うのか？</h2>
            <p>ベトナムは縦に長く、日本の本州と変わらないくらいの距離が南北に伸びています。 そのため、北部・中部・南部など地域によって料理の味が異なるのです。
              一般的に、ホーチミンなどベトナム南部では甘めの味付け、ダナンのある中部ではやや辛め、首都ハノイがあり、中国に面している北部の味付けはあっさりとしていて、比較的日本人の口に合うといわれています。とはいえ、味の好みは人それぞれ。「南部の食べ物が好き」「中部の味付けにハマった」というケースもあるので、気になるメニューがあれば気軽に試してみましょう</p>
          </div>
        </div>

        <div class="intro__items intro__img4">
          <img src="img\bundau.jpg" alt="">
        </div>
        </section>
      
        <section class="gallery section">
          <h1 class="section__title">特産物</h1>
          <div class="gallery__content">
            <div class="gallery__item item1">
              <img src="img\dn.jpg" alt="" />
              <div class="gallery__detail">
                <p>ダナン</p>
              </div>
            </div>
            <div class="gallery__item">
              <img src="img\hoguom.jpg" alt="" />
            </div>
            <div class="gallery__item">
              <img src="\img\hcm.jpg" alt="" />
            </div>
            <div class="gallery__item">
              <img src="img\bentre.jpg" alt="" />
            </div>
            <div class="gallery__item">
              <img src="img\hue.jpg" alt="" />
            </div>
            <div class="gallery__item item6">
              <img src="img\hoian.jpg" alt="" />
            </div>
          </div>
        </section>

        <section class="team section">
          <h1 class="section_title">感想</h1>
          <div class = "team_content">
            <div class = "team_item">
              <img src="img\t1.jpg" alt="">
              <div class = "team_intro">
                <p>Aika Hamashaki</p>
                <p>UIT大学の教師</p>
              </div>
              <div class= "team_detail">
                <p>Aika</p>
                <p>教師</p>
                <p>やはりBentoryが紹介した通りだよね。フォーを食べてみてすごく美味しかったよ。皆さん食べてみてね！</p>
                <!-- <div class= "team_social">
                  <div class = "team_social-item">
                    <i class= "fab fa-facebook"></i>
                  </div>
                  <div class = "team_social-item">
                    <i class ="fab fa-instagram"></i>
                  </div>
                </div> -->
              </div>
            </div>

            <div class = "team_item">
              <img src="img\t2.jpg" alt="">
              <div class = "team_intro">
                <p>Aika Hamashaki</p>
                <p>UIT大学の教師</p>
              </div>
              <div class= "team_detail">
                <p>Aika</p>
                <p>教師</p>
                <p>やはりBentoryが紹介した通りだよね。フォーを食べてみてすごく美味しかったよ。皆さん食べてみてね！</p>
                <!-- <div class= "team_social">
                  <div class = "team_social-item">
                    <i class= "fab fa-facebook"></i>
                  </div>
                  <div class = "team_social-item">
                    <i class ="fab fa-instagram"></i>
                  </div>
                </div> -->
              </div>
            </div>
            <!-- <div class= "team_item">
              <img src="C:\Users\ASUS\Desktop\課題\img\t2.jpg" alt="">
               -->
              <div class = "team_item">
              <img src="img\t3.jpg" alt="">
              <div class = "team_intro">
                <p>Aika Hamashaki</p>
                <p>UIT大学の教師</p>
              </div>
              <div class= "team_detail">
                <p>Aika</p>
                <p>教師</p>
                <p>やはりBentoryが紹介した通りだよね。フォーを食べてみてすごく美味しかったよ。皆さん食べてみてね！</p>
                <!-- <div class= "team_social">
                  <div class = "team_social-item">
                    <i class= "fab fa-facebook"></i>
                  </div>
                  <div class = "team_social-item">
                    <i class ="fab fa-instagram"></i>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>
        
        <section class="testimonials"></section>
        <section class="contact"></section>
        <section class="address"></section>
           
        <section class="footer">
          <div class="container">
          <!--Bắt Đầu Nội Dung Giới Thiệu-->
          <div class="noi-dung about">
              <h2>Bentoryについて</h2>
              <p>Bentoryにはたくさんベトナム料理について紹介する投稿が乗っています。ベトナム料理のウェブに日本人にベトナムの伝統的な食べ物や地域の特産物を紹介できる。そのため、日本人はベトナムの魅力を感じてベトナムが日本人にとって身近くなれる。</p>
              <!-- <ul class="social-icon">
                  <li><a href=""><i class="fa fa-facebook"></i></a></li>
                  <li><a href=""><i class="fa fa-twitter"></i></a></li>
                  <li><a href=""><i class="fa fa-instagram"></i></a></li>
                  <li><a href=""><i class="fa fa-youtube"></i></a></li>
              </ul> -->
          </div>
          <div class="noi-dung contact">
            <h2>連絡先</h2>
            <ul class="info2">
              <div class= "icon_text">
                  <span><i class="fa fa-map-marker"></i></span>
                  <span class="info_right">1道
                      1くん, ホーチミン市
                      ベトナム</span>
              <br>
              </div>
              <div class= "icon_text">
                  <span><i class="fa fa-phone"></i></span>            
                  <a href="#">+84 123 456 789</a>            
              <br>
              </div>
      
              <div class= "icon_text"> 
                  <span><i class="fa fa-envelope"></i></span>
                  <a href="#">diachiemail@gmail.com</a>
              </div>          
            </ul>
        </div>
        </div>
        </section>        
    </div>
</body>
</html>
@endsection
