<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
</head>
<body>
    <input type="file" class="my-pond" name="filepond"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
</body>
</html>
<script>
    $(document).ready(function (){
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create(inputElement);

        pond.setOptions({
            maxFiles: 1,
            server: {
                url: "{{url('/upload-file')}}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            }
        });
    })
</script>
