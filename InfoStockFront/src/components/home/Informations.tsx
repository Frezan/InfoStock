import React from 'react'

import deliveryImg from '/assets/img/delivery.png'
import starImg from '/assets/img/star.png'
import cartImg from '/assets/img/cart.png'
import dialogueImg from '/assets/img/dialogue.png'
import cardImg from '/assets/img/card.png'



import './Informations.scss'

const Informations = () => {
    return (
        <div  className='informationDiv'>
            <div className='row informationRow' >
                <div className='col-sm-4'></div>
                <div className='col-sm-2'><img src={starImg} className="informationImg" /> Plus de 2 ans d'expertise</div>
                <div className='col-sm-2'><img src={cartImg} className="informationImg" /> +d'une centaine de produits</div>
                <div className='col-sm-2'><img src={deliveryImg }className="informationImg" /> livraisons à domicile</div>
                <div className='col-sm-5'></div>
                <div className='col-sm-2'><img src={dialogueImg} className="informationImg" /> Une équipe clientèle à votre écoute</div>
                <div className='col-sm-3'><img src={cardImg} className="informationImg" /> Débit de votre carte à l’expédition </div>
            </div>
        </div>
    )
}

export default Informations