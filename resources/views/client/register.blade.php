@extends('layout.client-layout-v2',['page_title'=>'Đăng Ký'])
@section('content')
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url(http:////cdn.shopify.com/s/files/1/0476/6585/files/outerwear_1600x.jpg?v=1532559381);">
        <h2 class="l-text2 t-center">
            Đăng Ký
        </h2>
        <p class="m-text13 t-center">
            {{--New Arrivals Women Collection 2018--}}
        </p>
    </section>
    <style>
        body, html{
            height: 100%;
            background-repeat: no-repeat;
            background-color: #fff;
            font-family: 'Oxygen', sans-serif;
        }

        .main{
            margin-top: 70px;
        }

        h1.title {
            font-size: 50px;
            font-family: 'Passion One', cursive;
            font-weight: 400;
        }



        .form-group{
            margin-bottom: 15px;
        }

        label{
            margin-bottom: 15px;
        }

        input,
        input::-webkit-input-placeholder {
            font-size: 11px;
            padding-top: 3px;
        }

        .main-login{
            background-color: #fff;
            /* shadows and rounded borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 10px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

        }

        .main-center{
            margin-top: 30px;
            margin: 0 auto;
            max-width: 330px;
            padding: 40px 40px;

        }

        .login-button{
            margin-top: 5px;
        }

        .login-register{
            font-size: 11px;
            text-align: center;
        }
    </style>
    <div class="container">
        <div class="row main">

            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="#">





                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Tên của bạn</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Nhập tên bạn "/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Mật Khẩu</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Nhập vào mật khẩu"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Nhập lại mật khẩu</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Nhập lại mật khẩu"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="button" class="btn btn-primary btn-lg btn-block login-button">Đăng Ký</button>
                    </div>
                    <div class="login-register">
                        <a href="index.php">Đăng Nhập</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--header end here-->
    <!-- copyright start here -->



@endsection