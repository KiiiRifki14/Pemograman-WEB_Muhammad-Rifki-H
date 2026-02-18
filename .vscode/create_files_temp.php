<?php
$files = [
    "tryjs_button_name.html",
    "tryjs_button_type.html",
    "tryjs_button_value.html",
    "tryjs_button_text.html",
    "tryjs_button_form.html",
    "tryjs_form_submit.html",
    "tryjs_form_reset.html",
    "tryjs_form_elements.html",
    "tryjs_form_acceptcharset.html",
    "tryjs_form_action.html",
    "tryjs_form_enctype.html",
    "tryjs_form_length.html",
    "tryjs_form_method.html",
    "tryjs_form_name.html",
    "tryjs_form_target.html",
    "tryjs_select_disabled.html",
    "tryjs_select_form.html",
    "tryjs_select_length.html",
    "tryjs_select_size.html",
    "tryjs_select_multiple.html",
    "tryjs_select_value.html",
    "tryjs_select_options.html",
    "tryjs_select_selectedindex.html",
    "tryjs_option_text.html",
    "tryjs_select_remove.html"
];

foreach ($files as $file) {
    if (file_put_contents($file, "") !== false) {
        echo "Created $file\n";
    } else {
        echo "Failed to create $file\n";
    }
}
?>
