import React, { useState } from 'react';
import { NavLink, useNavigate } from 'react-router-dom';
import { API } from '../shared/api';

const initialFormData = {
  email: '',
  name: '',
  password: '',
}


export default function RegisterPage() {

  const navigate = useNavigate()
  const [formState, setFormState] = useState({})
  const [errors, setErrors] = useState()
  const formData = {
    ...initialFormData,
    ...formState,
  }

  const onChange = (e) => {
    setFormState({ ...formState, [e.target.name]: e.target.value })
  }

  const onSubmit = async (e) => {
    e.preventDefault()
    setErrors()
    try {
      const res = await API.register(formData)
      navigate('/login')
    } catch (err) {
      if (err.fields) {
        setErrors(err.fields)
      } else if (err.message) {
        setErrors({ email: err.message })
      } else {
        setErrors('Ошибка валидации ' + err)
      }
    }
  }

  return (
    <>
      <main className="auth-container">
        <div className="auth-card">
          <div className="auth-header">
            <h1>Регистрация</h1>
          </div>

          <form className="auth-form" onSubmit={onSubmit}>
            <div className="form-group">
              <label htmlFor="email">Email</label>
              <input
                type="email"
                id="email"
                className="auth-input"
                placeholder="user@example.com"
                onChange={onChange}
                value={formData.email}
                name='email'
              />
              {errors && <div>{errors}</div>}
            </div>

            <div className="form-group">
              <label htmlFor="name">Имя</label>
              <input
                type="text"
                id="name"
                className="auth-input"
                placeholder="John"
                onChange={onChange}
                value={formData.name}
                name='name'
              />
              {errors && <div>{errors}</div>}
            </div>

            <div className="form-group">
              <label htmlFor="password">Пароль</label>
              <input
                type="password"
                id="password"
                className="auth-input"
                placeholder="••••••••••••"
                onChange={onChange}
                value={formData.password}
                name='password'
              />
              {errors && <div>{errors}</div>}
            </div>

            <button type="submit" className="auth-btn">Зарегистрироваться</button>
          </form>

          <div className="auth-footer">
            <span>Уже есть аккаунт?</span>
            <NavLink to="/login" className="auth-link">Войти</NavLink>
          </div>
        </div>
      </main>

    </>
  );
};


