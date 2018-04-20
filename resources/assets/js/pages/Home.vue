<template>
    <div>
        <div class="slider">
            <div v-for="slide in slides" v-bind:key="slide.id">
                <img :src="slide.url" :alt="slide.alt">
            </div>
        </div>
        <section class="diagonal double bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card bg-gray">
                            <div class="card-body text-center">
                                <b>placeholder</b>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <b>placeholder</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>

export default {
    data: function() {
        return {
            slides: [
                {id: 0, url: 'https://images.unsplash.com/photo-1515871434414-dc3f0a54986f?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=500&fit=crop&ixid=eyJhcHBfaWQiOjF9&s=d780966cfdcb1f5e5e828812aeb03669', alt: 'First slide'},
                {id: 1, url: 'https://images.unsplash.com/photo-1521725168367-2f46504f075e?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=500&fit=crop&ixid=eyJhcHBfaWQiOjF9&s=53dfd38e21707f6e0049786b41e09eaf', alt: 'Second slide'},
            ]
        }
    }
}
</script>
