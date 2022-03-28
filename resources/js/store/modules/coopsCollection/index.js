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
    getCoopsCollection ({ commit }) {
        axios.get('api/coop/collection').then((response) => {
            commit('UPDATE_COOPS_COLLECTION', response.data)
        });
    },
    // addCartItem ({ commit }, cartItem) {
    //     axios.post('/api/cart', cartItem).then((response) => {
    //         commit('UPDATE_CART_ITEMS', response.data)
    //     });
    // },
    // removeCartItem ({ commit }, cartItem) {
    //     axios.post('/api/cart/delete', cartItem).then((response) => {
    //         commit('UPDATE_CART_ITEMS', response.data)
    //     });
    // },
    // removeAllCartItems ({ commit }) {
    //     axios.post('/api/cart/delete/all').then((response) => {
    //         commit('UPDATE_CART_ITEMS', response.data)
    //     });
    // }
}

const getters = {
    coopsCollection: state => state.coopsCollection,
    // cartTotal: state => {
    //     return state.cartItems.reduce((acc, cartItem) => {
    //         return (cartItem.quantity * cartItem.price) + acc;
    //     }, 0).toFixed(2);
    // },
    // cartQuantity: state => {
    //     return state.cartItems.reduce((acc, cartItem) => {
    //         return cartItem.quantity + acc;
    //     }, 0);
    // }
}

const coopsCollectionModule = {
    state,
    mutations,
    actions,
    getters
}

export default coopsCollectionModule;
