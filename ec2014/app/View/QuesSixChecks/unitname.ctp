<?php echo $this -> Session -> flash(); ?>

<div id="new_book">
	<?php echo $this -> Html -> link(__('BACK TO UPAZILA'), array('controller' => 'QuesSixChecks', 'action' => 'q6upazila')); ?>
</div>
<br />
<fieldset>
	<legend>
		<?php  echo "ইউনিয়ন&nbsp;/&nbsp;ওয়ার্ড&nbsp;:&nbsp;" . $upazilaName; ?>
	</legend>

	<div class="actions">
		<?php

foreach ($unionNames as $key => $unionName) {

echo ($key+1).". ".$this->Html->link($unionName['GeoCodeUnion']['union_name'], array('controller' => 'QuesSixChecks', 'action' => 'books', $unionName['GeoCodeUnion']['id'], $upazilaID));
echo "<br />";
}

	?>
	</div>
</fieldset>
</br>