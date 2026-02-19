import React from 'react';

const initialProps = {
    width: '200px',
    heigth: '200px',
    color: 'black',
    src: '../src/assets/image.png',
}

export default function Image(props) {
 const {color, width, heigth, src} = {...initialProps, props}
 return (
 <>
 <img src={src} className='component' style={{
    width: width,
    height: heigth,
 }}>
 </img>
 </>
 );
};
