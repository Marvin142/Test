<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    public const COPYRIGHT = "
                                                                                                                        .----.      .----.   
.---.                                                                                                                .   _   \   .   _   \  
|   |_________   _...._                 __  __   ___                   .----.     .----..--.   _..._                /  .' )   | /  .' )   | 
|   |\        |.'      '-.             |  |/  `.'   `.                  \    \   /    / |__| .'     '.             |   (_.    /|   (_.    / 
|   | \        .'```'.    '.           |   .-.  .-.   '          .-,.--. '   '. /'   /  .--..   .-.   .             \     ,  /  \     ,  /  
|   |  \      |       \     \          |  |  |  |  |  |    __    |  .-. ||    |'    /   |  ||  '   '  |              `'-'/  /    `'-'/  /   
|   |   |     |        |    |          |  |  |  |  |  | .:--.'.  | |  | ||    ||    |   |  ||  |   |  |          .-.    /  / .-.    /  /    
|   |   |      \      /    .           |  |  |  |  |  |/ |   \ | | |  | |'.   `'   .'   |  ||  |   |  |          \  '--'  /  \  '--'  /     
|   |   |     |\`'-.-'   .'            |  |  |  |  |  |`" __ | | | |  '-  \        /    |  ||  |   |  |           '-....-'    '-....-'      
|   |   |     | '-....-'`              |__|  |__|  |__| .'.''| | | |       \      /     |__||  |   |  |                                     
'---'  .'     '.                                       / /   | |_| |        '----'          |  |   |  |                                     
     '-----------'                                     \ \._,\ '/|_|                        |  |   |  |                                     
                                                        `--'  `"                            '--'   '--'                                     
|  
 
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
