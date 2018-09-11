<template>
  <div class="form-group">
    <label for="division">Division</label>
    <select @change='changeDivision' v-model='selected' name="division" id="division" class="form-control">
      <option v-for="division in this.$store.getters.divisions" :value="division.id">{{ division.name }}</option>
    </select>
  </div>
</template>
<script>
  import collection from './mixins/collection.js'
  export default {
    data () {
      return {
        selected: 1 
      };
    },
    mounted () {
      this.getDivisions();
    },
    mixins: [collection],
    methods: {
      changeDivision() {
        this.getCity(this.selected);
      }
    }
  }
</script>