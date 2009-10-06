<?php
$_head_profile_attr = '';
if ( bb_is_profile() ) {
    global $self;
    if ( !$self ) {
        $_head_profile_attr = ' profile="http://www.w3.org/2006/03/hcard"';
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head<?php echo $_head_profile_attr; ?>>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=0.6667, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="YES" />
    <title><?php bb_title() ?></title>
    <link type="text/css" rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" />

<?php bb_feed_head(); ?>

<?php bb_head(); ?>

</head>
<body id="<?php bb_location(); ?>">
