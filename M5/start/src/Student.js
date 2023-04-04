import React, { useEffect, useState } from 'react';

function Student(props) {
    const [formData,setFormData] = useState({
        name: '',
        email: '',
        password : ''
    });
    const [students,setStudents] = useState([]);

    const handleChange = (event) => {
        console.log(event.target);
    }
    const handleSubmit = () => {

    }

    const editStudent = (id) => {
    }
    const deleteStudent = (id) => {
    }

    return (
        <div>
            <form onSubmit={handleSubmit}>
                Name <input type='text' name='name' onChange={handleChange} /> <br/>
                Email <input type='email' name='email' onChange={handleChange} /> <br/>
                Password <input type='password' name='password' onChange={handleChange} /> <br/>
                <button > Register </button>
            </form>

            <table>
                <thead>
                    <tr>
                        <th> Ten nhiem vu </th>
                        <th> Hanh dong </th>
                    </tr>
                </thead>
                <tbody>
                    {
                        students.map((todo, key) => (
                            <tr key={key}>
                                <td>
                                    {todo}
                                </td>
                                <td>
                                    <button onClick={() => editStudent(key)}> Edit </button>
                                    |
                                    <button onClick={() => deleteStudent(key)}> Delete </button>
                                </td>
                            </tr>
                        ))
                    }
                </tbody>
            </table>
        </div>
    );
}

export default Student;