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
        <div class="col-md-6">
          <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
              <div class="card fat" style="margin-top:30px">
                <div class="card-body">
                  <p style="margin-top:20px;font-size: 15px;"> Google's OAuth 2.0 server authenticates the user and obtains consent from the user for your application to access the requested scopes and the response is sent back to the application. If the user approves the access request, then the response contains an <span style="font-weight: 700">authorization code </span>. After the web server receives the authorization code, it can it for an <span style="font-weight: 700">access token </span>. Finally, the access token is used to call the Google Drive API and store the selected file.  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row justify-content-md-center h-100">
            <div class="card-wrapper" style="margin: 30px auto auto 30px">

                    <div class="card fat">
                            <div class="card-body">
                              <h4 class="card-title">Upload File To Google Drive</h4>
                              <form method="post" action="drive_upload.php" enctype="multipart/form-data">
                                <div class="form-group" style="margin-top: 20px;">
                                  <input type="file" class="form-control-file" name="uploadfile">
                                </div>
                                <div class="form-group no-margin">
                                  <button type="submit" class="btn btn-primary btn-block">
                                    Upload to Drive
                                  </button>
                                </div>
                              </form>
                            </div>
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

