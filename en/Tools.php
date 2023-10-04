<?php

return [

  // CGU GENERATOR

  'cgu_generator' => [

    "title" => "Terms of Use Generator",

    "description" => "Create my Terms of Use easily with Cybricode.",



    "fields" => [

      "member_space" => [

        "question" => "Does the website include a member space?",

        "yes" => "Yes, I have a member space",

        "no" => "No, I don't have a member space",

      ],

      "website_service" => "Website services",

      "publishers_content" => "Who publishes content on the website?",

      "created_cgu" => "What is the date the TOS came into effect?",

      "generate" => "Generate the TOS",

    ],

  ],



  'cgv_generator' => [

    "title" => "Terms and Conditions Generator",

    "description" => "Create my Terms and Conditions easily with Cybricode",

    "generate" => "Generate Terms and Conditions",



    "fields" => [

      "type_activity" => [

        "question" => "Does the website market products or services?",

        "1" => "Products (this includes digital goods)",

        "2" => "Services",

        "3" => "Products and services",

      ],

      "services" => "What products are offered for sale?",

      "pays_ventes" => "Does the sale concern specific territories (other than metropolitan France)?",



      "created_cgv" => "What is the effective date of the GTC?",

      "processus_command" => "What is the order process?",



      "payement_conditions" => [

        "title" => "payment_conditions",

        "question" => "What are the possible payment methods?",

        "cb" => "credit cards",

        "cb_more" => "Bank cards and checks",

        "paypal" => "Paypal and other similar means",

      ],



      "paiement_effectued" => [

        "question" => "When is the payment of an order made?",

        "1" => "Payment is made when the order is placed and is debited immediately",

        "2" => "The payment is made when the order is placed but is only debited when the order is shipped",

        "3" => "The payment is made when the order is placed but is only debited when the order is shipped",

        "4" => "Payment is made upon delivery of the order",

        "5" => "The payment is made in one go at a specific time",

        "6" => "The payment is made according to a schedule without expenses",

      ],



      "livraisons" => [

        "title" => "Deliveries",

        "question" => "Do deliveries take place in other areas than Metropolitan France?",

        "question2" => "What are the delivery times?",

        "question3" => "If the delivery time is not respected, how long after the delivery time has been exceeded can the customer cancel the order ?",

        "question4" => "Are the deliveries ensured by an independent carrier ?",

        "question5" => "Maximum time to make a claim (from the delivery)",

        "question6" => "How can I make a complaint (mail, email, etc..)",

        "question7" => "What is the maximum period of refund, replacement or repair of the non-conforming or defective goods according to the legal guarantee?",

      ],



      "data" => [

        "title" => "Traitement des données personnelles",

        "finalite_donnees" => [

          "1" => "Processing only for the sale of products and their delivery (by the company without going through a third party)",

          "2" => "Processing only for the sale of the products and transmission to a third party for their delivery",

          "question" => "What is the purpose of the processing of personal data collected from customers?",

        ],

        "donnees_collectees" => [

          "1" => "Only first names, surnames, postal address, telephone number and e-mail address (in addition to the data for bank payment)",

          "2" => "The personal data collected is reserved for the company and other partner providers (e.g. transport provider, payment provider, maintenance provider, etc.)",

          "question" => "What personal data of customers are collected for account opening and product sales?",

        ],

      ],

      "litiges" => [

        "title" => "Litigation",

        "question1" => "Name of mediation service",

        "question2" => "Mailing address of the mediation service",

        "question3" => "Mediation Service Website",

        "question4" => "Mediation Service Email Address",

      ],

    ],

  ],



  'mentions_generator' => [

    "generate" => "Generate legal notices",

  ],



  'privacy_generator' => [

    "generate" => "Generate privacy policy",

  ],



  'global' => [

    "base_informations" => "Basic information",

    "fields" => [

      "website" => "website address",



      "editor" => [

        "title" => "website editor",

        "delegue" => [

          "question" => "Who is editing the website?",

          "not_humain" => "A legal person",

          "humain" => "A natural person",



          "enterprise_name" => "Name of the company",

          "enterprise_capital" => "Amount of share capital in euros",

          "enterprise_rcs" => "City of registration",

          "enterprise_siren" => "SIREN number",

          "enterprise_adress" => "Address of the registered office",

          "enterprise_username" => "First and last name of the director of the publication",



          "username" => "Name and first name of the person in charge of editing and publishing",

          "adress" => "Address of the address",

          "tel" => "Telephone number",

          "email" => "Email address",

        ],

      ],



      "hoster" => [

        "title" => "The host",

        "name_hoster" => "Name of the hoster",

        "adress_hoster" => "Address of the hoster's headquarters",

        "tel_hoster" => "Telephone number of the host",

      ],



      "collect_data" => [

        "title" => "Data collection",

        "question" => "Does the website collect personal data?",

        "yes" => "Yes",

        "no" => "No",

        "email__delete_account" => "Email address to delete your data",

      ],

    ],

  ],





  'seo' => [

    "fields" => [

      "domain" => "Domain name (https://cybrico.de)",

      "check_seo" => "Analyze website SEO",

      "console_seo" => "SEO information",

    ],

    "pagespeed" => [

      "title" => "Check your website's speed",

      "fields" => [

        "desktop" => "Computer",

        "mobile" => "Mobile",

        "desktop_mobile_question" => "Testing platform",

      ],

      "test" => "Check website",

      "information" => "Information about the page",

    ],

  ],



  'colors' => [

    "color" => "Color",

    "color2" => "Color {0}", // Example: RGB Color

    "convert" => "Color conversion",

    "information_color" => "Color information",

    "add" => "Add a color",

    "other_colors" => "Discover other color palettes through the community",

    "community" => "Community palettes",
    "description" => "Discover the color palettes of the Cybricode community.",
    "community_last" => "Latest community color palettes",

    "colors" => [

      "unique_color" => "unique color",

      "title" => "Color Palette",

      "description" => "With the Cybricode color palette, get the colors you need in HEX, RBG, CMYK and more",

      "console" => "Color information",



      "other_color_list" => "Need more than one color? No problem! Everything is done for you below.<br>

        Click on the [<button class='generator-button'>Space</button>] key to generate a color.",

    ],
    "fields" => [
      "main_color" => "Main color",
      "randomize" => "Randomize",
      "export" => "Export",

      "analogous" => "Analogous",
      "monochromatic" => "Monochromatic",
      "triadic" => "Triadic",
      "complementary" => "Complementary",
      "split_complementary" => "Split Complementary      ",
      "double_split_complementary" => "Double Split Complementary",
      "square" => "Square",
      "compound" => "Compound",
      "shades" => "Shades",

      "add_color" => "New color",
      "remove_color" => "Delete",

      "name" => "Name of your color palette",
      "new_palette" => "New color palette",
      "publish" => "Publish color palette",

      "success_publish" => "Success! Your color palette is now published!",
      "error_publish" => "Oops. It seems that an error occurred during publication.",

      "palettes_user" => "{0}'s color palettes",
    ]

  ],



  "graphic_design" => [

    "choose_colors" => "choice of colors",

    "information_design" => "graphic_design information",



    "primary_color" => "primary color",

    "accent_color" => "accent color",

    "text_color" => "Text color",

    "button_color" => "button color",



    "choose_typo" => "typeface choice",

    "primary_typo" => "primary typography",

    "secondary_typo" => "Secondary typography",

    "style" => "Style of typography",

    "select_policefont" => "Select a font",





    "graphic_design" => "The graphic design",

    "description_graphic_design" => "Here are the elements for your graphic design",

    "your_colors" => "Your colors",

    "your_typo" => "Your typography",

  ],



  "converter" => [

    "fontawesome" => [

      "title" => "Font Awesome to SVG icon converter",

      "description" => "Convert your Font Awesome icons easily with Cybricode.",

      "information" => "Font Awesome holds a 20% market share among sites that use third-party font scripts on their platform, second only to Google Fonts. Font Awesome first published on August 21, 2012, this site allows you to have thousands of icons to make your site come alive.",



      "converter" => "What do you want to convert?",

      "icon" => "Font Awesome icon",

      "family" => "Family of icons",

      "style" => "Style",

      "convert_button" => "Convert",

    ],

    "timestamp" => [

      "title" => "date to timestamp converter",

      "description" => "Convert your dates easily with Cybricode.",

      "information" => "The timestamp represents the amount of seconds that have passed since the first of January of the year 1970 (start of UNIX time), in other words, the timestamp (unix) is the number of seconds that have passed since January 1st 1970 at midnight UTC. This value is used in computer science to constitute a precise moment thanks to a number. Timestamp values can be used with most programming languages and database management systems",

    ],

  ],



  "dns" => [

    "fields" => [

      "check_dns" => "Check the DNS of an address.",

      "adress" => "Domain name or IP",

      "check" => "Check DNS",

      "waiting" => "DNS address recovery in progress.",

      "no_data" => "No data was found for the following address.",

      "dns_type" => [

        "host" => "Host",

        "type" => "Type",

        "ttl" => "TTL",

        "entry" => "Entry",

        "list" => [

          "all" => "All DNS",

        ],

      ],

    ],

  ],



  "carbon" => [

    "check_carbon" => "check the carbon footprint of a website",

    "fields" => [

      "check" => "Check carbon footprint",

      "waiting" => "Current carbon footprint calculation.",

      "domain" => "Domain name (cybrico.de)",

      "visitors" => "Number of monthly visitors",

    ],



    "api" => [

      "loading" => [

        "200" => "OK",

        "404_title" => "An error has occurred",

        "404" => "Oops, looks like address {0} is invalid.",

        "api_error" => "Oops! Looks like our API is overloaded. Please wait a bit. If this message persists, contact us on Discord!",

      ],

      "page" => [

        "carbon_true" => "Hooray! This web page is cleaner than {0, number}% of the tested web pages",

        "carbon_false" => "Oh no! The page or host is not environmentally clean. {0}% of web pages tested",

        "text_true" => "This site is hosted by a host that runs on sustainable energy.",

        "text_false" => "Oh no, this site is hosted by a host that does not use renewable energy."

      ],

      "co2" => [

        "grams" => "Only {0, number} grams of CO2 is produced every time someone visits this web page."

      ],

      "statistics" => [

        "EnergyPerVisitInkWh" => "For each visit, the site consumes {0, number}kWh.",

        "EmissionsPerVisitInGram" => "For each visit, the CO2 consumption is {0, number} grams.",

        "AnnualEnergykWh" => "Each year, the website consumes {0, number}kWh.",

        "AnnualEmissionGram" => "Each year, the website has a carbon footprint of {0, number} grams.",

        "AnnualEnergy_CDE" => "Each year, the consumption of devices for the website and {0, number}kWh.", // Annual Segment Energy :: CDE: Consumer device energy

        "AnnualEnergy_NE" => "Each year, the network of the website consumes {0, number}kWh.", // Annual Segment Energy :: NE: Network energy

        "AnnualEnergy_DCE" => "Each year the website data center consumes {0, number}kWh.", // Annual Segment Energy :: DCE: Data center energy

        "AnnualEnergy_PE" => "The website produces {0, number}kWh each year.", // Annual Segment Energy :: PE: Production energy

        "AnnualEmission_CDE" => "Each year, the consumption of the devices for the website and {0, number} grams of CO2.", // Annual Segment Emissions :: CDE: Consumer device energy

        "AnnualEmission_NE" => "Each year, the network of the website consumes {0, number} grams of CO2.", // Annual Segment Emissions :: NE: Network energy

        "AnnualEmission_DCE" => "Each year the website's data center consumes {0, number} grams of CO2.", // Annual Segment Emissions :: DCE: Data center energy

        "AnnualEmission_PE" => "The website produces {0, number} grams of CO2 each year.", // Annual Segment Emissions :: PE: Pr

      ],

    ],

  ],

  "analytics" => [
    "project" => [
      "settings" => "Settings",
      "informations" => "Informations",
      "api" => "API",
    ],
    "alert" => [
      "error" => [
        "domain_not_valid" => "Oops. The domain entered is invalid. It must be in the following format: cybrico.de",
        "duplicated" => "Oops. It seems that a project already has this domain name",
      ],
      "success" => [
        "settings_updated" => "Success! Data successfully modified!",
        "created" => "Success! You can now use our services for your statistics",
      ],
    ],
    "step" => [
      "one" => [
        "title" => "Create your application",
        "description" => "Create an application for your website in just a few clicks",
      ],
      "two" => [
        "title" => "Get the API code",
        "description" => "Put the HTML code in your website's &lt;head&gt; tag.",
      ],
      "three" => [
        "title" => "Collect data",
        "description" => "Now your site is online, watch your graphs climb!",
      ],
    ],
    "home" => [
      "welcome" => "Welcome to Cybricode Analytics",
      "count_projects" => "There are {0, number} projects using our services",
    ],
    "projects_list" => "Liste des projets utilisant nos services",
    "created_at" => "Ce projet est créé le {0}",
    "premium_feature" => "This feature is available with a Premium subscription.",
    "field" => [
      "change" => "Change",
      "update" => "Update settings",
      "create" => "Create",
      "name" => [
        "title" => "Project name",
        "description" => "This is the name of your project",
      ],
      "domain" => [
        "title" => "Project domain",
        "description" => "This is the domain name of your project",
      ],
      "code" => [
        "title" => "Code to place in &lt;head&gt;",
        "description" => "Without this code, we can't start collecting data for your site",
      ],
    ],
    "stats" => [
      "primary_country" => "Main country of the project",
      "percentage_robot" => "Percentage of robot visiting the site",
      "total_request_last_month" => "Total requests of the previous month",
      "best_platform" => "Best platform visiting the site",

      "global_monthly" => "Global statistics",
      "monthly_statistics" => "Monthly statistics",
      "loading_data" => "Loading data...",
      "mobile" => "Mobile",
      "requests" => "Requests",
      "browsers" => "Browsers",
      "view_all_browsers" => "View all browsers",
      "view_all_pageviews" => "View all queries",
      "view_all_screensize" => "View all resolutions",
      "worldmap" => "Requests in the world",
      "no_data" => "No data yet",

      "country_list" => "Country ranking",
      "pagesviews" => "List of visited pages",
      "resolutions_list" => "List of screen resolutions",
      "robot_list" => "List of robots",
      "platform_list" => "List of platforms",
    ],
  ],

  "audit" => [
    "project" => [
      "settings" => "Settings",
      "informations" => "Informations",
      "api" => "API",
    ],
    "alert" => [
      "error" => [
        "domain_not_valid" => "Oops. The domain entered is invalid. It must be in the following format: cybrico.de",
        "duplicated" => "Oops. It looks like a project already has this domain name.",
      ],
      "success" => [
        "settings_updated" => "Success! Data successfully modified!",
        "created" => "Success! You can now use our services for your SEO results.",
      ],
    ],
    "step" => [
      "one" => [
        "title" => "Add your website",
        "description" => "Add your website in a few clicks",
      ],
      "two" => [
        "title" => "Retrieve website data",
        "description" => "Our tool retrieves all site data and informs you of the status of your website.",
      ],
      "three" => [
        "title" => "Collect data",
        "description" => "Your site online, look at your results to optimize your website!",
      ],
    ],
    "home" => [
      "welcome" => "Welcome to Cybricode Audit",
      "count_projects" => "There are {0, number} projects using our services",
    ],
    "projects_list" => "List of projects using our services",
    "created_at" => "This project was created on {0}",
    "premium_feature" => "This feature is available with a Premium subscription",
    "field" => [
      "change" => "Change",
      "update" => "Modify settings",
      "create" => "Create",
      "name" => [
        "title" => "Project name",
        "description" => "This is the name of your project",
      ],
      "domain" => [
        "title" => "Project domain",
        "description" => "This is the domain name of your project",
      ],
      "code" => [
        "title" => "Code to place in &lt;head&gt;",
        "description" => "Without this code, we can't start collecting data for your site",
      ],
    ],
    "true" => "Yes",
    "false" => "No",
    "stats" => [
      "loading_data" => "Loading data...",
      "contentQuality" => "Quality content",
      "title" => "Title",
      "description" => "Description",
      "contentQualityResult" => "Long content",
      "readability" => "Content readability",
      "1sur4" => "Poor",
      "2sur4" => "Average",
      "3sur4" => "Correct",
      "4sur4" => "Perfect!",
      "4sur4_male" => "Perfect!",
      "words_count" => "Words",
      "caracters_count" => "Number of characters",
      "metadata" => [
        "name" => "Website meta",
        "title" => [
          "name" => "Title",
          "description" => "Your website has a title &lt;title&gt;.",
          "yes" => "Your page has a title",
          "no" => "It's important to put a &lt;title&gt; for your site."
        ],
        "description" => [
          "name" => "Description",
          "description" => "Your website has a &lt;meta&gt; description.",
          "yes" => "Your page has a description",
          "no" => "It's important to put a &lt;meta&gt; description for your site."
        ],
        "hasNoindexMetaTag" => [
          "name" => "Meta No Index",
          "description" => "Your website does not have a &lt;meta&gt; robots noindex tag.",
          "yes" => "You allow robots to read your website.",
          "no" => "It's important to allow robots to read your website. Without it, you won't be referenced.",
        ],
        "schemaExists" => [
          "name" => "Schema",
          "description" => "Votre site internet ne dispose pas des informations schema.",
          "yes" => "Vous disposez des informations SEO de Schema.",
          "no" => "Il est utile de rajouter les informations SEO de Schema sur votre site internet."
        ],
        "siteLanguage" => [
          "name" => "Langue du site internet",
          "description" => "La balise langue permet de définir la langue du contenu du site internet.",
          "yes" => "Votre site internet dispose de la langue <b>{0}</b>",
          "no" => "Votre site internet ne dispose pas d'informations sur la langue du contenu."
        ],
        "hasFavicon" => [
          "name" => "Icône sur le site",
          "description" => "L'icône sur un site internet est très importante.",
          "yes" => "Vous disposez d'une icône sur votre site.",
          "no" => "Il est fortement recommandé de mettre une icône sur votre site."
        ],
        "checkCanonicalTags" => [
          "name" => "Balise Canonical",
          "description" => "Balise canonical sur votre site internet",
          "yes" => "You have an icon on your site.",
          "no" => "It is strongly recommended to put an icon on your site."
        ],
        "checkRobotsTxt" => [
          "name" => "robots.txt file",
          "description" => "Check existence of robots.txt file",
          "yes" => "You have a robots.txt file on your site",
          "no" => "The use of a robots.txt file is mandatory for robots to access your website."
        ],
        "sitemapExists" => [
          "name" => "File sitemap.xml",
          "description" => "Check existence of sitemap.xml file",
          "yes" => "You have a sitemap.xml file on your site",
          "no" => "A sitemap is highly recommended for your website."
        ],
      ],
      "images_data" => [
        "name" => "Website images",
        "imageAltAttributesResult" => [
          "name" => "Images contain an alt attribute"
        ],
        "count_images" => [
          "name" => "Number of images on the website"
        ],
      ],
      "security" => [
        "name" => "Website security",
        "checkEmail" => [
          "name" => "The site contains a visible email address."
        ],
        "httpsupport" => [
          "name" => "Support HTTP/{0}",
        ],
        "ssl" => [
          "name" => "Site sous HTTPS",
        ],
      ],

      "scripts" => [
        "name" => "Scripts",
      ],
      "headers_texts" => [
        "name" => "Headings and paragraphs",
      ],
      "keywords" => [
        "name" => "Keywords",
      ],
      "serp" => [
        "name" => "Example when searching the Internet",
      ],
      "childURLs" => [
        "name" => "URLs Child",
        "interne" => "Internal",
        "externe" => "External",
      ],
      "robots" => [
        "name" => "Robots.txt file",
        "not_found" => "Your site does not have a robots.txt file.",
      ],
      "sitemap" => [
        "name" => "Fichier sitemap.xml",
        "not_found" => "Votre site ne dispose pas de fichier sitemap.xml.",
      ],
      "technologies" => [
        "name" => "Technologies",
        "list" => [
          "technologie" => "Technology",
          "pub" => "Advertising",
          "payement" => "Moyen de paiement",
          "status" => "Statut",
          "framework_js" => "Framework JS",
          "framework_css" => "Framework CSS",
          "framework_web" => "Framework Web",
          "script_police_font" => "Font",
          "security" => "Security",
          "balise_gestionnary" => "Manager",
          "library_js" => "library",
          "editor_text" => "Text editor",
          "graphisme_js" => "Graphics",
          "programming_language" => "Programming language",
          "rum" => "RUM",
          "divers" => "Other",
          "cdn" => "CDN",
          "server" => "Server",
          "statistics" => "Statistics tool",
        ],
      ],
    ],
  ],

  "name_checker" => [
    "fields" => [
      "name" => "Domain name (Ex: Cybricode)",
      "available" => "This domain name seems to be available.",
      "not_available" => "This domain name seems to be unavailable.",
      "check" => "Check the list of domain names",
      "waiting" => "Currently checking domain names",

      "disclaimer" => "The use of a competitor's trademark for a domain name can be challenged either by extra-judicial proceedings or before the state courts, when in addition to the transfer of the domain name, damages are sought",
    ],
  ],

  "estimate" => [
    "website" => [
      "name" => "Estimate the creation of a website",
      "description" => "Estimate the price of your website easily with Cybricode",
      "tabs" => [
        "step" => "Step {0}",
        "developer" => "Developer",
        "project" => "Project",
        "seo_information" => "SEO",
        "revenue" => "Capital",
        "croissance" => "Growth",
        "final" => "Finalization",
      ],
      "fields" => [
        "hourly_rate" => "Developer hourly rate",
        "developer_hourly_worked" => "How many hours does your developer work per week?",
        "website_type" => "Website type",
        "host_price" => "Monthly price of your web hosting",
        "subcribers" => "How many subscribers do you have on your project?",
        "exist_project" => "How long has the project existed (in years)?",
        "monthly_visitors" => "The number of unique visitors per month to your site.",
        "seo_visitors" => "Where do your visitors come from?",
        "seo__natural" => "Search engines, SEO, etc.",
        "seo__referral" => "SEM and advertising",
        "seo__social" => "Social networks & direct referencing",
        "users_register" => "How many users do you have registered?",
        "sales_revenue" => "Your annual sales",
        "revenue" => [
          "null" => "None",
          "decreasing" => "Decreasing",
          "stable" => "Stable",
          "increasing" => "Increasing",
        ],
        "croissance" => "What is the growth of your project?",
        "croissance_list" => [
          "null" => "None",
          "decreasing" => "Decreasing",
          "stable" => "Stable",
          "increasing" => "Growing",
          "hyper_increasing" => "Hyperincreasing",
          "tendance" => "Très tendance",
        ],

        "firstname" => "Your first name to get your estimate.",
        "lastname" => "Your last name to get your estimate.",
        "email__get_estimation" => "Get your estimate by email.",
        "project_name" => "Your project name."
      ],
    ],
  ],
];
?>