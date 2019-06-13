
<!DOCTYPE html>
<html>
<head>
	<title>weather</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1>{{ $data->title }}</h1>
    <div class="container">
        <div class="content">
        
        </div>
        <div class="row">
            @foreach ($hi as $key=>$value)
            <div class="col-md-2">

            	<!-- <p><img src="https://www.metaweather.com//static/img/weather/lr.svg" alt="" width="60px" height="60px"></p> -->

                <p>{{ $value->applicable_date }}</p>
               
                @if ($value->weather_state_abbr === 'lr')
    				<p><img src="https://www.metaweather.com/static/img/weather/lr.svg" alt="" width="60px" height="60px"></p>
				@elseif ($value->weather_state_abbr === 's')
					<p><img src="https://www.metaweather.com/static/img/weather/s.svg" alt="" width="60px" height="60px"></p>
				@elseif ($value->weather_state_abbr === 'hr')
					<p><img src="https://www.metaweather.com/static/img/weather/hr.svg" alt="" width="60px" height="60px"></p>
				@elseif ($value->weather_state_abbr === 'hc')
					<p><img src="https://www.metaweather.com/static/img/weather/hc.svg" alt="" width="60px" height="60px"></p>
				@elseif ($value->weather_state_abbr === 'lc')
					<p><img src="https://www.metaweather.com/static/img/weather/lc.svg" alt="" width="60px" height="60px"></p>
				@elseif ($value->weather_state_abbr === 'c')
					<p><img src="https://www.metaweather.com/static/img/weather/c.svg" alt="" width="60px" height="60px"></p>
				@endif
				
              <!--   <p>{{ $value->wind_direction_compass }}</p> -->
                <p>{{ $value->weather_state_name }}</p>
                <h5>Temperature</h5>
                <p>min  {{ $value->min_temp }} ℃</p>
                <p>max  {{ $value->max_temp }} ℃</p>
                <!-- <p>{{ $value->the_temp }}</p>
                <p>{{ $value->wind_speed }}</p>

                <p>{{ $value->wind_direction }}</p>
                <p>{{ $value->air_pressure }}</p>
                <p>{{ $value->humidity }}</p>
                <p>{{ $value->visibility }}</p>
                <label for=""></label>
                <p>{{ $value->predictability }}</p> -->
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>

<!-- <h1 > Hi </h1> -->