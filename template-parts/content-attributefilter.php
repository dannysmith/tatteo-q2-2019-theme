<!-- Div Fixed Header -->

<div class="header-search-form-wrapper dark-filter search-toggle">
	<div class="header-search-form search-toggle">
		<form class="search-form" id="attributes" name="search-form" method="post" role="search" action="<?php echo esc_url(home_url('/')); ?>">
			<div class="search-post-types-wrapper">
				<button class="post-type-button" id="guest_spots">Guest Spots</button>
				<input type="checkbox" name="post_type" id="post_type" value="guest_spot">
				<button class="post-type-button" id="studios">Studios</button>
				<input type="checkbox" name="post_type" id="post_type" value="studio">
				<button class="post-type-button" id="artists">Artists</button>
				<input type="checkbox" name="post_type" id="post_type" value="artist">
				<button class="post-type-button" id="events">Events</button>
				<input type="checkbox" name="post_type" id="post_type" value="event">
			</div>
			<div class="top-filters">
				<!--	Search -->
				<div class="search-filter">
					<label for="search">Search</label>
					<input type="text" name="search" id="search" placeholder="Search...">
				</div>
				<!-- Order by -->

				</fieldset>
			</div>
			<input type="submit" id="searchsubmit" value="Update" />
	</div>
</div>
</form>
</div>
</div>
