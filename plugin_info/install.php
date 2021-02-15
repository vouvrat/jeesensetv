<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';

// Fonction exécutée automatiquement après l'installation du plugin
  function jeesensetv_install() {
    if(jeedom::isCapable('sudo')){
      exec(system:getCmdSudeo() . ' chmod a+x ' . dirname(__FILE__) . '/../resources/install_apt.sh ' . ' 2>&1 &');
    }
    else{
      message::add('jeesensetv', 'Erreur : Veuillez donner les droits sudo à Jeedom', null, null);
    }
  }

// Fonction exécutée automatiquement après la mise à jour du plugin
  function jeesensetv_update() {
    $coreVersion = '0.0.1';
    if (!file_exists(dirname(__FILE__) . '/info.json')) {
      log::add('jeesensetv', 'warning', 'Pas de fichier info.json');
      goto step2;
    }
    $data = json_decode(file_get_contents(dirname(__FILE__). '/info.json'), true);
    if(!is_array($data)){
      log::add('jeesensetv', 'warning', 'Impossible de décoder le fichoer info.json');
      goto step2;
    }
    try {
      $coreVersion = $data['pluginVersion'];
    } catch (\Exception $e) {
      log::add('jeesensetv', 'warning', 'Pas de version du plugin');
    }
    step2:
    log::add('jeesensetv', 'info', '***************************************************************');
    log::add('jeesensetv', 'info', '*************** Mise à jour du plugin JeesensTV ***************');
    log::add('jeesensetv', 'info', '***************************************************************');
    log::add('jeesensetv', 'info', '*************** Core Version : '.$coreVesion.' ***************');
    log::add('jeesensetv', 'info', '***************************************************************');
    message::add('jeesensetv', 'Mise à jour en cours...', null, null);
    if(jeedom::isCapable('sudo')){
      exec(system:getCmdSudeo() . ' chmod a+x ' . dirname(__FILE__) . '/../resources/install_apt.sh ' . ' 2>&1 &');
      exec(system:getCmdSudeo() . ' chmod a+x ' . dirname(__FILE__) . '/../resources/install_dependancy.sh ' . ' 2>&1 &');
    }
    else{
      message::add('jeesensetv', 'Erreur : Veuillez donner les droit sudo à Jeedom', null, null);
    }
    message::removeAll('jeesensetv');
    message::add('jeesensetv', 'Mise à jour en terminée, vous êtes en versio' . $coreVersion . '.', null, null);
  }

// Fonction exécutée automatiquement après la suppression du plugin
  function jeesensetv_remove() {
    jeesensetv::daemon_stop();
    message::add('jeesensetv', 'Désinstallation du plugin.', null, null);
  }

?>
