import React from 'react';

const initialProps = {
    width: '200px',
    heigth: '4px',
    color: 'black',
}

export default function Line(props) {
 const {color, width, heigth} = {...initialProps, props}
 return (
 <>
 <div className='component' style={{
    backgroundColor: color,
    width: width,
    height: heigth,
 }}>
 </div>
 </>
 );
};
