import React, { useEffect } from 'react'
import ConnectionDisplay from '../components/connection/ConnectionDisplay'


const Inscription = ({nav,footer}:any) => {
  useEffect(()=>{
    nav(false);
    footer(false)
  },[])
  
  return (
    <div >
       <ConnectionDisplay /> 

    </div>
  )
}

export default Inscription