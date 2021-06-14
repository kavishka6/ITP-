<?php
include 'header.php';
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
                        $accname = $_POST['accname'];
                        $bank = $_POST['bank'];
                        $accno = $_POST['accno'];
                    

                        
                         
                            $sql1 = "INSERT INTO bank_accounts (accname,bank,accno) VALUES 
									('$accname','$bank','$accno')";   
                        
                        
                        if(mysqli_query($con, $sql1))
                            echo "<div class='callout callout-success'><center>COMPANY BANK ACCOUNT REGISTERED SUCCESSULLY !</center><div>";
                        else 
                            echo "<div class='callout callout-danger'><center>COMPANY BANK ACCOUNT REGISTRATION HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";
                    }
   
                        
                        
                        ?>