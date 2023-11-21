// # UI Elements

var weather_list = document.getElementById("weather_list");
var state = document.getElementById("state");
var city = document.getElementById("city");
var city_list = document.getElementById("search_list");
var city_name = document.getElementById("city_name");

async function api_url() {
  const response = await fetch(`https://api.weather.gov/points/${localStorage.lat},${localStorage.long}`); 

  let data = await response.json(); 

  return data.properties.forecastGridData + "/forecast";
}

function reset_location() {
  localStorage.clear();
  setup();
}

function change_location(city, lat, long) {
  localStorage.city_name = city;
  localStorage.lat = lat;
  localStorage.long = long;
  close_model();
  setup();
}

function close_model() {
  state.value = "";
  city.value = "";
  city_list.innerHTML = ""
  document.getElementById('model').style.display='none';
}

async function search() {

  if (city.value === "") {
    alert("City is required");
    return;
  };

  city_list.innerHTML = "Loading...";

  let state_par = "";

  if (state.value !== "") {
    state_par = "&state=" + state.value;
  };

  const response = await fetch("loc_api.php?city=" + city.value + state_par); 
  let data = await response.json();
  city_list.innerHTML = "";

  for (let index = 0; index < data.length; index++) {
    let record = data[index]
    let ui_city = document.createElement("div");
    ui_city.classList.add("w3-container");
    ui_city.classList.add("w3-animate-left");
    ui_city.classList.add("w3-card");
    ui_city.style.textAlign  = "left"
    
    // Name
    let ui_name = document.createElement("div");
    
    let name_icon = document.createElement("span");
    name_icon.classList.add("material-symbols-outlined");
    name_icon.innerText = "apartment";
    name_icon.style.verticalAlign = "bottom";
    ui_name.appendChild(name_icon)

    let name = document.createElement("span");
    name.innerText = record["name"] + ", " + record["state"];
    ui_name.appendChild(name)

    ui_city.appendChild(ui_name)

    // Lat Long
    let ui_lat_long = document.createElement("div");
    
    let lat_long_icon = document.createElement("span");
    lat_long_icon.classList.add("material-symbols-outlined");
    lat_long_icon.innerText = "map";
    lat_long_icon.style.verticalAlign = "bottom";
    ui_lat_long.appendChild(lat_long_icon)

    let lat_long = document.createElement("span");
    lat_long.innerText = record["latitude"] + ", " + record["longitude"];
    ui_lat_long.appendChild(lat_long)

    // Button
    let choose_button = document.createElement("button");
    choose_button.classList.add("w3-button");
    choose_button.classList.add("w3-blue");
    choose_button.classList.add("w3-round");
    choose_button.addEventListener("click", function() {change_location(record["name"] + ", " + record["state"], record["latitude"], record["longitude"])}, false);
    choose_button.innerText = "Select";
    
    ui_city.appendChild(ui_lat_long)
    ui_city.appendChild(choose_button)

    city_list.appendChild(ui_city)

    let line_break = document.createElement("p");
    city_list.appendChild(line_break)
  }
}

async function update_weather() {
  let url = await api_url();
  
  const response = await fetch(url); 
  //const response = await fetch("https://api.weather.gov/gridpoints/SGX/42,51/forecast"); 

  let data = await response.json(); 

  data = data.properties.periods;
  console.log(data);
  for (let record_number = 0; record_number < data.length; record_number++) {
    let record = data[record_number];
    let ui_record = gererate_ui(record)

    weather_list.appendChild(ui_record)
  }
}

function gererate_ui(record) {
  let ui_record = document.createElement("div");
  ui_record.classList.add("w3-container");
  ui_record.setAttribute("data-aos", "flip-up")

  // Day Name
  let day = document.createElement("h2");
  day.innerText = record["name"];
  ui_record.appendChild(day);

  // Images
  images = get_image_names(record);    
  for (let image of images) {
    let img = document.createElement("img");
    img.src = "images/weather/" + image;
    img.style.height = "125px";
    img.alt = "Weather icon for " + image;
    img.classList.add("shadow-image");
    ui_record.appendChild(img);
  };

  // Overview
  let overview = document.createElement("h3");
  overview.innerText = record.shortForecast
  ui_record.appendChild(overview);

  // Detailed
  let detailed = document.createElement("p");
  detailed.innerText = record.detailedForecast
  ui_record.appendChild(detailed);

  // # Spit View

  let info_row = document.createElement("div");
  info_row.classList.add("w3-row");
  
  // Rain
  if (record.probabilityOfPrecipitation.value != null) {
    let rain_col = document.createElement("div");
    rain_col.classList.add("w3-container");
    rain_col.classList.add("w3-quarter");

    let rain_icon = document.createElement("span");
    rain_icon.classList.add("material-symbols-outlined");
    rain_icon.innerText = "rainy";
    rain_col.appendChild(rain_icon);

    let rain_text = document.createElement("span");
    rain_text.innerText = record.probabilityOfPrecipitation.value + "%";
    rain_col.appendChild(rain_text);
    
    info_row.appendChild(rain_col);
  };

  // Temp
  let temp_col = document.createElement("div");
  temp_col.classList.add("w3-container");
  temp_col.classList.add("w3-quarter");

  let temp_icon = document.createElement("span");
  temp_icon.classList.add("material-symbols-outlined");
  temp_icon.innerText = "device_thermostat";
  temp_col.appendChild(temp_icon);

  let temp_text = document.createElement("span");
  temp_text.innerHTML = record.temperature + " &deg;F";
  temp_col.appendChild(temp_text);

  info_row.appendChild(temp_col);

  // humidity
  let humidity_col = document.createElement("div");
  humidity_col.classList.add("w3-container");
  humidity_col.classList.add("w3-quarter");

  let humidity_icon = document.createElement("span");
  humidity_icon.classList.add("material-symbols-outlined");
  humidity_icon.innerText = "humidity_percentage";
  humidity_col.appendChild(humidity_icon);

  let humidity_text = document.createElement("span");
  humidity_text.innerText = record.relativeHumidity.value + "%";
  humidity_col.appendChild(humidity_text);

  info_row.appendChild(humidity_col);

  // wind
  let wind_col = document.createElement("div");
  wind_col.classList.add("w3-container");
  wind_col.classList.add("w3-quarter");

  let wind_icon = document.createElement("span");
  wind_icon.classList.add("material-symbols-outlined");
  
  switch (record.windDirection) {
    case "N": 
      wind_icon.innerText = "north";
      break;
    case "NE":
      wind_icon.innerText = "north_east";
      break;
    case "E":
      wind_icon.innerText = "east";
      break;
    case "SE":
      wind_icon.innerText = "south_east";
      break;
    case "S":
      wind_icon.innerText = "south";
      break;
    case "SW":
      wind_icon.innerText = "south_west";
      break;
    case "W":
      wind_icon.innerText = "west";
      break;
    case "NW":
      wind_icon.innerText = "north_west";
      break;
  }
  
  wind_col.appendChild(wind_icon);

  let wind_text = document.createElement("span");
  wind_text.innerText = record.windSpeed;
  wind_col.appendChild(wind_text);

  info_row.appendChild(wind_col);

  // Adding Row

  ui_record.appendChild(info_row)

  // divider
  let hr = document.createElement("hr");
  ui_record.appendChild(hr);

  return ui_record;
}

function get_image_names(today_data) {
  let forecast_short = today_data.shortForecast;
  forecast_short = forecast_short.split(" then ");

  for (let forecast_num = 0; forecast_num < forecast_short.length; forecast_num++) {
    let forecast = forecast_short[forecast_num].toLowerCase();
    forecast = forecast.replaceAll(" ", "");
    
    forecast = forecast.replaceAll("patchy", "");
    forecast = forecast.replaceAll("mostly", "");
    forecast = forecast.replaceAll("partly", "");
    forecast = forecast.replaceAll("chance", "");
    forecast = forecast.replaceAll("showers", "");
    forecast = forecast.replaceAll("slight", "");
    forecast = forecast.replaceAll("isolated", "");
    forecast = forecast.replaceAll("light", "");
    forecast = forecast.replaceAll("likely", "");
    forecast = forecast.replaceAll("rainand", "");
    forecast = forecast.replaceAll("andthunderstorms", "rainy");
    forecast = forecast.replaceAll("rainy", "rain");
    forecast = forecast.replaceAll("rain", "rainy");
    forecast = forecast.replaceAll("fog", "cloudy");
    forecast = forecast.replaceAll("drizzle", "rainy");

    forecast = forecast + ".png";
    forecast_short[forecast_num] = forecast;
  }

  forecast_short = [...new Set(forecast_short)];
  return forecast_short;
}

function setup() {
  if (!(localStorage.lat)) {
    localStorage.city_name = "St. Anne School";
    localStorage.lat = 33.4918;
    localStorage.long = -117.7043;
  }

  city_name.innerText = localStorage.city_name;
  weather_list.innerHTML = "";
  update_weather();
}

setup();

