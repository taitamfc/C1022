import React, { useEffect, useState } from 'react';
import { Formik, Form, Field } from "formik";
import * as Yup from "yup";

const rules = Yup.object().shape({
    name: Yup.string().required('Truong yeu cau').min(3,'Toi thieu 3 ky tu').max(255,'Toi da 255'),
    email: Yup.string().required('Truong yeu cau').email('Vui long nhap email'),
    password: Yup.string().required('Truong yeu cau').min(3,'Toi thieu 3 ky tu').max(255,'Toi da 255'),
});

function Student(props) {
    const [formData,setFormData] = useState({
        name: '',
        email: '',
        password : ''
    });
    const [students,setStudents] = useState([]);
    const [formErrors,setFormErrors] = useState([]);

    const handleChange = (event) => {
        setFormData(
            {
                ...formData,
                [event.target.name]: event.target.value
            }
        )
        
    }
    const handleSubmit = (event) => {
        event.preventDefault();

        let error = false;
        if( formData.name == '' ){
            error = true;
        }
        if( formData.email == '' ){
            error = true;
        }
        if( formData.password == '' ){
            error = true;
        }

        if( error ){
            alert('Vui long nhap du lieu');
        }else{
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

            <Formik
            initialValues={formData}
            validationSchema={rules}
            onSubmit={ (values) => handleSubmit(values) }
            >
            {({ errors, touched }) => (

                <Form>
                    Name 
                    <Field name="name" /> <br/>
                    {errors.name && touched.name ? (
                        <div>{errors.name}</div>
                    ) : null}
                    {/* <input type='text' name='name' onChange={handleChange} value={formData.name} /> <br/> */}
                    Email 
                    <Field name="email" /> <br/>
                    {errors.email && touched.email ? (
                        <div>{errors.email}</div>
                    ) : null}
                    {/* <input type='email' name='email' onChange={handleChange} value={formData.email} /> <br/> */}
                    Password 
                    <Field name="password" /> <br/>
                    {errors.password && touched.password ? (
                        <div>{errors.password}</div>
                    ) : null}
                    {/* <input type='password' name='password' value={formData.password} onChange={handleChange} /> <br/> */}
                    <button > Register </button>
                </Form>

            )}
            </Formik>

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