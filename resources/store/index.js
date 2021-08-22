import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        base:{
            url: 'http://localhost:90/nvn_center'
        },
        langSelectID: 1,
        langSelectText: 'English',
        langs: [
            {id: 1, name:'English'}
        ],
    },
    mutations: {
        bootstrap(state, bootstrapData){
            if(bootstrapData.langs){
                state.langs = bootstrapData.langs;
                state.test = 2;
                state.test2 = 2;
            }else{
                console.log('empty lang data!');
            }
        },
        langSelect(state, id){
            state.langSelectID = id;
            for(let i = 0; i <= state.langs.length; i++){
                if(state.langSelectID == state.langs[i].id){
                    state.langSelectText = state.langs[i].name;
                    break;
                }
            }
        }
    }
})