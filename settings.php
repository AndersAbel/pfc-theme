<?php
     if (!current_user_can('manage_options')) {
      wp_die('You do not have sufficient permissions to access this page.');
    }
?>
<h2>Passion for Coding Theme Settings</h2>

<?php
    if(isset($_POST["save-settings"])):
        $custom_head_content = stripslashes($_POST["custom-head-content"]);
        update_option("pfc_theme_custom_head_content", $custom_head_content);

        $google_plus_profile = $_POST["google-plus-profile"];
        update_option("pfc_theme_google_plus_profile", $google_plus_profile);

        $public_email = $_POST["public-email"];
        update_option("pfc_theme_public_email", $public_email);

        $twitter_name = $_POST["twitter-name"];
        update_option("pfc_theme_twitter_name", $twitter_name);

        $twitter_default_image = $_POST["twitter-default-image"];
        update_option("pfc_theme_twitter_default_image", $twitter_default_image);

        $ad_above_post = stripslashes($_POST["ad-above-post"]);
        update_option("pfc_theme_ad_above_post", $ad_above_post);

        $ad_below_post = stripslashes($_POST["ad-below-post"]);
        update_option("pfc_theme_ad_below_post", $ad_below_post);

        $ad_in_listing = stripslashes($_POST["ad-in-listing"]);
        update_option("pfc_theme_ad_in_listing", $ad_in_listing);

        $ad_sidebar = stripslashes($_POST["ad-sidebar"]);
        update_option("pfc_theme_ad_sidebar", $ad_sidebar);
?>
<div class="updated"><p>Settings saved</p></div>
<?php
    else:
        $custom_head_content = get_option("pfc_theme_custom_head_content");
        $google_plus_profile = get_option("pfc_theme_google_plus_profile");
        $public_email = get_option("pfc_theme_public_email");
        $twitter_name = get_option("pfc_theme_twitter_name");
	$twitter_default_image = get_option("pfc_theme_twitter_default_image");
        $ad_above_post = get_option("pfc_theme_ad_above_post");
        $ad_below_post = get_option("pfc_theme_ad_below_post");
        $ad_in_listing = get_option("pfc_theme_ad_in_listing");
        $ad_sidebar = get_option("pfc_theme_ad_sidebar");
    endif;
?>
<form method="POST" action="">
    <table class="form-table">
        <tbody>
        <tr>
            <th><label for="custom-head-content">Custom Head Content:</label></th>
            <td>
                <textarea id="custom-head-content" name="custom-head-content" cols="80" rows="10" 
                title="Use for Google Analytics tracking code etc."><?php echo $custom_head_content; ?></textarea>
            </td>
        </tr>
        <tr>
            <th><label for="google-plus-profile">Google Plus Profile Url:</label></th>
            <td><input type="url" id="google-plus-profile" name="google-plus-profile" class="regular-text code" 
                value="<?php echo $google_plus_profile; ?>" /></td>
        </tr>
        <tr>
            <th><label for="public-email-address">Publicly Shown E-mail:</label></th>
            <td><input type="email" id="public-email" name="public-email" class="regular-text code" 
                value="<?php echo $public_email; ?>" /></td>
        </tr>
        <tr>
            <th><label for="twitter-name">Twitter account name:</label></th>
            <td><input type="text" id="twitter-name" name="twitter-name" class="regular-text code" title="The twitter account name (without @)" 
                value="<?php echo $twitter_name; ?>" /></td>
        </tr>
        <tr>
            <th><label for="twitter-default-image">Default twitter card image:</label></th>
            <td><input type="text" id="twitter-default-image" name="twitter-default-image" class="regular-text code" title="Full URL to default twitter card image." 
                value="<?php echo $twitter_default_image; ?>" /></td>
        </tr>
        <tr>
            <th><label for="ad-above-post">Adsense Above Blog Post or Listing:</label></th>
            <td><textarea id="ad-above-post" name="ad-above-post" cols="80" rows="10"><?php echo $ad_above_post; ?></textarea></td>
        </tr>
        <tr>
            <th><label for="ad-below-post">Adsense Below Blog Post:</label></th>
            <td><textarea id="ad-below-post" name="ad-below-post" cols="80" rows="10"><?php echo $ad_below_post; ?></textarea></td>
        </tr>
        <tr>
            <th><label for="ad-in-listing">Adsense In Post Listing:</label></th>
            <td><textarea id="ad-in-listing" name="ad-in-listing" cols="80" rows="10"><?php echo $ad_in_listing; ?></textarea></td>
        </tr>
        <tr>
            <th><label for="ad-sidebar">Adsense In Sidebar:</label></th>
            <td><textarea id="ad-sidebar" name="ad-sidebar" cols="80" rows="10"><?php echo $ad_sidebar; ?></textarea></td>
        </tr>
	</tbody>
    </table>
    <p>
        <button value="save-settings" name="save-settings" class="button-primary">Save Settings</button>
    </p>
</form>

