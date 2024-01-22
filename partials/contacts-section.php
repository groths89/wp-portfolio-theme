<?php
$page = get_all_page_ids();
$contact = get_field('gpr_contact');
$facebook = get_field('gpr_facebook');
$github = get_field('gpr_github');
$linkedin = get_field('gpr_linkedin');
$twitter = get_field('gpr_twitter');
$instagram = get_field('gpr_instagram');
?>
<section class="section sec5 contact" id="contact">
    <div class="contact-container">
        <div class="main-title">
            <?php if ($contact) : ?>
                <h2><?php echo $contact['gpr_contact_h2']; ?></h2>
            <?php else : ?>
                <h2>Contact <span>Me</span></h2>
            <?php endif; ?>
        </div>
        <div class="contact-content-container">
            <div class="left-contact">
                <?php if ($contact) : ?>
                    <h4><?php echo $contact['gpr_contact_h4']; ?></h4>
                    <p><?php echo $contact['gpr_contact_paragraph']; ?></p>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Location</span>
                            </div>
                            <p>:<?php echo $contact['gpr_contact_location']; ?></p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                                <span>Phone</span>
                            </div>
                            <p>:<?php echo $contact['gpr_contact_phone_number']; ?></p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                                <span>Email</span>
                            </div>
                            <p>:<?php echo $contact['gpr_contact_email_address']; ?></p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-wifi"></i>
                                <span>Website</span>
                            </div>
                            <p>:<?php echo $contact['gpr_contact_website']; ?></p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fas fa-globe"></i>
                                <span>Languages</span>
                            </div>
                            <p>:<?php echo $contact['gpr_contact_languages']; ?></p>
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