<?php

// Déclaration du tableau des recettes
$recipes = [
    ['title' => 'Salade de quinoa, avocat et légumes frais',
	'author' => 'mickael',
	'preparation' => 'Cuire le quinoa selon les instructions du paquet.
Mélanger le quinoa cuit, l\’avocat, le concombre, la tomate et l\’oignon dans un grand bol.
Ajouter le jus de citron, l\’huile d\’olive, le persil et le poivre.
Mélanger et servir frais.',
	'is_enabled' => true,],
    ['title' => 'Saumon grillé aux épices et légumes vapeur',
	'author' => 'Rihab',
	'preparation' => 'Assaisonner les filets de saumon avec l\’huile d\’olive, le paprika, le curcuma, le thym et un peu de poivre.
Griller le saumon sur une poêle ou sur le gril pendant environ 4-5 minutes de chaque côté, jusqu\'à ce qu\’il soit cuit à votre convenance.
Cuire les légumes à la vapeur jusqu\’à ce qu\’ils soient tendres.
Servir le saumon avec les légumes vapeur et un peu de jus de citron.',
	'is_enabled' => true,],
	['title' => 'Soupe aux légumes et lentilles',
	'author' => 'jules',
	'preparation' => 'Dans une grande casserole, faire revenir l’oignon et l’ail dans l’huile d’olive jusqu’à ce qu’ils soient tendres.
Ajouter les carottes, le céleri, la courgette, la tomate, les lentilles et le bouillon de légumes.
Assaisonner avec les herbes de Provence et le poivre.
Laisser mijoter à feu moyen pendant environ 30 minutes, jusqu\'à ce que les lentilles et les légumes soient tendres.
Servir chaud.',
	'is_enabled' => false,],
	['title' => 'Smoothie aux épinards, banane et lait d’amande',
	'author' => 'cathrine',
	'preparation' => 'Mettre tous les ingrédients dans un mixeur.
Mixer jusqu\’à obtention d\’une consistance lisse.
Servir immédiatement.',
	'is_enabled' => true,]
];

<?php

$users = [
	[
		'full_name' => 'Mickaël Andrieu',
		'email' => 'mickael.andrieu@exemple.com',
		'age' => 34,
	],
	[
		'full_name' => 'Mathieu Nebra',
		'email' => 'mathieu.nebra@exemple.com',
		'age' => 34,
	],
	[
		'full_name' => 'Laurène Castor',
		'email' => 'laurene.castor@exemple.com',
		'age' => 28,
	],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php 
		function isValidRecipe (array $recipes) : bool 
		{
			foreach($recipes as $recipe){ 

				if ($recipe['is_enabled'] === true)
				{
					echo '<h2>' . $recipe['title'] . '</h2><br />';
					echo '<p>' . $recipe['preparation'] . '</p><br />';
					echo '<p>' . $recipe['author'] . '</p><br />';
				}
			}
		}
		
		?>
    </ul>
</body>
</html>