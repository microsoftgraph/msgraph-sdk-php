<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineCategoryStateSummary File
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
* SecurityBaselineCategoryStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SecurityBaselineCategoryStateSummary extends SecurityBaselineStateSummary
{
    /**
    * Gets the displayName
    * The category name
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The category name
    *
    * @param string $val The displayName
    *
    * @return SecurityBaselineCategoryStateSummary
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
}