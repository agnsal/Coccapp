import axios from 'axios';

const state = {
    coopsCollection: []
}

const mutations = {
    UPDATE_COOPS_COLLECTION (state, payload) {
        state.coopsCollection = payload;
    },
    ADD_COOP (state, payload) {
        state.coopsCollection.push(payload);
    }
}

const actions = {
    retrieveCoopsCollection ({commit}) {  // or (context) => context.commit inside the function
        axios.get('api/coop/collection').then((response) => {
            commit('UPDATE_COOPS_COLLECTION', response.data)
        });
    },
    addCoop({commit}, payload){
        axios.post('api/coop/new', payload).then((response) => {
            commit('ADD_COOP', payload)
        });
    }
}

const getters = {
    // coopsCollection(state){
    //     return state.coopsCollection;
    // },
    coopsCollection: state => state.coopsCollection,
    // cartTotal: state => {
    //     return state.cartItems.reduce((acc, cartItem) => {
    //         return (cartItem.quantity * cartItem.price) + acc;
    //     }, 0).toFixed(2);
    // },
}

const coopsCollectionModule = {
    state,
    mutations,
    actions,
    getters
}

export default coopsCollectionModule;
