<template>
  <div class="form-group">
    <label for="hospital">Hospital (choose a city first)</label>
    <div class="text-muted mb-2">
      Doctor must be under a Hospital. So if there is no hospital you have to add a hospital first under a city
    </div>
    <select name="hospital" id="hospital" class="form-control" required>
      <option :key="hospital.id" v-for="hospital in this.$store.getters.hospitals" :value="hospital.id">{{ hospital.name }}</option>
    </select>
  </div>
</template>
<script>
  export default {
  }
</script>