SELECT *
FROM wp_posts
WHERE ( ((`post_date`>0) && (`post_date`<=CURRENT_TIMESTAMP()) )
OR ((`post_date_gmt`>0) && (`post_date_gmt`<=UTC_TIMESTAMP()) ) )
AND `post_status`='future';
