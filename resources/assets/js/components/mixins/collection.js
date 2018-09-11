export default {
  methods: {
    getDivisions() {
      console.log('hello world')
      axios.get('/json/divisions').then(response => {
        console.log(response);
        this.$store.commit('update_divisions', response.data);
        var division_id = response.data.length ? response.data[0].id: 0;
        this.$store.commit('update_selected_division', division_id);
        return this.getCity(division_id);
      })
    },
    getCity(division_id) {
      if (!division_id || division_id == 0) {
        this.$store.commit('update_cities', []);
        return this.getHospital(0);
      }
      axios.get('/json/divisions/' + division_id).then(response => {
        this.$store.commit('update_cities', response.data);
        var city_id = response.data.length ? response.data[0].id: 0;
      });
    },
    getHospital(city_id) {
      if (!city_id || city_id == 0) {
        this.$store.commit('update_hospitals', []);
        return true;
      }
      axios.get('/json/cities/' + city_id).then(response => {
        this.$store.commit('update_hospitals', response.data);
      });
    }
  }
}
