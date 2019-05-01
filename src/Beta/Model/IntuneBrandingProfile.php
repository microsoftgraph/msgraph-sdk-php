<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IntuneBrandingProfile File
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
* IntuneBrandingProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IntuneBrandingProfile extends Entity
{
    /**
    * Gets the profileName
    * Name of the profile
    *
    * @return string The profileName
    */
    public function getProfileName()
    {
        if (array_key_exists("profileName", $this->_propDict)) {
            return $this->_propDict["profileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileName
    * Name of the profile
    *
    * @param string $val The profileName
    *
    * @return IntuneBrandingProfile
    */
    public function setProfileName($val)
    {
        $this->_propDict["profileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileDescription
    * Description of the profile
    *
    * @return string The profileDescription
    */
    public function getProfileDescription()
    {
        if (array_key_exists("profileDescription", $this->_propDict)) {
            return $this->_propDict["profileDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileDescription
    * Description of the profile
    *
    * @param string $val The profileDescription
    *
    * @return IntuneBrandingProfile
    */
    public function setProfileDescription($val)
    {
        $this->_propDict["profileDescription"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefaultProfile
    * Presents if the profile is used for default.
    *
    * @return bool The isDefaultProfile
    */
    public function getIsDefaultProfile()
    {
        if (array_key_exists("isDefaultProfile", $this->_propDict)) {
            return $this->_propDict["isDefaultProfile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefaultProfile
    * Presents if the profile is used for default.
    *
    * @param bool $val The isDefaultProfile
    *
    * @return IntuneBrandingProfile
    */
    public function setIsDefaultProfile($val)
    {
        $this->_propDict["isDefaultProfile"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * When the BrandingProfile was created.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * When the BrandingProfile was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return IntuneBrandingProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * When the BrandingProfile was last modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * When the BrandingProfile was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return IntuneBrandingProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Company/organization name that is displayed to end users.
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
    * Company/organization name that is displayed to end users.
    *
    * @param string $val The displayName
    *
    * @return IntuneBrandingProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the contactITName
    * Name of the person/organization responsible for IT support.
    *
    * @return string The contactITName
    */
    public function getContactITName()
    {
        if (array_key_exists("contactITName", $this->_propDict)) {
            return $this->_propDict["contactITName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contactITName
    * Name of the person/organization responsible for IT support.
    *
    * @param string $val The contactITName
    *
    * @return IntuneBrandingProfile
    */
    public function setContactITName($val)
    {
        $this->_propDict["contactITName"] = $val;
        return $this;
    }
    
    /**
    * Gets the contactITPhoneNumber
    * Phone number of the person/organization responsible for IT support.
    *
    * @return string The contactITPhoneNumber
    */
    public function getContactITPhoneNumber()
    {
        if (array_key_exists("contactITPhoneNumber", $this->_propDict)) {
            return $this->_propDict["contactITPhoneNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contactITPhoneNumber
    * Phone number of the person/organization responsible for IT support.
    *
    * @param string $val The contactITPhoneNumber
    *
    * @return IntuneBrandingProfile
    */
    public function setContactITPhoneNumber($val)
    {
        $this->_propDict["contactITPhoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the contactITEmailAddress
    * Email address of the person/organization responsible for IT support.
    *
    * @return string The contactITEmailAddress
    */
    public function getContactITEmailAddress()
    {
        if (array_key_exists("contactITEmailAddress", $this->_propDict)) {
            return $this->_propDict["contactITEmailAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contactITEmailAddress
    * Email address of the person/organization responsible for IT support.
    *
    * @param string $val The contactITEmailAddress
    *
    * @return IntuneBrandingProfile
    */
    public function setContactITEmailAddress($val)
    {
        $this->_propDict["contactITEmailAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the contactITNotes
    * Text comments regarding the person/organization responsible for IT support.
    *
    * @return string The contactITNotes
    */
    public function getContactITNotes()
    {
        if (array_key_exists("contactITNotes", $this->_propDict)) {
            return $this->_propDict["contactITNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contactITNotes
    * Text comments regarding the person/organization responsible for IT support.
    *
    * @param string $val The contactITNotes
    *
    * @return IntuneBrandingProfile
    */
    public function setContactITNotes($val)
    {
        $this->_propDict["contactITNotes"] = $val;
        return $this;
    }
    
    /**
    * Gets the privacyUrl
    * URL to the company/organizationâ€™s privacy policy.
    *
    * @return string The privacyUrl
    */
    public function getPrivacyUrl()
    {
        if (array_key_exists("privacyUrl", $this->_propDict)) {
            return $this->_propDict["privacyUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privacyUrl
    * URL to the company/organizationâ€™s privacy policy.
    *
    * @param string $val The privacyUrl
    *
    * @return IntuneBrandingProfile
    */
    public function setPrivacyUrl($val)
    {
        $this->_propDict["privacyUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the onlineSupportSiteUrl
    * URL to the company/organizationâ€™s IT helpdesk site.
    *
    * @return string The onlineSupportSiteUrl
    */
    public function getOnlineSupportSiteUrl()
    {
        if (array_key_exists("onlineSupportSiteUrl", $this->_propDict)) {
            return $this->_propDict["onlineSupportSiteUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onlineSupportSiteUrl
    * URL to the company/organizationâ€™s IT helpdesk site.
    *
    * @param string $val The onlineSupportSiteUrl
    *
    * @return IntuneBrandingProfile
    */
    public function setOnlineSupportSiteUrl($val)
    {
        $this->_propDict["onlineSupportSiteUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the onlineSupportSiteName
    * Display name of the company/organizationâ€™s IT helpdesk site.
    *
    * @return string The onlineSupportSiteName
    */
    public function getOnlineSupportSiteName()
    {
        if (array_key_exists("onlineSupportSiteName", $this->_propDict)) {
            return $this->_propDict["onlineSupportSiteName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onlineSupportSiteName
    * Display name of the company/organizationâ€™s IT helpdesk site.
    *
    * @param string $val The onlineSupportSiteName
    *
    * @return IntuneBrandingProfile
    */
    public function setOnlineSupportSiteName($val)
    {
        $this->_propDict["onlineSupportSiteName"] = $val;
        return $this;
    }
    
    /**
    * Gets the themeColor
    * Primary theme color used in the Company Portal applications and web portal.
    *
    * @return RgbColor The themeColor
    */
    public function getThemeColor()
    {
        if (array_key_exists("themeColor", $this->_propDict)) {
            if (is_a($this->_propDict["themeColor"], "Microsoft\Graph\Beta\Model\RgbColor")) {
                return $this->_propDict["themeColor"];
            } else {
                $this->_propDict["themeColor"] = new RgbColor($this->_propDict["themeColor"]);
                return $this->_propDict["themeColor"];
            }
        }
        return null;
    }
    
    /**
    * Sets the themeColor
    * Primary theme color used in the Company Portal applications and web portal.
    *
    * @param RgbColor $val The themeColor
    *
    * @return IntuneBrandingProfile
    */
    public function setThemeColor($val)
    {
        $this->_propDict["themeColor"] = $val;
        return $this;
    }
    
    /**
    * Gets the showLogo
    * Boolean that represents whether the administrator-supplied logo images are shown or not shown.
    *
    * @return bool The showLogo
    */
    public function getShowLogo()
    {
        if (array_key_exists("showLogo", $this->_propDict)) {
            return $this->_propDict["showLogo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showLogo
    * Boolean that represents whether the administrator-supplied logo images are shown or not shown.
    *
    * @param bool $val The showLogo
    *
    * @return IntuneBrandingProfile
    */
    public function setShowLogo($val)
    {
        $this->_propDict["showLogo"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showDisplayNameNextToLogo
    * Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
    *
    * @return bool The showDisplayNameNextToLogo
    */
    public function getShowDisplayNameNextToLogo()
    {
        if (array_key_exists("showDisplayNameNextToLogo", $this->_propDict)) {
            return $this->_propDict["showDisplayNameNextToLogo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showDisplayNameNextToLogo
    * Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
    *
    * @param bool $val The showDisplayNameNextToLogo
    *
    * @return IntuneBrandingProfile
    */
    public function setShowDisplayNameNextToLogo($val)
    {
        $this->_propDict["showDisplayNameNextToLogo"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the themeColorLogo
    * Logo image displayed in Company Portal apps on theme color backgrounds.
    *
    * @return MimeContent The themeColorLogo
    */
    public function getThemeColorLogo()
    {
        if (array_key_exists("themeColorLogo", $this->_propDict)) {
            if (is_a($this->_propDict["themeColorLogo"], "Microsoft\Graph\Beta\Model\MimeContent")) {
                return $this->_propDict["themeColorLogo"];
            } else {
                $this->_propDict["themeColorLogo"] = new MimeContent($this->_propDict["themeColorLogo"]);
                return $this->_propDict["themeColorLogo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the themeColorLogo
    * Logo image displayed in Company Portal apps on theme color backgrounds.
    *
    * @param MimeContent $val The themeColorLogo
    *
    * @return IntuneBrandingProfile
    */
    public function setThemeColorLogo($val)
    {
        $this->_propDict["themeColorLogo"] = $val;
        return $this;
    }
    
    /**
    * Gets the lightBackgroundLogo
    * Logo image displayed in Company Portal apps on light backgrounds.
    *
    * @return MimeContent The lightBackgroundLogo
    */
    public function getLightBackgroundLogo()
    {
        if (array_key_exists("lightBackgroundLogo", $this->_propDict)) {
            if (is_a($this->_propDict["lightBackgroundLogo"], "Microsoft\Graph\Beta\Model\MimeContent")) {
                return $this->_propDict["lightBackgroundLogo"];
            } else {
                $this->_propDict["lightBackgroundLogo"] = new MimeContent($this->_propDict["lightBackgroundLogo"]);
                return $this->_propDict["lightBackgroundLogo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lightBackgroundLogo
    * Logo image displayed in Company Portal apps on light backgrounds.
    *
    * @param MimeContent $val The lightBackgroundLogo
    *
    * @return IntuneBrandingProfile
    */
    public function setLightBackgroundLogo($val)
    {
        $this->_propDict["lightBackgroundLogo"] = $val;
        return $this;
    }
    
    /**
    * Gets the landingPageCustomizedImage
    * Customized image displayed in Company Portal apps landing page
    *
    * @return MimeContent The landingPageCustomizedImage
    */
    public function getLandingPageCustomizedImage()
    {
        if (array_key_exists("landingPageCustomizedImage", $this->_propDict)) {
            if (is_a($this->_propDict["landingPageCustomizedImage"], "Microsoft\Graph\Beta\Model\MimeContent")) {
                return $this->_propDict["landingPageCustomizedImage"];
            } else {
                $this->_propDict["landingPageCustomizedImage"] = new MimeContent($this->_propDict["landingPageCustomizedImage"]);
                return $this->_propDict["landingPageCustomizedImage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the landingPageCustomizedImage
    * Customized image displayed in Company Portal apps landing page
    *
    * @param MimeContent $val The landingPageCustomizedImage
    *
    * @return IntuneBrandingProfile
    */
    public function setLandingPageCustomizedImage($val)
    {
        $this->_propDict["landingPageCustomizedImage"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignments for the branding profile.
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    * The list of group assignments for the branding profile.
    *
    * @param IntuneBrandingProfileAssignment $val The assignments
    *
    * @return IntuneBrandingProfile
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}