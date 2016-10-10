<!DOCTYPE html>
<html>
<head>
  <title>Londry Managment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{ URL::to('src/bootstrap-3.3.6-dist/css/bootstrap.min.css')}}">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.5/css/intlTelInput.css"> -->
  <link rel="stylesheet" href="{{ URL::to('src/intl-tel-input-master/build/css/intlTelInput.css')}}">

  <link rel="stylesheet" href="{{ URL::to('src/DataTables-1.10.12/media/css/jquery.dataTables.min.css')}}">

  <link rel="stylesheet" href="{{ URL::to('src/DataTables-1.10.12/media/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::to('src/DataTables-1.10.12/extensions/Responsive/css/responsive.bootstrap.min.css')}}">


  <link rel="stylesheet" href="{{ URL::to('src/DataTables-1.10.12/extensions/Buttons/css/buttons.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{ URL::to('src/DataTables-1.10.12/extensions/Select/css/select.dataTables.min.css')}}">  
  <link rel="stylesheet" href="{{ URL::to('src/DataTables-1.10.12/extensions/Scroller/css/scroller.dataTables.min.css')}}">

  <link rel="stylesheet" href="{{ URL::to('src/toastr-master/build/toastr.min.css')}}">





<!-- 
  <link rel="stylesheet" href='https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css'>
  <link rel="stylesheet" href='https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css'>
  <link rel="stylesheet" href='https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css'>
  <link rel="stylesheet" href='https://cdn.datatables.net/scroller/1.4.2/css/scroller.dataTables.min.css'>
 -->

  <link rel="stylesheet" href="{{ URL::to('src/jquery-ui-1.12.0/jquery-ui.min.css')}}">



  <link rel="stylesheet" href="{{ URL::to('css/londrymaster.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/customers.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/items.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/suppliers.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/products.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/todaydeleverynotemodal.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/accounts.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/dbbackupmodal.css')}}" type="text/css">
  
  <link rel="stylesheet" href="{{ URL::to('css/londryDeliverynote.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/londryPreviousDeliverynote.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::to('css/londryStatementByCustomer.css')}}" type="text/css">


  <!-- <script   src="https://code.jquery.com/jquery-1.12.4.js" ></script>  -->
   <script   src="{{ URL::to('src/extra/jquery.min.js')}}" ></script> 

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  <script src="{{ URL::to('src/bootstrap-3.3.6-dist/js/bootstrap.min.js')}}"></script>

<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.5/js/intlTelInput.min.js"></script> -->
  <script src="{{ URL::to('src/intl-tel-input-master/build/js/intlTelInput.min.js')}}"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.5/js/utils.js"></script> -->
  <script src="{{ URL::to('src/intl-tel-input-master/build/js/utils.js')}}"></script>

  <script src="{{ URL::to('src/DataTables-1.10.12/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ URL::to('src/DataTables-1.10.12/media/js/dataTables.bootstrap.min.js')}}"></script>


  <script src="{{ URL::to('src/DataTables-1.10.12/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ URL::to('src/DataTables-1.10.12/extensions/Responsive/js/responsive.bootstrap.min.js')}}"></script>

  <script src="{{ URL::to('src/DataTables-1.10.12/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ URL::to('src/DataTables-1.10.12/extensions/Select/js/dataTables.select.min.js')}}"></script>
  <script src="{{ URL::to('src/DataTables-1.10.12/extensions/Scroller/js/dataTables.scroller.min.js')}}"></script>
  <script src="{{ URL::to('src/toastr-master/build/toastr.min.js')}}"></script>
  <script src="{{ URL::to('src/moment-develop/moment-develop/min/moment.min.js')}}"></script>


 <!--  <script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>   
  <script src='https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js'></script>    
  <script src='https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js'></script>
  <script src='https://cdn.datatables.net/scroller/1.4.2/js/dataTables.scroller.min.js'></script> -->





<script src="{{ URL::to('src/extra/pdfmake.min.js')}}"></script>
<script src="{{ URL::to('src/extra/vfs_fonts.js')}}"></script>
<script src="{{ URL::to('src/extra/buttons.html5.min.js')}}"></script>
<script src="{{ URL::to('src/extra/buttons.print.min.js')}}"></script>
<script src="{{ URL::to('src/extra/jszip.min.js')}}"></script>
<script src="{{ URL::to('src/extra/buttons.flash.min.js')}}"></script>




    <!--   <script src='//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js' ></script>
       <script src='//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>

       <script src='//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js'></script>
       <script src='//cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js'></script>
    
      <script src='//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
      <script src='//cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js'></script> -->



<script src="{{ URL::to('src/jquery-ui-1.12.0/jquery-ui.min.js')}}"></script>

<script src="{{ URL::to('js/londrymaster.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/customers.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/items.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/suppliers.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/products.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/todaydeleverynotemodal.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/accounts.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/dbbackupmodal.js')}}" type="text/javascript"></script>


<script src="{{ URL::to('js/londryPreviousDeliverynote.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/londryDeliverynote.js')}}" type="text/javascript"></script>
<script src="{{ URL::to('js/londryStatementByCustomer.js')}}" type="text/javascript"></script>




  
</head>
<body>



<nav class="navbar navbar-inverse" id="navigationbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Londry</a>
    </div>
    <ul class="nav navbar-nav">
    <!--   <li class="active"><a href="#">Home</a></li> -->
      <li class="dropdown"><a  href="#">File</a>
        <ul class="dropdown-menu">
          <li><a href="#">Print delivery note </a></li>
          <li><a id="todaydeleverynoteid">Pending delivery note</a></li>
          <li><a id="dbbackupid">DB Backup</a></li>
          <li><a href="{{ URL::to('logout') }}">Logout</a></li>
          
        </ul>
      </li>

      <li class="dropdown"><a  href="#">Accounts</a>
        <ul class="dropdown-menu">
          <li><a id="taxmasterbtn" >Tax Master</a></li>
          
        </ul>
      </li>
      <li class="dropdown"><a  href="#">Coustomers</a>
        <ul class="dropdown-menu">
          <li><a  id="newcustomerbtn"   >Customer Master</a></li>
          
        </ul>
      </li>
      <li class="dropdown"><a  href="#">Products</a>
        <ul class="dropdown-menu">
          <li><a id="newproductbtn">Product Master</a></li>
          
        </ul>
      </li>

      <li class="dropdown"><a  href="#">Employees</a>
        <ul class="dropdown-menu">
          <li><a id="Employeemasterbtn">Employee Master</a></li>
          <li><a id="Employeewagebtn">Employee wages</a></li>
          
        </ul>
      </li>

      <li class="dropdown"><a  href="#">Items</a>
        <ul class="dropdown-menu">
          <li><a id="newitemunitbtn">New Item Unit</a></li>
          <li><a id="newitemcatagorybtn">New Item Catagory</a></li>
          <li><a  id="itemmasterbtn">Item Master</a></li>
          
        </ul>
      </li>

      <li class="dropdown"><a  href="#">Suppliers</a>
        <ul class="dropdown-menu">
          <li><a id="suppliermasterbtn">Supplier Master</a></li>
          <li><a id="puschasemasterbtn">Puschase Master</a></li>
          
        </ul>
      </li>

    </ul>
  </div>
</nav>









  
<div class="container-fluid">


	  <div class="row">



    <div id="tabsss">

    <div class="col-sm-1" id="leftitems">
        <ul class="list-group row">
          <li><a class="list-group-item selectedicon" href="#tabs-1">Delivery Note</a></li>
          <li><a class="list-group-item" id="PreviousDeliveryNote" href="#tabs-2">Previous Delivery Note</a></li>
          <li><a class="list-group-item" href="#tabs-3">Invoice</a></li>
          <li><a class="list-group-item" href="#tabs-4">Statment By Customer</a></li>
          <li><a class="list-group-item" href="#tabs-5">Accounts Receivable</a></li>
          <li><a class="list-group-item" href="#tabs-6">Accounts Payable</a></li>
        </ul>

    </div>

    <div class="col-sm-11" id="tabsbody">
        <div id="tabs-1" class="tabcontant">
          <p></p>
          @include('include.londryDeliverynote')
        </div>
        <div id="tabs-2" class="tabcontant">
          <p></p>
          @include('include.londryPreviousDeliverynote')
        </div>
        <div id="tabs-3" class="tabcontant">
          <p></p>
         
        </div>
        <div id="tabs-4" class="tabcontant">
          <p></p>
          @include('include.londryStatementByCustomer')
        </div>
        <div id="tabs-5" class="tabcontant">
          <p>Mauris hendrerit.</p>
        </div>
        <div id="tabs-6" class="tabcontant">
          <p>Mauris hendrerit.</p>
        </div>

    </div>

    </div>








	  </div>

</div>



@include('include.customersmodal')
@include('include.itemsmodal')

@include('include.suppliersmodal')

@include('include.productsmodal')
@include('include.todaydeleverynotemodal')
@include('include.accountsmodal')
@include('include.dbbackupmodal')

</body>


<footer>
    FOOTER<br>
    <!-- contact: email,name,phn -->
</footer>
</html>


