import React, { useEffect } from 'react'
import informatiqueLogin from '/assets/img/informatiqueLogin.jpg'
import './ConnectionDisplay.scss';
import ConnectionForm from './ConnectionForm';



const ConnectionDisplay = () => {
    useEffect(()=>{
        document.body.style.backgroundColor = "#346980";
    },[])

  return (
    <div className="connectForm">
    <div className="connectionDiv">
        <div className='connectionForm'>
            <h1>Connexion</h1>
            <ConnectionForm />
          
            
        </div>
        <div className='connectionImg'  style={{backgroundImage:'url('+informatiqueLogin+')', backgroundSize: "cover", backgroundPosition:"center"}}></div>
    </div>
</div>
  )
}

export default ConnectionDisplay