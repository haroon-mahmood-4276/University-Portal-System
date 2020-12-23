<template>
  <div>
    <div>
      <vueheader></vueheader>
    </div>
    <div>
      <router-view></router-view>
    </div>
    <div>
      <vuefooter></vuefooter>
    </div>
  </div>
</template>

<script>
import vueheader from "./VueHeader.vue";
// import vueindex from "./Index.vue";
import vuefooter from "./VueFooter.vue";

export default {
  name: "App",
  components: {
    vueheader,
    // vueindex,
    vuefooter,
  },
};
</script>
<style lang="css">
body {
  background-color: #fff;
}
</style>
