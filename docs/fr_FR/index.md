Présentation
===

Plugin de communication avec les TV Hisense pour la solution domotique Jeedom

Configuration du plugin
===

Une fois le plugin télécharger, procéder à l'activation de celui-ci.

Aucune configuration n'est à prévoir ici.

## Configuration d'un équipements

La configurations des équipements TV Hisense est accéssible à partir du menu plugin > Multimédia.

## Liste des commandes retrouver avec MQTTExplorer

- /remoteapp/mobile/broadcast/ui_service/state
- /remoteapp/mobile/broadcast/ui_service/actions/remote_launcher
- /remoteapp/mobile/broadcast/ui_service/actions/remote_epg
- /remoteapp/mobile/broadcast/ui_service/actions/applistverchange = "1581777573734" (L'ID doit changer en fonction deu modèle)
- /remoteapp/mobile/broadcast/ui_service/actions/remote_settings
- /remoteapp/mobile/broadcast/platform_service/actions/volumechange

| Touche télécommande | Action  | URL | Retour JSON |
| ------------- | ------------- | ------------- | ------------- |
| INFO  | Affiche les informations du programme en cours sur la TV  | /remoteapp/mobile/broadcast/ui_service/state  | {"statetype":"livetv","list_param":"sl2dfe9458-ab07-4f87-b9ce-5f3b49e4535d","channel_num":"3","eventid":"","progname":"Les carnets de Julie","starttime":1581776100,"endtime":1581779700,"detail":"Au sommaire : La poche de veau farcie, dite «brasse pieche» dans le patois local. - Les barbajuans sucrés à la ricotta et aux citrons de Menton. - Les sardines farcies.","channel_param":"2#ch686cd2d2-d9ee-43df-8075-f6ae7246fa97#sl2dfe9458-ab07-4f87-b9ce-5f3b49e4535d#","channel_name":"F3 Paris Ile-de-France","sourceid":"TV"} |
| Application | Affiche le menu des applications | /remoteapp/mobile/broadcast/ui_service/actions/remote_epg | "" |
| GUIDE | A définir | /remoteapp/mobile/broadcast/ui_service/actions/remote_epg | "" |
| VOL+ | Augmentation du volume | /remoteapp/mobile/broadcast/platform_service/actions | {"volume_type":0,"volume_value":7} |
| VOL- | Baisse du volume | /remoteapp/mobile/broadcast/platform_service/actions | {"volume_type":0,"volume_value":3} |
| HOME/MAISON | A définir | /remoteapp/mobile/broadcast/ui_service/actions/remote_launcher | "" |
| CHAINE+ | A définir | /remoteapp/mobile/broadcast/ui_service |  |
| CHAINE- | A définir | /remoteapp/mobile/broadcast/ui_service |  |
| SUB. | Affiche ou non les sous-titres | /remoteapp/mobile/broadcast/ui_service/actions/remote_setting | "" |
| NETFLIX | Lance l'application VOD Netflix | /remoteapp/mobile/broadcast/ui_service/state | {"statetype":"app","name":"netflix","url":"netflix"} |
| YOUTUBE | Lance l'application Youtube | /remoteapp/mobile/broadcast/ui_service/state | {"statetype":"app","name":"youtube","url":"youtube"} |
| PRIME VIDEO | Lance l'application VOD Amazon | /remoteapp/mobile/broadcast/ui_service/state | {"statetype":"app","name":"amazon","url":"amazon"} |
| RAKUTEN TV | Lance l'application VOD Rakuten | /remoteapp/mobile/broadcast/ui_service/state | {"statetype":"app","name":"rakutentv","url":"https://prod-hisense-ui40-app.rakuten.tv/"} | 


## Compatibilités.


| Marque | Séries  | Modèle |
| ------------- | ------------- | ------------- |
| Hisense  | 8B  | H55U8B  |

BUG
===
En cas de bug du plugin il est possible d'ouvrir une demande :
[https://github.com/vouvrat/JeeSenseTV/issues](https://github.com/vouvrat/JeeSenseTV/issues)