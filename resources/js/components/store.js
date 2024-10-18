import { createStore } from 'vuex';

const store = createStore({
  state: {
    trajetres: null,
  },
  mutations: {
    setTrajetres(state, trajetres) {
      state.trajetres = trajetres;
    },
  },
});

export default store;