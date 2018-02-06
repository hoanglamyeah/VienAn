<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="header-ads">
        <div class="wrapper">
            <img src="https://picsum.photos/1200/66"/>
        </div>
    </div>
    <div class="wrapper">
        <div class="main-header">
            <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
                <div class="title-bar-title">Menu</div>
            </div>

            <div class="top-bar" id="responsive-menu">
                <div class="small-3">
                    <ul class="menu" data-dropdown-menu>
                        <li class="logo-aria">
                            <a href="<?php echo get_home_url(); ?>"><img src="https://thietbiytevienan.com/wp-content/uploads/2018/01/logvienanmoi-01-01-01.png"/></a>
                        </li>
                    </ul>
                </div>
                <div class="small-9">
                    <div class="dropdown menu row small-12" data-dropdown-menu>
                        <?php get_search_form(); ?>
                        <div class="small-4 account-cart">
                            <div class="wrap grid-x">
                                <div class="small-6 account">
                                    <div class="left">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="right">
                                        <span>Đăng nhập</span>
                                        <span>Tài khoản</span>
                                    </div>
                                </div>
                                <div class="small-6 cart">
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="text">Giỏ hàng </span>
                                        <span class="count">10</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="top-bar second-bar grid-x">
                <div class="top-bar-left large-3">
                    <?php wp_nav_menu(array(
                        'menu_id' => 'root-menu',
                        'menu_class' => 'dropdown menu root-menu',
                        'theme_location' => 'top',
                        'container' => '',
                        'walker' => new top_bar_walker()
                    )); ?>
                </div>
                <div class="top-bar-right large-9">
                    <ul class="menu">
                        <li><img src="https://zshop.vn/images/banner_v3_2/icon_km.gif"
                                 rel="float: left; margin: 0px 0px 5px 0px; background-color: initial;" alt="Khuyến mãi"
                                 style="float: left; margin: 0px 0px 5px 0px; background-color: initial;">Khuyến Mãi
                        </li>
                        <li><a href="">Hướng dẫn mua hàng</a></li>
                        <li>Tổng đài CSKH: 0123456789</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>