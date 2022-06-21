import './bootstrap';

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { ZiggyVue } from 'ziggy';
import { Ziggy } from './ziggy';
import Toast from "vue-toastification";
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";

InertiaProgress.init();
const options = {
    // You can set your default options here
};

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        const VueApp =  createApp({ render: () => h(App, props) });
        VueApp.config.globalProperties.$route = route;
        VueApp.use(ZiggyVue, Ziggy)
            .use(plugin)
            .use(Toast, options)
            .mount(el);
    },
});
