http://greatest-blog.com/blogs/wordpress-sql-query-delete-orphaned-term-relationships-wp_term_relationships/

DELETE tr FROM wp_term_relationships tr
 INNER JOIN wp_term_taxonomy tt ON (tr.term_taxonomy_id = tt.term_taxonomy_id)
 WHERE tt.taxonomy != ‘link_category’
 AND tr.object_id NOT IN (SELECT ID FROM wp_posts);
