import styled, { keyframes } from 'styled-components';
import './Form.css';
import bg from "../img/BG Star.png"
import FormSignup from './FormSignup';
import FormSuccess from './FormSuccess';
import HeaderContent from './HeaderContent';
import Secondarybutton from './SecondaryButton';

import { Fade } from 'react-reveal';
import React, {useState, useEffect} from 'react';
import axios from 'axios';
import img2 from "../img/img2.svg"

const Form = () => {
  const [isSubmitted, setIsSubmitted] = useState(false);

  function submitForm() {
    setIsSubmitted(true);
  }

  return (
    <>
      <Page1Styled>
            <div className="header-content">
          
                <HeaderContent/>
               
            </div>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
          
            <Fade right>
            <div className='form-container'>
            
    
        <div className='form-content-left'>
          
     
          <img src={img2} alt="" className="form-img" />
        
      
          
        </div>
        {!isSubmitted ? (
          <FormSignup submitForm={submitForm} />
        ) : (
          <FormSuccess />
        )}
      
    </div>
    
      </Fade>
  

        </Page1Styled>
     
    </>
  );
};
const Page1Styled = styled.header`

    width: 100%;
    height: 65vw;
    background-color:#0a0b10;
    .header-content{
        padding: 0 18rem;
        @media screen and (max-width: 100%){
            padding: 5rem 14rem;
        }
        @media screen and (max-width: 100%){
            padding: 5rem 8rem;
        }
        @media screen and (max-width: 100%){
            padding: 5rem 4rem;
        }
    }
`;

export default Form;
