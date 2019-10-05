#Comandos para crear los modelos
php artisan make:model Pokemon
php artisan make:model Tipo
php artisan make:model Region
php artisan make:model AtaqueRapido
php artisan make:model AtaqueCargado
php artisan make:model Ventaja
php artisan make:model Resistencia

#Comandos para crear los controladores
php artisan make:controller PokemonController
php artisan make:controller TipoController
php artisan make:controller RegionController
php artisan make:controller AtaqueRapidoController
php artisan make:controller AtaqueCargadoController
php artisan make:controller VentajaController
php artisan make:controller ResistenciaController

#Comandos para crear las migraciones
php artisan make:migration crear_tabla_pokemons --create=pokemon
php artisan make:migration crear_tabla_tipos --create=tipo
php artisan make:migration crear_tabla_regions --create=region
php artisan make:migration crear_tabla_ataqueRapidos --create=ataqueRapido
php artisan make:migration crear_tabla_ataqueCargados --create=ataqueCargado
php artisan make:migration crear_tabla_ventajas --create=ventaja
php artisan make:migration crear_tabla_resistecias --create=resistencia

#comando para crear las tablas mediante las migraciones
#php artisan migrate

#Comandos para crear seeders
php artisan make:seeder PokemonSeeder
php artisan make:seeder TipoSeeder
php artisan make:seeder RegionSeeder
php artisan make:seeder AtaqueRapidoSeeder
php artisan make:seeder AtaqueCargadoSeeder
php artisan make:seeder VentejaSeeder
php artisan make:seeder ResisteciaSeeder

#Comando para rellenar las tablas mediante los Seeds
#php artisan db:seed

#Combinación entre los comandos php artisan migrate y php artisan db:seed.
#php artisan migrate --seed

#Combinación entre los comandos php artisan migrate:refresh y php artisan db:seed.
php artisan migrate:refresh --seed