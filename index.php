  <?php include "db_connect.php";
  error_reporting(0);
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $loan_part = $_POST['loan'];
      $transfer_part = $_POST['transfer'];
      if (!empty($loan_part)) {
          $take = "INSERT INTO `transactions` (`credit`) VALUES ('$loan_part');";
          $result = mysqli_query($conn, $take);
          header("location:index.php");
      }
      if (!empty($transfer_part)) {
          $ta = "INSERT INTO `transactions` (`debit`) VALUES ('$transfer_part');";
          $result1 = mysqli_query($conn, $ta);
          header("location:index.php");
      }
  }
  ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Mobile Payments</title>
      <link rel="stylesheet" href="style.css" />



  </head>



  </script>

  <body>
      <nav>
          <a href="/dashboard">My Cards</a>
          <a href="/team">Deposit</a>
          <center>
              <div class="part1">
                  <h1>MOBILE PAYMENTS</h1>
              </div>
          </center>


      </nav>
      <div class="container">
          <div class="container1">
              <div class="subcontainer1">
                  <div class="heading">
                      <h1>My Cards</h1>
                  </div>
                  <div class="discription">
                      <div class="balance">
                          <h5>Balance</h5>
                          <span style="margin-right: -3rem;
                                            font-weight: 700;
                                              color: darkblue;">$</span>
                          <h5 id="real">
                              <?php
                              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                  $transfer_part = $_POST['transfer'];
                                  $sql = "SELECT  SUM(credit) from transactions";
                                  $result1 = mysqli_query($conn, $sql);
                                  while ($row = mysqli_fetch_array($result1)) {
                                      $sum = $row['SUM(credit)'] - $transfer_part;
                                      $sql1 = "UPDATE transactions SET total='$sum' Where ID=1";
                                      mysqli_query($conn, $sql1);
                                  }
                                  header("location:index.php");
                              }
                              $sql2 = "SELECT  total from transactions WHERE ID=1";
                              $result2 = mysqli_query($conn, $sql2);
                              while ($row = mysqli_fetch_array($result2)) {
                                  $sum = $row['total'];
                                  echo ($sum);
                              }
                              ?>
                          </h5>
                      </div>
                      <div class="creditbalance">
                          <h5 id="unreal">Credit Balance</h5>

                          <h5></h5>
                      </div>
                  </div>
              </div>
              <div class="subcontainer2"><img src="images/mobile.svg" alt=""></div>
          </div>
          <div class="container2">

              <div class="part2">
                  <div class="section1">
                      <h1>Transaction History</h1>
                      <div class="History">
                          <div class="history1">
                              <?php

                              $u = "SELECT credit FROM transactions where ID>0";
                              $v = "SELECT debit FROM transactions where ID>0";
                              $resul = mysqli_query($conn, $u);
                              $resu = mysqli_query($conn, $v);
                              while ($row = mysqli_fetch_array($resul)) {
                                  $en = $row['credit'];
                                  echo '<div class="types">
                                  <div class="types1">Loan successfully added in your account</div>
                                <div class="types2">' . $en . '</div></div>';

                              }
                              while ($row1 = mysqli_fetch_array($resu)) {
                                  $evn = $row1['debit'];
                                  echo '<div class="types" style="background:#df19198c;">
                                  <div class="types1" style="color:white";>Successfull</div>
                                <div class="types2" style="color:white";>' . $evn . '</div></div>';

                              }




                              ?>
                          </div>
                      </div>
                  </div>
                  <div class="section2">
                      <div class="transfermoney">
                          <div class="transfer">
                              <div class="transfer1">
                                  <div class="logo"></div>
                                  <div class="money1">
                                      <h2>Apply For Loan</h2>
                                  </div>
                              </div>

                              <form method="post" class="transfersection">
                                  <div class="inputsection">
                                      <div>
                                          <input type="number" id="dollar" name="loan" />
                                      </div>
                                  </div>
                                  <div>
                                      <button type="submit" class="sendlogo">
                                          <img src="images/send.svg" alt="sendlogo" srcset="" />
                                      </button>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class="requestloan">
                          <div class="transfer2">
                              <div class="transfer1">
                                  <div class="logo1"><img src="images/transaction.svg" alt="" /></div>
                                  <div class="money1">
                                      <h2>Transfer Money</h2>
                                  </div>
                              </div>

                              <form method="post" class="transfersection">
                                  <div class="inputsection">
                                      <div>
                                          <input type="number" id="sendmoney" name="transfer" />
                                      </div>
                                  </div>
                                  <div>
                                      <button class="sendlogo" type="submit">
                                          <img src="images/send.svg" alt="sendlogo" srcset="" />
                                      </button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </body>


  </html>