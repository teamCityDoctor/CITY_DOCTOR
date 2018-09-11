<template>
  <div class="form-group">
    <label for="city">City (choose a division first)</label>
    <select @change='changeCity' v-model='selected' name="city" id="city" class="form-control">
      <option :key="city.id" v-for="city in this.$store.getters.cities" :value="city.id">{{ city.name }}</option>
    </select>
  </div>
</template>
<script>
  import collection from './mixins/collection.js'
  export default {
    data () {
      return {
        selected: '' 
      };
    },
    mounted () {
    },
    mixins: [collection],
    methods: {
      changeCity() {
        console.log(this.selected);
        if (this.selected) {
          this.getHospital(this.selected);
        }
      }
    }
  }
</script>