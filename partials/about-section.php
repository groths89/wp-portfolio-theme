<?php
global $post;
$projects = new WP_Query(array('post_type' => 'project'));
$skills = new WP_Query(array('post_type' => 'skill'));
$events = new WP_Query(array('post_type' => 'event'));
$about = get_field('about');
$skill = get_field('skill');
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
                    <p class="large-text">560+</p>
                    <p class="small-text">Cups of Coffee <br> Drank</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-stats">
        <?php if ($skills->have_posts()) : ?>

            <?php while ($skills->have_posts()) : $skills->the_post(); ?>
                <!-- Programming Skills -->
                <h4 class="stat-title">Programming Skills</h4>
                <div class="progress-bars">
                    <?php if ($skill['category'] === 'Programming Skills') : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo $skill['title']; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill['percentage']; ?></p>
                                <div class="progress">
                                    <span class="<?php $skill['class']; ?>"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <h4 class="stat-title">Markup Skills</h4>
                <div class="progress-bars">
                    <?php if ($skill['category'] === 'Markup Skills') : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo $skill['title']; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill['percentage']; ?></p>
                                <div class="progress">
                                    <span class="<?php $skill['class']; ?>"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="progress-bars">
                    <!-- HTML -->
                    <div class="progress-bar">
                        <p class="progress-title">html</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <!-- XML -->
                    <div class="progress-bar">
                        <p class="progress-title">xml</p>
                        <div class="progress-container">
                            <p class="progress-text">20%</p>
                            <div class="progress">
                                <span class="xml"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="progress-title">css</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="stat-title">Scripting Skills</h4>
                <div class="progress-bars">
                    <?php if ($skill['category'] === 'Scripting Skills') : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo $skill['title']; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill['percentage']; ?></p>
                                <div class="progress">
                                    <span class="<?php $skill['class']; ?>"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="progress-bars">
                    <!-- YAML -->
                    <div class="progress-bar">
                        <p class="progress-title">yaml</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="yaml"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Node -->
                    <div class="progress-bar">
                        <p class="progress-title">node</p>
                        <div class="progress-container">
                            <p class="progress-text">20%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="progress-title">bash</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="bash"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="progress-title">git</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="git"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="stat-title">Other Skills</h4>
                <div class="progress-bars">
                    <?php if ($skill['category'] === 'Other Skills') : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo $skill['title']; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill['percentage']; ?></p>
                                <div class="progress">
                                    <span class="<?php $skill['class']; ?>"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="progress-bars">
                    <!-- Adobe CS -->
                    <div class="progress-bar">
                        <p class="progress-title">adobe creative suite</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="adobe"></span>
                            </div>
                        </div>
                    </div>
                    <!-- AWS -->
                    <div class="progress-bar">
                        <p class="progress-title">amazon web services</p>
                        <div class="progress-container">
                            <p class="progress-text">20%</p>
                            <div class="progress">
                                <span class="aws"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="progress-title">azure</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="azure"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="progress-title">google cloud platform</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="gcp"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="progress-title">jenkins</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="jenkins"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="stat-title">Soft Skills</h4>
                <div class="progress-bars">
                    <?php if ($skill['category'] === 'Soft Skills') : ?>
                        <div class="progress-bar">
                            <p class="progress-title"><?php echo $skill['title']; ?></p>
                            <div class="progress-container">
                                <p class="progress-text"><?php echo $skill['percentage']; ?></p>
                                <div class="progress">
                                    <span class="<?php $skill['class']; ?>"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="progress-bars">
                    <!-- Agile -->
                    <div class="progress-bar">
                        <p class="progress-title">agile</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="agile"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Problem Solving -->
                    <div class="progress-bar">
                        <p class="progress-title">problem solving</p>
                        <div class="progress-container">
                            <p class="progress-text">20%</p>
                            <div class="progress">
                                <span class="problem_solving"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="progress-title">strategic thinking</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="strategic_thinking"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="progress-title">researching</p>
                        <div class="progress-container">
                            <p class="progress-text">90%</p>
                            <div class="progress">
                                <span class="researching"></span>
                            </div>
                        </div>
                    </div>
                </div>
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