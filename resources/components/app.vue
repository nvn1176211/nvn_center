<template>
  <div>
    <Header/>
    <div class="container nvn-container">
      <div class="mb-3">
        <h4>{{ page_title }}</h4>
      </div>
      <AnswerPage v-if="currentPageIndex == page_index.ANSWER_PAGE"/>
      <TagsPage v-else-if="currentPageIndex == page_index.TAGS_PAGE"/>
    </div>
  </div>
</template>

<script>
import Header from './header.vue';
import AnswerPage from './answer_page.vue';
import TagsPage from './tags_page.vue';
import {PAGE_INDEX} from '../constants';

export default{
  components: { Header, AnswerPage, TagsPage },
  data: function () {
    return {
      currentPageIndex: this.$store.state.page_index,
      page_index: PAGE_INDEX,
      page_title: this.$store.state.page_title,
    };
  },
  // mounted () {
  //   // console.log(12343);
  //   axios
  //     .get('https://api.coindesk.com/v1/bpi/currentprice.json')
  //     .then(response => ( console.log(response) ));
  // }
}
</script>

<style scoped>
  .nvn-container{
    margin-top: 30px
  }
</style>