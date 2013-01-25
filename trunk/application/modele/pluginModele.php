<?php

/**
 * @version		0.3 alpha-test - 2013-01-25
 * @package		Tourism System Server
 * @copyright	Copyright (C) 2010 Raccourci Interactive
 * @license		Qt Public License; see LICENSE.txt
 * @author		Nicolas Marchand <nicolas.raccourci@gmail.com>
 */

	require_once('application/collection/pluginCollection.php');

	final class pluginModele extends baseModele implements WSDLable
	{
		
		protected $nomPlugin;
		protected $version;
		protected $cle;
		protected $serveurMaj;
		protected $actif;
		protected $dateMaj;
		
		
		public function __toString()
		{
			$str = '<h2>Plugin</h2>';
			$str .= '<h4>Nom : ' . $this -> nomPlugin . '</h4>';
			$str .= '<h4>Version : ' . $this -> version . '</h4>';
			$str .= '<h4>Clé : ' . $this -> cle . '</h4>';
			$str .= '<h4>Serveur : ' . $this -> serveurMaj . '</h4>';
			$str .= '<h4>Actif : ' . ($this -> actif === true ? 'Oui' : 'Non') . '</h4>';
			$str .= '<h4>Date de Maj : ' . $this -> dateMaj . '</h4>';
			return $str;
		}
		
	} 

?>