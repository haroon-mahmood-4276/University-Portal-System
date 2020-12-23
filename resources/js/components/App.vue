
<template >
  <div>
    <div>
      <vueheader></vueheader>
    </div>
    <div>
      <vueindex></vueindex>
    </div>
    <div>
      <vuefooter></vuefooter>
    </div>
  </div>
</template>

<script>
import vueheader from "./VueHeader.vue";
import vueindex from "./Index.vue";
import vuefooter from "./VueFooter.vue";

export default {
  name: "App",
  components: {
    vuefooter,
    vueheader,
    vueindex,
  },
};
</script>
<style lang="css">
body {
  background-color: #fff;
}
</style>
