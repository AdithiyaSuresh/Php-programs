
<?php
/********************************************************************************************
 * Purpose  : Use Singleton Pattern to create a Book and Author deatils borrow or return by
 *           Book Borrower.
 * File Name: SingletonPaterrn.php
 * Author   : Adithiya Suresh
 * Since    : 6/02/2019
 **********************************************************************************************/

  /** 
   *require following to work
   */
  require_once ('MobileBorrower.php');

  /**
   *testing the singleton implementation
   */
  echo "\n SINGLETON PATTERN\n\n";

  /**
   *instatiating MobileBorrower class
   */
  $mobileBorrower1 = new MobileBorrower();
  $mobileBorrower2 = new MobileBorrower();

  //First borrower borrowing the mobile 
  $mobileBorrower1->borrowMobile();
  echo "First borrower making request to borrow the mobile\n";
  echo "First borrower's mobile with Company and Model: \n";
  //getting the model and company details
  echo $mobileBorrower1->getCompanyAndModel()."\n\n";

  //Second borrower borrowing the mobile 
  $mobileBorrower2->borrowMobile();
  echo "Second borrower making request to borrow the mobile\n";
  echo "Second borrower's mobile with Company and Model: \n";
  //getting the model and company details
  echo $mobileBorrower2->getCompanyAndModel()."\n\n";

  //First borrower returning the mobile 
  $mobileBorrower1->returnMobile();
  echo "First borrower returned the mobile\n\n";

  //Second borrower again borrowing the mobile 
  $mobileBorrower2->borrowMobile();
  echo "Second borrower again making a request to borrow the mobile afer first borrower returned it\n";
  echo "Second borrower's Company and Model: \n";
  //getting the model and company details
  echo $mobileBorrower1->getCompanyAndModel()."\n\n";
?>
