<?php

//////////////////////////////////////////////////////////////
//                                                            
//    Copyright (C) Bratislava 2008 Thomas Kock                                         
//                                                                                      
// This program is free software; you can redistribute it and/or modify                 
// it under the terms of the GNU General Public License as published by                 
// the Free Software Foundation; either version 2 of the License, or                    
// (at your option) any later version.                                                  
//                                                                                      
// This program is distributed in the hope that it will be useful,                      
// but WITHOUT ANY WARRANTY; without even the implied warranty of                       
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the                         
// GNU General Public License for more details.                                         
//                                                                                      
// You should have received a copy of the GNU General Public License along              
// with this program; if not, write to the Free Software Foundation, Inc.,              
// 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.                         
// http://www.gnu.org/copyleft/gpl.html                                                 
//                                                                                      
//////////////////////////////////////////////////////////////                          

    global $fchw, $wgHooks, $wgExtensionMessagesFiles;	
    
    if( !defined( 'MEDIAWIKI' ) ) {
        echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
        die( 1 );                                                                                      
    }                                                                                                  
	                                                                                                       
    $dir = dirname(__FILE__) . '/';                                                                    
    $wgExtensionMessagesFiles['flowchartwiki'] = $dir . 'flowchartwiki.i18n.php';                      
    $wgExtensionFunctions[] = 'wfFlowcharwikiSetup';
    function wfFlowcharwikiSetup() {
	wfLoadExtensionMessages('flowchartwiki');
    }
    
        
    error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 'On');    

    require_once("lib.php");
    require_once("graphviz.php");
    require_once("dependencies.php");
    require_once("categoryBrowser.php");
    require_once("wizardProcessStep.php");
    require_once("linktypes.php");
	 
	 