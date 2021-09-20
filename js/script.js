// お問合せボタンのコンポーネント
{
    const conv = {
        template:`
        <div class="c_cv">
            <a href="tel:0120-166-440" class="c_cv__btn">
                <img src="img/common/btn-tel.svg" alt="お電話での予約はこちらをタップ">
            </a>
            <a href="#contact" class="c_cv__btn">
                <img src="img/common/btn-mail.svg" alt="Web予約はこちら">
            </a>
            <figure class="c_cv__img">
                <img src="img/common/schedule.svg" alt="訪問時間：月～土の9：00～12:00と13:00～18:00">
            </figure>
            <p class="c_cv__txt">定休日：日曜・祝日、年末年始</p>
        </div>
        `
    }
    
    const convs = document.querySelectorAll('.conv');

    convs.forEach((el)=>{
        new Vue({
            el,
            components: {
                'conversion': conv
            }
        })
    });
}


// コロナアコーディオンメニュー
{
    new Vue({
        el: "#accordion",
        data: {
            isOpen: false
        },
        methods: {
            clickAccordion: function(){
                this.isOpen = !this.isOpen;
            },
            beforeEnter: function(el){
                el.style.height = '0';
            },
            enter: function(el) {
                el.style.height = el.scrollHeight + 'px';
            },
            beforeLeave: function(el) {
                el.style.height = el.scrollHeight + 'px';
            },
            leave: function(el) {
                el.style.height = '0';
            }
        },
    })
}



// レビューのアコーディオンメニュー
{
    const comment = {
        template:`
        <div>
            <button class="review__btn" v-bind:class="{review__btn_open:isOpen}" @click="clickAccordion">
                {{ btnTxt }}
                <img class="review__btn_icon" src="img/review/icon.svg" alt="アイコン">
                <div class="review__btn_arrow"></div>
                <div class="review__btn_border"></div>
                <div class="review__btn_bg"></div>
            </button>
            <transition name="review__accordion" @before-enter="beforeEnter" @enter="enter" @before-leabve="beforeLeave" @leave="leave">
                <div class="review__inner" v-show="isOpen">
                    <slot name="body"></slot>
                    <p class="review__txt review__txt_bold">※ご利用者様の感想であり効果・効能を保証するものではありません</p>
                </div>
            </transition>
        </div>
        `,
        data() {
            return {
                btnTxt: "コメントを読む",
                isOpen: false
            };
        },
        methods: {
            clickAccordion: function(){
                this.isOpen = !this.isOpen;
                if(this.isOpen){
                    this.btnTxt = "コメントを閉じる";
                }else{
                    this.btnTxt = "コメントを読む";
                }
            },
            beforeEnter: function(el){
                el.style.height = '0';
            },
            enter: function(el) {
                el.style.height = el.scrollHeight + 'px';
            },
            beforeLeave: function(el) {
                el.style.height = el.scrollHeight + 'px';
            },
            leave: function(el) {
                el.style.height = '0';
            }
        },
    }

    const accordion = document.querySelectorAll('.reviwe__accordion');

    accordion.forEach((el) => {
        new Vue({
            el,
            components: {
                'comment': comment
            }
        })
    });

}



// 院長のメッセージのアコーディオン
{
    new Vue({
        el: "#greet__accordion",
        data: {
            isOpen: false,
        },
        methods: {
            clickAccordion: function(){
                this.isOpen = !this.isOpen;
            },
            beforeEnter: function(el){
                el.style.height = '0';
            },
            enter: function(el) {
                el.style.height = el.scrollHeight + 'px';
            },
            beforeLeave: function(el) {
                el.style.height = el.scrollHeight + 'px';
            },
            leave: function(el) {
                el.style.height = '0';
            }
        },
    })
}



// 推薦の声
{
    const recobtn = {
        template:`
            <button class="reco__btn" @click="$emit('clickac')">{{ btn }}</button>
        `,
        props: ['btn'],
    }

    const reco = document.querySelectorAll('.reco__content');

    reco.forEach((el) => {
        new Vue({
            el,
            components: {
                "recobtn": recobtn
            },
            data: {
                isOpen: false,
                btnmes: "推薦文を読む"
            },
            methods: {
                clickac(){
                    this.isOpen = !this.isOpen;
                    if(this.isOpen){
                        this.btnmes = "推薦文を閉じる";
                    }else{
                        this.btnmes = "推薦文を読む";
                    }
                },
                beforeEnter: function(el){
                    el.style.height = '0';
                },
                enter: function(el) {
                    el.style.height = el.scrollHeight + 'px';
                },
                beforeLeave: function(el) {
                    el.style.height = el.scrollHeight + 'px';
                },
                leave: function(el) {
                    el.style.height = '0';
                }
            },
        })
    });
}