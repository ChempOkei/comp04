import React from 'react';

export default function Draggable({ left, top, children, onMove }) {
    const handleMove = (e) => {
        const startX = e.clientX - parseInt(left)
        const startY = e.clientY - parseInt(top)

        const onMouseMove = (m) => onMove(m.clientX - startX, m.clientY - startY)

        const onMouseUp = () => {
            document.removeEventListener('mousemove', onMouseMove)
            document.removeEventListener('mouseup', onMouseUp)
        }

        document.addEventListener('mousemove', onMouseMove)
        document.addEventListener('mouseup', onMouseUp)

    }
    return (
        <>
            <div onMouseDown={handleMove} style={{
                userSelect: 'none', left, top, cursor: 'pointer', position: 'absolute'
            }}>
                {children}
            </div>
        </>
    );
};
