# Store management using vue js

### adding yarn

~~~
yarn add vuex;
~~~

### importing vuex and use 

~~~js
import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);
export const store = new Vuex.Store({})
~~~

### passing object in Vuex.Store constructor 
* state - key value pair
* getters
* mutations
* actions

### Getters
~~~js
getters: {
  labels(state) {
    return state.labels;
  }
}
~~~

### Mutations
~~~js
mutations: {
  updateSelectedLabel (state, selectedLabel ) {
    return state.selectedLabel = selectedLabel;
  }
}
~~~



------------------------------------

### Login Using ID









