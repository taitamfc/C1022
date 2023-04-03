import React, { Component } from 'react';

class Todo extends Component {
    constructor(props) {
        super(props);

        this.state = {
            todo: null,
            todos: []
        }
    }

    setTodo = (value) => {
        this.setState({ todo: value })
    }
    addTodo = () => {
        let cr_todos = this.state.todos;
        cr_todos.push(this.state.todo);

        this.setState({ todos: cr_todos })

    }
    editTodo = (id) => {

    }
    deleteTodo = (id) => {

    }

    render() {
        return (
            <div>
                <h1> {this.state.todo} </h1>
                <input type={'text'}
                    onChange={(e) => this.setTodo(e.target.value)}
                />
                <button onClick={this.addTodo}> Add </button>
                <br />
                <table>
                    <thead>
                        <tr>
                            <th> Ten nhiem vu </th>
                            <th> Hanh dong </th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            this.state.todos.map( (todo,key) => (
                                <tr key={key}>
                                    <td>
                                        {todo}
                                    </td>
                                    <td> 
                                        <button onClick={ () => this.editTodo(key) }> Edit </button> 
                                        | 
                                        <button onClick={ () => this.deleteTodo(key) }> Delete </button> 
                                    </td>
                                </tr>
                            ))
                        }
                    </tbody>
                </table>
            </div>
        );
    }
}

export default Todo;