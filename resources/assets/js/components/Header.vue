<template>

    <!-- =====================================
    	==== Start Navbar -->

    <nav class="navbar nav-dark navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="site/img/logo-dark.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/landing">Landing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Contact</a>
                    </li>

                    <li class="nav-item" v-if="loggedin==false">
                        <a class="nav-link" href="register">Register</a>
                    </li>
                    <li class="nav-item" v-if="loggedin==false">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item" v-if="loggedin">
                        <a class="nav-link" href="signout">Log out</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
    	======================================= -->





</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['loggedin']
    }
</script>
