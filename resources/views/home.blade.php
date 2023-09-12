<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')
    <title>Home</title>

</head>

<body>

    <table class="table">

        <thead>

            <tr>

                <th scope="col">#</th>

          
                    
                <th scope="col">
                </th>

        
            </tr>

        </thead>

            <tbody>

                @foreach ($trains as $train)
                <tr>

                    <th scope="row">
                        {{$train->id}}
                    </th>                    
                  
                    <td>
                      {{$train->company}}
                    </td>
                    
                    <td>
                      {{$train->departure_station}}
                    </td>
                    
                    <td>
                      {{$train->arrival_station}}
                    </td>
                    
                    <td>
                      {{$train->departure_time}}
                    </td>
                    
                    <td>
                      {{$train->arrival_time}}
                    </td>
                    
                    <td>
                      {{$train->train_code}}
                    </td>
                    
                    <td>
                      {{$train->cart_number}}
                    </td>
                    
                    <td>
                      {{$train->in_time}}
                    </td>
                    
                    <td>
                      {{$train->canceled}}
                    </td>
                    
                </tr>
                @endforeach
                                             
            </tbody>

      </table>
    
</body>

</html>