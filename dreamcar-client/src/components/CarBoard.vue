<script>
import CarTable from './CarTable.vue'
export default {
  components: { CarTable },
  props: ['cars'],
}
</script>

<template>
    <div class="px-5 py-5">
        <div class="row">
          <div class="col-md-6">
            {{ cars.length }} used cars are filtered.
          </div>
        </div>
        <CarTable :cars="cars" />
    </div>
</template>

<style scoped>

</style>