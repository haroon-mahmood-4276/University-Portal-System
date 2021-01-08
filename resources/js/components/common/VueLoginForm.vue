<template>
  <div>
    <div
      class="container col-lg-5 my-5 py-3"
      style="background-color: #224172; color: white; border-radius: 10px"
    >
      <Alert :AlertType="AlertType" :AlertData="AlertData" :AlertTime="AlertTime" />

      <form action="/admin/login" method="POST">
        <!-- @csrf -->
        <div class="form-group">
          <label for="InputEmail">User ID</label>
          <div class="input-group mb-3">
            <input
              type="text"
              v-model="FormData.txtUserID"
              id="txtUserID"
              name="txtUserID"
              class="form-control"
              placeholder="User ID"
              maxlength="11"
              minlength="11"
              aria-label="User ID"
              aria-describedby="basic-addon2"
              required
            />
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon">@uni.edu.pk</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="InputPassword">Password</label>
          <!-- <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
          <input
            type="password"
            v-model="FormData.txtPassword"
            class="form-control"
            id="txtPassword"
            name="txtPassword"
            placeholder="Password"
            minlength="6"
            required
          />
        </div>
        <div class="form-actions">
          <button type="button" @click="Submit" class="btn btn-UNi" id="btnLogin">
            <i class="fas fa-sign-in-alt" style="color: white"></i>
          </button>
        </div>
      </form>
    </div>
    <AnimatedBrand></AnimatedBrand>
  </div>
</template>
<script>
import Alert from "./Alert.vue";
import AnimatedBrand from "./AnimatedBrand.vue";

export default {
  name: "VueLoginForm",
  components: { AnimatedBrand, Alert },
  props: ["AlertType", "AlertData", "AlertTime"],
  data() {
    return {
      FormData: {
        txtUserID: null,
        txtPassword: null,
      },
      dismissSecs: this.AlertTime > 5 ? this.AlertTime : 5,
      dismissCountDown: 0,
      showDismissibleAlert: false,
    };
  },
  methods: {
    countDownChanged(dismissCountDown) {
      this.dismissCountDown = dismissCountDown;
    },
    showAlert() {
      this.dismissCountDown = this.dismissSecs;
    },
    Submit() {
      this.$emit("GetFormData", this.FormData);
    },
  },
};
</script>
<style lang="css"></style>
