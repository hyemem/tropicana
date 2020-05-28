$(window).load(function () {
    
    var $hw  //헤더 배경 
    var $header //헤더
    var $nav // 네비게이션
    var $mainMenu //대메뉴 ul
    var $mainMenuLi  //대메뉴 항목 (li)
    var $subMenu //서브메뉴 ol
    var $subMenuLi //서브메뉴 항목 (li)
    var toggle //햄버거 메뉴
    var on_off=false;//모바일 메뉴 닫힘 상태
    
    
    
    menuInit();
    scrollHeader(); //스크롤 0 이상인 상태에서 새로고침할 때 헤더 배경 보이기
    inEvent();
    
    
    function menuInit(){
        $hw = $("#header_wrap"); //헤더 배경
        $header = $hw.children("header"); //헤더
        $logo = $header.find('img'); //로고 이미지
        $nav = $header.children("#main_nav");  //nav
        $mainMenu = $nav.children("#main_menu"); //nav ul
        $mainMenuLi = $mainMenu.children("li");  // li 전체
        $mainMenuA = $mainMenuLi.children("a"); // 대메뉴 a 
        $subMenu = $mainMenuLi.children('ol'); // 서브메뉴 ol
        $subMenuLi = $subMenu.children('li');  // 서브 메뉴 li
        $subMenuA = $subMenuLi.children("a");  // 서브메뉴 a
        toggle = $("#toggle_btn a"); //햄버거 메뉴
    
    }
    
    
    function hwBgShow(){ // header wrap 배경 생성
        $hw.addClass('selected');
        $logo.css({'top':'-70px'});
    }
    
    function hwBgHide(){ // header wrap 배경 제거
        if($(window).scrollTop()>0){
        // 스크롤이 0이상이거나, toggle버튼이 눌린 상태라면,
            $hw.addClass('selected');
            $logo.css({'top':'-70px'});
        }
        else{
            $hw.removeClass('selected');
            $logo.css({'top':'0px'});
        }
    }
    
    
    function menuShow() {//서브메뉴 생성
        $(this).next().stop().slideDown(700); 
    }

    
    function menuHide(){//서브메뉴 제거
        $(this).children('ol').stop().slideUp(700); 
    }
    

    function focusHide(){ //포커스아웃 서브메뉴 제거
        $subMenu.stop().slideUp(700);
    }
    
    function scrollHeader(){
        if($(window).scrollTop()>0){
            hwBgShow();
        }else{
            hwBgHide();
        }
    }
    
    //모바일 전체 메뉴 애니메이션
    function mobileMenu(e){
        e.preventDefault();
        
        on_off =! on_off; // 초기값이 false이므로 true가 됨
        
        if(on_off){//모바일 메뉴가 닫힌 상태라면(on_off가 true면)
            $("#mobile_menu").animate({'left':0},700,"easeOutCubic");
            $(this).children().addClass('selected');
            $('body').css({'overflow':'hidden'});
            
            
        }else{//모바일 메뉴가 열린 상태라면(on_off가 false면)
            $("#mobile_menu").animate({'left':'100%'},700,"easeOutCubic");
            $(this).children().removeClass('selected');
            $('body').css({'overflow':'auto'});
        }
    }
    
    
    //모바일 메뉴 LI의 아코디언 애니메이션
    function mobileLiEffect(e){
        e.preventDefault();
             $(this).children('ol').slideToggle();
             $(this).children('.moblie_icon').toggleClass('open');
    }

    function inEvent(){
        $(window).on('scroll',scrollHeader);
        $mainMenuA.on('mouseenter focus',menuShow); //대메뉴 이벤트
        $mainMenuLi.on('mouseleave',menuHide); //대메뉴 이벤트
        $mainMenuLi.children().last().on('focus',focusHide);
        $hw.on('mouseenter focusin', hwBgShow);
        $hw.on('mouseleave focusout', hwBgHide);
        toggle.on('click',mobileMenu);
        $("#mobilemenu_list>li").on('click',mobileLiEffect);
        
    }
});
    
    
