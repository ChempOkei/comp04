import React from 'react';
import { createBrowserRouter } from 'react-router-dom';
import LoginPage from '../pages/LoginPage';
import RegisterPage from '../pages/RegisterPage';
import DashBoard from '../pages/DashBoards/Layout';
import PublicDashBoard from '../pages/DashBoards/PublicDashBoard';
import Board from '../pages/Board';
import NotFound from '../pages/NotFoundPage';

const router = createBrowserRouter([
    {
        path: '/login',
        element: <LoginPage />
    },
    {
        path: '/register',
        element: <RegisterPage />
    },
    {
        path: '/dashboard/my',
        element: <DashBoard />
    },
    {
        path: '/dashboard/public',
        element: <PublicDashBoard />
    }, 
    {
        path: '/board/:id',
        element: <Board />
    },
    {
        path: '*',
        element: <NotFound />
    }
])

export default router