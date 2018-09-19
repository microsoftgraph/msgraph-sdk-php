<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdgeSearchEngine File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* EdgeSearchEngine class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EdgeSearchEngine extends EdgeSearchEngineBase
{

    /**
    * Gets the edgeSearchEngineType
    *
    * @return EdgeSearchEngineType The edgeSearchEngineType
    */
    public function getEdgeSearchEngineType()
    {
        if (array_key_exists("edgeSearchEngineType", $this->_propDict)) {
            if (is_a($this->_propDict["edgeSearchEngineType"], "Microsoft\Graph\Beta\Model\EdgeSearchEngineType")) {
                return $this->_propDict["edgeSearchEngineType"];
            } else {
                $this->_propDict["edgeSearchEngineType"] = new EdgeSearchEngineType($this->_propDict["edgeSearchEngineType"]);
                return $this->_propDict["edgeSearchEngineType"];
            }
        }
        return null;
    }

    /**
    * Sets the edgeSearchEngineType
    *
    * @param EdgeSearchEngineType $val The value to assign to the edgeSearchEngineType
    *
    * @return EdgeSearchEngine The EdgeSearchEngine
    */
    public function setEdgeSearchEngineType($val)
    {
        $this->_propDict["edgeSearchEngineType"] = $val;
         return $this;
    }
}
