import React from 'react';
import { useNavigate } from 'react-router-dom';

export default function NotFound() {
    const navigate = useNavigate()
 return (
 <>
     <main className="auth-container">
      <div className="auth-card">
        <div className="auth-header">
          <h1>ОШИБКА 404 - СТРАНИЦА НЕ НАЙДЕНА</h1>
        </div>
          <button onClick={()=>navigate('/register')} type="submit" className="auth-btn">Перейти к регистрации</button>
      </div>
    </main>
 </>
 );
};
