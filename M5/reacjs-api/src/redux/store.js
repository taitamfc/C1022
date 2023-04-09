/*
1. Cài đặt các thư viện
    npm install redux: cài đặt redux
    npm install react-redux: các hàm để sử dụng với redux
2. Tạo file store.js
    Khai báo action
    KHai báo reducer
    KHai báo store
3. Cung cấp store ở index.js hoặc App.js ( trước BrowserRouter )
    import { Provider } from "react-redux";
    import store from "./redux/store";
4. Sử dụng ở các component
    import { useDispatch, useSelector } from 'react-redux';
    Lấy state:
        Ví dụ: const isLoggedIn = useSelector(state => state.isLoggedIn);
    Gọi action
        dispatch({ type: TEN_ACTION, payload: DU_LIEU });

*/
import { createStore } from "redux";
import { applyMiddleware } from "redux";
//1. Khai báo action
const SET_USER = "SET_USER";
const SET_CART = "SET_CART";
const SET_IS_LOGGED_IN = "SET_IS_LOGGED_IN";

//2. Khai báo reducer
const initialState = {
    user: {},
    isLoggedIn: 0,
    cart: {
        items: [],
        total: 0
    }
};
const rootReducer = (state = initialState, action) => {
    // Handle các actions gửi lên
    switch (action.type) {
        case SET_USER:
            return { ...state, user: action.payload };
        case SET_CART:
            return { ...state, cart: action.payload };
        case SET_IS_LOGGED_IN:
            return { ...state, isLoggedIn: action.payload };
        default:
            return state;
    }
};

//3. Khai báo store
// Tạo middleware myMiddleware
const myMiddleware = (store) => (next) => (action) => {
    console.log("action", action);
    next(action);
  };
  
  // Sử dụng middleware
const store = createStore(rootReducer, applyMiddleware(myMiddleware));

// theo dõi trạng thái
store.subscribe(() => {
    console.log(store.getState())
});

// Export ra để dùng ở các component
export default store;