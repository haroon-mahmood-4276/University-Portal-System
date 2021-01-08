<template>
  <div>
    <adminloginform
      v-on:GetFormData="GetFormData($event)"
      AlertData="0"
      AlertTime="17"
      AlertType="danger"
    ></adminloginform>
  </div>
</template>

<script>
import adminloginform from "./common/VueLoginForm.vue";
export default {
  name: "AdminLogin",
  components: { adminloginform },
  methods: {
    GetFormData(FormData) {
      console.log(FormData);
    },
  },
};
</script>
<style lang="css"></style>
