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
<div id="page" class="site">

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
                    <div class="top-bar-left">
                        <ul class="menu" data-dropdown-menu>
                            <li class="menu-text logo-aria">
                                <img src="https://thietbiytevienan.com/wp-content/uploads/2018/01/logvienanmoi-01-01-01.png"/>
                            </li>
                            <li class="search-bar">
                                <input type="search" placeholder="Search">
                            </li>
                            <li class="search-button">
                                <button type="button" class="button">Tìm kiếm</button>
                            </li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="dropdown menu" data-dropdown-menu>
                            <li class="account">
                                <a href="">
                                    <span class="profile"><img src="https://picsum.photos/80/80"/></span>
                                    <span>Đăng nhập</span>
                                    <span>Tài khoản & đơn hàng</span>
                                </a>
                                <ul class="menu">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                </ul>
                            </li>
                            <li class="shopping-cart">
                                <i class="fa fa-cart-plus">
                                    <label class="label">0</label>
                                </i>
                                <label>Gio Hang</label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="top-bar second-bar grid-x">
                    <div class="top-bar-left large-3">
                        <ul class="dropdown menu root-menu" data-dropdown-menu>
                            <li>
                                <a href="#">Item 1</a>
                                <ul class="mega-menu vertical dropdown menu">
                                    <li>
                                        <a href="#">Item 1</a>
                                        <ul class="vertical menu nested">
                                            <li><a href="#">Item 1A</a></li>
                                            <div class="grid-x">
                                                <div class="large-auto cell">One</div>
                                                <div class="large-auto cell">Two</div>
                                                <div class="large-auto cell">Three</div>
                                                <div class="large-auto cell">Four</div>
                                                <div class="large-auto cell">Five</div>
                                                <div class="large-auto cell">Six</div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                    <li><a href="#">Item 4</a></li>
                                    <!-- ... -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="top-bar-right large-9">
                        <ul class="menu">
                            <li>Khuyến Mãi</li>
                            <li>Tổng đài CSKH: 0123456789</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="wrapper">
