<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$metaTitle?> | {{ Config::get('settings.sitename') }}</title>
    <meta name="title" content="{{ $metaTitle }} | {{ Config::get('settings.sitename') }}">
    <meta name="DC.title" content="{{ $metaTitle }} | {{ Config::get('settings.sitename') }}">
    <meta property="og:title" content="{{ $metaTitle }} | {{ Config::get('settings.sitename') }}">
    <meta name="description" content="{{ $metaContent }}">
    <meta http-equiv="DC.Description" content="{{ $metaContent }}">
    <meta property="og:description" content="{{ $metaContent }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{{ isset($metakeywords) ? $metakeywords : Config::get('settings.metakeywords').', '.$metaTitle }}}">
    <meta property="og:image" content="{{ URL::to('/') }}"/>
    <meta name="resource-type" content="document">
    <meta name="revisit-after" content="7 days">
    <meta name="classification" content="Business">
    <meta name="GOOGLEBOT" content="index follow">
    <meta http-equiv="CACHE-CONTROL" content="no-cache,no-store,must-revalidate">
    <meta name="audience" content="all">
    <meta name="robots" content="ALL">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="copyright" content="(r) www.elec.cl">
    <meta name="author" content="{{ Config::get('settings.sitename') }}">
    <meta name="language" content="sp">
    <meta name="doc-type" content="Public">
    <meta name="doc-class" content="Completed">
    <meta name="doc-rights" content="{{ Config::get('settings.sitename') }}">
    <meta name="doc-publisher" content="{{ Config::get('settings.sitename') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="canonical" href="{{ Request::path() }}">
    <meta property="og:url" content="{{ Request::path() }}">
    <meta property="og:site_name" content="{{ Config::get('settings.sitename') }}">
    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/estilosITD.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>



