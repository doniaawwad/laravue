<template>



    <div class="row">
<div class="col-lg-6 valign order-last">
                            <div class="content mb-80">
                                <h4>{{ title}}</h4>
                                <p>{{ description }}</p>
                                <a href="#0" class="more">
                                </a>
                            </div>

                        </div>

                        <div class="col-lg-6 order-first">
                            <div class="img mb-80">
                                <img v-bind:src="image" alt="">
                            </div>
                        </div>

</div>



</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['title', 'description', 'image']
    }
</script>
