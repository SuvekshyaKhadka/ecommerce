<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Commerce project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </head>

 <body>
    {{
        View::make('header')
    }}
    @yield('content')
    {{
        View::make('footer')
    }}
 </body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px

    }
    img.slide-img{
        height: 400px !important;
    }
    .custom-product{
            height: 600px;
    }
    .slide-text{
        background-color: #24465454 !important;
    }
    .trending-img{
        height: 100px;

    }
    .trending-items{
        float:left;
        width: 20%;
    }
    .trending-wrapper{
        margin:20px;
        gap:2px;
    }
    .detail-img{
        height : 200px;
    }
    .search-box{
        width: 500px; !important
        border: 1px;
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom:20px;
        padding-bottom:20px;
    }

</style>
</html>
