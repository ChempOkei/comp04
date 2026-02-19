import React from 'react';

const initialProps = {
    width: '200px',
    heigth: '200px',
    color: 'black',
}

export default function Circle(props) {
 const {color, width, heigth} = {...initialProps, props}
 return (
 <>
 <div className='component' style={{
    backgroundColor: color,
    width: width,
    height: heigth,
    borderRadius: '50%'
 }}>
 </div>
 </>
 );
};
