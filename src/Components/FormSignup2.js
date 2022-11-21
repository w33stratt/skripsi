import React from 'react';

import './Form.css';
//import axios
// import Axios from 'axios';
import { useState, useEffect } from 'react';


function FormSignup2(){
  
  const [selectedFile, setSelectedFile] = useState();
  // const [loadimage, setLoadImage] = useState([]);
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [pendidikan, setPendidikan] = useState("");
  const [experience, setExperience] = useState("");
  const [wawancara, setWawancara] = useState("0");
  const [pengetahuan, setPortofolio] = useState("0");
  const [testing, setTesting] = useState("0");
  const [cv, setCv] = useState("0");
  const [waktu_pengerjaan, setWaktu_pengerjaan] = useState("0");
  const [gaji, setGaji] = useState("0");

 

 
  // const loadList = async () => {
  //   const result = await axios.get("http://localhost:8000/api/list");
  //   setLoadImage(result.data.reverse());
  // };
 
 
  const handleSubmission = async (e) => {
    const formData = new FormData();
    formData.append("img_path", selectedFile);
    formData.append("name", name);
    formData.append("email", email);
    formData.append("pendidikan", pendidikan);
    formData.append("experience", experience);
    formData.append("wawancara", wawancara);
    formData.append("pengetahuan", pengetahuan);
    formData.append("testing", testing);
    formData.append("cv", cv);
    formData.append("waktu_pengerjaan", waktu_pengerjaan);
    formData.append("gaji", gaji);
    console.log(formData.get("name"))
    await fetch("http://localhost:8000/api/page3", {
      method: "POST",
      body: formData,
    })
  
      alert('you have regist');
      window.location.reload();

  };
 
  return (
<div className='form-content-right'>
      
      
      <form className='form' noValidate>
        <h1>
          Get started with us today! Regist your self by filling out the
          information below.
        </h1>
        <div className='form-inputs'>
          <label className='form-label'>Name</label>
          <input
            className='form-input'
            type='text'
            name='name'
            placeholder='Enter your name'
           
            onChange={(e)=>setName(e.target.value)} 
          />
       
        </div>
        <div className='form-inputs'>
          <label className='form-label'>Email</label>
          <input
            className='form-input'
            type='text'
            id='email'
            placeholder='Enter your email'
         
            onChange={(e)=>setEmail(e.target.value)} 
          />
        
        </div>
        <div className='form-inputs'>
          <label className='form-label'>Study</label>
          <input
            className='form-input'
            type='text'
            id='pendidikan'
            placeholder='Enter your study'
            
            onChange={(e)=>setPendidikan(e.target.value)}
          />
         
        </div>
        
        <div className='form-inputs'>
          <label className='form-label'>Experience (years) </label>
          <input
            className='form-input'
            type='text'
            name='experience'
            placeholder='Enter your experience'
           
            onChange={(e)=>setExperience(e.target.value)} 
          />
  
        </div>
        <div className='form-inputs'>
          <label className='form-label'>CV </label>
          <input
            className='form-input'
            type='file'
            name='file'
            placeholder='Enter your address'
           
            onChange={(e)=>setSelectedFile(e.target.files[0])}
          />
  
        </div>
        
        

 
        <button  className='form-input-btn' type='button' onClick={handleSubmission} name="submit">
          Sign up
        </button>
     
      </form>
    </div>  
   
  )
  };   



// return (
//   <div className="container">
//     <h4 class="text-center text-success  ml-4 mb-4 mt-4">Image Gallary in ReactJS</h4>
//     <div className="row">
//       <div className="col-sm-3 p-2 bg-gray">
//        <div className="box mr-4" style={{border:"1px solid #b7b7b7",backgroundColor:"#rgb(253 253 253);"}}>
//        <h5 class="text-center  ml-4 mb-3 mt-3">Add Image</h5>
//         <table className="">
//          <tr>
//           <td>
//             <div class="form-group ml-3">
//               <input type="text" name="name" className="mb-4"onChange={(e) => setName(e.target.value)} placeholder="Country Name"/>
//             </div>
//           </td>
//          </tr>

//          <tr>
//           <td>
//            <div class="form-group">
//             <textarea type="text" name="email" className="mb-4"  rows="3" cols="23" onChange={(e) => setEmail(e.target.value)} placeholder="Write Description" />
//            </div>
//           </td>
//          </tr>

//          <tr>
//           <td>
//            <div class="form-group">
//             <textarea type="text" name="pendidikan" className="mb-4"  rows="3" cols="23" onChange={(e) => setPendidikan(e.target.value)} placeholder="Write Description" />
//            </div>
//           </td>
//          </tr>

//          <tr>
//           <td>
            
//            <div class="form-group">
//             <textarea type="text" name="experience" className="mb-4"  rows="3" cols="23" onChange={(e) => setExperience(e.target.value)} placeholder="Write Description" />
//            </div>
//           </td>
//          </tr>

//          <tr>
//           <td>
            

//            <div class="form-group">
//             <input type="file" name="file" className="mb-4" onChange={(e) => setSelectedFile(e.target.files[0])} />
//            </div>
//           </td>
//          </tr>

//          <tr>
//           <td>
//            <div class="form-group">
//              <button type="submit" onClick={handleSubmission}class="btn btn-success mb-3" name="submit">
//                Add Gallary
//             </button>
//            </div>
//           </td>
//          </tr>
//         </table>
//         </div>
//       </div>

//          </div>
//       </div>
   
// );
// }
export default FormSignup2;