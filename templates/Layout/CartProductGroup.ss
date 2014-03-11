<div class="content-container typography">	
	$Breadcrumbs
	
	<h1>$Title</h1>
	<div class="content">$Content</div>
	
	<% if Products %>
	<p>$Products.getTotalItems products in $MenuTitle</p>
	<ul class="ProductGroup">
		<% loop Products %>
			<li <% if Last %>class="last"<% end_if %> >
				<article>
					<div class="ProductThumb"><a href="$Link" title="$Title.XML">$Image.SetRatioSize(150,200)</a></div>
					<div class="ProductSummary">
						<h3><a href="$Link" title="$Title.XML">$Title</a></h3>
						<p>$Content.Summary</p>
						<p><b>Price:</b> $Price.Nice</p>
						<p><a href="$Link">Learn More</a>
					</div>
				</article>
			</li>
		<% end_loop %>	
	</ul>
	
	<% if Products.MoreThanOnePage %>
		<ul id="PageNumbers">
		<% if Products.NotFirstPage %>
			<li><a class="prev" href="$Products.PrevLink">Prev</a></li>
		<% end_if %>
		
		<% loop Products.PaginationSummary(4) %>
			<% if CurrentBool %>
				<li class="current">$PageNum</li>
			<% else %>
				<% if Link %>
					<li><a href="$Link" title="View page number $PageNum">$PageNum</a></li>
				<% else %>
					<li>&hellip;</li>
				<% end_if %>
			<% end_if %>
		<% end_loop %>

		<% if Products.NotLastPage %>
			<li><a class="next" href="$Products.NextLink">Next</a></li>
		<% end_if %>
		</ul>
	<% end_if %>
	
	<% end_if %>
		
</div>

<aside>
	<% if FeaturedProducts %>
	<nav class="secondary sidebox">
		<h3>Featured</h3>
		<ul class="FeaturedProducts">
			<% loop FeaturedProducts %>
			<li>
				<div class="ProductPreview"><a href="$Link">$Image.CroppedImage(80,80)</a></div>
				<div class="ProductBrief">
					<a href="$Link">$MenuTitle.LimitCharacters(50)</a> 
					<p><b>Price:</b> $Price.Nice</p>
				</div>
			</li>
			<% end_loop %>
		</ul>
	</nav>
	<% end_if %>
	
	<% if Categories %>
	<nav class="secondary sidebox">
		<h3>Categories</h3>
		<ul>
			<% loop Categories %>
			<li class="$LinkingMode"><a href="$Link" title="$Title.XML">$MenuTitle</a></li>
			<% end_loop %>
		</ul>
	</nav>
	<% end_if %>
</aside>