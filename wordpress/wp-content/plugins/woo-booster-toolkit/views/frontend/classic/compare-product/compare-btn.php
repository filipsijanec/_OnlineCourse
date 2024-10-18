<?php
if (!isset($data)) {
    return;
}

if ($data['is_my_compare']) {
    $class = 'wcbt-product-compare active';
} else {
    $class = 'wcbt-product-compare';
}
?>

<div class="<?php echo esc_attr($class); ?>" data-product-id="<?php echo esc_attr($data['product_id']); ?>" data-type="<?php echo esc_attr($data['compare_type']); ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    <g clip-path="url(#clip0_1874_2747)">
        <path d="M19.166 3.33325V8.33325H14.166" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M0.833984 16.6667V11.6667H5.83398" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M2.92565 7.49998C3.34829 6.30564 4.06659 5.23782 5.01354 4.39616C5.96048 3.55451 7.10521 2.96645 8.34089 2.68686C9.57657 2.40727 10.8629 2.44527 12.08 2.79729C13.297 3.14932 14.405 3.80391 15.3007 4.69998L19.1673 8.33331M0.833984 11.6666L4.70065 15.3C5.59627 16.1961 6.70429 16.8506 7.92132 17.2027C9.13835 17.5547 10.4247 17.5927 11.6604 17.3131C12.8961 17.0335 14.0408 16.4455 14.9878 15.6038C15.9347 14.7621 16.653 13.6943 17.0756 12.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <defs>
        <clipPath id="clip0_1874_2747">
        <rect width="20" height="20" fill="white"/>
        </clipPath>
    </defs>
    </svg>
	<?php
	if (!empty($data['compare_tooltip_text']) && !$data['is_my_compare']) {
		?>
        <span class="tooltip"><?php echo esc_html($data['compare_tooltip_text']);?></span>
		<?php
	}

	if (!empty($data['compare_remove_tooltip_text']) && $data['is_my_compare']) {
		?>
        <span class="tooltip"><?php echo esc_html($data['compare_remove_tooltip_text']);?></span>
		<?php
	}
	?>
</div>
