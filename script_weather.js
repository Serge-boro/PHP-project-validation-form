const left = document.querySelector('.left'),
  right = document.querySelector('.right'),
  container = document.querySelector('.container-mainPage')

left.addEventListener('click', () => {
  container.classList.add('hover-left')
  container.classList.remove('hover-right')
})

right.addEventListener('click', () => {
  container.classList.add('hover-right')
  container.classList.remove('hover-left')
})

// #########
//Weather
// #########
const url = 'http://api.openweathermap.org/data/2.5/weather?q='

const key = '9a5b2bb96e365e90f2f8f6fc33d08165'
const info = document.querySelector('.info')

const input = document.querySelector('.input-weather'),
  btn = document.querySelector('.btn-weather')

const city = document.querySelector('.city'),
  grad = document.querySelector('.grad'),
  pictures = document.querySelector('.pictures'),
  data = document.querySelector('.date span'),
  feels = document.querySelector('.feels'),
  humidity = document.querySelector('.humidity'),
  visibility = document.querySelector('.visibility'),
  desk = document.querySelector('.desk'),
  min = document.querySelector('.min'),
  max = document.querySelector('.max'),
  pa = document.querySelector('.pa'),
  m_s = document.querySelector('.m_s')

const months = [
  'January',
  'February',
  'March',
  'April',
  'May',
  'June',
  'July',
  'August',
  'September',
  'October',
  'November',
  'December',
]
const weekdays = [
  'Sunday',
  'Monday',
  'Tuesday',
  'Wednesday',
  'Thursday',
  'Friday',
  'Saturday',
]

let currentDate = new Date()
const year = currentDate.getFullYear()
const hours = currentDate.getHours()
const minutes = currentDate.getMinutes()
const date = currentDate.getDate()
let month = currentDate.getMonth()
month = months[month]
const weekday = weekdays[currentDate.getDay()]

data.innerHTML = `${weekday}, ${date} ${month} ${year} ${hours}:${minutes}`
const addValue = () => {
  btn.addEventListener('click', (e) => {
    e.preventDefault()
    // let value = 'London'
    value = input.value
    console.log(value)

    const getWeather = async () => {
      const response = await fetch(`${url}${value}&appid=${key}`)
      const date = await response.json()
      console.log(date)
      const { name, weather, main, wind } = date

      city.innerHTML = `${name}`
      feels.innerHTML =
        (Math.round(`${main.feels_like}` - 273) * 9) / 5 + 32 + '&#176F'
      grad.innerHTML =
        (Math.round(`${main.temp}` - 273) * 9) / 5 + 32 + '&#176F'
      pictures.innerHTML = `<img src='https://openweathermap.org/img/w/${weather[0].icon}.png'></img>`
      humidity.innerHTML = `${main.humidity}` + '%'
      visibility.innerHTML = `${date.visibility}` / 1000 + 'km'
      desk.innerHTML = `${weather[0].description}`
      pa.innerHTML = `${main.pressure}` + 'hPa'
      m_s.innerHTML = Math.round(`${wind.speed}`) + ' m/s S'
      min.innerHTML =
        (Math.round(`${main.temp_min}` - 273) * 9) / 5 + 32 + '&#176F'
      max.innerHTML =
        (Math.round(`${main.temp_max}` - 273) * 9) / 5 + 32 + '&#176F'
    }

    getWeather()
  })
}

addValue()
