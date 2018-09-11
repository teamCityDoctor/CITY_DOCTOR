# Store management using vue js

### adding yarn

~~~
yarn add vuex;
~~~
# Inside store file
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


# In main js file

~~~js
require('./bootstrap'); // setting up axios by taylor 

window.Vue = require('vue');
import {store} from './store.js'
window.Events = new Vue();
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    store
});


~~~





