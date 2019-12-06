<?php

class Recipe{
    private $recipeID;
    private $recipeName;
    private $instructions;
    private $ingredients;

    function __construct($recipeID, $database){
    
        // Query to get recipe name and instructions
        $sql = file_get_contents('sql/getRecipe.sql');
        $params = array(
            'recipe_id' => $recipeID
        );
        $statement = $database->prepare($sql);
        $statement->execute($params);
        $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($recipes);
        //Set recipe to first value of recipes array
        $recipe = $recipes[0];

        // Query to get recipe ingredients
        $sql = file_get_contents('sql/getIngredients.sql');
        $params = array(
            'recipe_id' => $recipeID
        );
        $statement = $database->prepare($sql);
        $statement->execute($params);
        $ingredients = $statement->fetchAll(PDO::FETCH_ASSOC);
        //Set ingredient to first value of ingredients

        // Set object variables to the results of the queries
        $this->recipeID = $recipe['recipe_id'];
        $this->recipeName = $recipe['recipe_name'];
        $this->instructions = $recipe['instructions'];
        $this->ingredients = $ingredients;
    }

    // Getters for the 3 fields of the recipe object
    public function getRecipeName(){
        return $this->recipeName;
    }

    public function getInstructions(){
        return $this->instructions;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function getRecipeID(){
        return $this->recipeID;
    }
}
