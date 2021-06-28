@extends('../layout')
{{-- @section('slide') 
  @include('pages.slide')
  @endsection --}}
  @section('content')            
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-md-12">
      <h4>Cô gái đến từ hư vô</h4>
      <p>Chương hiện tại : Chương 1</p>
      <div class="col-md-5">
        <div class="form-group">
          <label for="exampleInputEmail1">Chọn chương</label>
          <select name="kichhoat" class="custom-select">
            <option value="0">Chương 1</option>
            <option value="1">Chương 2</option>
          </select>
        </div>
      </div>
      <div class="noidungchuong">
        <p>Cô gái đến từ hư vô (tiếng Anh: Girl from Nowhere) là một bộ phim truyền hình Thái Lan ra mắt lần đầu năm 2018 do Chicha Amatayakul đóng vai chính. Phim có nội dung xoay quanh Nanno, một cô gái bí ẩn không nguồn gốc danh tính thường xuyên chuyển đến các ngôi trường khác nhau với mục đích vạch trần những câu chuyện đen tối cùng những mặt xấu, sự giả tạo khác nhau của mỗi người.[1][2][3]

        Bộ phim bao gồm hai mùa với mùa đầu tiên được sản xuất và phát hành vào ngày 8 tháng 8 năm 2018 trên GMM 25 và trên Netflix vào ngày 31 tháng 10 năm 2018, mùa thứ hai được phát hành toàn cầu trên Netflix vào ngày 7 tháng 5 năm 2021 lúc nửa đêm theo giờ Los Angeles.[4][5]</p>
      </div>
      <h4>Truyện cùng thể loại</h4>
      <div class="row">
        <div class="col-md-2">
          <div class="card mb-2 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h5>Nhất quỷ nhì mà</h5>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-2">
          <div class="card mb-2 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h5>Nhất quỷ nhì mà</h5>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-2">
          <div class="card mb-2 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h5>Nhất quỷ nhì mà</h5>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-2">
          <div class="card mb-2 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h5>Nhất quỷ nhì mà</h5>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>

      </div>


    </div>
 
  </div>

  @endsection