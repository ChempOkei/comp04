import React, { useEffect, useState } from 'react';
import { API } from '../../shared/api';
import { NavLink, useNavigate } from 'react-router-dom';


export default function DashBoard() {

  const navigate = useNavigate()
  const [myBoard, setMyBoard] = useState(null)
  const [isLoading, setIsLoading] = useState(true)

  const likeBoard = async (boardId) => {
        const res = await API.likeBoard(boardId)
        window.location.href = '/dashboard/my'
      }

  const createBoard = async () => {
      const title = prompt('Введите название доски')
      try {
        const res = await API.createBoard({title})
        window.location.href = '/dashboard/my'
        
      } catch (err) {
        alert('Ошибка: не удалось создать доску')
      }
  }

  const shareBoard = async (boardId) => {
      const email = prompt('Введите email пользователя с которым хотите поделиться')
      try {
        const res = await API.shareBoard(email, boardId)
        window.location.href = '/dashboard/my'
        alert(`Вы успешно поделились доской с ${email} `)
      } catch (err) {
        alert('Ошибка: проверьте правильность email' )
      }
  }

  const makePublic = async (boardId) => {
    const res = await API.makePublic(boardId)
    window.location.href = '/dashboard/my'
  }

  useEffect(()=>{
    const getMyBoard = async () => {
      const res = await API.getMyBoards()
      setMyBoard(res)
    }
    getMyBoard().finally(() => setIsLoading(false))
  }, [])

  const user_id = localStorage.getItem('id')

  if (isLoading == true) return <p>Загрузка...</p>
  if (myBoard == null) return <p>У вас пока нет</p>
 return (
 <>
  
    <header className="header">
      <div className="header-content">
        <div className="header-left">
          <h2>Boardly</h2>
        </div>

        <div className="header-right">
          <button className="header-btn" onClick={createBoard}>Создать доску</button>
          <NavLink to="/dashboard/public" className="header-btn">Публичные доски</NavLink>
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
          {myBoard.map((el) => (
            <article key={el.id} className="board-card">
              {el.owner_id == user_id && <h2>{el.title} ({localStorage.getItem('name')})</h2>}
              {el.owner_id != user_id && <h2>{el.title} (Owner_ID: {el.owner_id})</h2>}
        

        <div className="public-link">
          <p>Публичная ссылка</p>
          <div className="link-content">
            <svg
              viewBox="0 0 24 24"
              width="16"
              height="16"
              fill="none"
              stroke="currentColor"
              strokeWidth="2"
            >
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
              <path d="M7 11V7a5 5 0 0 1 10 0v4" />
            </svg>
             {el.is_public == 1 && <NavLink to={`/board/${el.id}`}>board/{el.public_hash}</NavLink> }
             {el.is_public == 0 && <span>Не опубликована</span> }
            
          </div>
        </div>
          <div className="action-buttons">
        <button onClick={()=>navigate(`/board/${el.id}`)} className="primary-button">Подключиться</button>
          {el.is_public == 1 && <>{el.is_liked == 1 && <button onClick={()=>likeBoard(el.id)} className="secondary-button">
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
          </button>}</> }
          </div>
            {el.owner_id == user_id && <>
        <div className="action-buttons">
          <button onClick={()=>shareBoard(el.id)} className="secondary-button">Поделиться доступом</button>
          {el.is_public == 1 && <></> }
          {el.is_public == 0 && <button className="secondary-button" onClick={()=> makePublic(el.id)}>Опубликовать</button> }
          
        </div>
            
            </>}
      </article>
    
  ))}

      
    </main>
 </>
 );
};




