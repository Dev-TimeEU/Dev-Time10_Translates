<?php
return [
  // CGU GENERATOR
  'cgu_generator' => [
    "title" => "Générateur de Conditions Générales d'Utilisations",
    "description" => "Créer mes Conditions Générales d'Utilisations en toute simplicité avec Dev-Time.",

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
    "description" => "Créer mes Conditions Générales de Vente en toute simplicité avec Dev-Time.",
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
      "domain" => "Nom de domaine (https://dev-time.eu)",
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
    "colors" => [
      "unique_color" => "Couleur unique",
      "title" => "Palette de couleurs",
      "description" => "Avec la palette de couleur de Dev-Time, récupère tes couleurs que tu as besoin en HEX, RBG, CMYK et bien plus encore",
      "console" => "Informations sur la couleur",

      "other_color_list" => "Besoin de plusieurs couleurs ? Pas de problème ! Tout est fait pour vous ci-dessous.<br>
        Clique sur la touche [<button class='generator-button'>Espace</button>] pour générer une couleur.",
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
      "description" => "Convertissez vos icônes Font Awesome facilement avec Dev-Time.",
      "information" => "Font Awesome détient une part de marché de 20% parmi les sites qui utilisent des scripts de polices tiers sur leur plateforme, ce qui le place en deuxième position après Google Fonts. Font Awesome publié la première fois le 21 août 2012, ce site permet d'avoir des milliers d'icônes pour rendre son site vivant.",

      "converter" => "Que voulez-vous convertir ?",
      "icon" => "Icône Font Awesome",
      "family" => "Famille d'îcone",
      "style" => "Style",
      "convert_button" => "Convertir",
    ],
    "timestamp" => [
      "title" => "Convertisseur de date vers Timestamp",
      "description" => "Convertissez vos dates facilement avec Dev-Time.",
      "information" => "Le timestamp représente la quantité de secondes passés depuis le premier janvier de l'année 1970 (début de l'heure UNIX), autrement dit, le timestamp (unix) est le nombre de secondes écoulées depuis le 1er Janvier 1970 à minuit UTC. Cette valeur est employée en informatique pour constituer un instant précis grâce à un nombre. Les valeurs timestamp peuvent être utilisés avec la plupart des langages de programmation et des systèmes de gestion des bases de données.",


    ],
  ],
];
?>
