import React, { useEffect, useState } from 'react';
import { API } from '../shared/api';

export default function useGetBoard(id) {
    const [board, setBoard] = useState(null)
    const [isLoading, setIsLoading] = useState(true)

     useEffect(()=>{
            const getBoard = async () => {
              const res = await API.getBoard(id)
              setBoard(res)
            }
            getBoard().finally(() => setIsLoading(false))
          }, [id])

        return {board, setBoard, isLoading } 
};
