<template>
  <div>
      <Header />

      <main>
          <h1>Welcome to public home</h1>
      </main>
  </div>
</template>

<script>
import Header from "./components/Header.vue";

export default {
    name: 'App',

    components: {
        Header,
    }
}
</script>

<style lang="scss" scoped>
    body {
        color: red;
    }
</style>