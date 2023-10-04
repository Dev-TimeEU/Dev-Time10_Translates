<?php

return [

  // CGU GENERATOR

  'cgu_generator' => [

    "title" => "Générateur de Conditions Générales d'Utilisations",

    "description" => "Créer mes Conditions Générales d'Utilisations en toute simplicité avec Cybricode.",



    "fields" => [

      "member_space" => [

        "question" => "Le site internet comprend-il un espace membre ?",

        "yes" => "Oui, j'ai un espace membre",

        "no" => "Non, j'ai aucun espace membre",

      ],

      "website_service" => "Services du site internet",

      "publishers_content" => "Qui publie du contenu sur le site internet ?",

      "created_cgu" => "Quelle est la date de la mise en vigueur des CGU ?",

      "generate" => "Générer les CGU",

    ],

  ],



  'cgv_generator' => [

    "title" => "Générateur de Conditions Générales de Vente",

    "description" => "Créer mes Conditions Générales de Vente en toute simplicité avec Cybricode.",

    "generate" => "Générer les CGV",



    "fields" => [

      "type_activity" => [

        "question" => "Le site internet commercialise t-il des produits ou des prestations de services ?",

        "1" => "Des produits (cela inclut les biens digitaux)",

        "2" => "Des prestations de services",

        "3" => "Des produits et prestations de services",

      ],

      "services" => "Quels sont les produits proposés à la vente?",

      "pays_ventes" => "La vente concerne-t-elle des territoires en particulier (autres que la France métropolitaine) ?",



      "created_cgv" => "Quelle est la date de la mise en vigueur des CGV ?",

      "processus_command" => "Quelle est le processus de commande ?",



      "payement_conditions" => [

        "title" => "Conditions de paiements",

        "question" => "Quels sont les modes de paiement possibles ?",

        "cb" => "Cartes bancaires",

        "cb_more" => "Cartes bancaires et chèques",

        "paypal" => "Paypal et autres moyens similaire",

      ],



      "paiement_effectued" => [

        "question" => "A quel moment le paiement d'une commande est-il effectué ?",

        "1" => "Le paiement intervient dès la passation de la commande et est débité immédiatement",

        "2" => "Le paiement intervient dès la passation de la commande mais n'est débité qu'à l'expédition de la commande",

        "3" => "Le paiement intervient dès la passation de la commande mais n'est débité qu'à la livraison de la commande",

        "4" => "Le paiement n'intervient qu'à la livraison de la commande",

        "5" => "Le paiement intervient en une fois à un terme précis",

        "6" => "Le paiement intervient selon un échéancier sans frais",

      ],



      "livraisons" => [

        "title" => "Livraisons",

        "question" => "Les livraisons ont-elles lieu dans d'autres zones que la France Métropolitaine ?",

        "question2" => "Quels sont les délais de livraison ?",

        "question3" => "Si le délai n'est pas respecté, sous quel délai (après le dépassement de délai de livraison) le client pourra annuler la commande ?",

        "question4" => "Les livraisons sont-elles assurées par un transporteur indépendant ?",

        "question5" => "Délai maximal pour effectuer une réclamation (à compter de la livraison)",

        "question6" => "Mode de réclamation (courrier, mail, etc..)",

        "question7" => "Quel est le délai maximal de remboursement, remplacement ou réparation du(des) bien(s) non conforme(s) ou défectueux conformément à la garantie légale ?",

      ],



      "data" => [

        "title" => "Traitement des données personnelles",

        "finalite_donnees" => [

          "1" => "Traitement uniquement pour la vente des produits et leur livraison (par l'entreprise sans passer par un tiers)",

          "2" => "Traitement uniquement pour la vente des produit et transmission à un tiers pour leur livraison",

          "question" => "Quelle est la finalité du traitement des données personnelles collectées auprès des clients ?",

        ],

        "donnees_collectees" => [

          "1" => "Uniquement les prénoms, noms, adresse postale, numéro de téléphone et adresse e-mail (en plus des données pour le paiement bancaire)",

          "2" => "Les données personnelles collectées sont réservées à l'entreprise et d'autres prestataires partenaires (exemple : prestataire de de transport, prestataire de paiement, prestataire de maintenance, etc.)",

          "question" => "Quelles données personnelles des clients sont collectées pour l'ouverture du compte et la vente des produits ?",

        ],

      ],

      "litiges" => [

        "title" => "Litiges",

        "question1" => "Nom du service de médiation",

        "question2" => "Adresse postale du service de médiation",

        "question3" => "Site internet du service de médiation",

        "question4" => "Adresse e-mail du service de médiation",

      ],

    ],

  ],



  'mentions_generator' => [

    "generate" => "Générer les mentions légales",

  ],



  'privacy_generator' => [

    "generate" => "Générer la politique de confidentialité",

  ],



  'global' => [

    "base_informations" => "Informations de base",

    "fields" => [

      "website" => "Adresse du site internet",



      "editor" => [

        "title" => "L'éditeur du site",

        "delegue" => [

          "question" => "Qui assure l'édition du site internet ?",

          "not_humain" => "Une personne morale",

          "humain" => "Une personne physique",



          "enterprise_name" => "Nom de la société",

          "enterprise_capital" => "Montant du capital social en euros",

          "enterprise_rcs" => "Ville d'immatriculation au RCS",

          "enterprise_siren" => "Numéro de SIREN",

          "enterprise_adress" => "Adresse du siège social",

          "enterprise_username" => "Nom et prénom du directeur de la publication",



          "username" => "Nom et prénom de la personne en charge de l'édition et de la publication",

          "adress" => "Adresse de domiciliation",

          "tel" => "Numéro de téléphone",

          "email" => "Adresse email",

        ],

      ],



      "hoster" => [

        "title" => "L'hébergeur",

        "name_hoster" => "Nom de l'hébergeur",

        "adress_hoster" => "Adresse du siège sociale de l'hébergeur",

        "tel_hoster" => "Numéro de téléphone de l'hébergeur",

      ],



      "collect_data" => [

        "title" => "Collecte de données",

        "question" => "Le site internet collecte-il des données personnelles ?",

        "yes" => "Oui",

        "no" => "Non",

        "email__delete_account" => "Adresse email pour supprimer ses données",

      ],

    ],

  ],





  'seo' => [

    "fields" => [

      "domain" => "Nom de domaine (https://cybrico.de)",

      "check_seo" => "Analyser le SEO du site web",

      "console_seo" => "Informations sur le SEO",

    ],

    "pagespeed" => [

      "title" => "Vérifier la rapidité de votre site internet",

      "fields" => [

        "desktop" => "Ordinateur",

        "mobile" => "Mobile",

        "desktop_mobile_question" => "Plateforme d'essai",

      ],

      "test" => "Vérifier le site web",

      "information" => "Informations sur la page",

    ],

  ],

  'colors' => [

    "color" => "Couleur",

    "color2" => "Couleur {0}", // Exemple: Couleur RGB

    "convert" => "Converssion de la couleur",

    "information_color" => "Information de la couleur",

    "add" => "Ajouter une couleur",

    "other_colors" => "Découvrir d'autres palettes de couleurs par la communauté",

    "community" => "Palettes communautaires",
    "description" => "Découvrez les palettes de couleurs de la communauté de Cybricode.",
    "community_last" => "Dernières palettes de couleurs de la communauté",

    "colors" => [

      "unique_color" => "Couleur unique",

      "title" => "Palette de couleurs",

      "description" => "Avec la palette de couleur de Cybricode, récupère tes couleurs que tu as besoin en HEX, RBG, CMYK et bien plus encore",

      "console" => "Informations sur la couleur",



      "other_color_list" => "Besoin de plusieurs couleurs ? Pas de problème ! Tout est fait pour vous ci-dessous.<br>

        Clique sur la touche [<button class='generator-button'>Espace</button>] pour générer une couleur.",

    ],
    "fields" => [
      "main_color" => "Couleur principale",
      "randomize" => "Aléatoire",
      "export" => "Exporter",

      "analogous" => "Analogique",
      "monochromatic" => "Monochromatique",
      "triadic" => "Triadique",
      "complementary" => "Complémentaire",
      "split_complementary" => "Complémentaire divisé",
      "double_split_complementary" => "Complémentaire à double division",
      "square" => "Carré",
      "compound" => "Composé",
      "shades" => "Ombres",

      "add_color" => "Ajouter",
      "remove_color" => "Supprimer",

      "name" => "Nom de votre palette de couleur",
      "new_palette" => "Nouvelle palette de couleur",
      "publish" => "Publier la palette de couleur",

      "success_publish" => "Succès ! Votre palette de couleur est désormais publiée !",
      "error_publish" => "Oups. Il semblerait qu'une erreur s'est produite lors de la publication",

      "palettes_user" => "Les palettes de couleurs de {0}",
    ]

  ],



  "graphic_design" => [

    "choose_colors" => "Choix de couleurs",

    "informations_design" => "Informations sur la charte graphique",



    "primary_color" => "Couleur principale",

    "accent_color" => "Coulleur accent",

    "text_color" => "Couleur textuelle",

    "button_color" => "Couleur de bouton",



    "choose_typo" => "Choix de typographie",

    "primary_typo" => "Typographie principale",

    "secondary_typo" => "Typographie secondaire",

    "style" => "Style de la typographie",

    "select_policefont" => "Choisir une police d'écriture",





    "graphic_design" => "La charte graphique",

    "description_graphic_design" => "Voici les éléments pour ta charte graphique",

    "your_colors" => "Vos couleurs",

    "your_typo" => "Vos typographies",

  ],



  "converter" => [

    "fontawesome" => [

      "title" => "Convertisseur d'icône Font Awesome vers SVG",

      "description" => "Convertissez vos icônes Font Awesome facilement avec Cybricode.",

      "information" => "Font Awesome détient une part de marché de 20% parmi les sites qui utilisent des scripts de polices tiers sur leur plateforme, ce qui le place en deuxième position après Google Fonts. Font Awesome publié la première fois le 21 août 2012, ce site permet d'avoir des milliers d'icônes pour rendre son site vivant.",



      "converter" => "Que voulez-vous convertir ?",

      "icon" => "Icône Font Awesome",

      "family" => "Famille d'îcone",

      "style" => "Style",

      "convert_button" => "Convertir",

    ],

    "timestamp" => [

      "title" => "Convertisseur de date vers Timestamp",

      "description" => "Convertissez vos dates facilement avec Cybricode.",

      "information" => "Le timestamp représente la quantité de secondes passés depuis le premier janvier de l'année 1970 (début de l'heure UNIX), autrement dit, le timestamp (unix) est le nombre de secondes écoulées depuis le 1er Janvier 1970 à minuit UTC. Cette valeur est employée en informatique pour constituer un instant précis grâce à un nombre. Les valeurs timestamp peuvent être utilisés avec la plupart des langages de programmation et des systèmes de gestion des bases de données.",

    ],

  ],



  "dns" => [

    "fields" => [

      "check_dns" => "Vérifier les DNS d'une adresse.",

      "adress" => "Nom de domaine ou IP",

      "check" => "Vérifier les DNS",

      "waiting" => "Récupération en cours des DNS de l'adresse.",

      "no_data" => "Aucune donnée n'a été trouvé pour l'adresse suivante.",

      "dns_type" => [

        "host" => "Adresse",

        "type" => "Type",

        "ttl" => "TTL",

        "entry" => "Valeur",

        "list" => [

          "all" => "Tous les DNS",

        ],

      ],

    ],

  ],



  "carbon" => [

    "check_carbon" => "Vérifier l'empreinte carbone d'un site internet",

    "fields" => [

      "check" => "Vérifier l'empeinte carbone",

      "waiting" => "Calcul en cours de l'empreinte carbone.",

      "domain" => "Nom de domaine (cybrico.de)",

      "visitors" => "Nombre de visiteurs mensuel",

    ],



    "api" => [

      "loading" => [

        "200" => "OK",

        "404_title" => "Une erreur est survenue",

        "404" => "Oups, il semblerait que l'adresse {0} soit invalide.",

        "api_error" => "Oups ! On dirait que notre API est surchargée. Patientez un peu. Si ce message perciste, contactez-nous sur Discord !",

      ],

      "page" => [

        "carbon_true" => "Hourra ! Cette page web est plus propre que {0, number}% des pages web testées",

        "carbon_false" => "Oh non ! La page ou l'hébergeur n'est pas propre pour l'environnement. {0}% des pages web testées",

        "text_true" => "Ce site est hébergé chez un hébergeur fonctionnant à l'énergie durable.",

        "text_false" => "Oh non, ce site est hébergé chez un hébergeur qui n'utilisant pas d'énergie renouvelable",

      ],

      "co2" => [

        "grams" => "Seulement {0, number} grammes de CO2 est produit chaque fois qu'une personne visite cette page web.",

      ],

      "statistics" => [

        "EnergyPerVisitInkWh" => "Pour chaque visite, le site consomme {0, number}kWh.",

        "EmissionsPerVisitInGram" => "Pour chaque visite, la consommation en CO2 est de {0, number} grammes.",

        "AnnualEnergykWh" => "Chaque année, le site internet consomme {0, number}kWh.",

        "AnnualEmissionGram" => "Chaque année, le site internet à une empreinte carbonique de {0, number} grammes.",

        "AnnualEnergy_CDE" => "Chaque année, la consommation des appareils pour le site internet et de {0, number}kWh.", // Annual Segment Energy :: CDE: Consumer device energy

        "AnnualEnergy_NE" => "Chaque année, le réseau du site internet consomme {0, number}kWh.", // Annual Segment Energy :: NE: Network energy

        "AnnualEnergy_DCE" => "Le centre de données du site web consomme chaque année {0, number}kWh.", // Annual Segment Energy :: DCE: Data center energy

        "AnnualEnergy_PE" => "Le site internet produit chaque année {0, number}kWh.", // Annual Segment Energy :: PE: Production energy

        "AnnualEmission_CDE" => "Chaque année, la consommation des appareils pour le site internet et de {0, number} grammes de CO2.", // Annual Segment Emissions :: CDE: Consumer device energy

        "AnnualEmission_NE" => "Chaque année, le réseau du site internet consomme {0, number} grammes de CO2.", // Annual Segment Emissions :: NE: Network energy

        "AnnualEmission_DCE" => "Le centre de données du site web consomme chaque année {0, number} grammes de CO2.", // Annual Segment Emissions :: DCE: Data center energy

        "AnnualEmission_PE" => "Le site internet produit chaque année {0, number} grammes de CO2.", // Annual Segment Emissions :: PE: Production energy

      ],

    ],

  ],

  "analytics" => [
    "project" => [
      "settings" => "Paramètres",
      "informations" => "Informations",
      "api" => "API",
    ],
    "alert" => [
      "error" => [
        "domain_not_valid" => "Oups. Le domaine entré est invalide. Il doit être au format suivant: cybrico.de",
        "duplicated" => "Oups. Il semblerait qu'un projet dispose déjà ce nom de domaine.",
      ],
      "success" => [
        "settings_updated" => "Succès ! Les données sont modifiées avec succès !",
        "created" => "Succès ! Vous pouvez désormais utiliser nos services pour vos statistiques.",
      ],
    ],
    "step" => [
      "one" => [
        "title" => "Créer son application",
        "description" => "Créez une application pour votre site internet en quelques clics",
      ],
      "two" => [
        "title" => "Récupérer le code de l'API",
        "description" => "Mettez le code HTML dans la balise &lt;head&gt; de votre site internet.",
      ],
      "three" => [
        "title" => "Collecter les données",
        "description" => "Maintenant, votre site est en ligne, regardez vos graphiques grimper !",
      ],
    ],
    "home" => [
      "welcome" => "Bienvenue sur Cybricode Analytics",
      "count_projects" => "Il y a {0, number} projets qui utilisent nos services",
    ],
    "projects_list" => "Liste des projets utilisant nos services",
    "created_at" => "Ce projet est créé le {0}",
    "premium_feature" => "Cette fonctionnalité est disponible en souscrivant un abonnement Premium",
    "field" => [
      "change" => "Changer",
      "update" => "Modifier les paramètres",
      "create" => "Créer",
      "name" => [
        "title" => "Nom du projet",
        "description" => "Cela correspond au nom de votre projet",
      ],
      "domain" => [
        "title" => "Domaine du projet",
        "description" => "Cela correspond au nom de domaine de votre projet",
      ],
      "code" => [
        "title" => "Code à placer dans le &lt;head&gt;",
        "description" => "Sans ce code, nous ne pouvons pas commencer à collecter les données pour votre site",
      ],
    ],
    "stats" => [
      "primary_country" => "Pays principal du projet",
      "percentage_robot" => "Pourcentage de robot visitant le site",
      "total_request_last_month" => "Requêtes totales du mois précédent",
      "best_platform" => "Meilleure plateforme visitant le site",

      "global_monthly" => "Statistiques globales",
      "monthly_statistics" => "Statistiques du mois",
      "loading_data" => "Chargement des données...",
      "mobile" => "Mobile",
      "requests" => "Requêtes",
      "browsers" => "Navigateurs",
      "view_all_browsers" => "Voir tout les navigateurs",
      "view_all_pageviews" => "Voir toutes les requêtes",
      "view_all_screensize" => "Voir toutes les résolutions",
      "worldmap" => "Requêtes dans le monde",
      "no_data" => "Aucune donnée pour le moment",

      "country_list" => "Classement des pays",
      "pagesviews" => "Liste des pages visités",
      "resolutions_list" => "Liste des résolutions d'écrans",
      "robot_list" => "Liste des robots",
      "platform_list" => "Liste des plateformes",
    ],
  ],

  "audit" => [
    "project" => [
      "settings" => "Paramètres",
      "informations" => "Informations",
      "api" => "API",
    ],
    "alert" => [
      "error" => [
        "domain_not_valid" => "Oups. Le domaine entré est invalide. Il doit être au format suivant: cybrico.de",
        "duplicated" => "Oups. Il semblerait qu'un projet dispose déjà ce nom de domaine.",
      ],
      "success" => [
        "settings_updated" => "Succès ! Les données sont modifiées avec succès !",
        "created" => "Succès ! Vous pouvez désormais utiliser nos services pour vos résultats SEO.",
      ],
    ],
    "step" => [
      "one" => [
        "title" => "Ajouter son site internet",
        "description" => "Ajoutez votre site internet en quelques clics",
      ],
      "two" => [
        "title" => "Récupérer les données du site",
        "description" => "Notre outil récupère toutes les données du site et vous informe de l'état de votre site internet.",
      ],
      "three" => [
        "title" => "Collecter les données",
        "description" => "Votre site en ligne, regardez vos résultats pour optimiser votre site internet !",
      ],
    ],
    "home" => [
      "welcome" => "Bienvenue sur Cybricode Audit",
      "count_projects" => "Il y a {0, number} projets qui utilisent nos services",
    ],
    "projects_list" => "Liste des projets utilisant nos services",
    "created_at" => "Ce projet est créé le {0}",
    "premium_feature" => "Cette fonctionnalité est disponible en souscrivant un abonnement Premium",
    "field" => [
      "change" => "Changer",
      "update" => "Modifier les paramètres",
      "create" => "Créer",
      "name" => [
        "title" => "Nom du projet",
        "description" => "Cela correspond au nom de votre projet",
      ],
      "domain" => [
        "title" => "Domaine du projet",
        "description" => "Cela correspond au nom de domaine de votre projet",
      ],
      "code" => [
        "title" => "Code à placer dans le &lt;head&gt;",
        "description" => "Sans ce code, nous ne pouvons pas commencer à collecter les données pour votre site",
      ],
    ],
    "true" => "Oui",
    "false" => "Non",
    "stats" => [
      "loading_data" => "Chargement des données...",
      "contentQuality" => "Contenu de qualité",
      "title" => "Titre",
      "description" => "Description",
      "contentQualityResult" => "Contenu long",
      "readability" => "Lisibilité du contenu",
      "1sur4" => "Médiocre",
      "2sur4" => "Moyenne",
      "3sur4" => "Correcte",
      "4sur4" => "Parfaite !",
      "4sur4_male" => "Parfait !",
      "words_count" => "Mots",
      "caracters_count" => "Nombre de caractères",
      "metadata" => [
        "name" => "Meta du site internet",
        "title" => [
          "name" => "Titre",
          "description" => "Votre site internet dispose d'un titre &lt;title&gt;.",
          "yes" => "Votre page dispose d'un titre",
          "no" => "Il est important de mettre un &lt;title&gt; pour votre site."
        ],
        "description" => [
          "name" => "Description",
          "description" => "Votre site internet dispose d'une description &lt;meta&gt;.",
          "yes" => "Votre page dispose d'une description",
          "no" => "Il est important de mettre un &lt;meta&gt; description pour votre site."
        ],
        "hasNoindexMetaTag" => [
          "name" => "Meta No Index",
          "description" => "Votre site internet ne dispose pas d'une balise &lt;meta&gt; robots noindex.",
          "yes" => "Vous autorisez les robots a lire votre site internet.",
          "no" => "Il est important d'autoriser les robots à lire votre site internet. Sans cela, vous n'êtes pas référencé"
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
          "yes" => "Vous disposez d'une icône sur votre site.",
          "no" => "Il est fortement recommandé de mettre une icône sur votre site."
        ],
        "checkRobotsTxt" => [
          "name" => "Fichier robots.txt",
          "description" => "Vérification de l'existence  du fichier robots.txt",
          "yes" => "Vous disposez d'un fichier robots.txt sur vôtre site.",
          "no" => "L'usage d'un robots.txt est obligatoire pour que les robots ait accès à votre site internet."
        ],
        "sitemapExists" => [
          "name" => "Fichier sitemap.xml",
          "description" => "Vérification de l'existence  du fichier sitemap.xml",
          "yes" => "Vous disposez d'un fichier sitemap.xml sur vôtre site.",
          "no" => "Un sitemap est très recommandé pour votre site internet."
        ],
      ],
      "images_data" => [
        "name" => "Images du site internet",
        "imageAltAttributesResult" => [
          "name" => "Les images contiennent un attribut <b>alt</b>"
        ],
        "count_images" => [
          "name" => "Nombre d'images sur le site internet"
        ],
      ],
      "security" => [
        "name" => "Sécurité du site internet",
        "checkEmail" => [
          "name" => "Le site contient une adresse email visible."
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
        "name" => "Titres et paragraphes",
      ],
      "keywords" => [
        "name" => "Mots clés",
      ],
      "serp" => [
        "name" => "Exemple lors d'une recherche sur Internet",
      ],
      "childURLs" => [
        "name" => "URLs Enfant",
        "interne" => "Interne",
        "externe" => "Externe"
      ],
      "robots" => [
        "name" => "Fichier Robots.txt",
        "not_found" => "Votre site ne dispose pas de fichier robots.txt.",
      ],
      "sitemap" => [
        "name" => "Fichier sitemap.xml",
        "not_found" => "Votre site ne dispose pas de fichier sitemap.xml.",
      ],
      "technologies" => [
        "name" => "Technologies",
        "list" => [
          "technologie" => "Technologie",
          "pub" => "Régie Publicitaire",
          "payement" => "Moyen de paiement",
          "status" => "Status",
          "framework_js" => "Framework JS",
          "framework_css" => "Framework CSS",
          "framework_web" => "Framework Web",
          "script_police_font" => "Police d'écriture",
          "security" => "Sécurité",
          "balise_gestionnary" => "Gestionnaire",
          "library_js" => "Librairie",
          "editor_text" => "Editeur texte",
          "graphisme_js" => "Graphiques",
          "programming_language" => "Langage de programmation",
          "rum" => "RUM",
          "divers" => "Divers",
          "cdn" => "CDN",
          "server" => "Serveur",
          "statistics" => "Outil de statistiques",
        ],
      ],
    ],
  ],
  "name_checker" => [
    "fields" => [
      "name" => "Nom du domaine (Ex: Cybricode)",
      "available" => "Ce nom de domaine semble être disponible.",
      "not_available" => "Ce nom de domaine semble être indisponible.",
      "check" => "Vérifier la liste des noms de domaines",
      "waiting" => "En cours de vérifications des noms de domaines",

      "disclaimer" => "L'utilisation de la marque d'un concurrent pour un nom de domaine peut être attaquée soit par procédure extra-judiciaire, soit devant les tribunaux étatiques, lorsqu'en plus du transfert du nom de domaine, on souhaite obtenir des dommages et intérêts",
    ],
  ],

  "estimate" => [
    "website" => [
      "name" => "Estimation de la création d'un site",
      "description" => "Estimez le prix de votre site internet facilement avec Cybricode.",
      "tabs" => [
        "step" => "Etape {0}",
        "developer" => "Développeur",
        "project" => "Projet",
        "seo_information" => "SEO",
        "revenue" => "Capital",
        "croissance" => "Croissance",
        "final" => "Finalisation",
      ],
      "fields" => [
        "hourly_rate" => "Taux horaire du développeur",
        "developer_hourly_worked" => "Combien d'heure votre développeur travail par semaine ?",
        "website_type" => "Type de site internet",
        "host_price" => "Prix mensuel de votre hébergement Web",
        "subcribers" => "Combien d'abonnés avez-vous sur votre projet ?",
        "exist_project" => "Depuis combien de temps le projet existe (en année) ?",
        "monthly_visitors" => "Le nombre de visiteurs uniques par mois sur votre site.",
        "seo_visitors" => "D'ou viennent vos visiteurs ?",
        "seo__natural" => "Moteurs de recherches, SEO, etc.",
        "seo__referral" => "SEM et les publicités",
        "seo__social" => "Les réseaux sociaux & Référencement direct",
        "users_register" => "Combien d'utilisateurs avez-vous d'inscrit ?",
        "sales_revenue" => "Votre chiffre d'affaire annuel",
        "revenue" => [
          "null" => "Aucune",
          "decreasing" => "En baisse",
          "stable" => "Stable",
          "increasing" => "En croissance",
        ],
        "croissance" => "Quelle est la croissance de votre projet ?",
        "croissance_list" => [
          "null" => "Aucune",
          "decreasing" => "En baisse",
          "stable" => "Stable",
          "increasing" => "En croissance",
          "hyper_increasing" => "En hypercroissance",
          "tendance" => "Très tendance",
        ],

        "firstname" => "Votre prénom pour obtenir votre estimation.",
        "lastname" => "Votre nom de famille pour obtenir votre estimation.",
        "email__get_estimation" => "Obtenez votre estimation par email.",
        "project_name" => "Nom de votre projet",
      ],
    ],
  ],
];
?>