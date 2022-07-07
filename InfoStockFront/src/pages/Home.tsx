import React, { useEffect } from 'react'
import Banner from '../components/home/Banner'
import Informations from '../components/home/Informations';
import NewProduct from '../components/home/NewProduct';

function Home({ nav, footer }: any) {
  useEffect(() => {
    document.body.style.backgroundColor = "#FFFFFF";
    nav(true);
    footer(true);

  }, [])
  return (
    <div>
      <div>
        <Banner />
        <Informations />
      </div>

      <NewProduct />


    </div>
  )
}

export default Home