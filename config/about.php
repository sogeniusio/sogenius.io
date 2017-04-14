<?php
use Carbon\Carbon;

return [
    'name' => 'Hosnel Guerrier',
    'name_pronounce' => 'Hosnel Guerrier',
    'nick' => 'Hos',
    'nick_pronounce' => '| Hahz |',
    'age' => Carbon::createFromDate(1990, 3, 2)->diff(Carbon::now())->format('%y years old'),
    'bio' => 'I am a 26 years old freelance web developer /
    designer based in New York City. I build beautiful and functional websites for small
    businesses and brands. I am completely self-taught, specializing in brand design,
    development &amp strategy, website &amp mobile applications, user experience, email design
    &amp marketing, and print design. ',
    'work' => '1800Flowers.com',
    'avatar' => 'http://sogenius.dev/images/profile-avatar.jpg',
    'personal_social_media' => [
        'twitter' => [
            'url' => 'http://twitter.com/hosnelg',
            'handle' => '@hosnelg'
        ],
        'instagram' => [
            'url' => 'http://instagram.com/hosnelg',
            'handle' => '@hosnelg'
        ],
        'facebook' => [
            'url' => 'http://facebook.com/hosnelg',
            'handle' => '@hosnelg'
        ],
        'github' => [
            'url' => 'http://gihub.com/sogeniusio',
            'handle' => '@hosnelg'
        ],
    ],


];