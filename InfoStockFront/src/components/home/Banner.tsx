import React from 'react'
import { useState } from 'react';
import { Carousel } from 'react-bootstrap'
import bannerProduct from '/assets/img/bannerProduct.jpg'
import './Banner.scss'

const Banner = () => {
 
  return (
    <Carousel fade>
  <Carousel.Item>
    <img
      className="d-block w-100"
      src={bannerProduct}
      alt="First slide"
      height={700}
    />
    <Carousel.Caption>
      <h3>First slide label</h3>
      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
    </Carousel.Caption>
  </Carousel.Item>
  <Carousel.Item>
    <img
      className="d-block w-100"
      src={bannerProduct}
      alt="Second slide"
      height={700}
    />

    <Carousel.Caption>
      <h3>Second slide label</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </Carousel.Caption>
  </Carousel.Item>
  <Carousel.Item>
    <img
      className="d-block w-100"
      src={bannerProduct}
      alt="Third slide"
      height={700}
    />

    <Carousel.Caption>
      <h3>Third slide label</h3>
      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
    </Carousel.Caption>
  </Carousel.Item>
</Carousel>

  )
}

export default Banner