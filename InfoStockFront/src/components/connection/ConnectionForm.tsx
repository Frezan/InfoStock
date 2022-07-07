import React, { useState } from 'react'
import { Link, useNavigate } from 'react-router-dom';
import './ConnectionForm.scss';


const ConnectionForm = () => {

    const [email, setEmail] = useState<string>('');

    const [motdepasse, setMotdepasse] = useState<string>('');

    const [errors, setErrors] = useState<string>('');
    let navigate = useNavigate();

    const handleSubmit = (e: any) => {
        e.preventDefault();

        if (email != " " && motdepasse != " ") {
            console.log(motdepasse)

            if (email === "info@info.com" && motdepasse === "1234") {

                navigate("/", { replace: true });

            }
            else {
                setErrors('Aucun compte avec cet email');
            }
        }

    }

    return (
        <div>
            <form onSubmit={(e) => { handleSubmit(e) }} >
                <p className="errors">{errors}</p>

                <p><label htmlFor="email">Email*</label></p>
                <input className="inputForm" id="email" type="text" onChange={(e) => { setEmail(e.target.value.toString()) }} required />

                <p><label htmlFor="motdepasse">Mot de Passe*</label></p>
                <input className="inputForm" id="motdepasse" type="password" onChange={(e) => { setMotdepasse(e.target.value.toString()) }} required />

                <p></p>
                <input className="btnInfo" type="submit" value='Connexion' />
            </form>
            <p></p>
            <Link to="/inscription"><button className="btnInfo">Inscription</button></Link>
        </div>
    )
}

export default ConnectionForm