<template>
  <div>
    <div class="n-hearbar-ctn">
        <div class="container">
          <div class="n-hearbar">
            <div class="left-section">
                <a class="text-danger header-logo" :href="base.url">{{ logo_text }}</a>
                <div class="left-section-menu">
                  <router-link to="/tags">Tags</router-link>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="login-pack">
                  <a class="mr-15px" href="#">Register</a>
                  <a href="#">Login</a>
                </div>
                <div>
                  <div class="lan-ctn">
                    <div @click="toggleLanBox" class="language-flag">
                      <span>{{langSelectText}}</span>
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </div>
                    <div v-show="lan_box_status" class="language-box">
                      <div class="text-center" v-for="lang in langs" :key="lang.id" @click="langSelect(lang.id)">{{lang.name}}</div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</template>

<script>
import { mapState } from 'vuex';

export default {
  data: function () {
    return {
      logo_text: "NVN",
      lan_box_status: false,
    };
  },
  methods: {
    toggleLanBox: function(){
      this.lan_box_status = this.lan_box_status == true ? false : true; 
    },
    langSelect: function(id){
      this.$store.commit('langSelect', id);
      this.lan_box_status = false;
    }
  },
  computed: {
    ...mapState([
      'langs', 'langSelectText', 'base'
    ])
  }
}
</script>

<style scoped>
  .n-hearbar-ctn{
    border-bottom: 2px solid gray;
  }
  .n-hearbar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .left-section{
    display: flex;
    align-items: center;
  }
  .header-logo{
    cursor: pointer;
    text-decoration: none;
    font-size: 1.8rem;
    font-weight: 600;
  }
  .left-section-menu{
    margin-left: 20px;
  }
  .left-section-menu>a{
    text-decoration: none;
    font-size: 0.9rem;
    color: gray;
  }
  .login-pack>a{
    font-size: 0.9rem;
    color: gray;
    text-decoration: none;
  }
  .login-pack>a:hover{
    text-decoration: underline;
  }
  .lan-ctn{
    position: relative;
    display: inline-block;
  }
  .language-flag{
    border-bottom: 1px solid black;
    text-align: center;    
    margin-top: 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
  }
  .language-flag>span{
    margin-left: 10px;
  }
  .language-flag>i{
    margin-left: 10px;
    margin-right: 10px;
  }
  .language-box{
    position: absolute;
    top: 40px;
    min-width: 110px;
    background-color: rgb(248, 248, 248);
    border: 1px solid rgb(210, 210, 210);
  }
  .language-box>div{
    padding-top: 5px;
    padding-bottom: 5px;
    border-bottom: 1px solid rgb(210, 210, 210);
    cursor: pointer;
  }
  .language-box>div:last-child{
    border-bottom: none;
  }
</style>