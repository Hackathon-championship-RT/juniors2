import React, { useState, useEffect } from 'react';

const Timer = ({ time, onEnd, setCurTime }) => {
	const [timeLeft, setTimeLeft] = useState(time ?? 10); // Таймер на 10 секунд  
	const [isActive, setIsActive] = useState(time); // Таймер активен при монтировании  

	if (isActive) {
		setCurTime(timeLeft)
	}

	useEffect(() => {
		// Функция для запуска таймера  
		const id = setInterval(() => {
			setTimeLeft(prevTime => {
				if (prevTime <= 1) {
					clearInterval(id)
					setIsActive(false)
					onEnd()
					return 0
				}
				return prevTime - 1
			})
			
		}, 1000)
		return () => {
			clearInterval(id);
		}
	}, []) 


	return (
		<div>
			<h1>{isActive ? `Осталось времени: ${timeLeft} секунд` : 'Таймер остановлен'}</h1>
			{!isActive && <button onClick={() => setIsActive(true)}>Перезапустить таймер</button>}
		</div>
	)
};

export default Timer
