import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./pages/Home.vue";
import Contact from "./pages/Contact.vue";
import Blog from "./pages/Blog.vue";
import OnePost from "./pages/OnePost.vue";
import NotFound from "./pages/NotFound.vue";


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
        },

        {
            path: "/blog/:slug",
            name: "single-post",
            component: OnePost
        },

        {
            path:"/*",
            name: "notfound",
            component: NotFound
        }
    ]
})
export default router;