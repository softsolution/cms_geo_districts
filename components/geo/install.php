<?php

    function info_component_geo(){
        
        $_component['title']        = 'Геолокация';
        $_component['description']  = 'Геолокация + районы города';
        $_component['link']         = 'geo';
        $_component['author']       = 'InstantCMS team + soft-solution.ru';
        $_component['internal']     = '0';
        $_component['version']      = '1.10.6';

        $_component['config']       = array();
        return $_component;

    }
    
    function install_component_geo(){

        $inCore = cmsCore::getInstance();
        $inDB   = cmsDatabase::getInstance();

        $inDB->importFromFile(PATH.'/components/geo/districts.sql');

        return true;

    }

    function upgrade_component_geo(){
        
        $inCore     = cmsCore::getInstance();
        $inDB       = cmsDatabase::getInstance();

        $inDB->importFromFile(PATH.'/components/geo/districts.sql');
        
        return true;
        
    }

    function remove_component_geo(){
	
        $inCore     = cmsCore::getInstance();
        $inDB       = cmsDatabase::getInstance();
        $inDB->query("DROP TABLE IF EXISTS cms_geo_districts");

    }

?>