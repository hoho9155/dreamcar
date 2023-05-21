<script>
export default {
  props: ['filter'],
  emits: ['change']
}
</script>

<template>
  <div class="filter-container px-5 py-3">
    <h5>Filtering Cars</h5>
    <div class="d-flex flex-row">
      <div class="form-check pe-4">
        <input class="form-check-input" type="checkbox" :value="filter.price" @change="$emit('change', 'price')">
        <label class="form-check-label">Price</label>
      </div>
      <div class="form-check pe-4">
        <input class="form-check-input" type="checkbox" :value="filter.mileage" @change="$emit('change', 'mileage')">
        <label class="form-check-label">Mileage</label>
      </div>
      <div class="form-check pe-4">
        <input class="form-check-input" type="checkbox"  :value="filter.year" @change="$emit('change', 'year')">
        <label class="form-check-label">Year</label>
      </div>
    </div>
    
  </div>
</template>

<style scoped>
.filter-container {
  background-color: #c7c7c7;;
}
h5 {
    font-weight: bold;
    color: grey;
}
</style>