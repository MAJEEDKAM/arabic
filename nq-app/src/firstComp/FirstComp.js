import React from 'react';
import './FirstComp.css';

function FirstComp() {
  return (
    <div id='firstComp'>
      <h2>This is an Example Component!</h2>
      <p>You can put any content or JSX here.</p>
      <button className='btn btn-danger'>Hello world</button>
    </div>
  );
}

export default FirstComp;