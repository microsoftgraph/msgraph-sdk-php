<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationCsvDataProvider File
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
* EducationCsvDataProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationCsvDataProvider extends EducationSynchronizationDataProvider
{

    /**
    * Gets the customizations
    *
    * @return EducationSynchronizationCustomizations The customizations
    */
    public function getCustomizations()
    {
        if (array_key_exists("customizations", $this->_propDict)) {
            if (is_a($this->_propDict["customizations"], "Microsoft\Graph\Beta\Model\EducationSynchronizationCustomizations")) {
                return $this->_propDict["customizations"];
            } else {
                $this->_propDict["customizations"] = new EducationSynchronizationCustomizations($this->_propDict["customizations"]);
                return $this->_propDict["customizations"];
            }
        }
        return null;
    }

    /**
    * Sets the customizations
    *
    * @param EducationSynchronizationCustomizations $val The value to assign to the customizations
    *
    * @return EducationCsvDataProvider The EducationCsvDataProvider
    */
    public function setCustomizations($val)
    {
        $this->_propDict["customizations"] = $val;
         return $this;
    }
}
