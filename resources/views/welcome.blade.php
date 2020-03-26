@include('layouts.header')
@include('layouts.navbarDesktop')
@include('layouts.navbarMobile')
<div id="cta">
  <div class="row" style="margin:0;">
    <div class="col-xs-12 col-sm-12 col-md-8 offset-md-2 text-center">
      @if(session('successReport'))
        <div class="alert alert-success" role="alert">
          {{ session('successReport') }}
        </div>
      @endif
        {{$sellerByNotes[0]->user->idUser}}
        {{$sellerByNotes[0]->{0}->idSeller}}
      <div id="content_1" class="animated slideInUp">
        <h3>From now</h3>
        <h2>Eating healthy has never been so simple</h2>
        <p>Find the best organic producers in your area who are selected and certified by our care.</p>
        <button type="button" name="button" onclick="window.location.href='{{ url('announces') }}'">Explore</button>
      </div>
    </div>
  </div>
</div>
<div id="about">
  <div class="row" style="margin:0;">
    <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 text-center">
      <div id="content_2" data-aos="fade-right">
        <h3>About Us</h3>
        <div class="line"></div>
        <h2>What is Healthy's ?</h2>
        <div class="col-md-6 offset-md-3 text-center">
          <p>No matter where you are, in travel or home, you will be able to access to the best selection of organic producers. You will be able to buy your products from the plateform, also from our application available {{--<a href="#">here</a>--}}.</p>
          <p>The first step is to reference your adress to have access to our listed producers in the area. Then you will be able to select your list of product in different type of unit.</p>
          <p>Eating healthy has never been so simple !</p>
          {{--<button type="button" name="button" onclick="window.location.href='{{ url('about') }}'">Read more</button>--}}
        </div>
      </div>
    </div>
  </div>
</div>

<div id="seller">
  <div class="row" style="margin:0;">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <div id="content_3">
        <div data-aos="fade-up">
          <h3>THE BEST WE KNOW</h3>
          <h2>TO DISCOVER</h2>
          <div class="line"></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="row" style="margin:0;">

            {{--<div class="column">
              <div class="card top" data-aos="fade-down">
                <div class="review">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="pic"></div>
                <div class="name">
                  <h3>Jakob</h3>
                </div>
                <div class="desc">
                  <p>"Farmer from father to son"</p>
                </div>
                <div class="pos">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Wyoming</p>
                </div>
                <div class="comment">
                  <p>Comments : (34)</p>
                </div>
                <div class="view">
                  <button class="btn_top_vendor" type="button" name="button" onclick="">View Profil</button>
                </div>
              </div>
            </div>--}}
            {{--<div class="column">
              <div class="card bottom" data-aos="fade-up">
                <div class="review">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="pic"></div>
                <div class="name">
                  <h3>Jakob</h3>
                </div>
                <div class="desc">
                  <p>"Farmer from father to son"</p>
                </div>
                <div class="pos">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Wyoming</p>
                </div>
                <div class="comment">
                  <p>Comments : (34)</p>
                </div>
                <div class="view">
                  <button class="btn_top_vendor" type="button" name="button" onclick="">View Profil</button>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card top" data-aos="fade-down">
                <div class="review">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="pic"></div>
                <div class="name">
                  <h3>Jakob</h3>
                </div>
                <div class="desc">
                  <p>"Farmer from father to son"</p>
                </div>
                <div class="pos">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Wyoming</p>
                </div>
                <div class="comment">
                  <p>Comments : (34)</p>
                </div>
                <div class="view">
                  <button class="btn_top_vendor" type="button" name="button" onclick="">View Profil</button>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card bottom" data-aos="fade-up">
                <div class="review">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="pic"></div>
                <div class="name">
                  <h3>Jakob</h3>
                </div>
                <div class="desc">
                  <p>"Farmer from father to son"</p>
                </div>
                <div class="pos">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Wyoming</p>
                </div>
                <div class="comment">
                  <p>Comments : (34)</p>
                </div>
                <div class="view">
                  <button class="btn_top_vendor" type="button" name="button" onclick="">View Profil</button>
                </div>
              </div>
            </div>--}}

            @for($i=0;$i<5;$i++)

            @if($i%2==0)
            <div class="column">
              <div class="card top" data-aos="fade-down">
                <div class="review">
                  @for($e=0;$e<$sellerByNotes[$i]->moyenne;$e++)
                    <i class="fas fa-star"></i>
                  @endfor
                </div>
                <div class="pic"></div>
                <div class="name">
                  <h3>{{ $sellerByNotes[$i]->{0}->user_name }}  {{ $sellerByNotes[$i]->{0}->user_surname }}</h3>
                </div>
                <div class="desc">
                  <p>{{$sellerByNotes[$i]->{0}->seller_description}}</p>
                </div>
                <div class="pos">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>{{$sellerByNotes[$i]->{0}->seller_city}}</p>
                </div>
                <div class="comment">
                  <p>Comments : ({{$sellerByNotes[$i]->nombreNote}})</p>
                </div>
              </div>
            </div>
              @else

              <div class="column">
                <div class="card bottom" data-aos="fade-up">
                  <div class="review">
                    @for($e=0;$e<$sellerByNotes[$i]->moyenne;$e++)
                      <i class="fas fa-star"></i>
                    @endfor
                  </div>
                  <div class="pic"></div>
                  <div class="name">
                    <h3>{{ $sellerByNotes[$i]->{0}->user_name }}  {{ $sellerByNotes[$i]->{0}->user_surname }}</h3>
                  </div>
                  <div class="desc">
                    <p>{{$sellerByNotes[$i]->{0}->seller_description}}</p>
                  </div>
                  <div class="pos">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>{{$sellerByNotes[$i]->{0}->seller_city}}</p>
                  </div>
                  <div class="comment">
                    <p>Comments : ({{$sellerByNotes[$i]->nombreNote}})</p>
                  </div>
                </div>
              </div>
              @endif

            @endfor

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="article">
  <div class="row" style="margin:0;">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <div id="content_4">
        <div data-aos="fade-up">
          <h2>Lastest articles</h2>
          <div class="line"></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
          <div class="row" style="margin:0;">
            <div class="col-xs-12 col-sm-12 col-md-4">
              <div class="column">
                <div class="article" data-aos="fade-up">
                  <div class="pic" style="background-image:url(../img/article/article_3.jpg)"></div>
                  <div class="content">
                    <div class="meta">
                      <p>2020-02-02 23:00:00</p>
                    </div>
                    <div class="title">
                      <h3>9 super fun and interisting pineapple facts</h3>
                    </div>
                    <div class="desc">
                      <p>Did you know pineapples can regenerate? Find out more fun pineapple facts by reading below!</p>
                    </div>
                    <div class="view">
                      <button class="btn_article" type="button" name="button" onclick="window.location.href='https://thatsitfruit.com/blog/9-interesting-facts-about-pineapples/'">View Article</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="column">
                <div class="article" data-aos="fade-up">
                  <div class="pic" style="background-image:url(../img/article/article_2.jpg)"></div>
                  <div class="content">
                    <div class="meta">
                      <p>2019-06</p>
                    </div>
                    <div class="title">
                      <h3>Organic Foods: What You Need to Know</h3>
                    </div>
                    <div class="desc">
                      <p>Is organic food really healthier? Is it worth the expense? Find out what the labels mean and which foods give you the most bang for your buck. The term “organic” refers to the way agricultural products are grown and processed. While the regulations vary from country to country, in the U.S., organic crops must be grown without the use of synthetic ...</p>
                    </div>
                    <div class="view">
                      <button class="btn_article" type="button" name="button" onclick="window.location.href='https://www.helpguide.org/articles/healthy-eating/organic-foods.htm'">View Article</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4">
              <div class="column">
                <div class="article" data-aos="fade-down">
                  <div class="pic" style="background-image:url(../img/article/article_1.jpg)"></div>
                  <div class="content">
                    <div class="meta">
                      <p>2019-11</p>
                    </div>
                    <div class="title">
                      <h3>14 garden design ideas to make the best of your outdoor space</h3>
                    </div>
                    <div class="desc">
                      <p>These garden design ideas are the key to a scheme you'll love for years to come.</p>
                    </div>
                    <div class="view">
                      <button class="btn_article" type="button" name="button" onclick="window.location.href='https://www.housebeautiful.com/uk/garden/designs/a495/garden-design-ideas/'">View Article</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="contact">
  <div class="row" style="margin:0;">
    <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 text-center">
      <div id="content_5">
        <h3>Contact Us</h3>
        <div class="line"></div>
        <div class="row" style="margin:0;">
          <div class="col-xs-12 col-sm-12 col-md-6 text-justify vertical_r">
            <p>Phone number : 333-6768-1435</p>
            <p>Email address : contact@healthy.com</p>
            <p>HQ address line : 35 bowery street, New York NY 10012 </p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 text-center vertical_l">
            @if(isset($success))
            <p>{{$success}}</p>
            @elseif(isset($fail))
            <p>There is an error please try later !</p>
            @endif
            @if(isset($session['user']))
            <form class="" action="/contact/storeForAnAuthentifiedUser" method="post">
            @else
            <form class="" action="/contact/storeForAnAnonymous" method="post">
            @endif
              @csrf
              <input type="email" name="contact_email" value placeholder="Email address *" required>
              <input type="text" name="contact_subject" value placeholder="Subject *" required>
              <textarea name="contact_content" rows="8" cols="80" required placeholder="Message *"></textarea>
              <input type="submit" name="" value="Send message">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="top">
  <div class="round">
    <button type="button" name="button" onclick="window.location.href='{{ url('#navbar_desktop') }}'"><i class="fas fa-chevron-up"></i></button>
  </div>
</div>
@include('layouts.footer')
