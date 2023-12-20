<?php
global $post;
$projects = new WP_Query(array('post_type' => 'project'));
$skills = new WP_Query(array('post_type' => 'skill'));
$events = new WP_Query(array('post_type' => 'event'));
$about = get_field('about');
$skill = get_field('skill');
$skill_category = get_field('gpr_skill_category');
$skill_title = get_field('gpr_skill_title');
$skill_percentage = get_field('gpr_skill_percentage');
$skill_class_name = get_field('gpr_skill_class_name');
$event = get_field('event');
?>

<section class="section sec2 about" id="about">
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
                    <p class="small-text">Events in <br> Software Development</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-stats">
        <?php if ($skills->have_posts()) : ?>

            <?php while ($skills->have_posts()) : $skills->the_post(); ?>
                <?php if ($skill) : ?>
                    <?php if ($skill_category == 'Programming Skills') : ?>
                        <!-- Programming Skills -->
                        <h4 class="stat-title">Programming Skills</h4>
                        <div class="progress-bars">
                            <div class="progress-bar">
                                <p class="progress-title"><?php echo $skill_title; ?></p>
                                <div class="progress-container">
                                    <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                    <div class="progress">
                                        <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($skill_category == 'Markup Skills') : ?>
                        <!-- Markup Skills -->
                        <h4 class="stat-title">Markup Skills</h4>
                        <div class="progress-bars">
                            <div class="progress-bar">
                                <p class="progress-title"><?php echo  $skill_title; ?></p>
                                <div class="progress-container">
                                    <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                    <div class="progress">
                                        <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($skill_category == 'Scripting Skills') : ?>
                        <!-- Scripting Skills -->
                        <h4 class="stat-title">Scripting Skills</h4>
                        <div class="progress-bars">
                            <div class="progress-bar">
                                <p class="progress-title"><?php echo  $skill_title; ?></p>
                                <div class="progress-container">
                                    <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                    <div class="progress">
                                        <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($skill_category == 'Other Skills') : ?>
                        <!-- Other Skills -->
                        <h4 class="stat-title">Other Skills</h4>
                        <div class="progress-bars">
                            <div class="progress-bar">
                                <p class="progress-title"><?php echo  $skill_title; ?></p>
                                <div class="progress-container">
                                    <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                    <div class="progress">
                                        <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($skill_category == 'Soft Skills') : ?>
                        <!-- Soft Skills -->
                        <h4 class="stat-title">Soft Skills</h4>
                        <div class="progress-bars">
                            <div class="progress-bar">
                                <p class="progress-title"><?php echo  $skill_title; ?></p>
                                <div class="progress-container">
                                    <p class="progress-text"><?php echo $skill_percentage; ?></p>
                                    <div class="progress">
                                        <span class="<?php echo $skill_class_name; ?>" style="width: <?php echo $skill_percentage; ?>;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>

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