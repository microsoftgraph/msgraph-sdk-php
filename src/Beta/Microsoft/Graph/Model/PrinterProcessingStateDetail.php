<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterProcessingStateDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* PrinterProcessingStateDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterProcessingStateDetail extends Enum
{
    /**
    * The Enum PrinterProcessingStateDetail
    */
    const PAUSED = "paused";
    const DISCONNECTED = "disconnected";
    const MEDIA_JAM = "mediaJam";
    const MEDIA_NEEDED = "mediaNeeded";
    const MEDIA_LOW = "mediaLow";
    const MEDIA_EMPTY = "mediaEmpty";
    const COVER_OPEN = "coverOpen";
    const INTERLOCK_OPEN = "interlockOpen";
    const QUEUE_FULL = "queueFull";
    const OUTPUT_TRAY_MISSING = "outputTrayMissing";
    const OUTPUT_AREA_FULL = "outputAreaFull";
    const MARKER_SUPPLY_LOW = "markerSupplyLow";
    const MARKER_SUPPLY_EMPTY = "markerSupplyEmpty";
    const INPUT_TRAY_MISSING = "inputTrayMissing";
    const OUTPUT_ALMOST_FULL = "outputAlmostFull";
    const MARKER_WASTE_ALMOST_FULL = "markerWasteAlmostFull";
    const MARKER_WASTE_FULL = "markerWasteFull";
    const FUSER_OVER_TEMP = "fuserOverTemp";
    const FUSER_UNDER_TEMP = "fuserUnderTemp";
    const OTHER = "other";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}