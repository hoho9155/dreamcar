<script>
import CarCard from './CarCard.vue'
export default {
  components: { CarCard },
  props: ['cars']
}
</script>

<template>
    <div class="">
      <div class="row">
        <CarCard v-for="(car, index) in cars" :car="car" :key="index" />
      </div>
    </div>
</template>

<style scoped>

</style>