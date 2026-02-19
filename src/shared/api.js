const clietnId = 'ClientId'
const host = 'http://localhost:3000'
const baseHeaders = {
    ClientId: clietnId,
    'Content-Type': 'application/json'
}

const getAuthHeader = () => {
    const token = localStorage.getItem('access-token')
    return token ? {Authorization: `Bearer ${token}`} : {}
}

const fetchClient = async (route, request) => {
    const res = await fetch(host + route, {
        ...request,
        headers: {
            ...baseHeaders,
            ...getAuthHeader(),
            ...request?.headers
        }
    })
    if (res.status === 401) {
        if (route !== '/auth/login') {
            localStorage.clear()
            window.location.href = '/login'
        }
    }

    const data = res.json().catch(()=>({}))
    if (!res.ok) throw data
    return data
    
}

export const API = {
    login: (formData) => 
        fetchClient('/api/auth/login',{
            method: 'POST', 
            body: JSON.stringify(formData)
        }),
    register: (formData) => 
        fetchClient('/api/auth/register', {
            method:  'POST', 
            body: JSON.stringify(formData)
        }),
    createBoard: (formData) =>
        fetchClient('/api/boards', {
            method: 'POST',
            body: JSON.stringify(formData)
        }),
    getMyBoards: () => fetchClient('/api/boards/my'),
    getPublic: () => fetchClient('/api/boards/public/list'),
    makePublic: (boardId) =>
        fetchClient(`/api/boards/${boardId}/public`, {
            method: 'POST',
            body: JSON.stringify()
        }),
    logout: () => {
        localStorage.clear()
        window.location.href = '/login'
    },
    likeBoard: (boardId) => 
        fetchClient(`/api/boards/${boardId}/like`,
            {
            method: 'POST',
            body: JSON.stringify()
        }),
    getBoard: (boardId) => fetchClient(`/api/boards/${boardId}`),
    shareBoard: (email, boardId) => fetchClient(`/api/boards/${boardId}/access`, {
        method: 'POST',
        body: JSON.stringify({email})
    })
}

