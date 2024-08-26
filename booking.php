<?php include('header.php') ?>
<!-- breadcrumb -->
<section class="main_breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumb-content">
                <h2>Book Astrology</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Booking</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="content-area" style="padding-top: 60px;">
        <!-- .entry-header -->
        <div class="row">
            <div class="col-sm-9">
                <div class="block-sm login_box">
                    <h3>Book Astrology</h3>
                    <div class="comments-form-wrapper clearfix comment-respond">
                        <div class="row">
                            <div class="col-sm-12"></div>
                        </div>
                        <form class="comment-form" method="post" action="booking-post.php">
                            <div class="field">
                                <label for="name"> Name <em class="required">*</em></label>
                                <input type="text" class="input-text" title="Name" name="name" required="">
                            </div>
                            <div class="field">
                                <label for="email"> Phone <em class="required">*</em></label>
                                <input type="text" class="input-text validate-email" title="Phone" name="mobile_no"
                                    required="">
                            </div>
                            <div class="field">
                                <label for="email"> Email <em class="required">*</em></label>
                                <input type="text" class="input-text validate-email" title="Email" name="emai">
                            </div>
                            <div class="field">
                                <label for="email"> Date Of Birth <em class="required">*</em></label>
                                <input type="date" class="input-text validate-email" title="DOB" name="birth_date">
                            </div>

                            <div class="field">
                                <label for="email"> Birth Of Time <em class="required">*</em></label>
                                <input type="time" class="input-text validate-email" title="Time" name="birth_time">
                            </div>
                            <div class="field">
                                <label for="email"> Birth Of Place <em class="required">*</em></label>
                                <input type="text" class="input-text validate-email" title="BOP" name="birth_place">
                            </div>

                            <div class="clear"></div>
                            <div class="field aw-blog-comment-area">
                                <label for="comment">Enter Message</label>
                                <textarea rows="5" cols="50" class="input-text" title="Comment"
                                    name="messege"></textarea>
                            </div>
                            <div style="width:96%" class="button-set">
                                <button type="submit" class="btn submit" name="submit"><span><span> Submit
                                        </span></span></button>
                            </div>
                        </form>
                    </div>

                </div> <br />
            </div>

         
        </div>
    </div>
</div>

<!-- Start Footer -->
<?php include('footer.php') ?>