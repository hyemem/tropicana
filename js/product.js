$(window).load(function(){

    var $product_list//ul
    var li //li
    var li_width //li width(유동)
    var current_position; //현재 ul 위치(유동)
    var probtn //이전버튼
    var nextbtn //이후버튼


    //로드하자마자 실행할 함수
    init()
    productReset()
    inEvent()

    
    function init() { //초기함수 설정
        $product_list = $("#product_list"); //ul
        li = $product_list.children(); //li
        probtn = $("#left_Btn"); // 이전 버튼
        nextbtn = $("#right_Btn"); // 다음 버튼
        $product_list.children().last().prependTo($product_list); 
    }


    function productReset() {
        li_width = li.outerWidth(true); // li width 
        $product_list.css({'left': -li_width}); //ul의 positon값을 초기화함
    }


    function pro_prev() { //이전 버튼
        current_position = $product_list.position().left; //현재 위치 = ul의 position.left값
        $product_list.not(':animated').animate({
            "left": current_position + li_width
        }, 500, "easeOutCubic", function () {

            $product_list.children().last().prependTo($product_list)
            $product_list.css({
                'left': -li_width
            });
        });

        //ul의 애니메이션 상태가 아니라면, ul의 current_position에 li_width값을 더해서 움직임 (왼쪽으로)
        //그리고 ul의 positon값을 초기화함
    }


    function pro_next() { //다음 버튼
        current_position = $product_list.position().left; //현재 위치 = ul의 position.left값
        $product_list.not(':animated').animate({
            "left": current_position - li_width
        }, 500, "easeOutCubic", function () {

            $product_list.children().first().appendTo($product_list)
            $product_list.css({
                'left': -li_width
            });
        });
        //ul의 애니메이션 상태가 아니라면, ul의 current_position에 li_width값을 빼서 움직임 (오른쪽으로)
        //그리고 ul의 positon값을 초기화함
    }

    function inEvent(){
        $(window).on("resize", productReset);
        probtn.on('click', pro_prev);
        nextbtn.on('click', pro_next);
    }

});