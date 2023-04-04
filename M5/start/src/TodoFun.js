import React, { useState } from 'react';

function TodoFun(props) {
    // Khai bao states
    const [editId, setEditId] = useState(-1);
    const [todo, setTodo] = useState('');
    const [todos, setTodos] = useState([]);

    // Khai bao cac PT xu ly tuong tu Todo
    const handleSetTodo = (value) => {
        setTodo(value);
    }
    const addTodo = () => {
        let cr_todos = todos;
        cr_todos.push(todo);

        // them vao todos
        setTodos(cr_todos);

        // Lam rong todo
        setTodo('');
    }
    const editTodo = (id) => {

    }
    const deleteTodo = (id) => {
        todos.splice(id,1);
        setTodos(todos)
        console.log(todos);
    }
    const updateTodo = () => {

    }
    return (
        <div>
            <h1> {todo} </h1>
            {
                editId == -1 ? null : (
                    <h2>Danh chinh sua: #{editId}</h2>
                ) 
            }
            <input type={'text'}
                onChange={(e) => handleSetTodo(e.target.value)}
                value={todo}
            />
            <button onClick={ () => addTodo() }> Add </button>
            <table>
                <thead>
                    <tr>
                        <th> Ten nhiem vu </th>
                        <th> Hanh dong </th>
                    </tr>
                </thead>
                <tbody>
                    {
                        todos.map((todo, key) => (
                            <tr key={key}>
                                <td>
                                    {todo}
                                </td>
                                <td>
                                    <button onClick={() => editTodo(key)}> Edit </button>
                                    |
                                    <button onClick={() => deleteTodo(key)}> Delete </button>
                                </td>
                            </tr>
                        ))
                    }
                </tbody>
            </table>
        </div>
    );
}

export default TodoFun;