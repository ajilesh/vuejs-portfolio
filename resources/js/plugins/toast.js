// plugins/toast.js

import { createApp } from "vue";
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

const app = createApp({});
app.use(Toast, {
    position: "bottom-right", // Position of the toast notifications
    timeout: 3000, // Duration to display each toast
    // You can add more options here as needed
});

export default app;
