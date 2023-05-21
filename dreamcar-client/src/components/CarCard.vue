<script>
export default {
  props: ['car'],
  methods: {
    toCurrency(value) {
      value = Number(value);
      return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'EUR',
      }).format(value);
    }
  }
}
</script>

<template>
  <div class="col-md-3 col-sm-6 py-4">
    <div class="card">
      <img :src="car.image" class="card-img-top" />
      <div class="card-body">
        <h4 class="card-title">{{ toCurrency(car.price) }}</h4>
        <h5>{{ car.make }}</h5>
        <div class="d-flex flex-column">
          <span>{{ car.year }} years old</span>
          <span>Mileage: {{ car.mileage / 1000 }}K miles</span>
          <span>Fuel: {{ car.fuel }} g/km</span>
          <p class="ps-3">{{ car.condition }}</p>
          <span><b>{{ car.model }}</b></span>
        </div>
      </div>
    </div>
      
  </div>
</template>

<style scoped>

</style>