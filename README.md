# ITRACKB4 LA9: Video Games

## F1. Nullable column
The nullable column is `year` in my `videogames` table. I chose it because some games, like upcoming or early-access titles, may not have a confirmed release year yet, while title, developer and genre are always needed to identify a game.

## F2. First step that failed
The first thing that failed was ________. The error said: "________".

## F3. Why the pages still work without editing Blade
My Blade files read `$games`, `$genre`, `$developer` and `$item`, so my controller passes those same variable names, now filled by `Videogame::all()` and `Videogame::findOrFail($id)`. An Eloquent model can be read like an array (`$item['title']`), so the views never needed to know the data moved from the JSON file to the database.
## Author

Samson Idanan Jr.