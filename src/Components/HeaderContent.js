import React, {useState, useEffect} from 'react';
import axios from 'axios';
import styled, { keyframes } from 'styled-components';
import Secondarybutton from './SecondaryButton';
import Button from './button';
import robot from '../img/robot.png';
import network from '../img/network.png';
import abstrak from '../img/abstrak.png';
import message2 from '../img/message_blue.svg';
import cp from "../img/cp.png"
import batu4 from "../img/Stone 2.png"
import lepi from "../img/lepi.png"
import batu3 from "../img/Stone 1.png"
import astroo from "../img/astroo.png"

import down from "../img/down.png";
import scroll from "../img/scroll.png"

import garis from "../img/garis.png";
import { Fade } from 'react-reveal';
import logo from "../img/dmm.jpg";

import ig from "../img/log-out.png";
import yt from "../img/right-arrow.png";



 


function HeaderContent() {
    const URL = ('http://127.0.0.1:8000/api/page2');
    const [user, setUser] = useState([]);

    useEffect( () => {

        const FetchApi = async () => {
            const users = await axios.get(`${URL}`)
             .then( response => setUser(response.data.data))
             .catch( err => console.log(err))
            //  .then(response => console.log(response))
        }
        
        // Call Function
        FetchApi();
    }, [])

    return (

        <PageContent1Styled>
             {
                user.map(user => {
                    return(
                        <ul key={user.id}>
                            <li>
                                {/* <h1>{user.title}</h1>
                                <img src={user.image1} /> */}
                            
            <Fade left cascade>
                
           
            <div className="left-content">
          
                <div className="left-text-container">
                
               
                    <span>{user.desc}</span>
                    <p className="white">
                       Upgrading Website Company Profil PT. Dinamika Muda Mandiri
                    </p>
                    <Secondarybutton name={'Register Our Self'}
                    />  
                  
                 
                   
                    
                    

                    
                    
                </div>
            </div>

 </Fade>



            <Fade right>
                
            <div className="right-content">
           
            <img src={robot} alt="" className="robot" />
                {/* <img src={ring1} alt="" className="ring1" /> */}
                {/* <img src={asap} alt="" className="asap" /> */}
               
                <img src={cp} alt="" className="batu4" />
                <img src={lepi} alt="" className="batu2" />
                
                
                <img src={astroo} alt="" className="astroo" />
                {/* <img src={p} alt="" className="p" /> */}
                <a href="/">  <img src={ig} alt="" className="ig" /></a>
                <a href="/2">  <img src={yt} alt="" className="yt" /></a>
               
                <img src={network} alt="" className="astro" />
                <img src={scroll} alt="" className="wire" />
                <img src={garis} alt="" className="garis" />
                <img src={abstrak} alt="" className="abstrak" />
                <a href="https://www.dmm.co.id/">  <img src={logo} alt="" className="logo" /> </a>
                {/* <Secondarybutton type="submit" className="btn btn-primary">LOGIN</Secondarybutton> */}
                
            </div>
            </Fade> 

            <Fade left cascade>
            <div className="kiri">
         
           
            </div>
            </Fade>
            </li>
            </ul>
                    )
                }
            )
        }

            
        </PageContent1Styled>
       
        
    )
    
}

const rotate = keyframes`
from{
  transform:rotate(0deg)
}

to{
  transform:rotate(360deg)
}

`;

const move = keyframes`
0% { transform: translateY(-5px)  }
    50% { transform: translateY(15px) }
    100% { transform: translateY(-5px) }
`;

const PageContent1Styled = styled.div`
    
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding-top: -10rem;
    @media screen and (max-width: 700px){
        grid-template-columns: repeat(1, 1fr);
    }
    .left-content{
        
        .left-text-container{
        display: flex;
        align-items: center;
        padding-right: 1rem;
        padding-top: 10rem;
        padding: -10rem ;
        z-index: 100;
        .white{
            color:white;
        }
   

        span{
            
            font-weight: 500;
            font-size: 3.5rem;
            margin-top: -1rem;
            margin-left: -12.2rem;
            z-index: 20;
    
        }

        .white{
            margin-top: 15rem;
            margin-left: -22rem;
            margin-right: 14rem;
            font-size: 23px;
            font-style: italic;
            z-index: 5;
        }
     
    }
}
    /* margin-top: 1px;
            margin-left: -10rem;
            font-size: 23px;
            font-style: italic;
            z-index: 5; */

    
    .right-content{
        position: relative;
        display: flex;
        justify-content: center;
        z-index: 1;
    
        
    
        .robot{
            position: absolute;
            top: -23.3rem;
            right: -47.3rem;
            left: auto;
            width: 35rem;
           z-index: 9;
           /* transition: all .15s ease-in-out;
            animation: move 20s infinite; */
           
      
         
        }

        .astroo{
            position: absolute;
            top: -28rem;
            right: -22rem;
            left: auto;
            width: 30rem;
            z-index: 12; 
            transition: all .15s ease-in-out;
            animation: move 30s infinite;
        }

        .asap{
            position: absolute;
            top: -15.4rem;
            right: -18.8rem;
            left: auto;
            width: 12rem;
            z-index: 12; 
            
        }

        .astro{
            position: absolute;
            top: -17rem;
            right: -32rem;
            left: auto;
            width: 45rem;
            z-index: 5;
            transition: all .15s ease-in-out;
            animation: move 20s infinite;
            z-index: 11;
        }
        .ig{
            position: absolute;
            bottom: 24.7rem;
            right: -42rem;
            left: auto;
            width: 3rem;
            z-index: 20;
            align-items: center;
  transition: transform 0.2s;
  img {
    width: 1.5rem;
  }
  @media only screen and (max-width: 48em) {
    padding: 0.2rem 1rem;
  }
  &:hover {
    transform: scale(1.4);
  }
  &:active {
    transform: scale(1.1);
  }      
      
            
            
        }

        .yt{
            position: absolute;
            top: -8rem;
            right: -44rem;
            left: auto;
            width: 2.4rem;
            z-index: 20;
            align-items: center;
  transition: transform 0.2s;
  img {
    width: 1.5rem;
  }
  @media only screen and (max-width: 48em) {
    padding: 0.2rem 1rem;
  }
  &:hover {
    transform: scale(1.4);
  }
  &:active {
    transform: scale(1.1);
  }      
      
}

        .cp{
            position: absolute;
            top: -24rem;
            right: 1rem;
            left: auto;
            width: 12rem;
            z-index: 16;
            transition: all .4s ease-in-out;
            animation: move 8s infinite;
            
        }

        .menu{
            position: absolute;
            top: -19.5rem;
            right: 38.7rem;
            left: auto;
            width: 2.5rem;
            z-index: 7;
            transition: all .4s ease-in-out;
            animation: move 8s infinite;
           
        }


        .batu4{
            position: absolute;
            top: -24rem;
            right: -44rem;
            left: auto;
            width: 20rem;
            z-index: 16;
            animation: ${move} 5s ease infinite; 
        }
        .batu2{
            position: absolute;
            top: 1rem;
            right: 1rem;
            left: auto;
            width: 10rem;
            z-index: 6;
            animation: ${move} 5s ease infinite;  
        }

        .batu3{
            position: absolute;
            top: 2rem;
            right: -37rem;
            left: auto;
            width: 10rem;
            z-index: 6;
            animation: ${rotate} 25s ease infinite;
        }
        
        .garis{
            position: absolute;
            top: -12.7rem;
            right: 23rem;
            left: auto;
            width: 16rem;
            z-index: 0;
        }

        .wire{
            position: absolute;
            top: -12.2rem;
            right: 39rem;
            left: auto;
            width: 9rem;
            z-index: 6;
        }

        .down{
            position: absolute;
            top:2.5rem;
            right: 36rem;
            left: auto;
            width: 20rem;
            z-index: 6;
        } 
        .logo{
            position: absolute;
            top: -28rem;
            right: 32rem;
            left: auto;
            width: 6.5rem;
            z-index: 6;
            display: flex;
  align-items: center;
  transition: transform 0.2s;
  img {
    width: 1.5rem;
  }
  @media only screen and (max-width: 48em) {
    padding: 0.2rem 1rem;
  }
  &:hover {
    transform: scale(1.4);
  }
  &:active {
    transform: scale(1.1);
  } 
}

.klik{
            position: absolute;
            top: -19rem;
            right: -19rem;
            left: auto;
            width: 6rem;
            z-index: 16;
            display: flex;
  align-items: center;
  transition: transform 0.2s;
  img {
    width: 1.5rem;
  }
  @media only screen and (max-width: 48em) {
    padding: 0.2rem 1rem;
  }
  &:hover {
    transform: scale(1.4);
  }
  &:active {
    transform: scale(1.3);
  } 
}

        
        .abstrak{
            position: absolute;
            top: -25rem;
            right: -40rem;
            left: auto;
            width: 40rem;
            
        }
      
    }

    .kiri{
        position: absolute;
        display: absolute;
        top: 14.1rem;
        left: 70px;
        align-items: center;
        padding-right: 1rem;
        
        z-index: 12;
        @media screen and (max-width: 700px){
                font-size: 1rem;
                left: 20rem;
                top: 9rem;
            }
       
        
        }

    //Header Animations
    
    .batu1{
        @keyframes move{
            0%{
                transform: translateY(0) rotate(0) scale(1) translateX(0);
            }
            50%{
                transform: translateY(-10px) rotate(20deg) scale(1.1) translateX(10px);
            }
            100%{
                transform: translateY(0)  rotate(0deg) scale(1) translateX(0);
            }
        }
        @keyframes move2{
            0%{
                transform: translateY(0) rotate(0) scale(1) translateX(0);
            }
            50%{
                transform: translateY(-10px) rotate(60deg) scale(1.1) translateX(10px);
            }
            100%{
                transform: translateY(0)  rotate(0deg) scale(1) translateX(0);
            }
        }
    }
`;

export default HeaderContent;
