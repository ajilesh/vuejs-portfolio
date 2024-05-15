<template>
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <Title :title="data.title" />
                <p>{{ data.about }}</p>
            </div>
        </div>
    </section>
</template>

<script>
import axios from "axios";
import Title from "./Title.vue";
export default {
    components: {
        Title,
    },
    data() {
        return {
            data: {
                about: "",
                title: "About",
            },
        };
    },
    methods: {
        async fetchAbout() {
            try {
                const res = await axios.get(
                    "http://localhost/vuetest/public/api/about"
                );
                this.data.about = res.data.data[0].about;
            } catch (error) {
                console.log(error);
            }
        },
    },
    mounted() {
        this.fetchAbout();
    },
};
</script>

<style lang="scss" scoped></style>
