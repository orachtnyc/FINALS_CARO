<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Final_API</title>
  <link rel="stylesheet" href="css/style.css">

  <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #808080;">
  <div class="container text-center ">
    <div class="row">
      <h1 class="text-center ">CITY SEARCH</h1>
        <div class="col-md-4 m-auto">
            <form action="/" method="get">
            @csrf
            <div class="row m-2">
                <label for="value1">Country</label>
                <input style=" "type="text" name="q" id="" placeholder="Input country"><br>
                <label for="value1">Language</label>
                <input type="text" name="language" id="" placeholder="en-us"><br>
            </div>
        
            <button type="submit" class="mt-3 btn btn-info">Submit</button>
            </form>
        </div>
        </div>
    </div>
    <div class="border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="results text-center bg-opacity-secondary p-3">
        <div class="row">
          <div class="col-sm-12"><h3>Search Results</h3></div>
        </div>
        <div class="row border-dark m-4">
          @isset($data)
          <div class="col-3"><h4>Country</h4></div>
          <div class="col-9">
            {{print_r($data[0]["Country"]["LocalizedName"])}}
          </div>
          <div class="col-3"><h4>World Position</h4></div>
            <div class="col-9">

              <div class="row">
                <div class="col-4">
                  <p>Latitude</p>{{print_r($data[0]["GeoPosition"]["Latitude"])}}<br>
                </div>
                <div class="col-4">
                  <p>Longitude</p>{{print_r($data[0]["GeoPosition"]["Longitude"])}}
                </div>
              </div>
            </div>
          </div>

          @endisset
        </div>
      </div>
    </div>
  </div>
</body>
</html>