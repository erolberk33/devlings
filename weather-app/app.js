const url = 'https://api.openweathermap.org/data/2.5/';
const key = 'd89e415103e7d8520d39c363f1c895ff';
const searchBar = document.getElementById('searchBar');

const setQuery = (e) => {
    if (e.keyCode == '13')
        getResult(searchBar.value);
}

const getResult = (cityName) => {
    // console.log(cityName);
    let query = `${url}weather?q=${cityName}&appid=${key}&units=metric&lang=tr`;

    fetch(query)
        .then(weather => {
            return weather.json()
        })
        .then(displayResult)
}

const displayResult = (result) => {
    console.log(result);
    let city = document.querySelector('.city')
    city.innerText = `${result.name},${result.sys.country}`

    let temp = document.querySelector('.temp')
    temp.innerText = `${Math.round(result.main.temp)}°C`

    let desc = document.querySelector('.desc')
    desc.innerText = `${result.weather[0].description}`

    let minmax = document.querySelector('.minmax')
    minmax.innerHTML = `${Math.round(result.main.temp_min)}°C / ${Math.round(result.main.temp_max)}°C`
}

searchBar.addEventListener('keypress', setQuery);
console.log(searchBar);