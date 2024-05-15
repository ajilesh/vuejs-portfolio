// router.js
import { createRouter, createWebHashHistory } from "vue-router";
import Home from "./components/Home.vue";
import About from "./components/About.vue";
//import Contact from "./components/Contact.vue";

const routes = [
    { path: "/", component: Home },
    { path: "/about", component: About },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;
