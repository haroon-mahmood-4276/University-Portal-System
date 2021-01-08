<template>
  <b-alert
    :show="dismissCountDown"
    dismissible
    fade
    :variant="AlertType"
    @dismissed="dismissCountDown = 0"
    @dismiss-count-down="countDownChanged"
  >
    <p>{{ AlertData }}</p>
    <b-progress
      :variant="AlertType"
      :max="dismissSecs"
      :value="dismissCountDown"
      height="4px"
    ></b-progress>
  </b-alert>
</template>
<script>
export default {
  name: "VueAlert",
  props: ["AlertType", "AlertData", "AlertTime"],
  data() {
    return {
      dismissSecs: this.AlertTime > 5 ? this.AlertTime : 5,
      dismissCountDown: 0,
      showDismissibleAlert: false,
    };
  },
  mounted() {
    if (this.AlertData) {
      this.showAlert();
    }
  },
  methods: {
    countDownChanged(dismissCountDown) {
      this.dismissCountDown = dismissCountDown;
    },
    showAlert() {
      this.dismissCountDown = this.dismissSecs;
    },
  },
};
</script>
<style lang="css"></style>
