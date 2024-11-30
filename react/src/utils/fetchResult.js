import axios from 'axios';

function getCsrfToken() {
    const name = 'csrfToken'; // Имя вашего CSRF токена в cookie
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

const csrfToken = getCsrfToken();

const fetchResult = (res) => {
    axios.post('/send_result', {...res, csrfToken: csrfToken}, {
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => {
            const data = response.data
            console.log(data)

        })
        .catch(error => {
            console.error('Ошибка при извлечении данных:', error);
        });

};

export default fetchResult