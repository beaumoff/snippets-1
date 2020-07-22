http://www.tripwiremagazine.com/2010/06/how-to-effectively-bulk-delete-many-posts-in-wordpress.html

SELECT *
FROM wp_posts a
LEFT JOIN wp_term_relationships b ON ( a.ID = b.object_id )
LEFT JOIN wp_postmeta c ON ( a.ID = c.post_id )
LEFT JOIN wp_term_taxonomy d ON ( d.term_taxonomy_id = b.term_taxonomy_id )
LEFT JOIN wp_terms e ON ( e.term_id = d.term_id )
WHERE e.term_id =<category id>


DELETE a,b,c,d
FROM wp_posts a
LEFT JOIN wp_term_relationships b ON ( a.ID = b.object_id )
LEFT JOIN wp_postmeta c ON ( a.ID = c.post_id )
LEFT JOIN wp_term_taxonomy d ON ( d.term_taxonomy_id = b.term_taxonomy_id )
LEFT JOIN wp_terms e ON ( e.term_id = d.term_id )
WHERE e.term_id =<category id>
