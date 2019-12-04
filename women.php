<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial scale=1">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <link rel="stylesheet"href="latest.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
      <script src="https://ajax.gooleis.com/ajax/libs/jquery/2.1.2/jquey.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script> 
         <title>SIGINON</title>

         </head>
         
         <body>
             <style>
                
                 
         .icon-bar{
    width:100%;
    overflow: auto;
    background-color:#b4b4b4; 
    
}
.icon-bar a{
    float: left;
    text-align:center;
width:15%;
    color: white;
    font-size:18px;
    padding:1px 0;
    transitin:all 0.3s ease;
    text-decoration:none;

}
.icon-bar a:hover{
    background-color:blue;
}
.active{
    background-color:hsl(0, 100%, 0%);
}
    </style>
    
    
                     <div class="icon-bar">
                     <a href="index.php"class="active"><i class="fa fa-home"></i></a>
                     <a href="bro.php"><i class="fa fa-user"></i></a>
                     <a href="#"><i class="fa fa-phone"></i></a>
                      
                            
                            
                                <a href="men.php">mens</a>
                                <a href="women.php">womens</a>
                                
                                
       
    
     
       </div>
       <header>
  

<head>
		<title>Shoe embassy limited </title>
		<script src="js/jquery.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
		<style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<br />
			<h3 align="center"><a href="#">womens shoes shop Now</a></h3>
			<br />
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<a class="navbar-brand" href="/"></a>
					</div>
					
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">$ 0.00</span>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</nav>
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div align="right">
					<a href="#" class="btn btn-primary" id="check_out_cart">
					<span class="glyphicon glyphicon-shopping-cart"></span> Check out
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
					<span class="glyphicon glyphicon-trash"></span> Clear
					</a>
				</div>
			</div>

			<div id="display_item">


			</div>
			
		</div>
        </body>
        </html>

        <script>  
$(document).ready(function(){

	load_product();

	load_cart_data();
    
	function load_product()
	{
		$.ajax({
			url:"fetch women.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		});
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch cart women.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Item has been Added into Cart");
				}
			});
		}
		else
		{
			alert("lease Enter Number of Quantity");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});
    
});

</script>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

<div style="background-color: #6351ce;">
  <div class="container">

	<!-- Grid row-->
	<div class="row py-4 d-flex align-items-center">

	  <!-- Grid column -->
	  <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
		<h6 class="mb-0">Get connected with us on social networks!</h6>
	  </div>
	  <!-- Grid column -->

	  <!-- Grid column -->
	  <div class="col-md-6 col-lg-7 text-center text-md-right">

		<!-- Facebook -->
		<i class="fa fa-facebook mr-3"></i>
		 
		
		<!-- Twitter -->
		<i class="fa fa-twitter mr-3"></i>
	   
		  
		</a>
		<!-- Google +-->
		<a class="gplus-ic">
		<i class="fa fa-google-plus mr-3" aria-hidden="true"></i>
		</a>
		<!--Linkedin -->
		<a class="li-ic">
		  <i class="fa fa-instagram mr-3"> </i>
		</a>
		<!--Instagram-->
		<a class="ins-ic">
		<i class="fa fa-skype" aria-hidden="true"></i>

		</a>

	  </div>
	  <!-- Grid column -->

	</div>
	<!-- Grid row-->

  </div>
</div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

	<!-- Grid column -->
	<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

	  <!-- Content -->
	  <h6 class="text-uppercase font-weight-bold">Company name</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>Shoe embassy</p>

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

	  <!-- Links -->
	  <h6 class="text-uppercase font-weight-bold">Products</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>
		<a href="men.php">Mens shoes</a>
	  </p>
	  <p>
		<a href="women.php">womes shoes</a>
	  </p>
	 
	  

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

	  <!-- Links -->
	  <h6 class="text-uppercase font-weight-bold">Useful links</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>
		<a href="llogin.php">Your Account</a>
	  </p>
	  <p>
		<a href="#!">Become an Ambassorder</a>
	  </p>
	  <p>
		<a href="#!">Shipping Rates</a>
	  </p>
	  <p>
		<a href="#!">Help</a>
	  </p>

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

	  <!-- Links -->
	  <h6 class="text-uppercase font-weight-bold">Contact</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>
		<i class="fa fa-home mr-3"></i> Nairobi, Nrb 10012, kenya</p>
	  <p>
		<i class="fa fa-envelope mr-3 "></i> info@shoeembassy.com</p>
	  <p>
		<i class="fa fa-phone mr-3"></i> +254 750250939</p>
	  <p>
		<i class="fa fa-print mr-3"></i> + 254 701339935</p>

	</div>
	<!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright:
  <a href=> shoe embassy.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
