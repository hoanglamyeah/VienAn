<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <main>
        <div class="wrapper">
            <section class="post row">
                <div class="small-12 medium-12">
                    <nav role="navigation">
                        <ul class="breadcrumbs">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">CATEGORY NAME</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="grid-x small-12 medium-9">
                    <div class="col small-12 medium-6">
                        <a href="#">
                            <img src="https://picsum.photos/600/600" width="600" height="600"/>
                        </a>
                    </div>
                    <div class="col product-detail small-12 medium-6">
                        <h1>Vòng bít HA bắp tay Rossmax</h1>
                        <div class="is-divider"></div>
                        <div class="product-description">
                            <ul>
                                <li><strong>Hãng sản xuất:</strong> Omron Heathcare</li>
                                <li><strong>Sản xuất tại:</strong> Nhật Bản</li>
                                <li><strong>Bảo hành:</strong> 3 Năm</li>
                                <li><strong>Nguồn điện:</strong> Gồm 4 pin AA hoặc 1 bộ đổi điện Omron (Mua thêm)</li>
                                <li><strong>Kích Thước:</strong> Khoảng 107 (rộng) x 79 (cao) x 141 (dài).</li>
                                <li><strong>Khối Lượng:</strong> 280gr chưa bao gồm pin</li>
                                <li><strong>Mầu sắc:</strong> Trắng – Xám</li>
                            </ul>
                        </div>
                        <div class="small-12 medium-12 price-wrapper">
                            <p class="price">
                                <span class="amount">200,000&nbsp;</span><span class="currency-symbol">đ</span>
                            </p>
                        </div>
                        <div class="grid-x small-12 medium-12">
                            <div class="small-12 medium-6">
                                <a class="button primary expand">
                                    <i class="fa fa-shopping-cart"></i><span>&nbsp;Thêm vào giỏ</span>
                                </a>
                            </div>
                            <div class="medium-offset-1 small-12 medium-5">
                                <a class="button success">
                                    <i class="fa fa-phone"></i><span>&nbsp;0901.588.287</span>
                                </a>
                            </div>
                        </div>
                        <div class="small-12 medium-12">
                            <a data-open="modalMuahang">
                                <div class="muahangnhanh">
                                    <b style="display: block">ĐẶT HÀNG NHANH</b>
                                    <span>Giao hàng tận nơi miễn phí nội thành!</span>
                                </div>
                            </a>
                        </div>
                        <div class="small reveal" id="modalMuahang" data-reveal>
                            <div class="form-title">
                                <p class="title-dat-hang">Đặt hàng nhanh</p>
                                <p>Giao hàng tận nơi, miễn phí toàn quốc</p>
                                <hr/>
                            </div>
                            <button class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="form-content">
                                <div class="content-left">
                                    <img src="https://picsum.photos/305/305" width="305" height="305"/>
                                    <div class="title">Vòng bít HA bắp tay Rossmax</div>
                                    <div class="price-wrapper">
                                        <p class="price">
                                            <span class="amount">200,000&nbsp;</span><span class="currency-symbol">đ</span>
                                        </p>
                                    </div>
                                    <div class="warning-content">
                                        <p>Bạn vui lòng nhập đúng thông tin đặt hàng gồm:
                                            Họ tên, SĐT, Email, Địa chỉ để chúng tôi được phục vụ bạn tốt nhất !</p>
                                    </div>
                                </div>
                                <div class="content-right">
                                    <form>
                                        <div class="grid-container">
                                            <div class="grid-x grid-padding-x">
                                                <div class="medium-12 small-12">
                                                    <input type="text" name="txtName" class="form-group" placeholder="Họ tên:">
                                                </div>
                                                <div class="medium-12 small-12">
                                                    <input type="text" name="txtEmail" class="form-group" placeholder="Email:">
                                                </div>
                                                <div class="medium-12 small-12">
                                                    <input type="text" name="txtPhone" class="form-group"
                                                           placeholder="Số điện thoại:">
                                                </div>
                                                <div class="medium-12 small-12">
                                                    <input type="text" name="txtAddress" class="form-group"
                                                           placeholder="Địa chỉ nhận hàng:">
                                                </div>
                                                <div class="medium-12 small-12">
                                                    <input type="number" name="txtQuantity" class="form-group" value="1"/>
                                                </div>
                                                <div class="medium-12 small-12">
                                                    <input type="text" name="txtTotalPrice" class="form-group" value="800,000"/>
                                                </div>
                                                <button class="button large">ĐẶT HÀNG</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-12 product-footer">
                        <div>
                            <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
                                <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Tab 1</a></li>
                                <li class="tabs-title"><a href="#panel2c">Tab 2</a></li>
                            </ul>

                            <div class="tabs-content" data-tabs-content="collapsing-tabs">
                                <div class="tabs-panel is-active" id="panel1c">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="tabs-panel" id="panel2c">
                                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-sidebar" class="small-12 medium-3 sidebar">
                    <div class="widget product-menu">
                        <span class="shop-sidebar">DANH MỤC SẢN PHẨM</span>
                        <ul class="vertical menu accordion-menu" data-accordion-menu>
                            <li>
                                <a href="#">
                                    <i class="fa fa-home"></i>&nbsp;Y Tế Gia Đình</a>
                                <ul class="menu vertical nested">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-heart"></i>&nbsp;Item 2</a>
                                <ul class="menu vertical nested">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-heart"></i>&nbsp;Item 2</a>
                                <ul class="menu vertical nested">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-heart"></i>&nbsp;Item 2</a>
                                <ul class="menu vertical nested">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-heart"></i>&nbsp;Item 2</a>
                                <ul class="menu vertical nested">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-heart"></i>&nbsp;Item 2</a>
                                <ul class="menu vertical nested">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="widget product-seen">
                        <span class="shop-sidebar">SẢN PHẨM VỪA XEM</span>
                        <div class="grid-x grid-padding-x">
                            <div class="small-4 medium-4 cell">
                                <img src="https://picsum.photos/180/180" width="180" height="180"/>
                            </div>
                            <div class="small-8 medium-8 cell">
                                <h4 class="product-title">Ten san pham</h4>
                                <div>
                                    <span class="amount">200,000&nbsp;</span><span class="currency-symbol">đ</span>
                                </div>
                                <span class="amount">149,000&nbsp;</span><span class="currency-symbol">đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php get_footer();
