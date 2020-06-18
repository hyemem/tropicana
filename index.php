<? include_once $_SERVER["DOCUMENT_ROOT"]."/inc/start.html" ?>

    <!--메인페이지에만 적용되는 style과 js 추가-->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/product.js"></script>
    <link rel="stylesheet" href="css/media_query.css">

    <!-- 바로가기메뉴 시작 -->
    <ul class="skipmenu_list">
        <li><a href="#main_menu">메뉴 바로가기</a></li>
        <li><a href="#content2_wrap">본문 바로가기</a></li>
        <li><a href="#content6">본사안내 바로가기</a></li>
        <li><a href="#footer_wrap">하단 바로가기</a></li>
    </ul>
    <!-- 바로가기메뉴 끝 -->

<? include_once $_SERVER["DOCUMENT_ROOT"]."/inc/header.html" ?>

    <!-------------------메인비주얼 시작--------------------->
    <!--------물결 배경---------->
    <div id="wave_bg">
        <div class="wave water"></div>
        <div class="wave water"></div>
        <div class="wave water"></div>
        <div class="wave water"></div>
    </div>

    <!--------비주얼 영역---------->
    <section id="main_vis">
        <!--메인 사과사진-->
        <img id="main_apple" src="img/main_apple.png" alt="메인사과">

        <!--메인 텍스트 영역-->
        <div id="main_txt">
            <h3 id="main_tit">REAL FRUITS<br>
                REAL SPARKLING</h3>
            <p>리얼과즙의 달콤함과<br>탄산의 청량감을 동시에!</p>
            <span id="more_Btn1"><a href="/sub.php">more</a></span>
        </div>
    </section>


    <!-------------------섹션 콘텐츠1 (브랜드 소개)--------------------->

    <div id="content1_wrap">
        <section id="content1">


            <!--------콘텐츠1 사이드 사진-------->
            <img src="img/brand_side.png" alt="데코이미지">

            <!--------콘텐츠1 제목 시작-------->
            <div class="con_txt">

                <!--콘텐츠1 서브 제목-->
                <p class="con_subtit">CHOICE YOUR FAVORITE!</p>

                <!--콘텐츠1 대제목-->
                <h2 class="con_tit">ABOUT BRAND</h2>
            </div>


            <!--------브랜드 소개 내용-------->
            <div id="content1_txt_box">
                <p id="content1_tit">ABOUT TROPICANA</p>
                <p id="content1_txt">트로피카나는 미국의 대표적인 오렌지주스 브랜드로,<br>미국 제1의 오렌지주스 브랜드라고 할 수 있습니다.<br>국내에서는 브랜드의 라이선스를 인정받아,<br>2016년도부터 롯데 브랜드에서 스파클링을 자체생산하게 되었습니다.
                </p>
                <span id="more_Btn2"><a href="/sub.php">more</a></span>

            </div>
        </section>
    </div>

    <!-------------------섹션 콘텐츠2 (프로덕트 슬라이드)-------------------->
    <div id="content2_wrap">
        <section id="content2">
            <!--------콘텐츠2 제목 시작-------->
            <div class="con_txt">
                <!--콘텐츠2 서브 제목-->
                <p class="con_subtit">CHOICE YOUR FAVORITE!</p>

                <!--콘텐츠2 대제목-->
                <h2 class="con_tit">OUR PRODUCT</h2>
            </div>



            <!--------콘텐츠2 화살표 시작-------->
            <div id="btn">
                <span id="left_Btn"><img src="img/left_arrow.png" alt="왼쪽버튼"></span>
                <span id="right_Btn"><img src="img/right_arrow.png" alt="오른쪽버튼"></span>
            </div>

            <!--------제품 슬라이드 리스트 시작-------->
            <ul id="product_list">
                <li>
                    <a href="/sub.php">
                        <img src="img/product_01.png" alt="청포도 제품 바로가기">
                        <div class="info">
                            <p>REAL<br>GREEN GRAPE</p>
                            <span>10%</span>
                        </div>
                    </a>
                    <p class="product_txt1">GREEN GRAPE</p>
                    <p class="product_txt2">청포도</p>
                </li>

                <li>
                    <a href="/sub.php">
                        <img src="img/product_02.png" alt="오렌지 제품 바로가기">
                        <div class="info">
                            <p>REAL<br>ORANGE</p>
                            <span>10%</span>
                        </div>
                    </a>
                    <p class="product_txt1">ORANGE</p>
                    <p class="product_txt2">오렌지</p>
                </li>

                <li>
                    <a href="/sub.php">
                        <img src="img/product_03.png" alt="포도 제품 바로가기">
                        <div class="info">
                            <p>REAL<br>GRAPE</p>
                            <span>10%</span>
                        </div>
                    </a>
                    <p class="product_txt1">GRAPE</p>
                    <p class="product_txt2">포도</p>
                </li>

                <li>
                    <a href="/sub.php">
                        <img src="img/product_04.png" alt="복숭아 제품 바로가기">
                        <div class="info">
                            <p>REAL<br>PEACH</p>
                            <span>10%</span>
                        </div>
                    </a>
                    <p class="product_txt1">PEACH</p>
                    <p class="product_txt2">복숭아</p>
                </li>

                <li>
                    <a href="/sub.php">
                        <img src="img/product_05.png" alt="파인애플 제품 바로가기">
                        <div class="info">
                            <p>REAL<br>PINEAPPLE</p>
                            <span>10%</span>
                        </div>
                    </a>
                    <p class="product_txt1">PINEAPPLE</p>
                    <p class="product_txt2">파인애플</p>
                </li>

                <li>
                    <a href="/sub.php">
                        <img src="img/product_06.png" alt="사과 제품 바로가기">
                        <div class="info">
                            <p>REAL<br>APPLE</p>
                            <span>10%</span>
                        </div>
                    </a>
                    <p class="product_txt1">APPLE</p>
                    <p class="product_txt2">사과</p>
                </li>

                <li>
                    <a href="/sub.php">
                        <img src="img/product_07.png" alt="망고 제품 바로가기">
                        <div class="info">
                            <p>REAL<br>MANGO</p>
                            <span>10%</span>
                        </div>
                    </a>
                    <p class="product_txt1">MANGO</p>
                    <p class="product_txt2">망고</p>
                </li>
            </ul>
        </section>


    </div>

    <!-------------------섹션 콘텐츠3 (스파클링 효과)-------------------->

    <div id="content3_wrap">
        <section id="content3">
            <!--------콘텐츠3 제목 시작-------->
            <div class="con_txt">

                <!--콘텐츠3 서브 제목-->
                <p class="con_subtit">CHOICE YOUR FAVORITE!</p>

                <!--콘텐츠3 대제목-->
                <h2 class="con_tit">SPARKLING EFFECT</h2>
            </div>

            <!--콘텐츠3 아이콘 영역-->
            <ul id="effect_list">
                <li>
                    <a href="#"><img src="img/effect_01.png" alt="친구 아이콘"></a>
                    <p class="effect_tit">TOGETHER</p>
                </li>

                <li>
                    <a href="#"><img src="img/effect_02.png" alt="신선 아이콘"></a>
                    <p class="effect_tit">FRESHNESS</p>
                </li>

                <li>
                    <a href="#"><img src="img/effect_03.png" alt="힐링 아이콘"></a>
                    <p class="effect_tit">HEALING</p>
                </li>
            </ul>

            <!--콘텐츠3 텍스트 영역-->
            <div id="cont3_txt_box">
                <p id="effect_tit">Drink It!
                    <span id="leaf"><img src="img/effect_leaf.png" alt="나뭇잎 아이콘"></span>
                </p>
                <p id="effect_txt">롯데칠성 트로피카나 음료를 드시면<br>생겨나는 다양한 효과를 경험해보세요.</p>
            </div>
        </section>
    </div>

    <!-------------------섹션 콘텐츠4 (인스타그램)-------------------->

    <section id="content4">
        <!--------콘텐츠4 제목 시작-------->
        <div class="con_txt">
            <!--콘텐츠4 서브 제목-->
            <p class="con_subtit">CHOICE YOUR FAVORITE!</p>

            <!--콘텐츠4 대제목-->
            <h2 class="con_tit">FROM INSTAGRAM</h2>
        </div>

        <ul id="insta_list">
            <li><a href="/sub.php"><img src="img/insta_01.gif" alt="후기 바로가기"></a></li>
            <li><a href="/sub.php"><img src="img/insta_02.gif" alt="후기 바로가기"></a></li>
            <li><a href="/sub.php"><img src="img/insta_03.gif" alt="후기 바로가기"></a></li>
            <li><a href="/sub.php"><img src="img/insta_04.gif" alt="후기 바로가기"></a></li>
        </ul>
    </section>



    <!-------------------섹션 콘텐츠5 (구독)-------------------->


    <section id="content5">
        <!--------콘텐츠5 제목 시작-------->
        <div class="con_txt">
            <!--콘텐츠5 서브 제목-->
            <p class="con_subtit">CHOICE YOUR FAVORITE!</p>
            <!--콘텐츠5 대제목-->
            <h2 class="con_tit">SUBSCRIBE OUR CHANNEL</h2>
        </div>

        <div id="content5_txt_box">
            <h2 id="content5_tit">TROPICANA</h2>
            <p id="cotent5_txt">트로피카나 유투브 채널을 구독하시면,<br>가장 먼저 새로운 영상 콘텐츠를 만나보실 수 있습니다.<br>이 채널에는 광고 영상과 더불어,<br>UCC 이벤트 등의 다양한 콘텐츠가 포함되어 있습니다.</p>
            <span id="sub_Btn"><a href="https://www.youtube.com/user/Lotte7star" target="_black">SUBSCRIBE</a></span>
        </div>

        <img src="img/subscribe_01.gif" alt="나뭇잎 데코 이미지">
    </section>

    <!-------------------섹션 콘텐츠6 (지도)-------------------->

    <section id="content6">
        <!--------콘텐츠6 제목 시작-------->
        <div class="con_txt">

            <!--콘텐츠6 서브 제목-->
            <p class="con_subtit">CHOICE YOUR FAVORITE!</p>

            <!--콘텐츠6 대제목-->
            <h2 class="con_tit">LOCATION</h2>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.730675357165!2d127.09829811458921!3d37.5142698348788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca50a47de8371%3A0x3f10a05ec73d0741!2z66Gv642w7LqQ7Iqs6rOo65Oc!5e0!3m2!1sko!2skr!4v1584803084820!5m2!1sko!2skr" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" title="본사 위치 안내"></iframe>
    </section>

    <? include_once $_SERVER["DOCUMENT_ROOT"]."/inc/footer.html" ?>
