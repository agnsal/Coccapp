import Vue from "vue"
import Vuex from "vuex"

Vue.use(Vuex);
import coop from "./modules/coop";

export default new Vuex.store({
    modules: {
        coop
    }
});
