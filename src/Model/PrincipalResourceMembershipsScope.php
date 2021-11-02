<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrincipalResourceMembershipsScope File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* PrincipalResourceMembershipsScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrincipalResourceMembershipsScope extends AccessReviewScope
{

    /**
    * Gets the principalScopes
    * Defines the scopes of the principals whose access to resources are reviewed in the access review.
    *
    * @return AccessReviewScope[]|null The principalScopes
    */
    public function getPrincipalScopes()
    {
        if (array_key_exists("principalScopes", $this->_propDict) && !is_null($this->_propDict["principalScopes"])) {
       
            if (count($this->_propDict['principalScopes']) > 0 && is_a($this->_propDict['principalScopes'][0], 'AccessReviewScope')) {
                return $this->_propDict['principalScopes'];
            }
            $principalScopes = [];
            foreach ($this->_propDict['principalScopes'] as $singleValue) {
                $principalScopes []= new AccessReviewScope($singleValue);
            }
            $this->_propDict['principalScopes'] = $principalScopes;
            return $this->_propDict['principalScopes'];
            }
        return null;
    }

    /**
    * Sets the principalScopes
    * Defines the scopes of the principals whose access to resources are reviewed in the access review.
    *
    * @param AccessReviewScope[] $val The value to assign to the principalScopes
    *
    * @return PrincipalResourceMembershipsScope The PrincipalResourceMembershipsScope
    */
    public function setPrincipalScopes($val)
    {
        $this->_propDict["principalScopes"] = $val;
         return $this;
    }

    /**
    * Gets the resourceScopes
    * Defines the scopes of the resources for which access is reviewed.
    *
    * @return AccessReviewScope[]|null The resourceScopes
    */
    public function getResourceScopes()
    {
        if (array_key_exists("resourceScopes", $this->_propDict) && !is_null($this->_propDict["resourceScopes"])) {
       
            if (count($this->_propDict['resourceScopes']) > 0 && is_a($this->_propDict['resourceScopes'][0], 'AccessReviewScope')) {
                return $this->_propDict['resourceScopes'];
            }
            $resourceScopes = [];
            foreach ($this->_propDict['resourceScopes'] as $singleValue) {
                $resourceScopes []= new AccessReviewScope($singleValue);
            }
            $this->_propDict['resourceScopes'] = $resourceScopes;
            return $this->_propDict['resourceScopes'];
            }
        return null;
    }

    /**
    * Sets the resourceScopes
    * Defines the scopes of the resources for which access is reviewed.
    *
    * @param AccessReviewScope[] $val The value to assign to the resourceScopes
    *
    * @return PrincipalResourceMembershipsScope The PrincipalResourceMembershipsScope
    */
    public function setResourceScopes($val)
    {
        $this->_propDict["resourceScopes"] = $val;
         return $this;
    }
}
