<script>
import axios from './util/axios.js';
import AppHeader from './components/AppHeader.vue';
import AppFilter from './components/AppFilter.vue';
import CarBoard from './components/CarBoard.vue';

export default {
  components: { AppHeader, AppFilter, CarBoard },
  data() {
    return {
      cars: false,
      filter: {
        price: false,
        mileage: false,
        year: false,
      }
    }
  },
  mounted() {
    this.loadCars();
  },
  methods: {
    handleFilterChange(filterName) {
      this.filter[filterName] = !this.filter[filterName];
      this.loadCars();
    },
    loadCars() {
      axios.get('/car', {
        params: this.filter
      }).then(res => {
        this.cars = res.data;
      });
    }
  }
}
</script>

<template>
  <div>
    <AppHeader />
    <AppFilter :filter="filter" @change="handleFilterChange" />
    <CarBoard :cars="cars" />
  </div>
 
</template>

<style scoped>

</style>
