# Ecom-PetitProjet


                                            Plateforme E-Commerce 
 
1 – Présentation 
Nous voulons créer une application de commerce électronique qui présente des produits en vente sur sa vitrine « index.php ». 
Les produits sont ajoutés dans la base de données par un administrateur ayant les privilèges suffisants pour assurer cette action.  
La page d’accueil du site affiche les produits sous forme de grille et doit s’adapter au dispositif d’affichage. 
Pour nous faciliter la tâche, nous utiliserons le framework CSS « Bootstrap » pour gérer le système de grilles. 
 
2 – Description : 
Les données du site sont enregistrées dans la base de données « ecom ». Pour rester simple nous utiliserons uniquement deux tables : 
1. La table « produits » contenant l’ensemble des produits du catalogue 2. La table « users » contenant les utilisateurs 
ayant le droit d’ajouter, de modifier ou de supprimer des produits. Cette table pourra éventuellement être utilisée pour 
enregistrer les nouveaux clients. 

//les tables vous pouvez les imaginer 

//les images vous pouvez les importer 

//et voila les Etapes a suivre ( j ai pas encore terminer toute le version mais...  )

3 – Travail demandé : 
Partie A : 
A – 1 – Créer la base de données « ecom » 
A – 2 – Créer la table « produits », y importer les données à partir du fichier « catalogue.csv » puis adapter les types et les tailles des champs si nécessaires.  
A – 3 – Créer la table « users » et y ajouter les champs selon le tableau ci-dessus. A l’aide de « phpMyAdmin », 
Ajouter dans cette table l’utilisateur « admin » en donnant la valeur « 0 » au champ « level » et un deuxième utilisateur « guest » en donnant la valeur « 1 » au champ « level » 
A – 4 – Créer un dossier « ecom » dans votre machine et ouvrez-le avec « VSCode » 
A – 5 – A l’aide du Terminal de VSCode, créer un projet à l’aide de la commande npm : 
 npm init –y 
A – 6 – Installer « bootstrap », « jquery » et « popper.js » 
 npm install bootstrap jquery popper.js 
A – 7 – Ajouter le dossier « images » contenant les photos des produits dans le projet 
A – 8 – Créer une page « index.html » qui représentera le modèle à intégrer plus tard dans les pages PHP. 
Ce modèle doit répondre aux critères d’affichage ci-dessous : 
Grand écrans :  
3 colonnes Tablettes :  2 colonnes 
Mobiles :  Une colonne 

*******3 rows contient un texte et une image *****

Partie B : 
Cette partie concerne la création de la page d’accueil « index.php » qui présentera l’ensemble des produits 
extraits de la base de données « ecom ». L’affichage des produits suivra le modèle défini dans la partie « A ». En plus, chaque produit affichera un bouton permettant de l’ajouter dans le panier. Pour rester simple, la quantité des produits ajoutés dans le panier sera définit plus tard juste avant de passer la commande. Pour rappel, les produits commandés doivent être enregistré dans une variable de session appelée « panier ». 
Procédure à suivre : 
B – 1 – Créer un fichier « produits.php » qui sera inclus plus tard dans la page « index.php ». 
Ce fichier contiendra le script qui permettra de :  
1. Récupérer un paramètre d’URL facultatif appelé « type ». 
Ce paramètre, s’il existe aura l’une des valeurs suivantes : « chemise », « blouson » ou « veston ».  
Il sera utilisé dans la requête SQL pour filtrer les produits selon leurs catégories. 2.
Se connecter à la base de données à l’aide de PDO (new PDO) 3. Créer une requête préparée et ajuster les paramètres 4. 
Exécuter la requête et récupérer tous les enregistrements sous forme d’un tableau de tableaux associatifs nommé : « $produits » 
B – 2 – Créer un fichier « sessions.php » qui sera inclus plus tard dans la page « index.php ». Ce fichier contiendra le script qui permettra de : 
1. Démarrer les sessions (session_start()) 2. Si l’utilisateur n’a pas de variable de session « panier », la lui créer dans ce cas. 
La variable de session « panier » sera représentée par un tableau associatif dont les clés représenteront la « référence » du produit et les valeurs la quantité commandée. Dans un premier temps, nous ne considérerons que les valeurs 1. 
B – 3 – Créer un fichier « panier.php » qui sera inclus au besoin plus tard dans la page « index.php ». Ce fichier contiendra le script qui permettra de : 
Ce fichier permettra d’afficher le contenu du panier dans un tableau HTML. Ce tableau contiendra les détails des produits commandés, leurs prix et le total à payer. (la possibilité de modifier les quantités pour chacun des produits sera étudiée plus tard) 
B – 4 – Créer un fichier « index.php » qui inclura au début et dans l’ordre les fichiers « sessions.php » et « produits.php » et en fin de page et juste avant « </body> » le fichier « panier.php ». Ce dernier nous permettra de visualiser le contenu du panier après chaque interaction de l’utilisateur. 
La page « index.php » doit utiliser le tableau des produits généré par le fichier « produits.php » pour afficher les produits selon le modèle défini dans la partie « A » 

cette partie je l'ai pas encore fini -_- 
//Partie C : 
Cette partie concerne la gestion de la table « produits ». Seul l’utilisateur ayant un « level 0 » en l’occurrence « admin » aura le droit d’ajouter, supprimer ou modifier les produits. Pour cela, il devra s’authentifier pour assurer ces fonctionnalités. 
En se basant sur les exemples déjà étudiés, proposer une implémentation permettant d’assurer ces fonctionnalités. 


#MERCI A MONSIEUR AZIZ DAIIF C'EST son TP 



