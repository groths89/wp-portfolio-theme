<?php
global $post;
$term = get_queried_object();
$projects = new WP_Query(array('post_type' => 'project'));
$skills = new WP_Query(array('post_type' => 'skill'));
$programmingSkillsQuery = new WP_Query(array(
    'post_type' => 'skill',
    'tax_query' => array(
        array(
            'taxonomy' => 'skill-category',
            'field' => 'slug',
            'terms' => 'Programming Skills',
        )
    ),
));
$markupSkillsQuery = new WP_Query(array(
    'post_type' => 'skill',
    'tax_query' => array(
        array(
            'taxonomy' => 'skill-category',
            'field' => 'slug',
            'terms' => 'Markup Skills',
        )
    ),
));
$scriptingSkillsQuery = new WP_Query(array(
    'post_type' => 'skill',
    'tax_query' => array(
        array(
            'taxonomy' => 'skill-category',
            'field' => 'slug',
            'terms' => 'Scripting Skills',
        )
    ),
));
$otherSkillsQuery = new WP_Query(array(
    'post_type' => 'skill',
    'tax_query' => array(
        array(
            'taxonomy' => 'skill-category',
            'field' => 'slug',
            'terms' => 'Other Skills',
        )
    ),
));
$softSkillsQuery = new WP_Query(array(
    'post_type' => 'skill',
    'tax_query' => array(
        array(
            'taxonomy' => 'skill-category',
            'field' => 'slug',
            'terms' => 'Soft Skills',
        )
    ),
));
$events = new WP_Query(array('post_type' => 'event'));
$about = get_field('about');
$skill = get_field('skill');
$skill_category = get_field('gpr_skill_category', $term);
$skill_title = get_field('gpr_skill_title', $term);
$skill_percentage = get_field('gpr_skill_percentage', $term);
$skill_class_name = get_field('gpr_skill_class_name', $term);
$event = get_field('event');
?>

<section class="section sec2 about" id="about">
    <?php print_r($skill_category); ?>
    <div class="main-title">
        <h2><?php echo $about['about_h2']; ?></h2>
    </div>
    <div class="about-container">
        <div class="left-about">
            <h4><?php echo $about['about_h4']; ?></h4>
            <p><?php echo $about['about_paragraph']; ?></p>
        </div>
        <div class="right-about">
            <div class="about-item">
                <div class="abt-text">
                    <p class="large-text">
                        <?php
                        if ($projects->have_posts()) {
                            $count_projects = wp_count_posts('project')->publish;
                            echo $count_projects;
                        }
                        ?>
                    </p>
                    <p class="small-text">Projects <br> Completed</p>
                </div>
            </div>
            <div class="about-item">
                <div class="abt-text">
                    <p class="large-text">
                        <?php
                        if ($skills->have_posts()) {
                            $count_skills = wp_count_posts('skill')->publish;
                            echo $count_skills;
                        }
                        ?>
                    </p>
                    <p class="small-text">Skills <br> Learned</p>
                </div>
            </div>
            <div class="about-item">
                <div class="abt-text">
                    <p class="large-text">
                        <?php
                        $count = wp_count_posts('post')->publish;
                        echo $count;
                        ?>
                    </p>
                    <p class="small-text">Blogs <br> Written</p>
                </div>
            </div>
            <div class="about-item">
                <div class="abt-text">
                    <p class="large-text">
                        <?php
                        if ($events->have_posts()) {
                            $count_events = wp_count_posts('event')->publish;
                            echo $count_events;
                        } else {
                            echo 0;
                        }
                        ?>
                    </p>
                    <p class="small-text">Career <br> Events</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-stats">
        <?php if ($programmingSkillsQuery->have_posts()) : ?>
            <!-- Programming Skills -->
            <?php if ($skill) : ?>
                <h4 class="stat-title"><?php echo $skill_category ?></h4>
            <?php endif; ?>
            <div class="progress-bars">
                <?php while ($programmingSkillsQuery->have_posts()) : $programmingSkillsQuery->the_post(); ?>
                    <?php if ($skill) : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo $skill_title; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                <div class="progress">
                                    <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php if ($markupSkillsQuery->have_posts()) : ?>
            <!-- Markup Skills -->
            <?php if ($skill) : ?>
                <h4 class="stat-title"><?php echo $skill_category ?></h4>
            <?php endif; ?>
            <div class="progress-bars">
                <?php while ($markupSkillsQuery->have_posts()) : $markupSkillsQuery->the_post(); ?>
                    <?php if ($skill) : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo  $skill_title; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                <div class="progress">
                                    <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php if ($scriptingSkillsQuery->have_posts()) : ?>
            <!-- Scripting Skills -->
            <?php if ($skill) : ?>
                <h4 class="stat-title"><?php echo $skill_category ?></h4>
            <?php endif; ?>
            <div class="progress-bars">
                <?php while ($scriptingSkillsQuery->have_posts()) : $scriptingSkillsQuery->the_post(); ?>
                    <?php if ($skill) : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo  $skill_title; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                <div class="progress">
                                    <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php if ($otherSkillsQuery->have_posts()) : ?>
            <!-- Other Skills -->
            <?php if ($skill) : ?>
                <h4 class="stat-title"><?php echo $skill_category ?></h4>
            <?php endif; ?>
            <div class="progress-bars">
                <?php while ($otherSkillsQuery->have_posts()) : $otherSkillsQuery->the_post(); ?>
                    <?php if ($skill) : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo  $skill_title; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                <div class="progress">
                                    <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php if ($softSkillsQuery->have_posts()) : ?>
            <!-- Soft Skills -->
            <?php if ($skill) : ?>
                <h4 class="stat-title"><?php echo $skill_category ?></h4>
            <?php endif; ?>
            <div class="progress-bars">
                <?php while ($softSkillsQuery->have_posts()) : $softSkillsQuery->the_post(); ?>
                    <?php if ($skill) : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo  $skill_title; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                <div class="progress">
                                    <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <h4 class="stat-title">My Timeline</h4>
    <?php if ($events->have_posts()) : ?>
        <div class="timeline-container">
            <?php while ($events->have_posts()) : $events->the_post(); ?>
                <div class="timeline">
                    <div class="outer">
                        <div class="t-card">
                            <div class="t-info">
                                <h3 class="t-title"><?php the_title() ?></h3>
                                <p><?php the_content() ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>