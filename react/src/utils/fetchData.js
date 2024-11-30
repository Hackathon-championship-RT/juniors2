import axios from 'axios';

function getCsrfToken() {
    const name = 'csrfToken'; // Имя вашего CSRF токена в cookie
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

const csrfToken = getCsrfToken();

const fetchData = (params, setInfo) => {
	axios.post('/get_config', {...params, csrfToken: csrfToken}, {
		headers: {
			'Content-Type': 'application/json'
		}
	})
		.then(response => {
			const data = response.data
			setInfo(data)
		})
		.catch(error => {
			console.error('Ошибка при извлечении данных:', error);
			setInfo({})
		});
	
};



export default fetchData