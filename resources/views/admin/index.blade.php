@extends('admin.layoutadmin.master')

@section('title', 'Trang chủ Admin')

@section('content')
<div class="container">
    <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
          <h3 class="fw-bold mb-3">Bảng điều khiển</h3>
          <h6 class="op-7 mb-2">Bảng điều khiển Admin sử dụng Bootstrap 5</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-primary bubble-shadow-small">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Khách truy cập</p>
                    <h4 class="card-title">1,294</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-info bubble-shadow-small">
                    <i class="fas fa-user-check"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Người đăng ký</p>
                    <h4 class="card-title">1,303</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-success bubble-shadow-small">
                    <i class="fas fa-luggage-cart"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Doanh thu</p>
                    <h4 class="card-title">$1,345</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-secondary bubble-shadow-small">
                    <i class="far fa-check-circle"></i>
                  </div>
                </div>
                <div class="col col-stats ms-3 ms-sm-0">
                  <div class="numbers">
                    <p class="card-category">Đơn hàng</p>
                    <h4 class="card-title">576</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
