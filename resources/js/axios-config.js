import axios from "axios";

// Create an Axios instance with a base URL
const axiosInstance = axios.create({
    baseURL: "http://localhost/vuetest/public/api/", // Set your base URL here
    // You can add other Axios configurations as needed
});

export default axiosInstance;
