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

    return (
        <div>
            <form onSubmit={handleSubmit}>
                Name <input type='text' name='name' onChange={handleChange} /> <br/>
                Email <input type='email' name='email' onChange={handleChange} /> <br/>
                Password <input type='password' name='password' onChange={handleChange} /> <br/>
                <button > Register </button>
            </form>
        </div>
    );
}

export default Student;