<?php
// ACESSING ARRAY KEYS AND ELEMENTS USING aray_filter(), map(), reduce()
// Will it target the Same Key and give same Value, return $posts['title'] using filter() 
// and echo $posts[$i]['title'] using in while loop,  for below posts array
// it works with array_filter() because it targets element by element.
// So In first iteration: $user = ["name" => "mudasir", "age" => 21, "role" => "frontend"]
// Second: $user = ["name" => "mubashir RR", "age" => 26, "role" => "backend"]
// Third: $user = ["name" => "kashif Bahi", "age" => 32, "role" => "seo"]
$posts = [
    ["title" => "Learn PHP Basics", "author" => "Faisal", "date" => "Oct 31, 2025"],
    ["title" => "Understanding Loops in PHP", "author" => "Ali", "date" => "Nov 1, 2025"],
    ["title" => "Intro to MySQL with PHP", "author" => "Sara", "date" => "Nov 2, 2025"]
];
// return $user['name'] === $search || $user['role'] === $search || $user['age'] === $search;
// While Loop Example
$posts = [
    ["title" => "Learn PHP Basics", "author" => "Faisal", "date" => "Oct 31, 2025"],
    ["title" => "Understanding Loops in PHP", "author" => "Ali", "date" => "Nov 1, 2025"],
    ["title" => "Intro to MySQL with PHP", "author" => "Sara", "date" => "Nov 2, 2025"]
];
$i = 0;
$totalPosts = count($posts);
while ($i < $totalPosts) {
    echo "<h2>" . $posts[$i]['title'] . "</h2>";
    echo "<p><strong>Author:</strong> " . $posts[$i]['author'] . "</p>";
    echo "<p><em>Date:</em> " . $posts[$i]['date'] . "</p>";
    echo "<hr>";
    $i++;
}
// Example: Register the Custom Post Type in functions.php
function create_project_cpt() {
    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Project',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('project', $args);
}
add_action('init', 'create_project_cpt');
// Example: Use a while Loop to Display Custom Posts
 get_header(); ?>
<div class="projects-list">
    <h1>Our Latest Projects</h1>
    <?php
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => 5, // show 5 projects
    );
    $project_query = new WP_Query($args);
    if ($project_query->have_posts()) :
        while ($project_query->have_posts()) : $project_query->the_post();
            ?>   
            <div class="project-item">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="project-thumb">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>">Read More →</a>
            </div>
            <hr>
        <?php
        endwhile;
    else :
        echo "<p>No projects found.</p>";
    endif;
    wp_reset_postdata();
    ?>
</div>
<?php
 get_footer(); 
/* Example's Output in Browser
Our Latest Projects
---------------------
Project 1
Short description of project 1...
[Thumbnail]
Read More →
Project 2
Short description of project 2...
[Thumbnail]
Read More →


*/

?>
