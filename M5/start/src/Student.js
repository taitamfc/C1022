import React, { useEffect, useState } from 'react';

function Student(props) {
    const [formData,setFormData] = useState({
        name: '',
        email: '',
        password : ''
    });
    const [students,setStudents] = useState([]);

    const handleChange = (event) => {
        console.log(event.target.value);
        console.log(event.target.name);

        /*
            switch (event.target.name) {
                case 'name':
                    formData['name'] = event.target.value;
                    break;
                case 'email':
                    formData['email'] = event.target.value;
                    break;
                case 'password':
                    formData['password'] = event.target.value;
                    break;
                default:
                    break;
            }
        */
        formData[event.target.name] = event.target.value;
        setFormData(
            {
                ...formData,
                [event.target.name]: event.target.value
            }
        )
    }
    const handleSubmit = (event) => {
        event.preventDefault();

        students.push( formData )
        let new_students = [...students]
        setStudents(new_students);


        // Làm rỗng đối tượng formData
        setFormData(
            {
                ...formData,
                name: '',
                email: '',
                password: ''
            }
        )
    }
    const editStudent = (id) => {
    }
    const deleteStudent = (id) => {
    }

    return (
        <div>
            Name: {formData.name} <br/>
            Email: {formData.email} <br/>
            Password: {formData.password} <br/>
            <hr/>
            <form onSubmit={handleSubmit}>
                Name <input type='text' name='name' onChange={handleChange} value={formData.name} /> <br/>
                Email <input type='email' name='email' onChange={handleChange} value={formData.email} /> <br/>
                Password <input type='password' name='password' value={formData.password} onChange={handleChange} /> <br/>
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
                        students.map((student, key) => (
                            <tr key={key}>
                                <td>
                                    {student.name}
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