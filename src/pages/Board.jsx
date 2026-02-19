import React from 'react';
import useGetBoard from '../hooks/useGetBoard';
import { NavLink, useParams } from 'react-router-dom';
import useMakeControls from '../hooks/useMakeControls';
import Draggable from '../shared/components/Draggable';
import Square from '../shared/components/Square';
import { API } from '../shared/api';
import Circle from '../shared/components/Circle';
import Text from '../shared/components/Text';
import Image from '../shared/components/Image';
import Line from '../shared/components/Line';

export default function Board() {
    const {id} = useParams()
    const { board, setBoard, isLoading } = useGetBoard(id)
    const { addElement, updatePosition } = useMakeControls(setBoard)

    const renderElement = (el) => {
        const commonProps = {...el};
        const handleMove = (x, y) => {updatePosition(el.id, x, y)}

        return <Draggable key={el.id} left={el.left} top={el.top} onMove={handleMove}>
            {el.type === 'square' && <Square {...commonProps} />}
            {el.type === 'circle' && <Circle {...commonProps} />}
            {el.type === 'text' && <Text {...commonProps} />}
            {el.type === 'image' && <Image {...commonProps} />}
            {el.type === 'line' && <Line {...commonProps} />}
               </Draggable>
        
    }

    if (isLoading) return <p>Загрузка...</p>
    if (board == null) return <p>"Board not found or access denied"</p>

 return (
 <>
    <header className="header">
      <div className="header-content">
        <div className="header-left">
          <h2>{board.title}</h2>
        </div>
        <div className="header-right">
          <NavLink to="/dashboard/public" className="header-btn">Публичные доски</NavLink>
          <button onClick={()=>API.logout()} className="header-btn logout">
            <svg
              viewBox="0 0 24 24"
              width="16"
              height="16"
              fill="none"
              stroke="currentColor"
              strokeWidth="2"
            >
              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
              <polyline points="16 17 21 12 16 7" />
              <line x1="21" y1="12" x2="9" y2="12" />
            </svg>
            Выйти
          </button>
        </div>
      </div>
    </header>

    <main className='boardsmain'>
        <div className="boardcontainer">
            <div className="controls">
                <button className="element-btn" onClick={()=>addElement('square')}>
                    Квадрат
                </button>
                <button className="element-btn" onClick={()=>addElement('image')}>
                    Изображение
                </button>
                <button className="element-btn" onClick={()=>addElement('line')}>
                    Линия
                </button>
                <button className="element-btn" onClick={()=>addElement('text')}> 
                    Текст
                </button>
                <button className="element-btn" onClick={()=>addElement('circle')}>
                    Круг
                </button>
            </div>
            <div className="whiteboard">
                {board.objects && board.objects.map(renderElement)}
            </div>
        </div>
    </main>
 </>
 );
};
