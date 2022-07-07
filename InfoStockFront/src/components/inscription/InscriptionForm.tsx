import React, { useState } from 'react'
import './InscriptionForm.scss'

const InscriptionForm = () => {
    const [nom,setNom] = useState<string>('');
    const [prenom,setPrenom] = useState<string>('');
    const [email,setEmail] = useState<string>('');
    const [motdepasse,setMotdepasse] = useState<string>('');
    const [confirmMotdepasse,setConfirmMotdepasse] = useState<string>('');

    const [errors,setErrors] = useState<string>('')



    const handleSubmit = (e: any) => {
        e.preventDefault();
        if(nom!="" && prenom !="" && email !="" && motdepasse !="" && confirmMotdepasse!="")
        {
            if(motdepasse === confirmMotdepasse)
            {
                return(
                    <h1>
                        VOUS VOUS ETES INSCRIT AVEC CES DONNEES : 
                           nom: {nom},
                           prenom : {prenom},
                           email : {email},
                           motdepasse : {motdepasse}
                    </h1>
                )
            }
            else{
                setErrors('Vous deux mot de passe ne correspondent pas.')
            }
        }
        else{
            setErrors('Vous devez remplir tous les champs')
        }
    }


    return (
        <form onSubmit={(e) => { handleSubmit(e) }} >
            <p>{errors}</p>
            <p><label htmlFor="prenom">Prénom*</label></p>
            <input  className="inputForm" id="prenom" type="text" onChange={(e)=>{setPrenom(e.target.value)}} />
           
            <p><label htmlFor="nom">Nom*</label></p>
            <input  className="inputForm" id="nom" type="text"  onChange={(e)=>{setNom(e.target.value)}} />
           
            <p><label htmlFor="email">Email*</label></p>
            <input className="inputForm" id="email" type="text"  onChange={(e)=>{setEmail(e.target.value)}} />
           
            <p><label htmlFor="motdepasse">Mot de Passe*</label></p>
            <input  className="inputForm" id="motdepasse" type="password"  onChange={(e)=>{setMotdepasse(e.target.value)}} />
           
            <p><label htmlFor="confirmmotdepasse">Confirmation de Mot de Passe*</label></p>
            <input className="inputForm" id="confirmmotdepasse" type="password" onChange={(e)=>{setConfirmMotdepasse(e.target.value)}} />
           
            <p></p>
            <input className="btnInfo" type="submit" value='Inscription' />
        </form>
    )
}

export default InscriptionForm