import React from 'react';
import ReactDOM from 'react-dom/client';
import reportWebVitals from './reportWebVitals';

import StateFun from './StateFun';
import StateClass from './StateClass';
import Count from './Count';
import Calculator from './Calculator';
import Todo from './Todo';
import TodoFun from './TodoFun';
import Student from './Student';
import TheTest from './TheTest';
import App from './App';

// Render App
const root = ReactDOM.createRoot(document.getElementById('root'));
root.render( 
  <>
    {/* <Calculator/> */}
    {/* <Count/>
    <StateFun/>
    <StateClass/> */}
    {/* <Todo/> */}
    {/* <TodoFun/> */}
    {/* <Student/> */}
    <App/>
  </>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
