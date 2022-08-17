const auth = {
    namespaced: true,
    state: () => ({
        token: null
    }),
    mutations: {
        _setToken(state, token){
            state.token = token
        }
    },
    actions: {
        setToken(context, token){
            context.commit('_setToken', token)
        }
    },
    getters: {
        getToken(state){
            return state.token
        }
    }
}

export default auth
