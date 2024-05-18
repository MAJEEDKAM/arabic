import React from 'react';
import './HomePage.css';
import { BrowserRouter as Router,Routes,Route, Link, redirect } from 'react-router-dom';
import FirstComp from '../firstComp/FirstComp.js';
import LoginPage from '../loginPage/LoginPage.js'; 

function HomePage() {

  const isAuthenticated = false;
  
  return (
    // <div id='HomePage'>
      <Router>
      <div>
        {isAuthenticated ? (
        <><nav>
            <ul>
              <li>
                <Link to="/">HomePage</Link>
              </li>
              <li>
                <Link to="/FirstComp">FirstComp</Link>
              </li>
            </ul>
          </nav><hr /><Routes>
              <Route path="/FirstComp" Component={FirstComp} />
            </Routes></>
): ( 
  <LoginPage /> 

 )}
        
      </div>
    </Router>
    // </div>
  );
}

export default HomePage;