<?php
// Welcome Email templates
Configure::set('Connectreseller.email_templates', [
    'en_us' => [
        'lang' => 'en_us',
        'text' => 'Your new domain is being processed and will be registered soon!

Domain: {service.domain}

Thank you for your business!',
        'html' => '<p>Your new domain is being processed and will be registered soon!</p>
<p>Domain: {service.domain}</p>
<p>Thank you for your business!</p>'
    ]
]);

// All available TLDs
Configure::set('Connectreseller.tlds', [
    '.com',
    '.co.com',
    '.net',
    '.eu',
    '.org',
    '.it',
    '.com.fr',
    '.fr',
    '.pm',
    '.tf',
    '.wf',
    '.yt',
    '.info',
    '.tel',
    '.us',
    '.biz',
    '.org.uk',
    '.me.uk',
    '.co.uk',
    '.uk',
    '.firm.in',
    '.gen.in',
    '.ind.in',
    '.org.in',
    '.net.in',
    '.co.in',
    '.in',
    '.mobi',
    '.asia',
    '.tv',
    '.re',
    '.com.re',
    '.be',
    '.nom.co',
    '.net.co',
    '.com.co',
    '.co',
    '.cc',
    '.nl',
    '.nl',
    '.de',
    '.pw',
    '.in.net',
    '.cn.com',
    '.jp.net',
    '.ae.org',
    '.us.org',
    '.gr.com',
    '.la',
    '.br.com',
    '.gb.net',
    '.uk.com',
    '.uk.net',
    '.ru.com',
    '.sa.com',
    '.se.net',
    '.za.com',
    '.jpn.com',
    '.hu.net',
    '.africa.com',
    '.wiki',
    '.press',
    '.rest',
    '.ink',
    '.xyz',
    '.website',
    '.host',
    '.bar',
    '.us.com',
    '.eu.com',
    '.de.com',
    '.tokyo',
    '.london',
    '.me',
    '.vegas',
    '.za.bz',
    '.com.de',
    '.com.se',
    '.mex.com',
    '.nyc',
    '.club',
    '.guru',
    '.gallery',
    '.photography',
    '.technology',
    '.today',
    '.tips',
    '.photos',
    '.company',
    '.domains',
    '.center',
    '.management',
    '.systems',
    '.email',
    '.solutions',
    '.zone',
    '.cool',
    '.watch',
    '.works',
    '.expert',
    '.foundation',
    '.tools',
    '.vision',
    '.services',
    '.discount',
    '.digital',
    '.life',
    '.space',
    '.money',
    '.design',
    '.site',
    '.online',
    '.tech',
    '.global',
    '.land',
    '.media',
    '.care',
    '.house',
    '.bid',
    '.date',
    '.download',
    '.loan',
    '.review',
    '.science',
    '.trade',
    '.webcam',
    '.college',
    '.rent',
    '.pro',
    '.feedback',
    '.store',
    '.group',
    '.cx',
    '.security',
    '.protection',
    '.theatre',
    '.shop',
    '.love',
    '.realty',
    '.observer',
    '.art',
    '.tickets',
    '.storage',
    '.io',
    '.app',
    '.ro',
    '.car',
    '.cars',
    '.auto',
    '.ai',
    '.bz',
    '.co.bz',
    '.com.bz',
    '.net.bz',
    '.org.bz',
    '.ch',
    '.cz',
    '.gr',
    '.li',
    '.lt',
    '.lu',
    '.pl',
    '.biz.pl',
    '.com.pl',
    '.edu.pl',
    '.info.pl',
    '.net.pl',
    '.org.pl',
    '.si',
    '.academy',
    '.army',
    '.auction',
    '.bike',
    '.boutique',
    '.cafe',
    '.cash',
    '.chat',
    '.cheap',
    '.church',
    '.coffee',
    '.computer',
    '.consulting',
    '.contractors',
    '.direct',
    '.engineer',
    '.enterprises',
    '.estate',
    '.events',
    '.exchange',
    '.express',
    '.farm',
    '.fitness',
    '.forsale',
    '.gives',
    '.haus',
    '.market',
    '.marketing',
    '.mba',
    '.moda',
    '.parts',
    '.plus',
    '.productions',
    '.properties',
    '.pub',
    '.rentals',
    '.repair',
    '.sale',
    '.shopping',
    '.show',
    '.social',
    '.software',
    '.style',
    '.team',
    '.town',
    '.training',
    '.vet',
    '.world',
    '.wtf',
    '.capital',
    '.coach',
    '.codes',
    '.coupons',
    '.dating',
    '.delivery',
    '.dog',
    '.engineering',
    '.finance',
    '.financial',
    '.flights',
    '.fund',
    '.golf',
    '.kitchen',
    '.partners',
    '.pizza',
    '.recipes',
    '.restaurant',
    '.taxi',
    '.tours',
    '.toys',
    '.university',
    '.ventures',
    '.vin',
    '.wine',
    '.agency',
    '.city',
    '.directory',
    '.fyi',
    '.institute',
    '.international',
    '.ltd',
    '.report',
    '.run',
    '.support',
    '.network',
    '.band',
    '.dance',
    '.family',
    '.live',
    '.news',
    '.reviews',
    '.studio',
    '.credit',
    '.doctor',
    '.energy',
    '.gold',
    '.investments',
    '.actor',
    '.lawyer',
    '.casino',
    '.games',
    '.irish',
    '.movie',
    '.ninja',
    '.rocks',
    '.fm',
    '.mx',
    '.com.mx',
    '.org.mx',
    '.pk',
    '.com.pk',
    '.net.pk',
    '.org.pk',
    '.sx',
    '.tm',
    '.vg',
    '.ws',
    '.cm',
    '.co.cm',
    '.net.cm',
    '.com.cm',
    '.jp',
    '.ac.nz',
    '.co.nz',
    '.geek.nz',
    '.gen.nz',
    '.maori.nz',
    '.net.nz',
    '.org.nz',
    '.fo',
    '.monster',
    '.dev',
    '.srl',
    '.baby',
    '.best',
    '.ceo',
    '.desi',
    '.fun',
    '.luxury',
    '.saarland',
    '.uno',
    '.accountants',
    '.airforce',
    '.apartments',
    '.associates',
    '.bargains',
    '.bingo',
    '.builders',
    '.business',
    '.cab',
    '.camera',
    '.camp',
    '.cards',
    '.careers',
    '.catering',
    '.charity',
    '.claims',
    '.cleaning',
    '.clinic',
    '.clothing',
    '.community',
    '.condos',
    '.construction',
    '.cruises',
    '.deals',
    '.degree',
    '.democrat',
    '.dental',
    '.dentist',
    '.diamonds',
    '.education',
    '.equipment',
    '.exposed',
    '.fail',
    '.fan',
    '.florist',
    '.football',
    '.furniture',
    '.futbol',
    '.gifts',
    '.glass',
    '.gmbh',
    '.graphics',
    '.gratis',
    '.gripe',
    '.guide',
    '.healthcare',
    '.hockey',
    '.holdings',
    '.holiday',
    '.hospital',
    '.immo',
    '.immobilien',
    '.industries',
    '.insure',
    '.jetzt',
    '.jewelry',
    '.kaufen',
    '.lease',
    '.legal',
    '.lighting',
    '.limited',
    '.limo',
    '.loans',
    '.maison',
    '.memorial',
    '.mortgage',
    '.navy',
    '.pictures',
    '.plumbing',
    '.rehab',
    '.reise',
    '.reisen',
    '.republican',
    '.rip',
    '.salon',
    '.sarl',
    '.school',
    '.schule',
    '.shoes',
    '.singles',
    '.soccer',
    '.solar',
    '.supplies',
    '.supply',
    '.surgery',
    '.tax',
    '.tennis',
    '.theater',
    '.tienda',
    '.tires',
    '.vacations',
    '.viajes',
    '.video',
    '.villas',
    '.voyage',
    '.xn--vhquv',
    '.xn--czrs0t',
    '.xn--fjq720a',
    '.xn--unup4y',
    '.build',
    '.cricket',
    '.faith',
    '.men',
    '.menu',
    '.party',
    '.racing',
    '.stream',
    '.tube',
    '.win',
    '.boston',
    '.casa',
    '.rodeo',
    '.vip',
    '.work',
    '.at',
    '.com.au',
    '.ca',
    '.fi',
    '.ga',
    '.lv',
    '.se',
    '.sk',
    '.tk',
    '.co.za',
    '.capetown',
    '.click',
    '.cologne',
    '.cymru',
    '.durban',
    '.gdn',
    '.icu',
    '.joburg',
    '.koeln',
    '.link',
    '.markets',
    '.nagoya',
    '.okinawa',
    '.one',
    '.onl',
    '.page',
    '.qpon',
    '.ryukyu',
    '.wales',
    '.wang',
    '.yokohama',
    '.xn--c1avg',
    '.xn--ngbc5azd',
    '.xn--i1b6b1a6a2e',
    '.xn--t60b56a',
    '.xn--mk1bu44c',
    '.xn--tckwe',
    '.xn--q9jyb4c',
    '.xn--nqv7f',
    '.xn--6frz82g',
    '.xn--5tzm5g',
    '.gay',
    '.es',
    '.beauty',
    '.hair',
    '.quest',
    '.skin',
    '.makeup',
    '.homes',
    '.motorcycles',
    '.autos',
    '.boats',
    '.yachts',
    '.day',
    '.au',
]);

// Transfer fields
Configure::set('Connectreseller.transfer_fields', [
    'Websitename' => [
        'label' => Language::_('Connectreseller.transfer.Websitename', true),
        'type' => 'text'
    ],
    'Authcode' => [
        'label' => Language::_('Connectreseller.transfer.Authcode', true),
        'type' => 'text'
    ]
]);

// Domain fields
Configure::set('Connectreseller.domain_fields', [
    'Websitename' => [
        'label' => Language::_('Connectreseller.domain.Websitename', true),
        'type' => 'text'
    ]
]);

// Nameserver fields
Configure::set('Connectreseller.nameserver_fields', [
    'ns1' => [
        'label' => Language::_('Connectreseller.nameserver.ns1', true),
        'type' => 'text'
    ],
    'ns2' => [
        'label' => Language::_('Connectreseller.nameserver.ns2', true),
        'type' => 'text'
    ],
    'ns3' => [
        'label' => Language::_('Connectreseller.nameserver.ns3', true),
        'type' => 'text'
    ],
    'ns4' => [
        'label' => Language::_('Connectreseller.nameserver.ns4', true),
        'type' => 'text'
    ]
]);

// Whois fields
Configure::set('Connectreseller.whois_fields', [
    'Name' => [
        'label' => Language::_('Connectreseller.whois.Name', true),
        'type' => 'text'
    ],
    'EmailAddress' => [
        'label' => Language::_('Connectreseller.whois.EmailAddress', true),
        'type' => 'text'
    ],
    'Address1' => [
        'label' => Language::_('Connectreseller.whois.Address', true),
        'type' => 'text'
    ],
    'City' => [
        'label' => Language::_('Connectreseller.whois.City', true),
        'type' => 'text'
    ],
    'StateName' => [
        'label' => Language::_('Connectreseller.whois.StateName', true),
        'type' => 'text'
    ],
    'CountryName' => [
        'label' => Language::_('Connectreseller.whois.CountryName', true),
        'type' => 'text'
    ],
    'ZipCode' => [
        'label' => Language::_('Connectreseller.whois.Zip', true),
        'type' => 'text'
    ],
    'PhoneNo' => [
        'label' => Language::_('Connectreseller.whois.PhoneNo', true),
        'type' => 'text'
    ]
]);

// .US
Configure::set('Connectreseller.domain_fields.us', [
    'nexusCategory' => [
        'label' => Language::_('Connectreseller.domain_fields.category', true),
        'type' => 'select',
        'options' => [
            'C11' => Language::_('Connectreseller.domain_fields.category.c11', true),
            'C12' => Language::_('Connectreseller.domain_fields.category.c12', true),
            'C21' => Language::_('Connectreseller.domain_fields.category.c21', true),
            'C31' => Language::_('Connectreseller.domain_fields.category.c31', true),
            'C32' => Language::_('Connectreseller.domain_fields.category.c32', true)
        ]
    ],
    'appPurpose' => [
        'label' => Language::_('Connectreseller.domain_fields.purpose', true),
        'type' => 'select',
        'options' => [
            'P1' => Language::_('Connectreseller.domain_fields.purpose.p1', true),
            'P2' => Language::_('Connectreseller.domain_fields.purpose.p2', true),
            'P3' => Language::_('Connectreseller.domain_fields.purpose.p3', true),
            'P4' => Language::_('Connectreseller.domain_fields.purpose.p4', true),
            'P5' => Language::_('Connectreseller.domain_fields.purpose.p5', true)
        ]
    ],
    'isUs' => [
        'type' => 'hidden',
        'value' => '1'
    ]
]);
