<template>
  <header>
      <router-link :to="{name: 'home'}">
        <h1>boolpress</h1>
      </router-link>
      
      <nav>
        <ul>
          <li>
            <router-link :to="{name: 'blog'}">Blog</router-link>
          </li>
          <li>
            <router-link :to="{name: 'contact'}">Contact us</router-link>
          </li>
        </ul>
      </nav>
  </header>
</template>

<script>
export default {
    name: 'Header',
}
</script>

<style lang="scss" scoped>
    .my-active {
      color: red;
    }
</style>