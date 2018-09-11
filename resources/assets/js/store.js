import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);
export const store = new Vuex.Store({
  state: {
    divisions: [],
    cities: [],
    hospitals: [],
    selected_division: '',
    selected_city: '',
    selected_hospital: ''

  },
  getters: {
    divisions(state) {
      return state.divisions;
    },
    cities(state) {
      return state.cities;
    },
    hospitals(state) {
      return state.hospitals;
    },
    selected_city (state, city) {
      return state.city = city;
    },
    selected_hospital (state, hospital) {
      return state.hospital = hospital;
    },
    selected_division (state, division) {
      return state.division = division;
    },
  },
  mutations: {
    update_divisions(state, divisions) {
      return state.divisions = divisions;
    },
    update_cities(state, cities) {
      return state.cities = cities;
    },
    update_hospitals (state, hospitals) {
      return state.hospitals = hospitals;
    },
    update_selected_city (state, city) {
      return state.city = city;
    },
    update_selected_hospital (state, hospital) {
      return state.hospital = hospital;
    },
    update_selected_division (state, division) {
      return state.division = division;
    }
  }
});
