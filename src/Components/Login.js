//import hook react
import React, { useState } from 'react';
import './login.css';
import { useNavigate } from "react-router-dom";




//import axios
import axios from 'axios';


function Login() {
    
    //define state
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    //define state validation
    const [validation, setValidation] = useState([]);

    //define history
    const anyName= useNavigate();

    //function "loginHanlder"
    const loginHandler = async (e) => {
        e.preventDefault();
        
        //initialize formData
        const formData = new FormData();

        //append data to formData
        formData.append('email', email);
        formData.append('password', password);

        //send data to server
        await axios.post('http://localhost:8000/api/login', formData)
        .then((response) => {

            //set token on localStorage
            localStorage.setItem('token', response.data.token);

            //redirect to dashboard
            anyName("/platform");
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
                            <h4 className="text-muted">LOGIN</h4>
                            
                            <hr/>
                            {
                                validation.message && (
                                    <div className="alert alert-danger">
                                        {validation.message}
                                    </div>
                                )
                            }
                            <form onSubmit={loginHandler}>
                              
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
                                <div className="mb-3">
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
                                <div className="d-grid gap-2">
                                    <button type="submit" className="btn btn-primary">Sign in</button>
                               <span classname="form-input-login">
                               <p class="text-secondary">Alredy make an account? Regist   <a href="/register">here</a></p>
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

export default Login;