// import axios from 'axios';

import './css/index.css';
import 'font-awesome/css/font-awesome.css';

import Vue from 'vue';
import App from './components/app.vue';
import store from './store/index';
import VueI18n from 'vue-i18n';

// Vue.config.productionTip = false;
// Vue.config.devtools = false
window.axios = require('axios').default;

Vue.use(VueI18n);
const messages = {
    en: {
        tagpage: {
            intro: 'A tag is a keyword or label that categorizes your question with other, similar questions. Using the right tags makes it easier for others to find and answer your question.'
      }
    },
    vi: {
        tagpage: {
            intro: 'Thẻ là một từ khóa hoặc nhãn phân loại câu hỏi của bạn với các câu hỏi tương tự khác. Sử dụng đúng thẻ giúp người khác tìm và trả lời câu hỏi của bạn dễ dàng hơn.'
      }
    }
}
const i18n = new VueI18n({
  locale: 'en', 
  messages,
})

var vm = new Vue({
    el: '#app',
    store,
    i18n,
    render: h => h(App)
})