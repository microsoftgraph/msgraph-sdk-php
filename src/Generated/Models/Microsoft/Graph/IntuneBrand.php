<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IntuneBrand implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $contactITEmailAddress Email address of the person/organization responsible for IT support. */
    private ?string $contactITEmailAddress = null;
    
    /** @var string|null $contactITName Name of the person/organization responsible for IT support. */
    private ?string $contactITName = null;
    
    /** @var string|null $contactITNotes Text comments regarding the person/organization responsible for IT support. */
    private ?string $contactITNotes = null;
    
    /** @var string|null $contactITPhoneNumber Phone number of the person/organization responsible for IT support. */
    private ?string $contactITPhoneNumber = null;
    
    /** @var MimeContent|null $darkBackgroundLogo Logo image displayed in Company Portal apps which have a dark background behind the logo. */
    private ?MimeContent $darkBackgroundLogo = null;
    
    /** @var string|null $displayName Company/organization name that is displayed to end users. */
    private ?string $displayName = null;
    
    /** @var MimeContent|null $lightBackgroundLogo Logo image displayed in Company Portal apps which have a light background behind the logo. */
    private ?MimeContent $lightBackgroundLogo = null;
    
    /** @var string|null $onlineSupportSiteName Display name of the company/organization’s IT helpdesk site. */
    private ?string $onlineSupportSiteName = null;
    
    /** @var string|null $onlineSupportSiteUrl URL to the company/organization’s IT helpdesk site. */
    private ?string $onlineSupportSiteUrl = null;
    
    /** @var string|null $privacyUrl URL to the company/organization’s privacy policy. */
    private ?string $privacyUrl = null;
    
    /** @var bool|null $showDisplayNameNextToLogo Boolean that represents whether the administrator-supplied display name will be shown next to the logo image. */
    private ?bool $showDisplayNameNextToLogo = null;
    
    /** @var bool|null $showLogo Boolean that represents whether the administrator-supplied logo images are shown or not shown. */
    private ?bool $showLogo = null;
    
    /** @var bool|null $showNameNextToLogo Boolean that represents whether the administrator-supplied display name will be shown next to the logo image. */
    private ?bool $showNameNextToLogo = null;
    
    /** @var RgbColor|null $themeColor Primary theme color used in the Company Portal applications and web portal. */
    private ?RgbColor $themeColor = null;
    
    /**
     * Instantiates a new intuneBrand and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IntuneBrand
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IntuneBrand {
        return new IntuneBrand();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITEmailAddress(): ?string {
        return $this->contactITEmailAddress;
    }

    /**
     * Gets the contactITName property value. Name of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITName(): ?string {
        return $this->contactITName;
    }

    /**
     * Gets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITNotes(): ?string {
        return $this->contactITNotes;
    }

    /**
     * Gets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITPhoneNumber(): ?string {
        return $this->contactITPhoneNumber;
    }

    /**
     * Gets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     * @return MimeContent|null
    */
    public function getDarkBackgroundLogo(): ?MimeContent {
        return $this->darkBackgroundLogo;
    }

    /**
     * Gets the displayName property value. Company/organization name that is displayed to end users.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'contactITEmailAddress' => function (self $o, ParseNode $n) { $o->setContactITEmailAddress($n->getStringValue()); },
            'contactITName' => function (self $o, ParseNode $n) { $o->setContactITName($n->getStringValue()); },
            'contactITNotes' => function (self $o, ParseNode $n) { $o->setContactITNotes($n->getStringValue()); },
            'contactITPhoneNumber' => function (self $o, ParseNode $n) { $o->setContactITPhoneNumber($n->getStringValue()); },
            'darkBackgroundLogo' => function (self $o, ParseNode $n) { $o->setDarkBackgroundLogo($n->getObjectValue(MimeContent::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lightBackgroundLogo' => function (self $o, ParseNode $n) { $o->setLightBackgroundLogo($n->getObjectValue(MimeContent::class)); },
            'onlineSupportSiteName' => function (self $o, ParseNode $n) { $o->setOnlineSupportSiteName($n->getStringValue()); },
            'onlineSupportSiteUrl' => function (self $o, ParseNode $n) { $o->setOnlineSupportSiteUrl($n->getStringValue()); },
            'privacyUrl' => function (self $o, ParseNode $n) { $o->setPrivacyUrl($n->getStringValue()); },
            'showDisplayNameNextToLogo' => function (self $o, ParseNode $n) { $o->setShowDisplayNameNextToLogo($n->getBooleanValue()); },
            'showLogo' => function (self $o, ParseNode $n) { $o->setShowLogo($n->getBooleanValue()); },
            'showNameNextToLogo' => function (self $o, ParseNode $n) { $o->setShowNameNextToLogo($n->getBooleanValue()); },
            'themeColor' => function (self $o, ParseNode $n) { $o->setThemeColor($n->getObjectValue(RgbColor::class)); },
        ];
    }

    /**
     * Gets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     * @return MimeContent|null
    */
    public function getLightBackgroundLogo(): ?MimeContent {
        return $this->lightBackgroundLogo;
    }

    /**
     * Gets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteName(): ?string {
        return $this->onlineSupportSiteName;
    }

    /**
     * Gets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteUrl(): ?string {
        return $this->onlineSupportSiteUrl;
    }

    /**
     * Gets the privacyUrl property value. URL to the company/organization’s privacy policy.
     * @return string|null
    */
    public function getPrivacyUrl(): ?string {
        return $this->privacyUrl;
    }

    /**
     * Gets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowDisplayNameNextToLogo(): ?bool {
        return $this->showDisplayNameNextToLogo;
    }

    /**
     * Gets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     * @return bool|null
    */
    public function getShowLogo(): ?bool {
        return $this->showLogo;
    }

    /**
     * Gets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowNameNextToLogo(): ?bool {
        return $this->showNameNextToLogo;
    }

    /**
     * Gets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     * @return RgbColor|null
    */
    public function getThemeColor(): ?RgbColor {
        return $this->themeColor;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contactITEmailAddress', $this->contactITEmailAddress);
        $writer->writeStringValue('contactITName', $this->contactITName);
        $writer->writeStringValue('contactITNotes', $this->contactITNotes);
        $writer->writeStringValue('contactITPhoneNumber', $this->contactITPhoneNumber);
        $writer->writeObjectValue('darkBackgroundLogo', $this->darkBackgroundLogo);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('lightBackgroundLogo', $this->lightBackgroundLogo);
        $writer->writeStringValue('onlineSupportSiteName', $this->onlineSupportSiteName);
        $writer->writeStringValue('onlineSupportSiteUrl', $this->onlineSupportSiteUrl);
        $writer->writeStringValue('privacyUrl', $this->privacyUrl);
        $writer->writeBooleanValue('showDisplayNameNextToLogo', $this->showDisplayNameNextToLogo);
        $writer->writeBooleanValue('showLogo', $this->showLogo);
        $writer->writeBooleanValue('showNameNextToLogo', $this->showNameNextToLogo);
        $writer->writeObjectValue('themeColor', $this->themeColor);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITEmailAddress property.
    */
    public function setContactITEmailAddress(?string $value ): void {
        $this->contactITEmailAddress = $value;
    }

    /**
     * Sets the contactITName property value. Name of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITName property.
    */
    public function setContactITName(?string $value ): void {
        $this->contactITName = $value;
    }

    /**
     * Sets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITNotes property.
    */
    public function setContactITNotes(?string $value ): void {
        $this->contactITNotes = $value;
    }

    /**
     * Sets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITPhoneNumber property.
    */
    public function setContactITPhoneNumber(?string $value ): void {
        $this->contactITPhoneNumber = $value;
    }

    /**
     * Sets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     *  @param MimeContent|null $value Value to set for the darkBackgroundLogo property.
    */
    public function setDarkBackgroundLogo(?MimeContent $value ): void {
        $this->darkBackgroundLogo = $value;
    }

    /**
     * Sets the displayName property value. Company/organization name that is displayed to end users.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     *  @param MimeContent|null $value Value to set for the lightBackgroundLogo property.
    */
    public function setLightBackgroundLogo(?MimeContent $value ): void {
        $this->lightBackgroundLogo = $value;
    }

    /**
     * Sets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     *  @param string|null $value Value to set for the onlineSupportSiteName property.
    */
    public function setOnlineSupportSiteName(?string $value ): void {
        $this->onlineSupportSiteName = $value;
    }

    /**
     * Sets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     *  @param string|null $value Value to set for the onlineSupportSiteUrl property.
    */
    public function setOnlineSupportSiteUrl(?string $value ): void {
        $this->onlineSupportSiteUrl = $value;
    }

    /**
     * Sets the privacyUrl property value. URL to the company/organization’s privacy policy.
     *  @param string|null $value Value to set for the privacyUrl property.
    */
    public function setPrivacyUrl(?string $value ): void {
        $this->privacyUrl = $value;
    }

    /**
     * Sets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     *  @param bool|null $value Value to set for the showDisplayNameNextToLogo property.
    */
    public function setShowDisplayNameNextToLogo(?bool $value ): void {
        $this->showDisplayNameNextToLogo = $value;
    }

    /**
     * Sets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     *  @param bool|null $value Value to set for the showLogo property.
    */
    public function setShowLogo(?bool $value ): void {
        $this->showLogo = $value;
    }

    /**
     * Sets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     *  @param bool|null $value Value to set for the showNameNextToLogo property.
    */
    public function setShowNameNextToLogo(?bool $value ): void {
        $this->showNameNextToLogo = $value;
    }

    /**
     * Sets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     *  @param RgbColor|null $value Value to set for the themeColor property.
    */
    public function setThemeColor(?RgbColor $value ): void {
        $this->themeColor = $value;
    }

}
