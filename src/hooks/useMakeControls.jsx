import React from 'react';

export default function useMakeControls(setBoard) {
    const addElement = (type) => {
        const elementsconfig = {
            square: {
                width: '200px',
                heigth: '200px',
                color: 'black',
                left: '400px',
                top: '200px',
            },
            circle: {
                width: '200px',
                heigth: '200px',
                color: 'black',
                left: '600px',
                top: '200px',
            },
            text: {
                width: '200px',
                heigth: '200px',
                color: 'black',
                left: '800px',
                top: '200px',
            },
            line: {
                width: '200px',
                heigth: '4px',
                color: 'black',
                left: '200px',
                top: '600px',
            },
            image: {
                width: '200px',
                heigth: '200px',
                color: 'black',
                left: '200px',
                top: '200px',
                src: '../src/assets/image.png'
            },
        }

        const config = elementsconfig[type]
        if (config) {
            const newElement = {
                id: crypto.randomUUID(),
                type: type,
                ...config
            }
            setBoard((prev)=> ({
                ...prev,
                objects: [...(prev.objects || []), newElement]
            }))
        }
        
    }

    const updatePosition = (id, x, y) => {
    setBoard((prev) => ({
                
                objects: prev.objects.map((el)=> 
                el.id == id ? {...el, left:`${x}px`, top:`${y}px`}: el
            ) 
            }))
    }

    return {addElement, updatePosition}

};
