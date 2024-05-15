<template>
    <div>
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <Title :title="formData.title" />

                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius
                        consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et
                        nemo qui impedit suscipit alias ea. Quia fugiat sit in
                        iste officiis commodi quidem hic quas.
                    </p>
                </div>

                <div class="row" data-aos="fade-in">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0"
                                style="border: 0; width: 100%; height: 290px"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>

                    <div
                        class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch"
                    >
                        <form
                            @submit.prevent="submitForm"
                            role="form"
                            class="php-email-form"
                        >
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        id="name"
                                        v-model="formData.name"
                                        required
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        v-model="formData.email"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="subject"
                                    id="subject"
                                    v-model="formData.subject"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea
                                    class="form-control"
                                    name="message"
                                    rows="10"
                                    v-model="formData.message"
                                    required
                                ></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
// import { toast } from "vue3-toastify";
// import "vue3-toastify/dist/index.css";
import axiosInstance from "../axios-config";
import { useToast } from "vue-toastification";
import Title from "./Title.vue";

export default {
    components: {
        Title,
    },
    setup() {
        const toast = useToast();
        return { toast };
    },
    data() {
        return {
            formData: {
                name: "",
                email: "",
                subject: "",
                message: "",
                title: "Contact",
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                const res = await axiosInstance.post("/contact", this.formData);
                if (res.data.status == 1) {
                    this.toast(res.data.msg);
                }
            } catch (error) {
                console.log(error);
            }

            // .then(function (response) {
            //     //console.log(response.data.msg);
            //     if (response.data.status == 1) {
            //         alert(response.data.msg);
            //         //toast.info(response.data.msg);
            //     }
            // })
            // .catch((err) => console.log(err));
        },
    },
};
</script>

<style lang="scss" scoped></style>
