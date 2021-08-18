<template>
    <div>
        <p>{{ $t("tagpage.intro") }}</p>
        <div class="tags-ctn">
            <div v-for="tag in tags" :key="tag.id" class="tag-card">
                <a href="#" class="tag-link">{{ tag.name }}</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            tags: [],
        };
    },
    mounted () {
        axios
        .get('http://localhost/nvn_center/api/tags')
        .then(response => ( 
            this.tags = response.data
        ));
    }
};
</script>

<style scoped>
.tags-ctn {
    display: flex;
    margin-top: 30px;
}
.tag-card {
    border: 1px solid black;
    padding: 15px;
    margin-right: 15px;
    min-width: 200px;
}
a.tag-link {
    text-decoration: none;
}
</style>