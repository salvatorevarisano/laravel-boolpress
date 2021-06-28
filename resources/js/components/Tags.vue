<template>
  <div>
    <span v-for="tag in tags" :key="`tag${tag.id}`">
      {{tag.name}}
    </span>
  </div>
</template>

<script>
export default {
    name: 'Tags',
    props: {
      tags: Array,
    }
}
</script>

<style lang="scss" scoped>
  
</style>