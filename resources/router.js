import Vue from 'vue'
import VueRouter from 'vue-router';
import AnswerPage from './components/answer_page.vue';
import TagsPage from './components/tags_page.vue';
import Tag from './components/tag.vue';

Vue.use(VueRouter);
const routes = [
  { path: '/answer', component: AnswerPage },
  { path: '/tags', component: TagsPage },
  { path: '/tags/:id', component: Tag },
]

export default new VueRouter({
  routes
})