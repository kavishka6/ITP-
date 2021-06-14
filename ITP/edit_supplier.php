
<?php
include 'header.php';
include 'connection.php';
?>


<?php
if (isset($_GET['r'])) {
    $id = $_GET['r'];


    $sql = "SELECT id,company_name,br_no,vat_no,company_address,company_phone,company_fax,salutation,person_name,person_mobile,company_email,country FROM supplier WHERE id='$id' ";
    $result = mysqli_query($con, $sql);
    while ($arraySomething1 = mysqli_fetch_array($result)) {

        $company_name = $arraySomething1['company_name'];
        $company_address = $arraySomething1['company_address'];
        $br = $arraySomething1['br_no'];
        $vat = $arraySomething1['vat_no'];
        $company_phone = $arraySomething1['company_phone'];
        $fax = $arraySomething1['company_fax'];
        $salutation = $arraySomething1['salutation'];
        $person_name = $arraySomething1['person_name'];
        $person_mobile = $arraySomething1['person_mobile'];
        $company_email = $arraySomething1['company_email'];
        $country = $arraySomething1['country'];
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="dist/css/adminlte.min.css">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            <!-- DataTables -->
            <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

            <!-- Select2 -->
            <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
            <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

            <!-- Bootstrap4 Duallistbox -->
            <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="dist/css/adminlte.min.css">

            <!-- DataTables -->
            <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


            <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="dist/css/adminlte.min.css">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        </head>

        <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

            <?php
            include 'sidebar.php';
            ?>


            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Registered Suppliers</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Edit Suppliers</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update the supplier details</h3>
                            </div>
                            <form name="myForm"  id ="myform" action="edit_supplier.php" method="POST" >
                                <div class="card-body">
                                    <div class="row">
                                        <!-- left column -->
                                        <div class="col-md-6">
                                            <!-- general form elements -->

                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <input type="hidden" class="form-control" name="id"  id="id"  value='<?php echo $id ?>'>

                                            <div class="form-group">
                                                <label for="examplesname">Supplier Name</label>
                                                <input type="text" class="form-control" name="companyname"  id="companyname" placeholder="Enter Supplier Name" autocomplete="off" value='<?php echo $company_name ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesphone">Supplier Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits" placeholder="Enter Supplier Phone" autocomplete="off" value='<?php echo $company_phone ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesaddress">Supplier Address</label>
                                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Supplier Address" autocomplete="off" value='<?php echo $company_address ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesfax">Supplier Fax</label>
                                                <input type="text" class="form-control" id="fax" name="fax" placeholder="Enter Supplier Fax" autocomplete="off" value='<?php echo $fax ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesemai1">Supplier Email</label>
                                                <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Supplier Email" autocomplete="off" value='<?php echo $company_email ?>'>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->






                                        <div class="col-md-6">


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- select -->

                                                    <div class="form-group">
                                                        <label for="examplebr">Business Registration number</label>
                                                        <input type="text" class="form-control" id="br" name="br"  placeholder="Enter BR Number" autocomplete="off" value='<?php echo $br ?>'>
                                                    </div>





                                                </div>
                                                <div class="col-md-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label for="examplevat">VAT No</label>
                                                        <input type="text" class="form-control" id="vat" name ="vat" placeholder="Enter VAT No" autocomplete="off" value='<?php echo $vat ?>'>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Salutation</label>
                                                <select class="form-control select2" style="width: 100%;" name="salutation" id="salutation" >
                                                    <?php ECHO '<option value="' . $salutation . '"> ' . $salutation . '</OPTION>'; ?>

                                                    <option value='Mr'>Mr</option>
                                                    <option value='Mrs'>Mrs</option>
                                                    <option value='Miss'>Miss</option>
                                                    <option value='Dr'>Dr</option>
                                                    <option value='Ms'>Ms</option>
                                                    <option value='Rev'>Rev</option>
                                                </select>
                                            </div>



                                            <div class="form-group">
                                                <label for="examplecname">Contact Person Name</label>
                                                <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Contact Person Name" autocomplete="off" value='<?php echo $person_name ?>'>
                                                <div class="form-group">
                                                </div>
                                                <label for="examplecphone">Contact Person Mobile</label>
                                                <input type="text" class="form-control" id="cmobile" name="cmobile" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits"  placeholder="Enter Contact Person Mobile" autocomplete="off" value='<?php echo $person_mobile ?>'>
                                            </div>
                                            <!--                                        <div class="form-group">
                                                                                        <label for="exampleccountry">Contact Person Country</label>
                                                                                        <input type="text" class="form-control" id="country"  name="country" placeholder="Enter Contact Person Country" autocomplete="off">
                                                                                    </div>-->
                                            <div class="form-group">
                                                <label>Supplier Country </label>
                                                <select class="form-control select2" style="width: 100%;" name="country" id="country"  >
                                                    <?php ECHO '<option value="' . $country . '"> ' . $country . '</OPTION>'; ?>
                                                    <option value=""> Select Country</OPTION> 
                                                    <option value="Sri Lanka">Sri Lanka</option> 
                                                    <option value="Afghanistan">Afghanistan</option> 
                                                    <option value="Albania">Albania</option> 
                                                    <option value="Algeria">Algeria</option> 
                                                    <option value="American Samoa">American Samoa</option> 
                                                    <option value="Andorra">Andorra</option> 
                                                    <option value="Angola">Angola</option> 
                                                    <option value="Anguilla">Anguilla</option> 
                                                    <option value="Antarctica">Antarctica</option> 
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                                    <option value="Argentina">Argentina</option> 
                                                    <option value="Armenia">Armenia</option> 
                                                    <option value="Aruba">Aruba</option> 
                                                    <option value="Australia">Australia</option> 
                                                    <option value="Austria">Austria</option> 
                                                    <option value="Azerbaijan">Azerbaijan</option> 
                                                    <option value="Bahamas">Bahamas</option> 
                                                    <option value="Bahrain">Bahrain</option> 
                                                    <option value="Bangladesh">Bangladesh</option> 
                                                    <option value="Barbados">Barbados</option> 
                                                    <option value="Belarus">Belarus</option> 
                                                    <option value="Belgium">Belgium</option> 
                                                    <option value="Belize">Belize</option> 
                                                    <option value="Benin">Benin</option> 
                                                    <option value="Bermuda">Bermuda</option> 
                                                    <option value="Bhutan">Bhutan</option> 
                                                    <option value="Bolivia">Bolivia</option> 
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                                    <option value="Botswana">Botswana</option> 
                                                    <option value="Bouvet Island">Bouvet Island</option> 
                                                    <option value="Brazil">Brazil</option> 
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                                    <option value="Bulgaria">Bulgaria</option> 
                                                    <option value="Burkina Faso">Burkina Faso</option> 
                                                    <option value="Burundi">Burundi</option> 
                                                    <option value="Cambodia">Cambodia</option> 
                                                    <option value="Cameroon">Cameroon</option> 
                                                    <option value="Canada">Canada</option> 
                                                    <option value="Cape Verde">Cape Verde</option> 
                                                    <option value="Cayman Islands">Cayman Islands</option> 
                                                    <option value="Central African Republic">Central African Republic</option> 
                                                    <option value="Chad">Chad</option> 
                                                    <option value="Chile">Chile</option> 
                                                    <option value="China">China</option> 
                                                    <option value="Christmas Island">Christmas Island</option> 
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                                    <option value="Colombia">Colombia</option> 
                                                    <option value="Comoros">Comoros</option> 
                                                    <option value="Congo">Congo</option> 
                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                                    <option value="Cook Islands">Cook Islands</option> 
                                                    <option value="Costa Rica">Costa Rica</option> 
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                                    <option value="Croatia">Croatia</option> 
                                                    <option value="Cuba">Cuba</option> 
                                                    <option value="Cyprus">Cyprus</option> 
                                                    <option value="Czech Republic">Czech Republic</option> 
                                                    <option value="Denmark">Denmark</option> 
                                                    <option value="Djibouti">Djibouti</option> 
                                                    <option value="Dominica">Dominica</option> 
                                                    <option value="Dominican Republic">Dominican Republic</option> 
                                                    <option value="Ecuador">Ecuador</option> 
                                                    <option value="Egypt">Egypt</option> 
                                                    <option value="El Salvador">El Salvador</option> 
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                                    <option value="Eritrea">Eritrea</option> 
                                                    <option value="Estonia">Estonia</option> 
                                                    <option value="Ethiopia">Ethiopia</option> 
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                                    <option value="Faroe Islands">Faroe Islands</option> 
                                                    <option value="Fiji">Fiji</option> 
                                                    <option value="Finland">Finland</option> 
                                                    <option value="France">France</option> 
                                                    <option value="French Guiana">French Guiana</option> 
                                                    <option value="French Polynesia">French Polynesia</option> 
                                                    <option value="French Southern Territories">French Southern Territories</option> 
                                                    <option value="Gabon">Gabon</option> 
                                                    <option value="Gambia">Gambia</option> 
                                                    <option value="Georgia">Georgia</option> 
                                                    <option value="Germany">Germany</option> 
                                                    <option value="Ghana">Ghana</option> 
                                                    <option value="Gibraltar">Gibraltar</option> 
                                                    <option value="Greece">Greece</option> 
                                                    <option value="Greenland">Greenland</option> 
                                                    <option value="Grenada">Grenada</option> 
                                                    <option value="Guadeloupe">Guadeloupe</option> 
                                                    <option value="Guam">Guam</option> 
                                                    <option value="Guatemala">Guatemala</option> 
                                                    <option value="Guinea">Guinea</option> 
                                                    <option value="Guinea-bissau">Guinea-bissau</option> 
                                                    <option value="Guyana">Guyana</option> 
                                                    <option value="Haiti">Haiti</option> 
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                                    <option value="Honduras">Honduras</option> 
                                                    <option value="Hong Kong">Hong Kong</option> 
                                                    <option value="Hungary">Hungary</option> 
                                                    <option value="Iceland">Iceland</option> 
                                                    <option value="India">India</option> 
                                                    <option value="Indonesia">Indonesia</option> 
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                                    <option value="Iraq">Iraq</option> 
                                                    <option value="Ireland">Ireland</option> 
                                                    <option value="Israel">Israel</option> 
                                                    <option value="Italy">Italy</option> 
                                                    <option value="Jamaica">Jamaica</option> 
                                                    <option value="Japan">Japan</option> 
                                                    <option value="Jordan">Jordan</option> 
                                                    <option value="Kazakhstan">Kazakhstan</option> 
                                                    <option value="Kenya">Kenya</option> 
                                                    <option value="Kiribati">Kiribati</option> 
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                                    <option value="Korea, Republic of">Korea, Republic of</option> 
                                                    <option value="Kuwait">Kuwait</option> 
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                                    <option value="Latvia">Latvia</option> 
                                                    <option value="Lebanon">Lebanon</option> 
                                                    <option value="Lesotho">Lesotho</option> 
                                                    <option value="Liberia">Liberia</option> 
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                                    <option value="Liechtenstein">Liechtenstein</option> 
                                                    <option value="Lithuania">Lithuania</option> 
                                                    <option value="Luxembourg">Luxembourg</option> 
                                                    <option value="Macao">Macao</option> 
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                                    <option value="Madagascar">Madagascar</option> 
                                                    <option value="Malawi">Malawi</option> 
                                                    <option value="Malaysia">Malaysia</option> 
                                                    <option value="Maldives">Maldives</option> 
                                                    <option value="Mali">Mali</option> 
                                                    <option value="Malta">Malta</option> 
                                                    <option value="Marshall Islands">Marshall Islands</option> 
                                                    <option value="Martinique">Martinique</option> 
                                                    <option value="Mauritania">Mauritania</option> 
                                                    <option value="Mauritius">Mauritius</option> 
                                                    <option value="Mayotte">Mayotte</option> 
                                                    <option value="Mexico">Mexico</option> 
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                                    <option value="Monaco">Monaco</option> 
                                                    <option value="Mongolia">Mongolia</option> 
                                                    <option value="Montserrat">Montserrat</option> 
                                                    <option value="Morocco">Morocco</option> 
                                                    <option value="Mozambique">Mozambique</option> 
                                                    <option value="Myanmar">Myanmar</option> 
                                                    <option value="Namibia">Namibia</option> 
                                                    <option value="Nauru">Nauru</option> 
                                                    <option value="Nepal">Nepal</option> 
                                                    <option value="Netherlands">Netherlands</option> 
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                                    <option value="New Caledonia">New Caledonia</option> 
                                                    <option value="New Zealand">New Zealand</option> 
                                                    <option value="Nicaragua">Nicaragua</option> 
                                                    <option value="Niger">Niger</option> 
                                                    <option value="Nigeria">Nigeria</option> 
                                                    <option value="Niue">Niue</option> 
                                                    <option value="Norfolk Island">Norfolk Island</option> 
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                                    <option value="Norway">Norway</option> 
                                                    <option value="Oman">Oman</option> 
                                                    <option value="Pakistan">Pakistan</option> 
                                                    <option value="Palau">Palau</option> 
                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                                    <option value="Panama">Panama</option> 
                                                    <option value="Papua New Guinea">Papua New Guinea</option> 
                                                    <option value="Paraguay">Paraguay</option> 
                                                    <option value="Peru">Peru</option> 
                                                    <option value="Philippines">Philippines</option> 
                                                    <option value="Pitcairn">Pitcairn</option> 
                                                    <option value="Poland">Poland</option> 
                                                    <option value="Portugal">Portugal</option> 
                                                    <option value="Puerto Rico">Puerto Rico</option> 
                                                    <option value="Qatar">Qatar</option> 
                                                    <option value="Reunion">Reunion</option> 
                                                    <option value="Romania">Romania</option> 
                                                    <option value="Russian Federation">Russian Federation</option> 
                                                    <option value="Rwanda">Rwanda</option> 
                                                    <option value="Saint Helena">Saint Helena</option> 
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                    <option value="Saint Lucia">Saint Lucia</option> 
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                                    <option value="Samoa">Samoa</option> 
                                                    <option value="San Marino">San Marino</option> 
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                    <option value="Saudi Arabia">Saudi Arabia</option> 
                                                    <option value="Senegal">Senegal</option> 
                                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                                    <option value="Seychelles">Seychelles</option> 
                                                    <option value="Sierra Leone">Sierra Leone</option> 
                                                    <option value="Singapore">Singapore</option> 
                                                    <option value="Slovakia">Slovakia</option> 
                                                    <option value="Slovenia">Slovenia</option> 
                                                    <option value="Solomon Islands">Solomon Islands</option> 
                                                    <option value="Somalia">Somalia</option> 
                                                    <option value="South Africa">South Africa</option> 
                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                                    <option value="Spain">Spain</option> 
                                                    <option value="Sri Lanka">Sri Lanka</option> 
                                                    <option value="Sudan">Sudan</option> 
                                                    <option value="Suriname">Suriname</option> 
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                                    <option value="Swaziland">Swaziland</option> 
                                                    <option value="Sweden">Sweden</option> 
                                                    <option value="Switzerland">Switzerland</option> 
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                                    <option value="Tajikistan">Tajikistan</option> 
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                                    <option value="Thailand">Thailand</option> 
                                                    <option value="Timor-leste">Timor-leste</option> 
                                                    <option value="Togo">Togo</option> 
                                                    <option value="Tokelau">Tokelau</option> 
                                                    <option value="Tonga">Tonga</option> 
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                                    <option value="Tunisia">Tunisia</option> 
                                                    <option value="Turkey">Turkey</option> 
                                                    <option value="Turkmenistan">Turkmenistan</option> 
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                                    <option value="Tuvalu">Tuvalu</option> 
                                                    <option value="Uganda">Uganda</option> 
                                                    <option value="Ukraine">Ukraine</option> 
                                                    <option value="United Arab Emirates">United Arab Emirates</option> 
                                                    <option value="United Kingdom">United Kingdom</option> 
                                                    <option value="United States">United States</option> 
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                                    <option value="Uruguay">Uruguay</option> 
                                                    <option value="Uzbekistan">Uzbekistan</option> 
                                                    <option value="Vanuatu">Vanuatu</option> 
                                                    <option value="Venezuela">Venezuela</option> 
                                                    <option value="Viet Nam">Viet Nam</option> 
                                                    <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                                    <option value="Western Sahara">Western Sahara</option> 
                                                    <option value="Yemen">Yemen</option> 
                                                    <option value="Zambia">Zambia</option> 
                                                    <option value="Zimbabwe">Zimbabwe</option>


                                                </select>   
                                            </div>


                                        </div>
                                    </div>



                                </div>


                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id ="submit">Submit </button>
                                    <!--                            <button type="submit" class="btn btn-primary">Update</button>-->
                                    <!--                                <button type="submit" class="btn btn-primary float-right" onclick="myFunction()">Reset</button>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>


        </body>
    </html>

    <?php
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['companyname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $fax = $_POST['fax'];
    $vat = $_POST['vat'];
    $email = $_POST['email'];
    $br = $_POST['br'];
    $salutation = $_POST['salutation'];
    $name = $_POST['cname'];
    $cmobile = $_POST['cmobile'];
    $country = $_POST['country'];
    $id = $_POST['id'];
    //echo $vat;
    $sql = "UPDATE supplier SET company_name='$company',br_no='$br', vat_no='$vat',company_phone='$phone',company_fax='$fax',company_address='$address',person_name='$name',person_mobile='$cmobile',salutation='$salutation',company_email='$email',country='$country' WHERE id='$id'";
    if (mysqli_query($con, $sql)) {

//                            $sql1 ="INSERT INTO user_activity (user,activity) VALUES ('$user','SUPPLIER DETAILS UPDATED ID :$id ')";
        //mysqli_query($con, $sql1);
        $message = "SUPPLIER DETAILS UPDATED !";
        echo "<script type='text/javascript'>alert('$message');window.location.href='supplier_register.php';</script>";
        //echo "<script>window.location = 'supplier_register.php?msg=SUPPLIER DETAILS UPDATED ! ';</script>";
    } else {
        echo "<script>window.location = 'edit_supplier.php?msge=UPDATING SUPPLIER DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
    }
}
?>     


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>  

<script src="plugins/moment/moment.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript"></script>








