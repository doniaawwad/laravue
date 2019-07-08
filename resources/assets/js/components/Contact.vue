<template>

     <div class="col-lg-4 col-md-6">
                            <div class="item mb-sm30">
                                <span class="icon"><i v-bind:class="getClass()"></i></span>
                                <div class="cont">
                                    <h6>{{ title }} </h6>
                                    <p>{{ content }}</p>
                                </div>
                            </div>
                        </div>





</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['title', 'content', 'icon'],
        methods: {
            getClass(){
                return 'fas fa-'+this.icon;
            }
        }

    }
</script>
