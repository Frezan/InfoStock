import React, { useEffect } from 'react'
import InscriptionDisplay from '../components/inscription/InscriptionDisplay'

const Inscription = ({nav,footer}:any) => {

useEffect(()=>{
  nav(false);
  footer(false)
},[])

  return (
    <div >
       <InscriptionDisplay /> 

    </div>
  )
}

export default Inscription