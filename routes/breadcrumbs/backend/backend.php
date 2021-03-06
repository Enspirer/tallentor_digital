<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.module.index', function ($trail) {
    $trail->push('Module Explorer', route('admin.module.index'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

Breadcrumbs::for('admin.file_manager.index', function ($trail) {
    $trail->push('File Manager', route('admin.file_manager.index'));
});

Breadcrumbs::for('admin.settings.index', function ($trail) {
    $trail->push('General Settings', route('admin.settings.index'));
});

Breadcrumbs::for('admin.about_us', function ($trail) {
    $trail->push('About Us', route('admin.about_us'));
});

Breadcrumbs::for('admin.privacy_policy', function ($trail) {
    $trail->push('Privacy Policy', route('admin.privacy_policy'));
});

Breadcrumbs::for('admin.terms_and_conditions', function ($trail) {
    $trail->push('Terms and Conditions', route('admin.terms_and_conditions'));
});

Breadcrumbs::for('admin.contactus_thanks', function ($trail) {
    $trail->push('Contact Us Thanks Email', route('admin.contactus_thanks'));
});

Breadcrumbs::for('admin.contact_us.index', function ($trail) {
    $trail->push('Contact Us', route('admin.contact_us.index'));
});
Breadcrumbs::for('admin.contact_us.edit', function ($trail) {
    $trail->push('Contact Us Status', route('admin.contact_us.edit',1));
});

Breadcrumbs::for('admin.partnership_inqiries.index', function ($trail) {
    $trail->push('Partnership Inqiries', route('admin.partnership_inqiries.index'));
});
Breadcrumbs::for('admin.partnership_inqiries.edit', function ($trail) {
    $trail->push('Partnership Inqiries Status', route('admin.partnership_inqiries.edit',1));
});

Breadcrumbs::for('admin.webiste_checkout.index', function ($trail) {
    $trail->push('Website Checkout', route('admin.webiste_checkout.index'));
});
Breadcrumbs::for('admin.webiste_checkout.view', function ($trail) {
    $trail->push('Website Checkout View', route('admin.webiste_checkout.view',1));
});