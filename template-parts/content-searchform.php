<!-- Div Fixed Header -->
<div class="header-search-form-wrapper dark-filter search-toggle">
	<div class="header-search-form search-toggle">
		<form name="search-form" method="get" role="search" action="<?php echo esc_url(home_url('/')); ?>">
			<!-- LOCATION -->
			<div class="location-filter">
				<label for="location">Location</label>
				<input type="text" name="location" id="location" placeholder="Search Locations...">
			</div>
			<!-- DATES -->
			<div class="dates-filter">
				<label for="dates">Dates</label>
				<div class="date-inputs">
					<input type="date" name="date_from" id="dates">
					<input type="date" name="date_to" id="dates">
				</div>
			</div>
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
				<input type="submit" id="searchsubmit" value="Search" />
			</div>
		</form>
	</div>
</div>
