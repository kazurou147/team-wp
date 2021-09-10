// 高さを揃える
jQuery(function() {
    jQuery('.c-box01-item').matchHeight();
    jQuery('.front-sec07-list-item__text').matchHeight();
});


//グローバルナビゲーション
jQuery(function() {

    jQuery('#c-nav-sp_button-wrap').click(function() {

        jQuery('.c-nav_sp-button').stop().toggleClass('is-close');
        jQuery('.c-nav-sp_main').stop().toggleClass('is-open');

    });

});


//初回の判定　class="sub-menu-sp-btn"の複数入力を防ぐため
var firstTime = true;

//グローバルナビゲーション
jQuery(window).on('load resize', function() {
    function navMenu() {
        //windowの幅を取得
        var winwidth = jQuery(window).width();
        //判定


        //ナビメニューのホバー
        if (winwidth > 1050) {
            jQuery('.menu-item-has-children').on({
                'mouseenter': function() {
                    jQuery(this).children('.sub-menu').addClass('is-open');
                },
                'mouseleave': function() {
                    jQuery(this).children('.sub-menu').removeClass('is-open');
                }
            });

        } else if (winwidth < 1051 && firstTime == true) {

            //ナビの子メニュー（アコーディオン）
            jQuery('.menu-item-has-children').append('<div class="sub-menu-sp-btn"></div>');
            jQuery('.sub-menu-sp-btn').on('click touch', function() {
                jQuery(this).prev().slideToggle();
            });
            firstTime = false;
        }
    }
    navMenu();
});



//グローバルナビゲーション　サブメニュー
jQuery(window).on('load', function() {
    jQuery('.c-nav-sub__global-btn').on('click', function() {
        jQuery('.c-nav-sub__global-list').stop().slideToggle();
    });


});




//ページトップ
jQuery(window).on('load resize scroll', function() {

    //windowの幅を取得
    var winWidth = jQuery(window).width();
    //ページトップ
    var scrollTop = jQuery(this).scrollTop();

    if (scrollTop > 500) {
        jQuery('.c-pagetop').fadeIn();
    } else {
        jQuery('.c-pagetop').fadeOut();
    }
});


//ページ内リンク
jQuery(function() {
    // #で始まるa要素をクリックした場合に処理
    jQuery('a[href^="#"]').on('click', function() {
        // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
        var adjust;
        // PCとSPの切り分け
        //windowの幅を取得
        var winwidth = jQuery(window).width();
        if (winwidth > 1049) {
            adjust = 110;
        } else {
            adjust = 80;
        }
        // スクロールの速度（ミリ秒）
        var speed = 1000;
        // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
        var href = $(this).attr("href");
        // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
        var target = $(href == "#" || href == "" ? 'html' : href);
        // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
        var position = target.offset().top - adjust;
        // スムーススクロール linear（等速） or swing（変速）
        jQuery('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });
});