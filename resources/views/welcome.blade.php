<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <livewire:styles>
        <style>
            body {
                background-color: #e7e8ec;
                padding: 10px;
            }

            .border {
                background-color: #fff;
                border: 1px solid rgb(202, 202, 202);
            }

            .style {
                height: 50vh;
                overflow: hidden;
                overflow-y: scroll;
            }

            #style-7::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 0px rgba(252, 252, 252, 0.1);
                background-color: #F5F5F5;
            }

            #style-7::-webkit-scrollbar {
                width: 10px;
                background-color: #F5F5F5;
            }

            #style-7::-webkit-scrollbar-thumb {
                background-color: #F90;
                background-image: -webkit-linear-gradient(45deg,
                rgba(255, 255, 255, .2) 25%,
                transparent 25%,
                transparent 50%,
                rgba(255, 255, 255, .2) 50%,
                rgba(255, 255, 255, .2) 75%,
                transparent 75%,
                transparent)
            }

            .list-group-item {
                padding: 4px;
                font-size: 14px;
            }

            .breadcrumb {
                padding: 4px;
                background-color: white;
                margin-bottom: 0px;
            }

        </style>
        </head>
<body>
<div class="container-fluid">
    <livewire:file-explorer/>
</div>
<livewire:scripts>
</body>
</html>
