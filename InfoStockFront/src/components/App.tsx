import { useState } from 'react';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Connection from '../pages/Connection';
import Contact from '../pages/Contact';
import Guides from '../pages/Guides';
import Home from '../pages/Home';
import Inscription from '../pages/Inscription';

import Footer from './layout/Footer';
import Navbar from './layout/Navbar';


function App() {

  const [showNav, setShowNav] = useState(true);
  const [showFooter, setShowFooter] = useState(true);

  return (
    <div className="App">


      <BrowserRouter>
  
          {
            showNav && <Navbar />
          }

          <Routes>
            <Route path='/' element={<Home nav={setShowNav} footer={setShowFooter}  />} />
            <Route path='/inscription' element={<Inscription nav={setShowNav} footer={setShowFooter}   />} />
            <Route path='/connection' element={<Connection nav={setShowNav} footer={setShowFooter}     />} />
            <Route path='/guides' element={<Guides  />} />
            <Route path='/contact' element={<Contact />}/>
          </Routes>
        {
          showFooter && <Footer />
        }
      </BrowserRouter>



    </div>
  )
}

export default App
