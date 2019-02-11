<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ isset($url) ? ucwords($url) : ""}} | Đăng nhập</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .forgot-box-body{
      display: none;
      background: #fff;
      padding: 20px;
      border-top: 0;
      color: #666;
    }
    .help-block-forgot{
      color:red;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <b>{{ config('app.app_name') }}</b>
    </div>
    <!-- /.login-logo -->
    <div class="forgot-box-body">
      <form action="" method="POST" id="form-forget" onsubmit="return forgetPassword()">
        <p class="login-box-msg">Quên mật khẩu</p>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          <span class="help-block-forgot"></span>
        </div>
        <button class="btn btn-primary btn-block btn-flat" id="btn_forget" type="submit">Gửi yêu cầu</button>
        <div class="form-group" align="center">
          <a href="javascript:void(0)" onclick="forgotClick()">Đăng nhập</a>
        </div>
      </form>
    </div>

    <div class="login-box-body">
      <p class="login-box-msg">{{ isset($url) ? ucwords($url) : ""}} - Đăng nhập để quản trị</p>
      @isset($url)
      <form method="POST" action='{{ url("$url/login") }}' aria-label="{{ __('Login') }}">
      @else
      <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
      @endisset  
          {{ csrf_field() }}
        <div class="form-group has-feedback {{ $errors->has('phone') ? 'has-error' : '' }}">
          <input type="text" name="phone" class="form-control" placeholder="Số điện thoại"
            value="{{ old('phone') }}" autocompleteoff>
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          @if($errors->has('phone'))
              <span class="help-block">{{ $errors->first('phone') }}</span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
          <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @if($errors->has('password'))
              <span class="help-block">{{ $errors->first('password') }}</span>
          @endif
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember"> Nhớ tài khoản
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-xs-12">
            <a href="javascript:void(0)" onclick="forgotClick()">Quên mật khẩu?</a>
          </div>
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
  function forgotClick(){
    $('.help-block-forgot').text("");
    $('.login-box-body').toggle();
    $('.forgot-box-body').toggle();
  }
  function forgetPassword() {
    $('#btn_forget').attr("disabled", "disabled");
    var data = $('#form-forget').serialize();
    $.ajax({
      {{-- url: "{{route('api.doctor-forgot-password')}}", --}}
      method:"POST",
      headers: {
          "Accept":"application/json",
      },
      data:data,
      success:function(data){
        alert(data.message);
        $('.login-box-body').toggle();
        $('.forgot-box-body').toggle();
        $('#btn_forget').removeAttr("disabled");       
      },
      error:function(err){
        $('.help-block-forgot').text(err.responseJSON.message);
        $('#btn_forget').removeAttr("disabled");       
      }
    });
    return false;
  }
</script>
</body>
</html>
