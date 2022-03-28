import { createStore } from 'vuex';
import coopsCollectionModule from "./modules/coopsCollection";

export default createStore({
    modules: {
        coopsCollectionModule
    }
});
