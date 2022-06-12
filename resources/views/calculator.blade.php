<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

</head>

<body style="background-color: #041b2d">
    <br><br><br><br>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="calculation" method="POST">
                    @csrf
                    <div class="card" style="background-color: #308695">
                        <div class="card-body m-auto">
                            <h1 class="text-center text-light">Arithmtic Calculator</h1>
                            <div class="form-group row">
                                <div class="col-md-9 p-4 ">
                                    <input type="number" name="firstnumber" class="form-control"
                                        placeholder="Enter first number" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9 p-4">
                                    <input type="number" name="secondnumber" class="form-control"
                                        placeholder="Enter second number" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <select name="operator" id="">
                                        <option value="">----Select Operator----</option>
                                        <option value="+">+</option>
                                        <option value="-">-</option>
                                        <option value="*">*</option>
                                        <option value="/">/</option>
                                        <option value="%">%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" value="Enter">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-4 m-auto">
            @if (session('message'))
                <div class="alert alert-warning">
                    <h1 class="text-center">{{ session('message') }} </h1>
                </div>
            @endif
        </div>
    </div>
</body>

</html>
