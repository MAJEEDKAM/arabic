import React from 'react';
import './LoginPage.css';

function LoginPage() {
  return (
    <div id='LoginPage'>
      <div className='top-header'>
        <h2>Noorani Qaida</h2>
      </div>
      <div className='login-form'>
        <div>
          <div className='form-group'>
            <label>Mobile number</label>
            <input id='mobile_no' className='form-control form-inp' type="text" name="mobile_no"></input>
          </div>
          <div>
            <label>Mobile number</label>
            <input id='pwd' className='form-control form-inp' type="text" name="pwd"></input>
          </div>
          <div>
            <button>Log In</button>
          </div>
        </div>
      </div>
      <hr/>
      <div>
        <p>Are You new ? <a>Click here </a> to register</p>
      </div>
      <hr/>

      
    </div>
  );
}

export default LoginPage;