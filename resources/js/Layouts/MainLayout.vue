<template>
    <div class="wrapper">




    <Menu></Menu>


        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                <li class="nav-item">
                    {{ x }}
                </li>


            </ul>

        </nav>

        <div class="content-wrapper">

            <slot></slot>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>

    <Footer></Footer>
    </div>



</template>

<script setup>
import Footer from "@/Layouts/Partials/Footer.vue";
import Menu from "@/Layouts/Partials/Menu.vue";
import {ref} from "vue";


const x = ref(0)
setInterval(() =>x.value++, 1000)
</script>
