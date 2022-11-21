import React from 'react';
import styled from 'styled-components';

function Secondarybutton({name}) {
    return (
        <SecondaryButtonStyled>
            {name}
            
        </SecondaryButtonStyled>
    )
}

const SecondaryButtonStyled = styled.button`
  background-color: red;
  position: absolute;
  top: 5rem;
  outline: none;
    border: none;
  color: white;
  padding: 0.5rem 1rem;
  margin-top: 38rem;
  margin-left: -10rem;
  border-radius: 20px;
  
  font-size: calc(0.5rem + 0.5vw);
  align-items: center;
  transition: transform 0.2s;
z-index: 99;

  img {
    width: 1.5rem;
  }
  @media only screen and (max-width: 48em) {
    padding: 0.2rem 1rem;
  }
  &:hover {
    transform: scale(1.1);
  }
  &:active {
    transform: scale(0.9);
  }
`;
export default Secondarybutton;
