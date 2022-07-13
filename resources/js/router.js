import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./pages/Home.vue";
import Contact from "./pages/Contact.vue";
import Blog from "./pages/Blog.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name:"home",
            component: Home
        },

        {
            path: "/contact",
            name: "contact",
            component: Contact
        },
        {
            path: "/blog",
            name: "blog",
            component: Blog
        }
    ]
})
export default router;