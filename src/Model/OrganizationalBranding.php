<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalBranding File
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
* OrganizationalBranding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalBranding extends OrganizationalBrandingProperties
{

     /** 
     * Gets the localizations
    * Add different branding based on a locale.
     *
     * @return OrganizationalBrandingLocalization[]|null The localizations
     */
    public function getLocalizations()
    {
        if (array_key_exists('localizations', $this->_propDict) && !is_null($this->_propDict['localizations'])) {
            $localizations = [];
            if (count($this->_propDict['localizations']) > 0 && is_a($this->_propDict['localizations'][0], 'OrganizationalBrandingLocalization')) {
                return $this->_propDict['localizations'];
            }
            foreach ($this->_propDict['localizations'] as $singleValue) {
                $localizations []= new OrganizationalBrandingLocalization($singleValue);
            }
            $this->_propDict['localizations'] = $localizations;
            return $this->_propDict['localizations'];
        }
        return null;
    }
    
    /** 
    * Sets the localizations
    * Add different branding based on a locale.
    *
    * @param OrganizationalBrandingLocalization[] $val The localizations
    *
    * @return OrganizationalBranding
    */
    public function setLocalizations($val)
    {
        $this->_propDict["localizations"] = $val;
        return $this;
    }
    
}
