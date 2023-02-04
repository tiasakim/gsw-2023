<footer>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-offset-2 col-md-8">
                <div class="row">
                <div class="col-xs-4 col-md-offset-1 col-md-2">
                    <a href="https://twitter.com/MITGSW"><span class="fa fa-twitter-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="https://www.facebook.com/MITGSW/"><span class="fa fa-facebook-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="https://www.instagram.com/MITGSW/"><span class="fa fa-instagram sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-xs-offset-2 col-md-offset-0 col-md-2">
                    <a href="https://www.linkedin.com/company/mit-global-startup-workshop/"><span class="fa fa-linkedin-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="mailto:gsw-tech@mit.edu"><span class="fa fa-envelope-square sm-icon"></span></a>
                </div></div>
            </div>
        </div>
        
        <br />

        <hr id="footer-hr">

        <div class="row text-center">
            <div class="col-md-offset-2 col-md-4">
                <p class="footer-title">The Conference</p>
                <a href="index.php">Home</a><br>
                <a href="registration.php" onClick="fbq('trackCustom', 'Bottom_Register_to_attend_GSW');">Registration</a><br>
                <a href="schedule.php">Schedule</a><br>
                <a href="content_overview.php">Content Overview</a><br>
                <a href="index.php#competitions-section">Competitions</a><br>
                <a href="speakers.php">Speakers</a><br>
            </div>
            <div class="col-md-4">
                <p class="footer-title">Organization</p>
                <a href="get_involved.php">Get involved with MIT</a><br>
                <a href="history.php">History</a><br>
                <a href="team.php">Who we are</a><br>
                <a href="sponsors.php">Sponsors</a><br>
                <a href="collaborators.php">Collaborators</a><br>
                <a href="index.php#location">Venue</a><br>
            </div>
        </div>
    
        <div class="row">
            <div class="copyright col-md-12">
                Copyright ©2011–2023 Massachusetts Institute of Technology. All rights reserved.<br>
                For more information please contact <a href="mailto:gsw-tech@mit.edu">gsw-tech@mit.edu</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    // Display pictures in previous parallax sections
    $(".banner").each(function() {
        var background_image_src = $(this).data("image-src");
        if (background_image_src != null) {
            $(this).css("background-image", "url(" + background_image_src + ")");
        }
    });
</script>
<?= $scripts ?>