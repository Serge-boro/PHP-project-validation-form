
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
   <link rel="stylesheet" href='../css/style.css'> 
    <title>main Page</title>
  </head>
  <body>
  <div class="header">
   <?php ?>
        <p class='header-text'>Thank you for visiting the page, get enjoy and check for the forecast, and doesn't forget the umbrella if it necessary <?=$_COOKIE['user']?><a href="./exit.php">Go back</a></p>
   <?php ?>
  </div>

    <div class="container-mainPage">
      <div class="split left">
        <h1>My portfolio</h1>
        <a href="#" class="btn left-btn">set portfolio</a>
        <a href="#" class="btn right-btn">set GitHub</a>
      </div>
      <div class="split right">
         <video
        autoplay
        muted
        loop
        class="video-container"
        poster="./images/project-1.jpeg"
      >
        <source src="../img/sky3.mp4" type="video/mp4" />
        Sorry your browser does not support embedded videos
      </video>
        <!-- weather -->
        <div class="container-weather">
          <div class="main-block">

            <!-- first block -->
            <div class="main-block_info">
            <div class="info">
              <div class="date"> Los Angeles time: <br/> <span>12:25pm, Jun 9</span></div>
              <div class="city">Arcadia, US</div>
            </div>
          </div> 

       <div class="info-weather">
              <div class="weather-form">
                <input
                  type="text"
                  placeholder="name city"
                  class="input-weather"
                />
                <button class="btn-weather">get weather</button>
              </div>
               
        </div> 
        <!-- end first block -->


             <div class="info_add">
                  <div class="pictures"><img src="../img/weather.jpg" alt="" ></div>
                  <div class="grad">74°F</div>    
            </div>

            <div class="info_small">
             <p class='feel'>feels_like: <span class='feels'>75°F</span> </p>
             <p class=desk>Cloudy</p>
            </div>

               <div class="block">
                 <div class="block-one">
                 <ul class="small-info-add">
                <li><span class="m_s">3.6m/s S</span>  </li>
                 <li>temp Min: <span class="min">70°F</span> </li>
                <li>Humidity: <span class="humidity">35%</span></li>
               </ul>
               </div>
               <div class="block-two">
                 <ul class="small-info-add">
                  <li> <span class="pa">1018hPa</span></li>
                  <li> temp Max: <span class="max">75°F</span></li>
                  <li>Visibility: <span  class="visibility">10km</span></li>
                </ul>
               </div>
               </div>
             </div>
            </div>
         <!-- end weather -->   
          </div>
      
        </div>
      </div>
    </div>

    <script src="../script_weather.js"></script>
  </body>
</html>