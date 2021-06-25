<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Truyện Tranh 247</title>

        <!-- Fonts -->
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
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
            </div>
            <!----------------Slide--------------------->
            <div>
                <h3>Sách nên đọc</h3>
                <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                    <h3>Truyện j đó</h3>
                    <p><i class="fas fa-eye"></i>6000</p>
                    <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
                </div>
                <div class="item">
                    <img src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                    <h3>Truyện j đó</h3>
                    <p><i class="fas fa-eye"></i>6000</p>
                    <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
                </div>
                <div class="item">
                    <img src="{{asset('public/uploads/truyen/ngoi-nha-bi-ma-am-manh-nhat-va-chang-tra-966931.jpg')}}">
                    <h3>Truyện j đó</h3>
                    <p><i class="fas fa-eye"></i>6000</p>
                    <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
                </div>
                <div class="item">
                    <img src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                    <h3>Truyện j đó</h3>
                    <p><i class="fas fa-eye"></i>6000</p>
                    <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
                </div>
                <div class="item">
                    <img src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                    <h3>Truyện j đó</h3>
                    <p><i class="fas fa-eye"></i>6000</p>
                    <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
                </div>
                <div class="item">
                    <img src="{{asset('public/uploads/truyen/ngoi-nha-bi-ma-am-manh-nhat-va-chang-tra-966931.jpg')}}">
                    <h3>Truyện j đó</h3>
                    <p><i class="fas fa-eye"></i>6000</p>
                    <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
                </div>          
                </div>
                <!----------------Sách mới--------------------->
                <h3>SÁCH MỚI CẬP NHẬT</h3>
                <div class="album py-5 bg-light">
                    <div class="container">

                      <div class="row">
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tham-tu-conan44.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/pham-nhan-tu-tien-chi-tien-gioi-thien99.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn btn-success" href="">Xem tất cả</a>
                    </div>
                </div>

                <!----------------Sách hay xem--------------------->
                <h3>SÁCH HAY XEM NHIỀU</h3>
                <div class="album py-5 bg-light">
                    <div class="container">

                      <div class="row">
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/pham-nhan-tu-tien-chi-tien-gioi-thien99.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tu-truyen-cua-fujiko-fujio17.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tu-truyen-cua-fujiko-fujio17.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn btn-success" href="">Xem tất cả</a>
                    </div>
                </div>
                <!----------------Blog--------------------->
                <h3>Blog</h3>
                <div class="album py-5 bg-light">
                    <div class="container">

                      <div class="row">
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/truy-tim-ngoc-rong-sieu-cap24.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
                            <div class="card-body">
                                <h3>Tiêu đề</h3>
                              <p class="card-text">Tóm tắt</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                  <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
                                </div>
                                <small class="text-muted">9 phút trước</small>
                              </div>
                            </div>
                          </div>
                        </div>                       
                      </div>
                      <a class="btn btn-success" href="">Xem tất cả</a>
                    </div>

                </div>




            </div>
            <footer class="text-muted">
              <div class="container">
                <p class="float-right">
                  <a href="#">Back to top</a>
                </p>
                <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
              </div>
            </footer>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
    </body>
</html>
