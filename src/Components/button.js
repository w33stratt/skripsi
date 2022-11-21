import React from 'react';
import styled from 'styled-components';
import arrow from '../img/arrow.svg'

function button({name}) {
    return (
        <ButtonStyled>
            {name}
        </ButtonStyled>
    )
} 

const ButtonStyled = styled.button`
  
  color: red;
  padding: 9.8px 0.7rem; x
  /* outline: none;
  border: none;
  border-radius: 10px;
  background: #C7D2FE66;
  cursor: pointer;
  font-size: calc(0.5rem + 0.5vw);
  display: flex;
  align-items: center;
  transition: transform 0.2s; */

  img {
    width: 1.5rem;
  }
  @media only screen and (max-width: 48em) {
    padding: 0.4rem 0.5rem;
  }
  &:hover {
    transform: scale(2.2);
  }
  &:active {
    transform: scale(0.5);
  }
`;



export default button;
