<?php

use Laravel\Dusk\Browser;

test('can visit home page', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->assertSee('Laravel');
    });
});

test('can visit about page', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/about')
                ->assertSee('About Us')
                ->assertSee('This is a test application for Laravel Dusk browser testing.');
    });
});

test('can navigate between pages', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->clickLink('About')
                ->assertPathIs('/about')
                ->assertSee('About Us')
                ->clickLink('Contact')
                ->assertPathIs('/contact')
                ->assertSee('Contact Us')
                ->clickLink('Home')
                ->assertPathIs('/');
    });
});

test('can view contact form', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/contact')
                ->assertSee('Contact Us')
                ->assertPresent('#contact-form')
                ->assertPresent('#name')
                ->assertPresent('#email')
                ->assertPresent('#message');
    });
});

test('can submit contact form', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/contact')
                ->type('#name', 'John Doe')
                ->type('#email', 'john@example.com')
                ->type('#message', 'This is a test message from Dusk')
                ->press('Send Message')
                ->waitForText('Thank You!')
                ->assertPathIs('/contact')
                ->assertSee('Thank you, John Doe! Your message has been received.');
    });
});
