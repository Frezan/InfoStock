import React, { useEffect } from 'react'
import './InscriptionDisplay.scss'
import informatiqueLogin from '/assets/img/informatiqueLogin.jpg'
import InscriptionForm  from './InscriptionForm'
import { Link } from 'react-router-dom'


const InscriptionDisplay = () => {

    useEffect(()=>{
        document.body.style.backgroundColor = "#346980";
    },[])


  return (
    <div className="connectForm">
        <div className="inscriptionDiv">
            <div className='inscriptionForm'>
                <h1>Inscription</h1>
                <InscriptionForm />
                <p></p>
                <span>Vous avez déjà un compte ?</span> <Link to="/connection">Se connecter.</Link>
                
            </div>
            <div className='inscriptionImg'  style={{backgroundImage:'url('+informatiqueLogin+')', backgroundSize: "cover", backgroundPosition:"center"}}></div>
        </div>
    </div>
  )
}

export default InscriptionDisplay