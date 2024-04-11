<!doctype html>
<html lang="en">
  <head>
    <!--d meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/headlinks.php';?>
    <title>Foodieits- Verification</title>
  </head>
  <body>
    <main>
        <?php include 'includes/before-login-header.php';?>
        <div class="main-sec">        
            <section class="breadcrumb-section light-bg">
                <div class="container">
                    <div class="breadcrumb-text">
                        <h1>Verification</h1>
                        <nav>
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Verification</li>
                            </ol>
                        </nav>                    
                    </div>                
                </div>
            </section>
            <section class="form-section pd-sec-50">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <p class="frgt-para text-center">Please enter the 4 digit verification code. Which has just arrived on your registered mobile number</p>
                            <form>
                                <div class="form-group mt-4">                            
                                    <div class="form-row justify-content-center">
                                        <div class="col-2">
                                            <input type="text" class="form-control text-center" value="0">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control text-center" value="0">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control text-center" value="0">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control text-center" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h3 class="time-txt text-center">01:00</h3>
                                </div>
                                <div class="form-group">
                                    <a href="reset-password.php" class="btn btn-block btn-primary">Submit</a>
                                </div>
                                <p class="rgstr-txt text-center">Don't Get Code?
                                    <a href="javascript:void(0);">Send Again</a>
                                </p>
                            </form>
                        </div>
                    </div>              
                </div>
            </section>
        </div>
        <?php include 'includes/footer.php';?>
    </main>    
  </body>
  <?php include 'includes/footerlinks.php';?>
</html>

