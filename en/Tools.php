<?php

return [

  // CGU GENERATOR

  'cgu_generator' => [

    "title" => "Terms of Use Generator",

    "description" => "Create my Terms of Use easily with Dev-Time.",



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

    "description" => "Create my Terms and Conditions easily with Dev-Time",

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

      "domain" => "Domain name (https://dev-time.eu)",

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

    "colors" => [

      "unique_color" => "unique color",

      "title" => "Color Palette",

      "description" => "With the Dev-Time color palette, get the colors you need in HEX, RBG, CMYK and more",

      "console" => "Color information",



      "other_color_list" => "Need more than one color? No problem! Everything is done for you below.<br>

        Click on the [<button class='generator-button'>Space</button>] key to generate a color.",

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

      "description" => "Convert your Font Awesome icons easily with Dev-Time.",

      "information" => "Font Awesome holds a 20% market share among sites that use third-party font scripts on their platform, second only to Google Fonts. Font Awesome first published on August 21, 2012, this site allows you to have thousands of icons to make your site come alive.",



      "converter" => "What do you want to convert?",

      "icon" => "Font Awesome icon",

      "family" => "Family of icons",

      "style" => "Style",

      "convert_button" => "Convert",

    ],

    "timestamp" => [

      "title" => "date to timestamp converter",

      "description" => "Convert your dates easily with Dev-Time.",

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

      "domain" => "Domain name (dev-time.eu)",

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
        "domain_not_valid" => "Oops. The domain entered is invalid. It must be in the following format: dev-time.eu",
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
      "welcome" => "Welcome to Dev-Time Analytics",
      "count_projects" => "There are {0, number} projects using our services",
    ],
    "projects_list" => "Liste des projets utilisant nos services",
    "created_at" => "Ce projet est créé le {0}",
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
      "worldmap" => "Requests in the world",
      "no_data" => "No data yet".
    ],
  ],

];

?>

