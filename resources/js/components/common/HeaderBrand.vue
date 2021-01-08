<template>
  <div>
    <a class="navbar-brand" :href="Href">
      <img
        :src="Src"
        width="70"
        height="57"
        class="d-inline-block align-top"
        alt="UNi Logo"
      />
    </a>
  </div>
</template>

<script>
export default {
  name: "HeaderBrand",
  props: ["Src", "Href"],
};
</script>

// images/Logo-2.png
