import logo from './logo.svg';
import Form from './Components/Form';
import Form2 from './Components/Form2';
import './App.css';
import Login  from "./Components/Login";

import Register  from "./Components/Register";
import styled from 'styled-components';
import {Switch, Route, Routes} from 'react-router-dom';

function App() {
  return (
    <Routes>
    <Route path='/' element={<Login/>}/>
    <Route path='/register' element={<Register/>}/>
    <Route path='/platform' element={<Form/>}/>
    <Route path='/2' element={<Form2/>}/>

    </Routes>
  );
}


const MainStyled = styled.main`


`;
export default App;
