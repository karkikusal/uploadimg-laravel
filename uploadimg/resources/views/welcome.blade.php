<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>file upload</h1>
                <img src="{{asset('storage/images/')}} alt="">
                <form action="{{route('uploadImage')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="file" class="form-control" name='image'>
                    </div>
                    <button type="submit" class="btn btn-primary">upload</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>