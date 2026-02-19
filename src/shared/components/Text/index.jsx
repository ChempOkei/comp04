import React from 'react';

const initialProps = {
    width: '200px',
    heigth: '200px',
    color: 'black',
}

export default function Text(props) {
 const {color, width, heigth} = {...initialProps, props}
 return (
 <>
 <div className='component' style={{
    color: color,
    width: width,
    height: heigth,
    wordBreak: 'break-all'
 }}>
    Hello World!
 </div>
 </>
 );
};
