<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="header border-bottom">
        <div class="container d-flex justify-content-between align-items-center
        ">
            <div>
                <img src="img/logo 2.png" alt="">
            </div>
            <div><strong>COMPLAIN LETTER MANAGEMENT SYSTEM</strong></div>
            <div><button class="log-btn">Logout</button></div>
        </div>
    </div>
    
    <div class="position-relative">
      <div class="row w-100">
        <div class="col-12 col-lg-4 right-col pt-5">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-complain-list" data-bs-toggle="list" href="#list-complain" role="tab" aria-controls="list-home">Public Complain</a>
            <a class="list-group-item list-group-item-action" id="list-land-list" data-bs-toggle="list" href="#list-land" role="tab" aria-controls="list-profile">Land</a>
            <a class="list-group-item list-group-item-action" id="list-social-list" data-bs-toggle="list" href="#list-social" role="tab" aria-controls="list-messages">Social and Conservation</a>
            <a class="list-group-item list-group-item-action" id="list-samrudhi-list" data-bs-toggle="list" href="#list-samrudhi" role="tab" aria-controls="list-settings">Samrudhi</a>
            <a class="list-group-item list-group-item-action" id="list-account-list" data-bs-toggle="list" href="#list-account" role="tab" aria-controls="list-settings">Account Development</a>
            
          </div>
        </div>
        <div class="col-12 col-lg-8 pt-5">
          <div class="tab-content " id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-complain" role="tabpanel" aria-labelledby="list-complain-list">
              <div class="container mb-4 d-flex d-flex justify-content-end">
                <div class="search_wrap search_wrap_1">
                   <div class="search_box">
                  <div class="btn btn_common">
                    <i class='bx bx-search-alt-2'></i>
                  </div>
                  <input type="text" class="input" placeholder="find letters here">

                </div>
              </div>
               </div>
                <table class="table table-striped p-0">
                    <thead>
                      <tr>
                        <th scope="col">LetterID</th>
                        <th scope="col">Issue Date</th>
                        <th scope="col">Officer ID</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Discription</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="tab-pane fade" id="list-land" role="tabpanel" aria-labelledby="list-land-list">
              <div class="container mb-4 d-flex d-flex justify-content-end">
                <div class="search_wrap search_wrap_1">
                   <div class="search_box">
                  <div class="btn btn_common">
                    <i class='bx bx-search-alt-2'></i>
                  </div>
                  <input type="text" class="input" placeholder="find letters here">

                </div>
              </div>
               </div>
                <table class="table table-striped p-0">
                    <thead>
                      <tr>
                        <th scope="col">LetterID</th>
                        <th scope="col">Issue Date</th>
                        <th scope="col">Officer ID</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Discription</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="tab-pane fade" id="list-social" role="tabpanel" aria-labelledby="list-social-list">
              <div class="container mb-4 d-flex justify-content-end">
                <div class="search_wrap search_wrap_1">
                   <div class="search_box">
                  <div class="btn btn_common">
                    <i class='bx bx-search-alt-2'></i>
                  </div>
                  <input type="text" class="input" placeholder="find letters here">

                </div>
              </div>
               </div>
                <table class="table table-striped p-0">
                    <thead>
                      <tr>
                        <th scope="col">LetterID</th>
                        <th scope="col">Issue Date</th>
                        <th scope="col">Officer ID</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Discription</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="tab-pane fade" id="list-samrudhi" role="tabpanel" aria-labelledby="list-samrudhi-list">
              <div class="container mb-4 d-flex d-flex justify-content-end">
                <div class="search_wrap search_wrap_1">
                   <div class="search_box">
                  <div class="btn btn_common">
                    <i class='bx bx-search-alt-2'></i>
                  </div>
                  <input type="text" class="input" placeholder="find letters here">

                </div>
              </div>
               </div>
                <table class="table table-striped p-0">
                    <thead>
                      <tr>
                        <th scope="col">LetterID</th>
                        <th scope="col">Issue Date</th>
                        <th scope="col">Officer ID</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Discription</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="tab-pane fade" id="list-account" role="tabpanel" aria-labelledby="list-account-list">
              <div class="container mb-4 d-flex d-flex justify-content-end">
                <div class="search_wrap search_wrap_1">
                   <div class="search_box">
                  <div class="btn btn_common">
                    <i class='bx bx-search-alt-2'></i>
                  </div>
                  <input type="text" class="input" placeholder="find letters here">

                </div>
              </div>
               </div>
                <table class="table table-striped p-0">
                    <thead>
                      <tr>
                        <th scope="col">LetterID</th>
                        <th scope="col">Issue Date</th>
                        <th scope="col">Officer ID</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Discription</td>
                      </tr>
                      <tr>
                        <th scope="row">LetterID</th>
                        <td>Issue Date</td>
                        <td>Officer ID</td>
                        <td>Topic</td>
                        <td>Description</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
        
      </div>
      <div>
        <div class=" userbtn">
            <button class="btn  top-1oo start-10 border-none" type="button" id="triggerId" data-aria-expanded="false">
                <i class='bx bxs-user-circle' style='color:#000000'></i> <span class="ms-2">Mr.Nimal
                    Jayasinghe</span>
            </button>
            
        </div>
    </div>
      
</body>
</html>