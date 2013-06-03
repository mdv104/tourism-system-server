<?php

// French stoplist

$stoplist = array(
'$',
'\'en',
'-ce',
'-ci',
'-elle',
'-elles',
'-en',
'-il',
'-ils',
'-je',
'-la',
'-le',
'-les',
'-leur',
'-lui',
'-l�',
'-moi',
'-nous',
'-on',
'-t',
'-toi',
'-tu',
'-vous',
'-y',
'A',
'Ap.',
'Apr.',
'B',
'C',
'Ca',
'D',
'E',
'F',
'G',
'GHz',
'H',
'I',
'J',
'K',
'L',
'M',
'MHz',
'N',
'O',
'P',
'Q',
'R',
'S',
'T',
'U',
'USD',
'V',
'W',
'X',
'Z',
'a',
'afin',
'afin d\'',
'afin de',
'afin qu\'',
'afin que',
'ah',
'ai',
'aie',
'aient',
'aies',
'ailleurs',
'ainsi',
'ainsi qu\'',
'ainsi que',
'ait',
'alentour',
'alias',
'allaient',
'allais',
'allait',
'allez',
'allons',
'alors',
'alors qu\'',
'alors que',
'apr�s',
'apr�s qu\'',
'apr�s que',
'apr�s-demain',
'arri�re',
'as',
'assez',
'attendu',
'au',
'au cours d\'',
'au cours de',
'au cours des',
'au cours du',
'au regard d\'',
'au regard de',
'au regard des',
'au regard du',
'au sein d\'',
'au sein de',
'au sein des',
'au sein du',
'au sujet d\'',
'au sujet de',
'au sujet des',
'au sujet du',
'au travers d\'',
'au travers de',
'au travers des',
'au travers du',
'au-dedans',
'au-dehors',
'au-del�',
'au-del� d\'',
'au-del� de',
'au-del� des',
'au-del� du',
'au-dessous',
'au-dessus',
'au-devant',
'au-devant d\'',
'au-devant de',
'au-devant des',
'au-devant du',
'aucun',
'aucune',
'audit',
'aujourd\'',
'aujourd\'hui',
'auparavant',
'aupr�s',
'aupr�s d\'',
'aupr�s de',
'aupr�s des',
'aupr�s du',
'auquel',
'aura',
'aurai',
'auraient',
'aurais',
'aurait',
'auras',
'aurez',
'auriez',
'aurions',
'aurons',
'auront',
'aussi',
'aussi bien qu\'',
'aussi bien que',
'aussit�t',
'autant',
'autour',
'autour d\'',
'autour de',
'autour des',
'autour du',
'autre',
'autrefois',
'autres',
'autrui',
'aux',
'auxdites',
'auxdits',
'auxquelles',
'auxquels',
'avaient',
'avais',
'avait',
'avant',
'avant qu\'',
'avant que',
'avant-hier',
'avec',
'avez',
'aviez',
'avions',
'avoir',
'avons',
'ayant',
'ayez',
'ayons',
'bah',
'banco',
'beaucoup',
'ben',
'bien',
'bient�t',
'bis',
'bon',
'b�',
'c\'',
'c\'est-�-dire',
'c.-�-d.',
'cahin-caha',
'car',
'ce',
'ceci',
'cela',
'celle',
'celle-ci',
'celle-l�',
'celles',
'celles-ci',
'celles-l�',
'celui',
'celui-ci',
'celui-l�',
'cent',
'cents',
'cependant',
'certain',
'certaine',
'certaines',
'certains',
'certes',
'ces',
'cet',
'cette',
'ceux',
'ceux-ci',
'ceux-l�',
'cf.',
'cg',
'cgr',
'chacun',
'chacune',
'chaque',
'cher',
'chez',
'ci',
'ci-apr�s',
'ci-dessous',
'ci-dessus',
'cinq',
'cinquante',
'cinquante et un',
'cinquante et une',
'cinquante-cinq',
'cinquante-deux',
'cinquante-et-un',
'cinquante-huit',
'cinquante-neuf',
'cinquante-quatre',
'cinquante-sept',
'cinquante-six',
'cinquante-trois',
'cl',
'cm',
'combien',
'comme',
'comment',
'contrario',
'contre',
'crescendo',
'c�ans',
'd\'',
'd\'abord',
'd\'accord',
'd\'affil�e',
'd\'ailleurs',
'd\'apr�s',
'd\'arrache-pied',
'd\'embl�e',
'dans',
'davantage',
'de',
'de la part d\'',
'de la part de',
'de la part des',
'de la part du',
'de ladite',
'de laquelle',
'de m�me qu\'',
'de m�me que',
'de peur qu\'',
'de peur que',
'debout',
'dedans',
'dehors',
'del�',
'demain',
'depuis',
'derechef',
'derri�re',
'des',
'desdites',
'desdits',
'desquelles',
'desquels',
'dessous',
'dessus',
'deux',
'devant',
'devers',
'dg',
'die',
'diff�rentes',
'diff�rents',
'dire',
'dis',
'disent',
'dit',
'dito',
'divers',
'diverses',
'dix',
'dix-huit',
'dix-neuf',
'dix-sept',
'dl',
'dm',
'donc',
'dont',
'dor�navant',
'douze',
'du',
'dudit',
'duquel',
'durant',
'd�s',
'd�s lors qu\'',
'd�s lors que',
'd�s qu\'',
'd�s que',
'd�j�',
'd�sormais',
'd�',
'eh',
'elle',
'elles',
'en',
'en cours d\'',
'en cours de',
'en de��',
'en d�pit d\'',
'en d�pit de',
'en d�pit des',
'en d�pit du',
'en faveur d\'',
'en faveur de',
'en faveur des',
'en faveur du',
'en marge d\'',
'en marge de',
'en marge des',
'en marge du',
'en mati�re d\'',
'en mati�re de',
'en raison d\'',
'en raison de',
'en raison des',
'en raison du',
'en vertu d\'',
'en vertu de',
'en vertu du',
'en vue d\'',
'en vue de',
'en vue des',
'en vue du',
'en-dehors d\'',
'en-dehors de',
'en-dehors des',
'en-dehors du',
'encore',
'enfin',
'ensemble',
'ensuite',
'entre',
'entre-temps',
'envers',
'environ',
'es',
'est',
'et',
'et/ou',
'etc',
'eu',
'eu �gard au',
'eu �gard aux',
'eu �gard �',
'eue',
'eues',
'euh',
'eurent',
'eus',
'eusse',
'eussent',
'eusses',
'eussiez',
'eussions',
'eut',
'eux',
'expr�s',
'extenso',
'extremis',
'e�mes',
'e�t',
'e�tes',
'facto',
'faire',
'fais',
'faisaient',
'faisais',
'faisait',
'faisons',
'fait',
'faites',
'fallait',
'faudrait',
'faut',
'fi',
'flac',
'fors',
'fort',
'forte',
'fortiori',
'frais',
'fur',
'furent',
'fus',
'fusse',
'fussent',
'fusses',
'fussiez',
'fussions',
'fut',
'f�mes',
'f�t',
'f�tes',
'gr',
'grosso',
'gr�ce au',
'gr�ce aux',
'gr�ce �',
'gu�re',
'ha',
'han',
'haut',
'hein',
'hem',
'heu',
'hg',
'hier',
'hl',
'hm',
'hol�',
'hop',
'hormis',
'hors',
'hui',
'huit',
'hum',
'h�',
'ibidem',
'ici',
'ici-bas',
'idem',
'il',
'illico',
'ils',
'ipso',
'item',
'j\'',
'jadis',
'jamais',
'je',
'jusqu\'',
'jusqu\'au',
'jusqu\'aux',
'jusqu\'�',
'jusque',
'juste',
'kg',
'km',
'l\'',
'l\'autre',
'l\'on',
'l\'un',
'l\'une',
'la',
'la leur',
'la mienne',
'la n�tre',
'la sienne',
'la tienne',
'la v�tre',
'laquelle',
'le',
'le leur',
'le mien',
'le n�tre',
'le sien',
'le tien',
'le v�tre',
'lequel',
'les',
'les autres',
'les leurs',
'les miennes',
'les miens',
'les n�tres',
'les siennes',
'les siens',
'les tiennes',
'les tiens',
'les v�tres',
'lesquelles',
'lesquels',
'leur',
'leurs',
'lez',
'loin',
'longtemps',
'lors',
'lors d\'',
'lors de',
'lors des',
'lors du',
'lors m�me qu\'',
'lors m�me que',
'lorsqu\'',
'lorsque',
'lui',
'l�',
'l�-bas',
'l�-dedans',
'l�-dehors',
'l�-derri�re',
'l�-dessous',
'l�-dessus',
'l�-devant',
'l�-haut',
'l�s',
'm\'',
'ma',
'maint',
'mainte',
'maintenant',
'maintes',
'maints',
'mais',
'mal',
'malgr�',
'me',
'mes',
'mg',
'mgr',
'mieux',
'mil',
'mille',
'milliards',
'millions',
'minima',
'ml',
'mm',
'modo',
'moi',
'moins',
'mon',
'moult',
'moyennant',
'mt',
'm�me',
'm�mes',
'n\'',
'nagu�re',
'ne',
'neuf',
'ni',
'non',
'nonante',
'nonobstant',
'nos',
'notre',
'nous',
'nul',
'nulle',
'n�anmoins',
'octante',
'oh',
'on',
'ont',
'onze',
'or',
'ou',
'ouais',
'oui',
'outre',
'o�',
'par',
'par rapport au',
'par rapport aux',
'par rapport �',
'par-ci',
'par-del�',
'par-derri�re',
'par-dessous',
'par-dessus',
'par-devant',
'par-l�',
'parbleu',
'parce',
'parce qu\'',
'parce que',
'parfois',
'parmi',
'partout',
'pas',
'pas grand-chose',
'passim',
'pass�',
'pendant',
'personne',
'petto',
'peu',
'peut',
'peut-�tre',
'peuvent',
'peux',
'pis',
'plus',
'plus d\'un',
'plus d\'une',
'plusieurs',
'plut�t',
'point',
'posteriori',
'pour',
'pour qu\'',
'pour que',
'pourquoi',
'pourtant',
'pourvu qu\'',
'pourvu que',
'presqu\'',
'presque',
'primo',
'priori',
'prou',
'pr�s',
'pr�alable',
'pu',
'puis',
'puisqu\'',
'puisque',
'qu\'',
'qua',
'quand',
'quant au',
'quant aux',
'quant �',
'quarante',
'quarante et un',
'quarante et une',
'quarante-cinq',
'quarante-deux',
'quarante-et-un',
'quarante-huit',
'quarante-neuf',
'quarante-quatre',
'quarante-sept',
'quarante-six',
'quarante-trois',
'quasi',
'quatorze',
'quatre',
'quatre-vingt',
'quatre-vingt-cinq',
'quatre-vingt-deux',
'quatre-vingt-dix',
'quatre-vingt-dix-huit',
'quatre-vingt-dix-neuf',
'quatre-vingt-dix-sept',
'quatre-vingt-douze',
'quatre-vingt-huit',
'quatre-vingt-neuf',
'quatre-vingt-onze',
'quatre-vingt-quatorze',
'quatre-vingt-quatre',
'quatre-vingt-quinze',
'quatre-vingt-seize',
'quatre-vingt-sept',
'quatre-vingt-six',
'quatre-vingt-treize',
'quatre-vingt-trois',
'quatre-vingt-un',
'quatre-vingt-une',
'quatre-vingts',
'que',
'quel',
'quelle',
'quelles',
'quelqu\'',
'quelqu\'un',
'quelqu\'une',
'quelque',
'quelque chose',
'quelquefois',
'quelques',
'quelques-unes',
'quelques-uns',
'quels',
'qui',
'quiconque',
'quinze',
'quoi',
'quoiqu\'',
'quoique',
'revoici',
'revoil�',
'rien',
's\'',
'sa',
'sans',
'sauf',
'se',
'secundo',
'seize',
'selon',
'sensu',
'sept',
'septante',
'sera',
'serai',
'seraient',
'serais',
'serait',
'seras',
'serez',
'seriez',
'serions',
'serons',
'seront',
'ses',
'si',
'sic',
'sine',
'sinon',
'situ',
'sit�t',
'six',
'soi',
'soient',
'sois',
'soit',
'soixante',
'soixante et onze',
'soixante et un',
'soixante-cinq',
'soixante-deux',
'soixante-dix',
'soixante-dix-huit',
'soixante-dix-neuf',
'soixante-dix-sept',
'soixante-douze',
'soixante-et-onze',
'soixante-et-un',
'soixante-et-une',
'soixante-huit',
'soixante-neuf',
'soixante-quatorze',
'soixante-quatre',
'soixante-quinze',
'soixante-seize',
'soixante-sept',
'soixante-six',
'soixante-treize',
'soixante-trois',
'sommes',
'son',
'sont',
'soudain',
'sous',
'souvent',
'soyez',
'soyons',
'stricto',
'suis',
'suite �',
'sur',
'sur-le-champ',
'surtout',
'sus',
't\'',
'ta',
'tacatac',
'tandis qu\'',
'tandis que',
'tant',
'tant�t',
'tard',
'te',
'tel',
'telle',
'telles',
'tels',
'ter',
'tes',
'toi',
'ton',
'toujours',
'tous',
'tout',
'toute',
'toutefois',
'toutes',
'treize',
'trente',
'trente et un',
'trente et une',
'trente-cinq',
'trente-deux',
'trente-et-un',
'trente-huit',
'trente-neuf',
'trente-quatre',
'trente-sept',
'trente-six',
'trente-trois',
'trois',
'trop',
'tr�s',
'tu',
't�t',
'un',
'une',
'unes',
'uns',
'va',
'vais',
'vas',
'vers',
'veut',
'veux',
'via',
'vice-versa',
'vingt',
'vingt et un',
'vingt et une',
'vingt-cinq',
'vingt-deux',
'vingt-huit',
'vingt-neuf',
'vingt-quatre',
'vingt-sept',
'vingt-six',
'vingt-trois',
'vis-�-vis',
'vite',
'vitro',
'vivo',
'voici',
'voil�',
'voire',
'volontiers',
'vos',
'votre',
'vous',
'y',
'z�ro',
'�',
'� l\'encontre d\'',
'� l\'encontre de',
'� l\'encontre des',
'� l\'encontre du',
'� l\'instar d\'',
'� l\'instar de',
'� l\'instar des',
'� l\'instar du',
'� l\'insu d\'',
'� l\'insu de',
'� l\'insu des',
'� l\'insu du',
'� l\'issue d\'',
'� l\'issue de',
'� l\'issue des',
'� l\'issue du',
'� l\'occasion d\'',
'� l\'occasion de',
'� l\'occasion des',
'� l\'occasion du',
'� l\'�gard d\'',
'� l\'�gard de',
'� l\'�gard des',
'� l\'�gard du',
'� la suite d\'',
'� la suite de',
'� la suite des',
'� la suite du',
'� ladite',
'� laquelle',
'� m�me d\'',
'� m�me de',
'� partir d\'',
'� partir de',
'� partir des',
'� partir du',
'� travers',
'�\'',
'�a',
'��',
'�s',
'�taient',
'�tais',
'�tait',
'�tant',
'�tiez',
'�tions',
'�t�',
'�tes',
'�tre',
'�',
);

?>