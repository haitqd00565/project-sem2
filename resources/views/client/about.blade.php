@extends('layout.client-layout-v2',['page_title'=>'Giới thiệu'])
@section('content')
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(//cdn.shopify.com/s/files/1/0476/6585/files/Tees1_1600x.jpg?v=15325592);">
        <h2 class="l-text2 t-center">
            Giới thiệu
        </h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-38">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-b-30">
                    <div class="hov-img-zoom">
                        <img src="https://cdn.shopify.com/s/files/1/0476/6585/files/FEET_dc4e82e7-77da-4afd-a3ff-1eead44b157c_1024x1024.jpg?v=1507938846" alt="IMG-ABOUT">
                    </div>
                </div>

                <div class="col-md-8 p-b-30">
                    <h3 class="m-text26 p-t-15 p-b-16">
                        Giới thiệu
                    </h3>

                    <p class="p-b-28">
                        Mùa hè đến là lúc các gia đình, nhóm bạn, cặp đôi… tham gia các chuyến du lịch. Những bộ quần áo đi biển nhiều chủng loại, kiểu dáng cho bạn tự do lựa chọn. Các sản phẩm đồng phục đi biển thiết kế theo xu hướng mới nhất năm 2018. Giúp người mặc cảm giác dễ chịu, thoải mái và hợp thời trang.
                    </p>

                    <div class="bo13 p-l-29 m-l-9 p-b-10">
                        <p class="p-b-11">
                            Chúng tôi thấu hiểu được nhu cầu của khách hàng khi lựa chọn những mẫu quần áo đi biển. Chúng tôi luôn cập nhật những thiết kế quần áo thích hợp đi biển dành cho các kiểu quần áo mới nhất, phù hợp với xu hướng nhất. Bên cạnh quần áo đi biển, Sea Fashion giới thiệu các sản phẩm mua đồ đi biển cho phù hợp cho mọi lứa tuổi.
                            Chọn mua quần áo đi biển ở đâu để đảm bảo chất lượng, giá thành hợp lý? Khách hàng liên hệ Sea Fashion bán quần áo đi biển các loại với giá hợp lý tại Hà Nội. Khi bạn mua quần áo đi biển số lượng lớn sẽ được thêm nhiều ưu đãi vượt trội nhất.
                        </p>

                        <span class="s-text7">
							- Sea Fashion -
						</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->




    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
    </div>

    <!-- Container Selection -->
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>



    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    @endsection