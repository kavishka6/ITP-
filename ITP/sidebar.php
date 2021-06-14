<?php
include 'header.php';
include 'connection.php';



    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    


$position =  $_SESSION['sess_position'];
if($position == 1)
{
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>

   

   
     

     
    
  </nav><aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ShanazMGT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User : <?php echo $_SESSION['sess_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
              <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Customers
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="customer_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Individual Customer</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="company_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Customer</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Suppliers
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="supplier_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
         
              
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Items-Products
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="product_category01.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category 01</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category02.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category 02</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category03.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category 03</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category04.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category 04</p>
                </a>
              </li>
               <li class="nav-item">
                   <a href="product_item.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Product Items</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Raw-items
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="row_category01.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Category 01</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category02.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Category 02</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category03.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Category 03</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category04.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Category 04</p>
                </a>
              </li>
               <li class="nav-item">
                   <a href="raw_item.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Raw Items</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
             <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Feedbacks
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="view_feedback.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Feedback</p>
                </a>
              </li>
             
            </ul>
          </li>
          
          
              <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Registration
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="add_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Registration</p>
                </a>
              </li>
             
            </ul>
          </li>
          
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Vehicle Details
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="vehicle.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehicle</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="Driver.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Driver</p>
                </a>
              </li>
              
            </ul>
          </li>
        
          
       
          <li class="nav-header">GRN</li>
          
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Product-items to Store
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="product_grn.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New GRN</p>
                </a>
              </li>
            </ul>
          </li>
          
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Raw-items to Stores
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="raw_grn.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New GRN</p>
                </a>
              </li>
            </ul>
          </li>
          
           <li class="nav-header">SALES</li>
           
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Invoice
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="sale_invoice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New  Invoice</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          
          
          <li class="nav-header">PAYMENTS</li>
           
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Payment
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="payment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New  Payment</p>
                </a>
              </li>
              
              
            </ul>
          </li> 
        
           
              
          
          <li class="nav-header">EXPENSES</li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Company Expenses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="expenses_cat1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expenses Main</p>
                </a>
              </li>
              
              <li class="nav-item">
                  <a href="expenses_main.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Expenses</p>
                </a>
              </li>
            </ul>
          </li>

        
        
        
         
          
         
      
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<?php
}


else if($position == 2)
{
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    
  </nav><aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ShanazMGT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['sess_name']; ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
              <a href="Dashboard_main.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Customers
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="customer_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Individual Customer</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="company_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Customer</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Suppliers
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="supplier_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
         
              
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Items-Products
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="product_category01.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category 01</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category02.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category 02</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category03.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category 03</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category04.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category 04</p>
                </a>
              </li>
               <li class="nav-item">
                   <a href="product_item.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Product Items</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Raw-items
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="row_category01.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Category 01</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category02.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Category 02</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category03.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Category 03</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category04.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Category 04</p>
                </a>
              </li>
               <li class="nav-item">
                   <a href="raw_item.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Raw Items</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
             <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Feedbacks
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="feedback_customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate New Feedback</p>
                </a>
              </li>
             
            </ul>
          </li>
          
         
          
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Vehicle Details
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="vehicle.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehicle</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="Driver.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Driver</p>
                </a>
              </li>
              
            </ul>
          </li>
        
          
       
          <li class="nav-header">GRN</li>
          
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Product-items to Store
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="product_grn.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New GRN</p>
                </a>
              </li>
            </ul>
          </li>
          
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Raw-items to Stores
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="raw_grn.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New GRN</p>
                </a>
              </li>
            </ul>
          </li>
          
           <li class="nav-header">SALES</li>
           
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Delivery Notes
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="sale_invoice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Delivey Note</p>
                </a>
              </li>
              
              
            </ul>
          </li>
        
           
              
          
          <li class="nav-header">EXPENSES</li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Company Expenses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="expenses_cat1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expenses Main</p>
                </a>
              </li>
              
              <li class="nav-item">
                  <a href="expenses_main.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Expenses</p>
                </a>
              </li>
            </ul>
          </li>

        
        
          <li class="nav-header">ALL REPORTS</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
         
         
          
         
      
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<?php
}



else if($position == 4)
{
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>  
  </nav>
    
  /nav><aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ShanazMGT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User : <?php echo $_SESSION['sess_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
       
      
          
     
  
          
          
             <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Feedbacks
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                  <a href="feedback_customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate New Feedback</p>
                </a>
              </li>
             
            </ul>
          </li>
          
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<?php
}
?>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
