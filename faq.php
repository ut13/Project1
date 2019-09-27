 <?php include("header.php"); ?>
    <!-- article
    ================================================== -->
    <article class="blog-single">


       

        <!-- blog content
        ================================================== -->
        
        <div class="blog-content-wrap">

            <div class="row blog-content">
            
                <div class="col-half blog-content__main">
                <h1 class="display-2">
                      <br> FAQ
                    </h1> 
            </div>
            
    <h1 class="display-2">
                      <br>
                      <div class="col-half blog-content__main" >
                            <input type="text" name="cSearch" id="search" placeholder="Search by keyword"> 
                            <div id='button-holder'> 
                            <img src="images2/search.png" align="right"> 
                            </div>
                            <style>
#search{
    border-top:thin solid  #e5e5e5;
    border-right:thin solid #e5e5e5;
    border-bottom:0;
    border-left:thin solid  #e5e5e5;
    box-shadow:0px 1px 1px 1px #e5e5e5;
    float:left;
    height:44px;
    margin:.8em 0 0 .5em; 
    outline:0;
    padding:.4em 0 .4em .6em; 
    width:320px; 
}
  
#button-holder{
    background-color:#f1f1f1;
    border-top:thin solid #e5e5e5;
    box-shadow:1px 1px 1px 1px #e5e5e5;
    cursor:pointer;
    float:left;
    height:44px;
    margin:11px 0 0 0;
    text-align:center;
    width:30px;
}
  
#button-holder img{
    margin:4px;
    width:20px; 
}
</style>
<br><br>
                      </div>
                      
                    </h1> 
   <b>Popular Solutions</b>
   <p>
       Cancel & Reschedule<br>
       Refund Policy<br>
       Account Settings<br>
       Coupons and Discounts<br>
   </p>
   <br>
   <b>Other FAQs</b>
   <p>
       Modify the order<br>
       Booking services<br>
       Paying for services<br>
       Review Policy<br>
       Feedback<br>
       A guide to EXFX<br>
       Logging problems<br>
       Invoicing for the order<br>
       Data Privacy<br>
       Tie up with EXFX
       
   </p>

                </div><!-- end blog-content__main -->
            </div> <!-- end blog-content -->


        </div> <!-- end blog-content-wrap -->

    </article> <!-- end article(blog-single) -->

    

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.cookieBar.min.js"></script>
    <script>
        $(function() {
  $.clSearch({
      style: "bottom",
      
  });
 
});

    </script>

    <!-- blog nav
    ================================================== -->
 <?php include("footer.php") ?>