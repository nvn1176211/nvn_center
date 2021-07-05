<template>
  <div>
    <div class="n-hearbar-ctn">
        <div class="container">
          <div class="n-hearbar">
            <div>
                <h2 class="text-danger">{{ logo_text }}</h2>
            </div>
            <div class="d-flex flex-column">
                <div>
                  <a class="link-text mr-15px" href="#">Register</a>
                  <a class="link-text" href="#">Login</a>
                </div>
                <div>
                  <div class="language-flag">
                    <b>English</b>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
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
    };
  },
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
  option{
    background-image: url("../images/en.png")
  }
  .language-flag{
    border-bottom: 1px solid black;
    text-align: center;    
    margin-top: 15px;
  }
</style>