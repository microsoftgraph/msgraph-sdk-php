<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ListItemVersion File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ListItemVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ListItemVersion extends BaseItemVersion
{
    /**
    * Gets the fields
    *
    * @return FieldValueSet The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
            if (is_a($this->_propDict["fields"], "Microsoft\Graph\Beta\Model\FieldValueSet")) {
                return $this->_propDict["fields"];
            } else {
                $this->_propDict["fields"] = new FieldValueSet($this->_propDict["fields"]);
                return $this->_propDict["fields"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fields
    *
    * @param FieldValueSet $val The fields
    *
    * @return ListItemVersion
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
        return $this;
    }
    
}