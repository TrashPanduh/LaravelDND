// https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse

https://laravel.com/docs/8.x/eloquent-relationships#one-to-many


# Character

## relationships
class - belongsTo
race - belongsTo

name - string
class_id - int
race_id - int
base_str_modifier - int
base_dex_modifier - int
base_con_modifier - int
base_wis_modifier - int
base_int_modifier - int
base_cha_modifier - int

# Class

## relationships
character - hasMany

name - string
hit_die - int

# LevelUpEvent

## relationships
character - belongsTo

hp_roll - int
level - int
character_id - int 
str_modifier - int
dex_modifier - int
con_modifier - int
wis_modifier - int
int_modifier - int
cha_modifier - int


