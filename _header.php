<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?=$PAGE_TITLE?></title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="keywords" content="rap, rwt, osgi, eclipse, equinox, eclipse rap, ajax" />
  <meta name="google-site-verification" content="kMX1SI1MRFpyzEPh4yv_TXRUpKLmBVvENEfQtjdZuwI" />
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" href="/rap/_theme/reset.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/rap/_theme/layout.css" media="screen" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/rap/_theme/index-search-box.css" media="screen" />
<? if( isset( $PAGE_ADD_CSS ) ) { ?>
  <link rel="stylesheet" type="text/css" href="<?= $PAGE_ADD_CSS ?>" media="screen" />
<? } ?>
  <link rel="stylesheet" type="text/css" href="/rap/_theme/print.css" media="print" />
  <link rel="stylesheet" type="text/css" href="/rap/_theme/prettify/prettify.css" />
  <!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="/rap/rap-layout-fixes-ie.css"/><![endif]-->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="//w3.eclipsesource.com/www/js/rap/jquery.zrssfeed.min.js"></script>
  <script type="text/javascript" src="/rap/script.js"></script>
  <script type="text/javascript" src="/rap/_theme/prettify/prettify.js"></script>
  <script type="text/javascript" src="/rap/_theme/prettify/lang-css.js"></script>
  <style type="text/css">
    input::-ms-clear, input::-ms-reveal {
      display: none;
    }
  </style>
</head>
<body>

  <div id="info-box">
    <div>
      <img src="/rap/images/twitter.png" alt="Twitter Logo" />
      <a href="https://twitter.com/EclipseRAP/">Follow us on Twitter</a>
    </div>
    <div>
      <img src="/rap/images/project-stats.png" alt="Project Information" />
      <a href="http://projects.eclipse.org/projects/rt.rap">About this project</a>
    </div>
  </div>

  <div id="header-bar">
<?
  include( $_SERVER['DOCUMENT_ROOT'] . '/rap/_navigation.php' );
?>
  </div>
  <div id="novaWrapper">
    <div id="novaContent">
