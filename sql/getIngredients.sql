select name
from make_recipe natural join ingredients
where recipe_id = :recipe_id