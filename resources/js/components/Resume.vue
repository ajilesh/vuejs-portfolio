<template>
    <section id="resume" class="resume">
        <div class="container">
            <div class="section-title">
                <Title :title="formData.title" />

                <p v-if="formData.content">
                    {{ formData.content }}
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4 v-if="formData.sumary.name">
                            {{ formData.sumary.name }}
                        </h4>
                        <p
                            v-if="formData.sumary.sumary"
                            v-html="formData.sumary.sumary"
                        ></p>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    <div
                        class="resume-item"
                        v-for="(item, index) in formData.education"
                    >
                        <h4>{{ item.title }}</h4>
                        <h5>{{ item.year }}</h5>
                        <p></p>
                        <p>
                            {{ item.content }}
                        </p>
                    </div>
                    <!-- <div class="resume-item">
                        <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                        <h5>2010 - 2014</h5>
                        <p>
                            <em
                                >Rochester Institute of Technology, Rochester,
                                NY</em
                            >
                        </p>
                        <p>
                            Quia nobis sequi est occaecati aut. Repudiandae et
                            iusto quae reiciendis et quis Eius vel ratione eius
                            unde vitae rerum voluptates asperiores voluptatem
                            Earum molestiae consequatur neque etlon sader mart
                            dila
                        </p>
                    </div> -->
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div
                        class="resume-item"
                        v-for="(item, index) in formData.experience"
                    >
                        <h4>{{ item.title }}</h4>
                        <h5>{{ item.year }}</h5>
                        <p v-html="item.content"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { ref, onMounted } from "vue";
import axios from "../axios-config";
import Title from "./Title.vue";
export default {
    components: {
        Title,
    },
    setup() {
        const formData = ref({
            content: "",
            title: "",
            education: [""],
            experience: [""],
            sumary: ref({
                name: "",
                sumary: "",
            }),
        });

        const fetchData = async () => {
            const resume = await axios.get("/resume");
            formData.value = resume.data.data[0];
            //console.log(formData.value.title);
        };
        onMounted(() => {
            fetchData();
        });
        return {
            formData,
        };
    },
};
</script>

<style lang="scss" scoped></style>
