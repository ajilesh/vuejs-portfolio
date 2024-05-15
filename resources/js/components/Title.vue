<template>
    <h2 v-if="title">{{ title }}</h2>
</template>

<script>
export default {
    props: ["title"],
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
