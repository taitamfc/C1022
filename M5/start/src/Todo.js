import React, { Component } from 'react';

class Todo extends Component {
    constructor(props){
        super(props);

        this.state = {
            todo: null,
            todos: []
        }
    }

    setTodo = (value) => {
        
    }
    addTodo = () => {
        alert(123);
    }
    editTodo = (id) => {
        
    }
    deleteTodo = (id) => {
        
    }

    render() {
        return (
            <div>
                <input type={'text'} 
                        onChange={ (e) => this.setTodo(e.target.value)} 
                    /> 
                <button onClick={this.addTodo}> Add </button>    
                <br/>
                <table>
                {
                    this.todos.map( (todo) => (
                    <tr>    
                        <td>
                            {todo}
                        </td>
                    </tr>
                    ) )
                }
                </table>


            </div>
        );
    }
}

export default Todo;