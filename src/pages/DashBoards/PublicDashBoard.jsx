import React, { useEffect, useState } from 'react';
import { NavLink, useNavigate } from 'react-router-dom';
import { API } from '../../shared/api';

export default function PublicDashBoard() {

  const navigate = useNavigate()
  const [publicBoard, setPublicBoard] = useState(null)
  const [isLoading, setIsLoading] = useState(true)

  const likeBoard = async (boardId) => {
      const res = await API.likeBoard(boardId)
      window.location.href = '/dashboard/public'
    }

   const createBoard = async () => {
        const title = prompt('Введите название доски')
        try {
          const res = await API.createBoard({title})
          window.location.href = '/dashboard/my'
        } catch (err) {
          alert('Ошибка: не удалось создать доску' )
        }
    }

    useEffect(()=>{
        const getPublicBoard = async () => {
          const res = await API.getPublic()
          setPublicBoard(res)
        }
        getPublicBoard().finally(() => setIsLoading(false))
      }, [])

  if (isLoading == true) return <p>Загрузка...</p>
  if (publicBoard == null) return <p>Публичных досок пока нет</p>
 return (
 <>
    <header className="header">
      <div className="header-content">
        <div className="header-left">
          <h2>Boardly</h2>
        </div>

        <div className="header-right">
          <button className="header-btn" onClick={createBoard} >Создать доску</button>
          <NavLink to="/dashboard/my" className="header-btn">Доски с доступом</NavLink>
          <button className="header-btn logout" onClick={()=>API.logout()}>
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

    <main className="boards-content">
      {publicBoard.map((el) => (



      <article key={el.id} className="board-card">
        <h2>{el.title}</h2>

        <div className="public-link">
          <p>Публичная ссылка</p>
          <div className="link-content">
            <svg
              className="link-icon"
              viewBox="0 0 24 24"
              width="16"
              height="16"
              fill="none"
              stroke="currentColor"
              strokeWidth="2"
            >
              <path
                d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"
              />
              <path
                d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"
              />
            </svg>
            <NavLink to={`/board/${el.id}`}>board/{el.public_hash}</NavLink>
          </div>
        </div>

        <div className="action-buttons">
          <button onClick={()=>navigate(`/board/${el.id}`)} className="primary-button">Подключиться</button>
          {el.is_liked == 1 && <button onClick={()=>likeBoard(el.id)} className="secondary-button">
            <svg width="18" height="18" viewBox="0 0 24 24">
              <path
                fill="#ef4444"
                stroke="#ef4444"
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
              />
            </svg>
            {el.likes_count}
          </button> }
          {el.is_liked == 0 && <button onClick={()=>likeBoard(el.id)} className="secondary-button">
            <svg width="18" height="18" viewBox="0 0 24 24">
              <path
                fill="#ef444400"
                stroke="#ef4444"
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
              />
            </svg>
            {el.likes_count}
          </button>}
          
        </div>
      </article>
      ))}


    </main>
 
 </>
 );
};


