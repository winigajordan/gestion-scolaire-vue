import './bootstrap';
import '../css/app.css';
import 'admin-lte/plugins/fontawesome-free/css/all.css';
import 'admin-lte/dist/css/adminlte.css';
import 'admin-lte/plugins/jquery/jquery.js';
import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle.js';
import 'admin-lte/dist/js/adminlte.js';



import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from "./Layouts/MainLayout.vue";
import { ZiggyVue } from 'ziggy-js'
//import {MainLayout} from "./Layouts/MainLayout.vue";

createInertiaApp({
    resolve: name => {

        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

        const page = pages[`./Pages/${name}.vue`]

        page.default.layout =  page.default.layout || MainLayout


        return page

    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el)
    },
})
