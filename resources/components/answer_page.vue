<template>
  <div>
    <div class="n-question-ctn">
      <div class="n-question">
        <h4 class="n-question-text">{{ question }}</h4>
        <div>
          <span class="text-secondary">Asked </span
          ><span>{{ aksed_time }}</span>
        </div>
      </div>
      <div class="n-question-detail">
        <div>{{ question_detail }}</div>
      </div>
      <div class="n-question-info">
        <div class="n-question-tag">
          <a href="#" class="tag">core</a>
          <a href="#" class="tag">term</a>
          <a href="#" class="tag">web</a>
        </div>
        <UerCardSm/>
      </div>
    </div>
    <div class="n-answers-ctn">
      <div class="n-answers-overview">
        <div class="fs-150-percent">2 Answers</div>
        <div>
          <select>
            <option value="">Votes</option>
            <option value="">Newest</option>
            <option value="">Oldest</option>
          </select>
        </div>
      </div>
      <div class="n-answers-content">
        <div class="n-answer">
          <div class="n-answer-detail">{{ content }}</div>
          <div class="n-answer-info">
            <UerCardSm/>
          </div>
        </div>
        <div class="n-answer">
          <div class="n-answer-detail">Me too!</div>
          <div class="n-answer-info">
            <UerCardSm/>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import UerCardSm from './user_card_sm.vue';
export default {
  components: { UerCardSm },
  data: function () {
    return {
      question: "What's tooltip?",
      aksed_time: "1 year, 2 months ago",
      question_detail:
        'I\'m stuck in understanding what "tooltip" is, and when to use it. If someone knows the answer, please explain it to me.',
      content:
        'The term "tooltip" refers to a short piece of text used to explain an item, usually displayed when hovering over the item itself.',
    };
  },
};
</script>

<style scoped>
.n-question-ctn {
  margin-top: 30px;
  margin-bottom: 80px;
}
.n-question-text {
  margin-bottom: 10px;
}
.n-question-detail {
  margin-top: 15px;
  margin-bottom: 20px;
  padding-top: 15px;
  padding-left: 20px;
  padding-right: 20px;
  border-top: 1px solid rgb(190, 190, 190);
}
.n-question-info {
  display: flex;
  justify-content: space-between;
  padding-left: 20px;
  padding-right: 20px;
}
.n-answers-ctn {
  margin-top: 15px;
  padding-top: 15px;
  border-top: 1px solid rgb(190, 190, 190);
}
.n-answers-overview {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
}
.n-answer {
  margin-bottom: 40px;
  padding-top: 15px;
  padding-left: 20px;
  padding-right: 20px;
  border-top: 1px solid rgb(190, 190, 190);
}
.n-answer-detail{
  margin-bottom: 20px;
}
.n-answer-info{
  display: flex;
  justify-content: flex-end;
}
</style>