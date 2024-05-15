<template>
    <header-component :texts="text" />
    <div>Ajilesh</div>
</template>

<script>
import AboutCom from "./About.vue";
import HeaderComponent from "../common/HeadBar.vue";
import Setting from "../datas/api.json";
export default {
    components: {
        asd: AboutCom,
        HeaderComponent,
    },
    data() {
        return {
            text: "Title",
            parentData: "Dynamic data from parent",
        };
    },
    created() {
        console.log(Setting.api.url);
    },
};
</script>

<style lang="scss" scoped></style>
