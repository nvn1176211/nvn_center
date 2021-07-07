<template>
  <div>
    <div class="n-hearbar-ctn">
        <div class="container">
          <div class="n-hearbar">
            <div>
                <h2 class="text-danger">{{ logo_text }}</h2>
            </div>
            <div class="d-flex flex-column">
                <div class="login-pack">
                  <a class="mr-15px" href="#">Register</a>
                  <a href="#">Login</a>
                </div>
                <div class="lan-ctn">
                  <div @click="toggleLanBox" class="language-flag">
                    <b>English</b>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </div>
                  <div v-show="lan_box_status" class="language-box">
                    <div class="text-center">English</div>
                    <div class="text-center">Tiếng Việt</div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      logo_text: "NVN",
      lan_box_status: false
    };
  },
  methods: {
    toggleLanBox: function(){
      this.lan_box_status = this.lan_box_status == true ? false : true; 
    }
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
    width: 110px;
  }
  .language-flag{
    border-bottom: 1px solid black;
    text-align: center;    
    margin-top: 15px;
    position: relative;
    cursor: pointer;
  }
  .language-flag>i{
    position: absolute;
    right: 10px;
    top: 3px;
  }
  .language-box{
    position: absolute;
    top: 40px;
    width: 110px;
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