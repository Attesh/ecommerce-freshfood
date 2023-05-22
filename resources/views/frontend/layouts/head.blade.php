<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Farm Fresh</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!-- <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon"> -->
    <link href="{{asset('frontend/img/new-logo.png')}}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/owlcarousel/css/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    
    <link href="{{asset('frontend/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/nice-select.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/slicknav.min.css')}}" rel="stylesheet" type="text/css">


    @if(session()->get('langu')=='ar')
    
        <link href="{{asset('frontend/css/style-arabic.css')}}" rel="stylesheet">  
        <link href="{{asset('frontend/css/responsiveness.css')}}" rel="stylesheet">    

    @else
   
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/responsiveness.css')}}" rel="stylesheet">

    @endif
</head>

<body>