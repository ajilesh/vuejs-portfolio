<template>
    <section id="skills" class="skills section-bg">
        <div class="container">
            <div class="section-title">
                <Title :title="formData.title" />
                <p v-if="formData.content">
                    {{ formData.content }}
                </p>
            </div>

            <div class="row skills-content">
                <div
                    class="col-lg-6"
                    data-aos="fade-up"
                    v-for="(item, index) in formData.skills1"
                    :key="index"
                >
                    <div class="progress">
                        <span class="skill"
                            >{{ item.skill }}
                            <i class="val">{{ item.percentage }}%</i></span
                        >

                        <div class="progress-bar-wrap">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                aria-valuenow="100"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                :style="{ width: item.percentage + '%' }"
                            ></div>
                        </div>
                    </div>
                </div>

                <div
                    class="col-lg-6"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    v-for="(item, index) in formData.skills2"
                    :key="index"
                >
                    <div class="progress">
                        <span class="skill"
                            >{{ item.skill }}
                            <i class="val">{{ item.percentage }}%</i></span
                        >
                        <div class="progress-bar-wrap">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                aria-valuenow="80"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                :style="{ width: item.percentage + '%' }"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from "../axios-config.js";
import Title from "./Title.vue";
import { ref, onMounted } from "vue";
export default {
    components: {
        Title,
    },
    setup() {
        const formData = ref({
            title: "",
            content: "",
            skills: [""],
            skills1: [""],
            skills2: [""],
        });
        const fetchSkills = async () => {
            try {
                const res = await axios.get("/skills");
                formData.value = res.data.data[0];
                //console.log(formData.value.skills.length);
                const middleIndex = Math.ceil(formData.value.skills.length / 2);
                formData.value.skills1 = formData.value.skills.slice(
                    0,
                    middleIndex
                );
                formData.value.skills2 =
                    formData.value.skills.slice(middleIndex);
                //console.log(formData.value.skills1);
                //console.log(res.data.data[0]);
            } catch (error) {
                console.log(error);
            }
        };

        onMounted(() => {
            fetchSkills();
        });
        return {
            formData,
        };
    },
};
</script>

<style lang="scss" scoped></style>
