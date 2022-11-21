//import hook react
import React, { useState } from 'react';
import './Register.css';
//import hook useHitory from react router dom
import { useNavigate } from "react-router-dom";

//import axios
import axios from 'axios';

function Register() {

    //define state
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [passwordConfirmation, setPasswordConfirmation] = useState("");

    //define state validation
    const [validation, setValidation] = useState([]);

    //define history
    const anyName= useNavigate();

    //function "registerHanlder"
    const registerHandler = async (e) => {
        e.preventDefault();
        
        //initialize formData
        const formData = new FormData();

        //append data to formData
        formData.append('name', name);
        formData.append('email', email);
        formData.append('password', password);
        formData.append('password_confirmation', passwordConfirmation);

        //send data to server
        await axios.post('http://localhost:8000/api/register', formData)
        .then(() => {

            //redirect to logi page
            anyName("/");
        })
        .catch((error) => {

            //assign error to state "validation"
            setValidation(error.response.data);
        })
    };

    return (
        <div className="body">
        <div className="container" style={{ marginTop: "120px" }}>
            <div className="row justify-content-center">
                <div className="col-md-4">
                    <div className="card border-0 rounded shadow-sm">
                        <div className="card-body">
                            <h4 className="text-muted">REGISTER</h4>
                            <hr/>
                            <form onSubmit={registerHandler}>
                                <div className="col">
                                    <div className="col-md-14">
                                        <div className="mb-0">
                                            <label className="form-label">NAMA LENGKAP</label>
                                            <input type="text" className="form-control" value={name} onChange={(e) => setName(e.target.value)} placeholder="Masukkan Nama Lengkap"/>
                                        </div>
                                        {
                                        validation.name && (
                                            <div className="alert alert-danger">
                                                {validation.name[0]}
                                            </div>
                                        )
                                        }
                                    </div>
                                    <div className="col-md-14">
                                        <div className="mb-0">
                                            <label className="form-label">ALAMAT EMAIL</label>
                                            <input type="email" className="form-control" value={email} onChange={(e) => setEmail(e.target.value)} placeholder="Masukkan Alamat Email"/>
                                        </div>
                                        {
                                            validation.email && (
                                                <div className="alert alert-danger">
                                                    {validation.email[0]}
                                                </div>
                                            )
                                        }
                                    </div>
                                </div>
                                <div className="col">
                                    <div className="col-md-14">
                                        <div className="mb-0">
                                            <label className="form-label">PASSWORD</label>
                                            <input type="password" className="form-control" value={password} onChange={(e) => setPassword(e.target.value)} placeholder="Masukkan Password"/>
                                        </div>
                                        {
                                            validation.password && (
                                                <div className="alert alert-danger">
                                                    {validation.password[0]}
                                                </div>
                                            )
                                        }
                                    </div>
                                    
                                    <div className="col-md-14">
                                        <div className="mb-3">
                                            <label className="form-label">KONFIRMASI PASSWORD</label>
                                            <input type="password" className="form-control" value={passwordConfirmation} onChange={(e) => setPasswordConfirmation(e.target.value)} placeholder="Masukkan Konfirmasi Password"/>
                                        </div>
                                    </div>
                                </div>
                                <div className="d-grid gap-2">
                                <button type="submit" className="btn btn-primary">REGISTER</button>
                                <span classname="form-input-login">
                               <p class="text-secondary">Alredy to sign in? Login   <a href="/">here</a></p>
                               </span>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    )

}

export default Register;