<?php
    $page = get_all_page_ids();
    $contact = get_field('contact', '12');
    $facebook = get_field('facebook', '12');
    $github = get_field('github', '12');
    $linkedin = get_field('linkedin', '12');
    $twitter = get_field('twitter', '12');
    $instagram = get_field('instagram', '12');
?>
<section class="section sec5 contact" id="contact">
    <div class="contact-container">
        <div class="main-title">
        <?php if($contact): ?>
            <h2><?php echo $contact['contact_h2']; ?></h2>
        <?php endif; ?>
        </div>
        <div class="contact-content-container">
            <div class="left-contact">
            <?php if($contact): ?>
                <h4><?php echo $contact['contact_h4']; ?></h4>
                <p><?php echo $contact['contact_paragraph']; ?></p>
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Location</span>
                        </div>
                        <p>:<?php echo $contact['contact_location']; ?></p>
                    </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                                <span>Phone</span>
                            </div>
                            <p>:<?php echo $contact['contact_phone_number']; ?></p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                                <span>Email</span>
                            </div>
                            <p>:<?php echo $contact['contact_email_address']; ?></p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-wifi"></i>
                                <span>Website</span>
                            </div>
                            <p>:<?php echo $contact['contact_website']; ?></p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-globe"></i>
                                <span>Languages</span>
                            </div>
                            <p>:<?php echo $contact['contact_languages']; ?></p>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="<?php echo $facebook['url']; ?>" target="_blank"><i class="<?php echo $facebook['icon']; ?>"></i></a>
                            </div>
                            <div class="contact-icon">
                                <a href="<?php echo $github['url']; ?>" target="_blank"><i class="<?php echo $github['icon']; ?>"></i></a>
                            </div>
                            <div class="contact-icon">
                                <a href="<?php echo $linkedin['url']; ?>" target="_blank"><i class="<?php echo $linkedin['icon']; ?>"></i></a>
                            </div>
                            <div class="contact-icon">
                                <a href="<?php echo $twitter['url']; ?>" target="_blank"><i class="<?php echo $twitter['icon']; ?>"></i></a>
                            </div>
                            <div class="contact-icon">
                                <a href="<?php echo $instagram['url']; ?>" target="_blank"><i class="<?php echo $instagram['icon']; ?>"></i></a>
                            </div>
                        </div>
                    </div>
            <?php endif; ?>
            </div>
            
            <div class="right-contact">
                <?php echo do_shortcode('[fluentform id="1"]'); ?>
            </div>
        </div>
    </div>
</section>