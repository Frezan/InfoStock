import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import './Navbar.scss'
//@ts-ignore
import { products } from '../../services/products/products';
import profilImg from '/assets/img/profil.png'
import searchImg from '/assets/img/search.png'
import cartImg from '/assets/img/cart.png'


const Navbar = () => {
    const [query, setQuery] = useState('');

    const getFilteredItems = (query: any, products: any) => {
        if (!query) {
            return ['test'];
        }

        return products.filter((product:any)=>{ return product.name.includes(query)})

    }
    const filteredItems = getFilteredItems(query, products);

    useEffect(() => {
        filteredItems;
        console.log("test",filteredItems )
    }, [query])

    return (
        <nav className="navbarInfo" >

            <h1><Link to='/'>InfoStock</Link></h1>

            <ul className="navbarInfoMenu">
                <li>
                    <Link to='/2'>Nos Produits</Link>
                </li>
                <li>

                    <Link to='/guides'>Nos guides</Link>
                </li>
                <li>
                    <Link to='/contact'>Contact</Link>
                </li>
            </ul>



            <div className="navbarInfoOptions">
                <div className='navbarInfoSearch'>
                    <input type="text" onChange={(e) => { setQuery(e.target.value.toString()) }} />
                    <img className='navbarInfoImg' src={searchImg} />
                    <ul className='searchList'>
                        {filteredItems.map((value: any) => {
                            return (<li key={value.name}><h1>{value.name}</h1></li>)
                        })}
                    </ul>
                </div>

                <div className="navbarInfoOptions">
                    <Link to='/addRestaurant'><img className='navbarInfoImg' src={cartImg} /></Link>
                    <Link  className="endOfmenu" to='/addRestaurant2'><img className='navbarInfoImg' src={profilImg} /></Link>
                </div>
            </div>
            

        </nav>
    )
}

export default Navbar