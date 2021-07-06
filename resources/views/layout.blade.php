<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Truyện Tranh 247</title>

        <!-- Fonts -->
        <link rel="shortcut icon" type="image/png" href="public/uploads/truyen/favicon.png"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <div class="container">
            <!----------------Menu--------------------->
            <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="{{url('/home')}}">Truyen 247</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Trang chủ<span class="sr-only">(current)</span></a>
                      </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-tags" aria-hidden="true"> Danh mục truyện</i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @foreach($danhmuc as $key => $danh)
                          <a class="dropdown-item" href="{{url('danh-muc/'.$danh->slug_danhmuc)}}"><i class="fa fa-tags" aria-hidden="true"> {{$danh->tendanhmuc}}</i></a>
                          @endforeach
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-list-ul"> Thể loại</i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @foreach($theloai as $key => $the)
                          
                            <a class="dropdown-item" href="{{url('the-loai/'.$the->slug_theloai)}}"><i class="fa fa-list-ul"> {{$the->tentheloai}}</i></a>
                          
                          
                          @endforeach
                        </div>
                      </li>
                      
                    </ul>
                                   
                  </div>
                </nav>
            </div>
            <nav class="navbar navbar-expand-lg">
              <div class="row">
              <div class="col-mt-12">
                <form autocomplete="off" class="form-inline my-2 my-lg-0" action="{{url('tim-kiem')}}">
                  @csrf
                  <input class="form-control mr-sm-2 ml-2 mt-2" id="keywords" type="search" name="tukhoa" placeholder="Tìm kiếm truyện, tác giả ..." aria-label="Search">
                  <div id="search_ajax"></div>
                  <button class="btn btn-outline-success mt-2" type="submit">Tìm kiếm</button>
                  <select class="custom-select mr-sm-2 ml-2 mt-2" id="switch_color">
                    <option value="sang">Sáng</option>
                    <option value="toi">Tối</option>
                  </select>
                </form>
              </div>                 
            </div> 
            </nav>
            
            <!----------------Slide--------------------->
            @yield('slide')
            <!----------------Content--------------------->
            @yield('content')

            <footer class="text-muted">
              <div class="container">
                <p class="float-right">
                  <a href="#">Quay lại trang đầu</a>
                </p>
                <p>Web truyện tranh 247 </p>
                <p>Đọc truyện hay, mới nhất tại <a href="../../">Truyen tranh 247</a> hoặc tham gia group <a href="../../getting-started/">Truyen Tong Hop</a>.</p>
              </div>
            </footer>
        </div>
        
        {{-- Facebook --}}
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="p94eFyJZ"></script>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        {{-- Chỉnh bg --}}
        <script type="text/javascript">
          $(document).ready(function(){
            if(localStorage.getItem('switch_color') !== null){

              const data = localStorage.getItem('switch_color');
              const data_obj = JSON.parse(data);

              $(document.body).addClass(data_obj.class_1);
              $('.album').addClass(data_obj.class_2);
              $('.card-body').addClass(data_obj.class_1);

              $('ul.mucluctruyen > li > a').toggleClass('noidung_color');
              $('a.btn.btn-sm.btn-outline-secondary').toggleClass('noidung_color');
              $('.text-muted').toggleClass('noidung_color');
              $('nav.navbar.navbar-expand-lg.navbar-light.bg-light').toggleClass('bg_dark');
              $('.dropdown-menu').toggleClass('bg_dark');
              $('i.fa.fa').toggleClass('noidung_color');
              $('.nav-link').css('color','#fff');
              $('.navbar-brand').css('color','#fff');
              $('.card.mb-3.box-shadow').css('background','#242424');
              

              $("select option[value='toi']").attr("selected","selected");
            }


            $('#switch_color').change(function(){
              $(document.body).toggleClass('switch_color');
              $('.album').toggleClass('switch_color_light');
              $('.card-body').toggleClass('switch_color');
              $('.noidungchuong').toggleClass('noidung_color');
              $('ul.mucluctruyen > li > a').toggleClass('noidung_color');
              $('a.btn.btn-sm.btn-outline-secondary').toggleClass('noidung_color');
              $('.text-muted').css('color','#fff');
              $('nav.navbar.navbar-expand-lg.navbar-light.bg-light').toggleClass('bg_dark');
              $('.dropdown-menu').toggleClass('bg_dark');
              $('i.fa.fa').toggleClass('noidung_color');
              $('.nav-link').css('color','#fff');
              $('.navbar-brand').css('color','#fff');
              $('.card.mb-3.box-shadow').css('background','#242424');
              if($(this).val() == 'toi'){
                var item = {
                  'class_1' : 'switch_color',
                  'class_2' : 'switch_color_light',
                }
                localStorage.setItem('switch_color', JSON.stringify(item));
              }else if($(this).val() == 'sang'){
                localStorage.removeItem('switch_color');
                $('ul.mucluctruyen > li > a').css('color','#000');
              }
            }); 
          });     
        </script>


        <script type="text/javascript">
          $('#keywords').keyup(function(){
              var query = $(this).val();
                if(query != ''){
                  var _token = $('input[name="_token"]').val();

                  $.ajax({
                    url:"{{url('/autocomplete-ajax')}}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                      $('#search_ajax').fadeIn();
                      $('#search_ajax').html(data);
                    }
                  })
                }else{
                  $('#search_ajax').fadeOut();
                }
          });
          $(document).on('click','.li_search_ajax',function(){
            $('#keywords').val($(this).text());
            $('#search_ajax').fadeOut();
          });
        </script>

        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        </script>
        <script type="text/javascript">
          $('.select-chapter').on('change',function(){
            var url = $(this).val();
            if(url){
              window.location = url;
            }
            return false;
          });
          current_chapter();
          function current_chapter(){
            var url = window.location.href;
            $('.select-chapter').find('option[value="'+url+'"]').attr("selected",true);
          }
        </script>
    </body>
</html>
