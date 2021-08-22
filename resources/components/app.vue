<template>
  <div>
    <Header/>
    <div class="container nvn-container">
      <div>
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
import Header from './header.vue';
import {PAGE_INDEX} from '../constants';

export default{
  components: { Header },
  data: function () {
    return {
      currentPageIndex: this.$store.state.page_index,
      page_index: PAGE_INDEX,
      page_title: this.$store.state.page_title,
    };
  },
  mounted () {
    axios
    .get('http://localhost:90/nvn_center/api/bootstrap')
    .then(response => ( 
        this.dataCooking(response.data)
    ));
  },
  methods: {
    dataCooking: function(data){
      if(!data){
        console.log('No bootstrap data!');
        return;
      }
      this.$store.commit('bootstrap', data);
    }
  },
}
</script>

<style scoped>
  .nvn-container{
    margin-top: 30px
  }
</style>