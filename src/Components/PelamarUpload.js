import React, { Component } from "react";
import axios from "axios";


export default class PelamarUpload extends Component {
  constructor(props) {
    super(props);

    this.state = {
      image: "",
      responseMsg: {
        status: "",
        message: "",
        error: "",
      },
    };
  }

  // image onchange hander
  handleChange = (e) => {
    const pelamarsArray = [];
    let isValid = "";

    for (let i = 0; i < e.target.files.length; i++) {
      isValid = this.fileValidate(e.target.files[i]);
      pelamarsArray.push(e.target.files[i]);
    }
    this.setState({
      image: pelamarsArray,
    });
  };

  // submit handler
  submitHandler = (e) => {
    alert("Your file is being uploaded!")
    e.preventDefault();
    const data = new FormData();
    for (let i = 0; i < this.state.image.length; i++) {
      data.append("pelamars[]", this.state.image[i]);
    }

    axios.post("http://localhost:8000/api/pelamars", data)
      .then((response) => {
        if (response.status === 200) {
          this.setState({
            responseMsg: {
              status: response.data.status,
              message: response.data.message,
            },
          });
          setTimeout(() => {
            this.setState({
              image: "",
              responseMsg: "",
            });
          }, 100000);

          document.querySelector("#imageForm").reset();
          // getting uploaded images
      
        }
      })
      .catch((error) => {
        console.error(error);
      });
  };

  // file validation
  fileValidate = (file) => {
    if (
      file.type === "image/png" ||
      file.type === "image/jpg" ||
      file.type === "image/jpeg"
    ) {
      this.setState({
        responseMsg: {
          error: "",
        },
      });
      return true;
    } else {
      this.setState({
        responseMsg: {
          error: "File type allowed only jpg, png, jpeg",
        },
      });
      return false;
    }
  };

  render() {
    return (
      <div className="container py-5">
        <div className="row">
          <div className="col-xl-8 col-lg-8 col-md-8 col-sm-12 m-auto">
            <form onSubmit={this.submitHandler} encType="multipart/form-data" id="imageForm">
              <div className="card shadow">
                {this.state.responseMsg.status === "successs" ? (
                  <div className="alert alert-success">
                    {this.state.responseMsg.message}
                  </div>
                ) : this.state.responseMsg.status === "failed" ? (
                  <div className="alert alert-danger">
                    {this.state.responseMsg.message}
                  </div>
                ) : (
                  ""
                )}
            

                <div className="card-body">
                  <div className="form-group py-2">
                    <label htmlFor="pelamars">Images</label>
                    <input
                      type="file"
                      name="image"
                      multiple
                      onChange={this.handleChange}
                      className="form-control"
                    />
                    <span className="text-danger">
                      {this.state.responseMsg.error}
                    </span>
                  </div>
                </div>

                <div className="card-footer">
                  <button type="submit" className="btn btn-success">
                    Upload CV
                  </button>
                  
                </div>
              </div>
            </form>
          </div>
        </div>

       
      </div>
    );
  }
}
