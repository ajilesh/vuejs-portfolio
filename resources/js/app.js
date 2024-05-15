import "./bootstrap";

import { createApp } from "vue";
import app from "./Layouts/app.vue";
import router from "./router.js";
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
const option = {
    position: "top-right",
    timeout: 5000,
    closeOnClick: true,
    pauseOnFocusLoss: true,
    pauseOnHover: true,
    draggable: true,
    draggablePercent: 0.6,
    showCloseButtonOnHover: false,
};

createApp(app).use(Toast).use(router).mount("#app");
