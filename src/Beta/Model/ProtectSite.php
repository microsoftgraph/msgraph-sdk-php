<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProtectSite File
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
* ProtectSite class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ProtectSite extends LabelActionBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.protectSite");
    }


    /**
    * Gets the accessType
    *
    * @return SiteAccessType The accessType
    */
    public function getAccessType()
    {
        if (array_key_exists("accessType", $this->_propDict)) {
            if (is_a($this->_propDict["accessType"], "Microsoft\Graph\Beta\Model\SiteAccessType")) {
                return $this->_propDict["accessType"];
            } else {
                $this->_propDict["accessType"] = new SiteAccessType($this->_propDict["accessType"]);
                return $this->_propDict["accessType"];
            }
        }
        return null;
    }

    /**
    * Sets the accessType
    *
    * @param SiteAccessType $val The value to assign to the accessType
    *
    * @return ProtectSite The ProtectSite
    */
    public function setAccessType($val)
    {
        $this->_propDict["accessType"] = $val;
         return $this;
    }
}
