<?php

// Create a function which accepts a search term for a recipe name
function searchRecipes($term, $database){
    $term = '%' . $term . '%';
    $sql = file_get_contents('sql/getRecipes.sql');
    $params = array(
        'term' => $term
    );
    $statement = $database->prepare($sql);
    $statement->execute($params);
    $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $recipes;

}

function get($key) {
	if(isset($_GET[$key])) {
		return $_GET[$key];
	}
	else {
		return '';
	}
}