
# update content
UPDATE wp_posts SET post_content = REPLACE (post_content, 'http://olddomain', 'http://newdomain');

# update guids
UPDATE wp_posts SET guid = REPLACE (guid, 'http://olddomain', 'http://newdomain');

#update options
UPDATE wp_options SET option_value = replace(option_value, 'http://olddomain', 'http://newdomain') WHERE option_name = 'home' OR option_name = 'siteurl';

