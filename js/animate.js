$(function(){
    // アコーディオンの機能
    const $accBtn = $('.acc__btn');
    const $accAcc = $('.acc__acc');

    $accBtn.click(function(){
        const $this = $(this);
        const $acc = $this.siblings(".acc__acc").find('.acc__inner');
        $acc.toggleClass('acc__inner_open');
        $acc.toggleClass('acc__inner_close');
    });


    // コロナ予防のボタンの機能
    const $coronaBtn = $('.corona__btn');
    $coronaBtn.click(function(){
        $(this).toggleClass('corona__btn_open');
    });


    // お客様の声のボタン
    const $reviewBtn = $('.review__btn');
    $reviewBtn.click(function(){
        const $this = $(this);
        if($this.hasClass('review__btn_open')){
            $this.text('コメントを読む　');
        }
        else{
            $this.text('コメントを閉じる');
        }
        $this.toggleClass('review__btn_open');
    });

    
    // FAQボタン
    const $faqBtn = $('.c_faq__content_top');
    $faqBtn.click(function(){
        $(this).toggleClass('c_faq__content_top_open');
    });



    
    // 画像遅延読込
    //imgタグにlazyクラス付与
    $('img').each(function(){
        $(this).addClass('lazy');
    });

    //遅延読込
    let imgHs = [];
    const h = window.innerHeight;
    $('.lazy').each(function(){
    const offsetH = $(this).offset().top;
    imgHs.push(offsetH);
    });

    $(window).scroll(function(){
        const scrollH = $('html, body').scrollTop();
        const scrollH2 = document.body.scrollTop;
        
        // クローム用
        imgHs.forEach(function(value,index){
            if(value < scrollH + h +200){
            const dataSrc = $('.lazy').eq(index).attr('data-src');
            $('.lazy').eq(index).attr('src',dataSrc);
            imgHs = [];
            $('.lazy').eq(index).removeClass('lazy');
            $('.lazy').each(function(){
                const offsetH = $(this).offset().top;
                imgHs.push(offsetH);
            });
            }
        });

        // エッジ用
        imgHs.forEach(function(value,index){
            if(value < scrollH2 + h +200){
            const dataSrc = $('.lazy').eq(index).attr('data-src');
            $('.lazy').eq(index).attr('src',dataSrc);
            imgHs = [];
            $('.lazy').eq(index).removeClass('lazy');
            $('.lazy').each(function(){
                const offsetH = $(this).offset().top;
                imgHs.push(offsetH);
            });
            }
        });
    });
    // 遅延読み込みコード終了
});