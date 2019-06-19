<!-- Div Fixed Header -->

<div class="search-post-types-wrapper">

</div>
<div class="header-search-form-wrapper dark-filter search-toggle">
	<div class="header-search-form search-toggle">
		<form class ="search-form" name="search-form" method="get" role="search" action="<?php echo esc_url(home_url('/')); ?>">
		<div class="search-post-types-wrapper">
			<button class="post-type-button button-focused" id="guest_spots">Guest Spots</button>
			<input type="radio" name="post_type" id="post_type" value="guest_spot" checked>
			<button class="post-type-button" id="studios">Studios</button>
			<input type="radio" name="post_type" id="post_type" value="studio" >
			<button class="post-type-button" id="artists">Artists</button>
			<input type="radio" name="post_type" id="post_type" value="artist" >
			<button class="post-type-button" id="events">Events</button>
			<input type="radio" name="post_type" id="post_type" value="event" >
		</div>
		<div class="top-filters">
			<!-- LOCATION -->
			<div class="location-filter">
				<label for="location">Location</label>
				<input type="text" name="location" id="location" placeholder="Search Locations...">
			</div>
			<!-- DATES -->
			<div class="dates-filter">
				<label for="dates">Dates</label>
				<div class="date-inputs">
					<input type="text" name="date_from" id="date_from" placeholder="From...">
					<input type="text" name="date_to" id="date_to" placeholder="To...">
				</div>
			</div>
			<!-- NAME -->
			<div class="name-filter">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" placeholder="Search...">
			</div>
		</div>
		<div class="bottom-filters">
			<div class="taxonomies-wrapper">
				<!-- ART STYLE -->
				<div class="art-styles-wrapper taxonomy-form">
					<button class="taxonomies-button">Style</button>
					<fieldset class="taxonomies-dropdown">
						<?php
						$art_styles = get_terms(array(
							'taxonomy' => 'art_style',
							'hide_empty' => false,
						));
						if (!empty($art_syles)) {
							foreach ($art_styles as $art_style) {
								$style_name = $art_style->name;
								echo '<p>';
								echo '<input type="checkbox" name="art_style" value="' . $style_name . '" id="' . $style_name . '">';
								echo '<label for="' . $style_name . '">' . $style_name . '</label>';
								echo '</p>';
							}
						} else {
							echo '<p> Sorry nothing found! </p>';
						}
						?>
					</fieldset>
				</div>

				<!-- COMISSION -->
				<div class="comissions-wrapper taxonomy-form">
					<button class="taxonomies-button">Comission</button>
					<fieldset class="taxonomies-dropdown">
						<?php
						$comissions = get_terms(array(
							'taxonomy' => 'comission',
							'hide_empty' => false,
						));
						if (!empty($comissions)) {
							foreach ($comissions as $comission) {
								$comission_amount = $comission->name;
								echo '<p>';
								echo '<input type="checkbox" name="comission" value="' . $comission_amount . '" id="' . $comission_amount . '">';
								echo '<label for="' . $comission_amount . '">' . $comission_amount . '</label>';
								echo '</p>';
							}
						} else {
							echo '<p> Sorry nothing found! </p>';
						}
						?>
					</fieldset>
				</div>

				<!-- TOOLS -->
				<div class="tools-wrapper taxonomy-form">
					<button class="taxonomies-button">Tools</button>
					<fieldset class="taxonomies-dropdown">
						<?php
						$tools = get_terms(array(
							'taxonomy' => 'tools',
							'hide_empty' => false,
						));
						if (!empty($tools)) {
							foreach ($tools as $tool) {
								$tool_name = $tool->name;
								echo '<p>';
								echo '<input type="checkbox" name="tools" value="' . $tool_name . '" id="' . $tool_name . '">';
								echo '<label for="' . $tool_name . '">' . $tool_name . '</label>';
								echo '</p>';
							}
						} else {
							echo '<p> Sorry nothing found! </p>';
						}
						?>
					</fieldset>
				</div>
				<!-- ACCOMODATION -->
				<div class="accomodation-filter">
					<input type="checkbox" name="accomodation" id="accomodation">
					<label for="accomodation">Accomodation</label>
				</div>
			</div>
				<input type="submit" id="searchsubmit" value="Search" />
			</div>
		</form>
	</div>
</div>
