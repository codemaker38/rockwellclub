<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-MGHI-Y04CHVDYURU7WNFLUBU25OFJXCP');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
c::set('debug', true);
c::set('markdown.extra', true);

c::set('routes', [
    [
        'pattern' => 'internships',
        'action'  => function() {
            $page = page('internships')->children()->visible()->first();
            return go($page->url());
        }
    ],
    [
        'pattern' => 'destinations',
        'action'  => function() {
            $page = page('destinations')->children()->visible()->first();
            return go($page->url());
        }
    ],
]);