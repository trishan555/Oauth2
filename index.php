<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>OAuth 2.0 | Google Drive API</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/my-login.css">

</head>
<body class="my-login-page">
  <section class="h-100">

    <div class="container h-100">
      <div class="row">
       <div class="col-md-12">
                        <div class="row justify-content-md-center h-100">
                          <div class="card-wrapper header" style="margin:auto">
                           <div class="card fat">

                              <div class="card-body header">
                              <div class="brand logoImage">
                               <img src="img/img_logo.png">
                                </div>
                                 <div class="header text">
                                <h4 class="card-title">OAuth Authorization Server Application </h4>
                                   </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
        <div class="col-md-12">
          <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
              <div class="card fat" style="margin-top:30px">
                <div class="card-body">
                  <h3 style="text-align: center;"> File Upload Service to your Google Drive using OAuth 2.0</h3>
                  <p style="margin-top:20px;font-size: 15px;"> Our web application shows how to utilize the Google API Client Library for PHP to provide OAuth 2.0 authorization for Google Drive API access. Users can share specified data with an application using OAuth 2.0 while keeping their usernames, passwords, and other personal information private. This application obtains permission from users to select a file and save it straight to their Google Drives using OAuth 2.0. The Authorization Code grant type is used in this web application. </p>
                </div>
              </div>
            </div>
          </div>
        </div>

           <div class="col-md-12">
                  <div class="row justify-content-md-center h-100"   >
                    <div class="card-wrapper" style="margin:auto; display:flex; margin-top:30px; ">
                      <div class="brand"   style="background: #dee9e5; display:flex; justify-content: center; margin: 0px auto;">
                        <img src="img/img_3.png" style="width: 30%;">
                      </div>
                      <div class="brand"   style="background: #dee9e5;margin: 0px auto; padding:30px; margin-left:20px; vertical-align: baseline;align-items: center;justify-content: center;">
                       <h4 class="card-title">Upload File To Google Drive</h4>
                         <form method="post" action="callback.php">
                         <div class="form-group no-margin">
                          <button type="submit" class="btn btn-primary btn-block">
                           Upload
                            </button>
                            </div>
                             </form>
                            </div>

                    </div>
                  </div>
                </div>
              </div>
        <div class="footer">
                ©2021 by OAuth 2.0 Proudly Created By SLIIT
              </div>
            </div>
          </section>

          <script src="js/jquery.min.js"></script>
          <script src="bootstrap/js/bootstrap.min.js"></script>
        </body>
        </html>
