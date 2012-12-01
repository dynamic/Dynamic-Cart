<div class="content-container typography">	
	$Breadcrumbs

	<h1>$Parent.Title</h1>
	<article>
		<div class="ProductImage">$Image.SetWidth(250)</div>
		<div class="ProductInfo">
			<h2>$Title</h2>
			<p>
				<b>Price:</b> $Price.Nice<br>
				<b>Item#:</b> $ProductCode
			</p>

			<div class="content">$Content</div>
			
			<p class="CartButton">[mini_cart_item name="$Title.XML" price="$Price.XML"]Add To Cart[/mini_cart_item]</p>
			<p>$ViewCart(View Cart)</p>
		</div>
	</article>
		
		
</div>
<% include SideBar %>