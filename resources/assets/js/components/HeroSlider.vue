<template>
    <div>
        <slot>

        </slot>
    </div>
</template>

<script>

    import anime from 'animejs'

    export default {
        data: function() {
            return {
                currentSlide: 0,
                slides: [],
            }
        },
        created: function() {
            window.addEventListener('keyup', this.onKeyUp);
        },
        mounted: function() {
            this.initSlides();
        },
        methods: {
            onKeyUp: function(event){
                switch(event.key) {
                    case 'ArrowLeft':
                        this.changeSlide(-1);
                        break;
                    case 'ArrowRight':

                        this.changeSlide(+1);
                        break;
                }
            },
            initSlides: function(){
                let vm = this;
                let validSlides = _.filter(vm.$slots.default, (slot) => {
                    return slot.data != undefined && slot.data.staticClass == 'slide';
                });
                vm.slides = _.map(validSlides, (slide) => slide.elm);
                _.forEach(vm.slides, (slide) => {
                    slide.classList.add('hide');
                });
                vm.slides[0].classList.remove('hide');
            },
            changeSlide: function(val){
                this.currentSlide += val;
                if(this.currentSlide < 0){
                    this.currentSlide = this.slides.length-1;
                } else if ( this.currentSlide > this.slides.length-1){
                    this.currentSlide = 0;
                }
                this.slides[this.currentSlide].classList.remove('hide');
            }
        },
        watch: {
            currentSlide: function(nv, ov){
                anime({
                    targets: this.slides[ov],
                    left: '100%',
                    complete: function(anim){
                        this.slides[ov].classList.add('hide');
                    },
                });
                this.slides[nv].classList.remove('hide');
                anime({
                    targets: this.slides[nv],
                    left: '0',
                });

            }
        },
    }
</script>
<style>
    .slide{
        position: absolute;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: stretch;
        height: 600px;
    }
    .slide img {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
    }

    .hide{
        display: none;
    }
</style>
