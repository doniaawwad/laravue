<template>






 <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img" v-bind:style="{backgroundImage: 'url(' + image + ')'}">
                            </div>
                        </div>
                        <div class="cont">
                            <h6><a href="#0">{{ title }}</a></h6>
                            <p>{{ description }}</p>
                        </div>
                    </div>
                </div>





</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['title', 'description', 'image'],

    }
</script>
