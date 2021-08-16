<template>
    <div>
        <p>{{ $t("tagpage.intro") }}</p>
        <div>
            <div v-for="tag in tags" :key="tag.id">
                <a href="#">{{ tag.name }}</a>
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