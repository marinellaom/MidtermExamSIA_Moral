<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Midterm Exam - Moral</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
   
    <div class="container" style="background-color: pink; margin-top: 50px;">
        <div class="content bg-secondary text-center" >
            <form action="" method="GET">
            @csrf


                <div class="numbers" style="color: green; background-color: pink; padding-top: 50px;"> 
                
                <h4 style="color:black;">MIDTERM EXAM</h4>
                <div class="row inputs" >
                    <div class="col-md-12 m-1 text-center">
                        <input class="w-50" type="number" name="firstvalue" class="txt form-control" style=" border-radius: 15px;" placeholder="  Enter Number" required="">
                    </div>
                    <div class="col-md-12 m-1">
                        <input class="w-50" type="number" name="secondvalue" class="txt form-control" style=" border-radius: 15px;" placeholder="  Enter Number" required="">
                    </div>
                    <div class="col-md-12 m-1">
                        <input class="w-50"type="number" name="thirdvalue" class="txt form-control" style=" border-radius: 15px;" placeholder="  Enter Number" required="">
                    </div>
                    <div class="col-md-12 mt-4">
                        <input type="submit" name="btn " class="btn btn-success font-weight-bold" style=" width: 150px;" value="Enter">
                    </div>
                </div>                    

                <div class="results inputs p-5">
                <h5 style="background-color: pink; margin-bottom: 20px; margin-top: 40px;" >RESULTS</h5>
                    <div class="row">
                        <div class="col-sm-4">Perimeter of Rectangle: </div>
                        <div class="col-sm-4">Volume of Cuboid: </div>
                        <div class="col-sm-4">Area of Square: </div>
                    </div>
                    <div class="row">
                        @foreach($results as $result)
                        <div class="col-sm-4">{{$result}}</div>
                        @endforeach
                    </div>
                </div>
                    

                    </div>
                    </form>
                </div>
            </div>
        </div>
       
    </body>
</html>
