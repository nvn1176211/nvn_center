import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        lan: 1,
        page_title: 'Tags',
        page_index: 7,
    }
})