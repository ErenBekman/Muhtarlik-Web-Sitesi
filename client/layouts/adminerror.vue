<template>
  <v-main>
  <Banner />
  </v-main>
</template>

<script>
export default {
  layout: "admin",
  props: {
    error: {
      type: Object,
      default: null
    }
  },
  components: {
    Banner: () => import("@/components/shared/lp-banner/AdminBanner404")
  },
  data() {
    return {
      pageNotFound: "404 Not Found",
      otherError: "An error occurred"
    };
  },
  head() {
    
  }
};
</script>

<style scoped>
h1 {
  font-size: 20px;
}
</style>
