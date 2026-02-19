import React, { useState } from 'react';
import { API } from '../shared/api';
import { NavLink, useNavigate } from 'react-router-dom';

const initialFormData = {
  email: '',
  password: '',
}

export default function LoginPage() {

  const navigate = useNavigate()
  const [formState, setFormState] = useState({})
  const [errors, setErrors] = useState()
  const formData = {
    ...initialFormData,
    ...formState,
  }

  const onChange = (e) => {
    setFormState({...formState, [e.target.name]: e.target.value})
  }

  const onSubmit = async (e) => {
    e.preventDefault()
    setErrors()
    try {
      const res = await API.login(formData)
      localStorage.setItem('access-token', res.token)
      localStorage.setItem('email', res.user.email)
      localStorage.setItem('name', res.user.name)
      localStorage.setItem('id', res.user.id)
      navigate('/dashboard/public')
    } catch (err) {
      if (err.fields) {
        setErrors(err.fields)
      } else if (err.message) {
        setErrors({email: err.message})
      } else {
        setErrors('Неверный логин или пароль')
      }
    }
  }

 return (
 <>
    <main className="auth-container">
      <div className="auth-card">
        <div className="auth-header">
          <h1>Авторизация</h1>
        </div>

        <form className="auth-form" onSubmit={onSubmit}>
          <div className="form-group">
            <label htmlFor="email">Email</label>
            <input
              type="email"
              id="email"
              className="auth-input"
              placeholder="example@mail.com"
              onChange={onChange}
              value={formData.email}
              name='email'
            />
            {errors && <div>{errors}</div>}
          </div>

          <div className="form-group">
            <label htmlFor="password">Пароль</label>
            <input
              type="password"
              id="password"
              className="auth-input"
              placeholder="password"
              onChange={onChange}
              value={formData.password}
              name='password'
            />
            {errors && <div>{errors}</div>}
          </div>

          <button type="submit" className="auth-btn">Войти</button>
        </form>

        <div className="auth-footer">
          <span>Нет аккаунта?</span>
          <NavLink to="/register" className="auth-link">Зарегистрироваться</NavLink>
        </div>
      </div>
    </main>
 
 </>
 );
};




