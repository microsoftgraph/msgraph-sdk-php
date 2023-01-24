<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
*/
class IntuneBrand implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new intuneBrand and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IntuneBrand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IntuneBrand {
        return new IntuneBrand();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITEmailAddress(): ?string {
        return $this->getBackingStore()->get('contactITEmailAddress');
    }

    /**
     * Gets the contactITName property value. Name of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITName(): ?string {
        return $this->getBackingStore()->get('contactITName');
    }

    /**
     * Gets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITNotes(): ?string {
        return $this->getBackingStore()->get('contactITNotes');
    }

    /**
     * Gets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITPhoneNumber(): ?string {
        return $this->getBackingStore()->get('contactITPhoneNumber');
    }

    /**
     * Gets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     * @return MimeContent|null
    */
    public function getDarkBackgroundLogo(): ?MimeContent {
        return $this->getBackingStore()->get('darkBackgroundLogo');
    }

    /**
     * Gets the displayName property value. Company/organization name that is displayed to end users.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contactITEmailAddress' => fn(ParseNode $n) => $o->setContactITEmailAddress($n->getStringValue()),
            'contactITName' => fn(ParseNode $n) => $o->setContactITName($n->getStringValue()),
            'contactITNotes' => fn(ParseNode $n) => $o->setContactITNotes($n->getStringValue()),
            'contactITPhoneNumber' => fn(ParseNode $n) => $o->setContactITPhoneNumber($n->getStringValue()),
            'darkBackgroundLogo' => fn(ParseNode $n) => $o->setDarkBackgroundLogo($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lightBackgroundLogo' => fn(ParseNode $n) => $o->setLightBackgroundLogo($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onlineSupportSiteName' => fn(ParseNode $n) => $o->setOnlineSupportSiteName($n->getStringValue()),
            'onlineSupportSiteUrl' => fn(ParseNode $n) => $o->setOnlineSupportSiteUrl($n->getStringValue()),
            'privacyUrl' => fn(ParseNode $n) => $o->setPrivacyUrl($n->getStringValue()),
            'showDisplayNameNextToLogo' => fn(ParseNode $n) => $o->setShowDisplayNameNextToLogo($n->getBooleanValue()),
            'showLogo' => fn(ParseNode $n) => $o->setShowLogo($n->getBooleanValue()),
            'showNameNextToLogo' => fn(ParseNode $n) => $o->setShowNameNextToLogo($n->getBooleanValue()),
            'themeColor' => fn(ParseNode $n) => $o->setThemeColor($n->getObjectValue([RgbColor::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     * @return MimeContent|null
    */
    public function getLightBackgroundLogo(): ?MimeContent {
        return $this->getBackingStore()->get('lightBackgroundLogo');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteName(): ?string {
        return $this->getBackingStore()->get('onlineSupportSiteName');
    }

    /**
     * Gets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteUrl(): ?string {
        return $this->getBackingStore()->get('onlineSupportSiteUrl');
    }

    /**
     * Gets the privacyUrl property value. URL to the company/organization’s privacy policy.
     * @return string|null
    */
    public function getPrivacyUrl(): ?string {
        return $this->getBackingStore()->get('privacyUrl');
    }

    /**
     * Gets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowDisplayNameNextToLogo(): ?bool {
        return $this->getBackingStore()->get('showDisplayNameNextToLogo');
    }

    /**
     * Gets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     * @return bool|null
    */
    public function getShowLogo(): ?bool {
        return $this->getBackingStore()->get('showLogo');
    }

    /**
     * Gets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowNameNextToLogo(): ?bool {
        return $this->getBackingStore()->get('showNameNextToLogo');
    }

    /**
     * Gets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     * @return RgbColor|null
    */
    public function getThemeColor(): ?RgbColor {
        return $this->getBackingStore()->get('themeColor');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contactITEmailAddress', $this->getContactITEmailAddress());
        $writer->writeStringValue('contactITName', $this->getContactITName());
        $writer->writeStringValue('contactITNotes', $this->getContactITNotes());
        $writer->writeStringValue('contactITPhoneNumber', $this->getContactITPhoneNumber());
        $writer->writeObjectValue('darkBackgroundLogo', $this->getDarkBackgroundLogo());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('lightBackgroundLogo', $this->getLightBackgroundLogo());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('onlineSupportSiteName', $this->getOnlineSupportSiteName());
        $writer->writeStringValue('onlineSupportSiteUrl', $this->getOnlineSupportSiteUrl());
        $writer->writeStringValue('privacyUrl', $this->getPrivacyUrl());
        $writer->writeBooleanValue('showDisplayNameNextToLogo', $this->getShowDisplayNameNextToLogo());
        $writer->writeBooleanValue('showLogo', $this->getShowLogo());
        $writer->writeBooleanValue('showNameNextToLogo', $this->getShowNameNextToLogo());
        $writer->writeObjectValue('themeColor', $this->getThemeColor());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     * @param string|null $value Value to set for the contactITEmailAddress property.
    */
    public function setContactITEmailAddress(?string $value): void {
        $this->getBackingStore()->set('contactITEmailAddress', $value);
    }

    /**
     * Sets the contactITName property value. Name of the person/organization responsible for IT support.
     * @param string|null $value Value to set for the contactITName property.
    */
    public function setContactITName(?string $value): void {
        $this->getBackingStore()->set('contactITName', $value);
    }

    /**
     * Sets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     * @param string|null $value Value to set for the contactITNotes property.
    */
    public function setContactITNotes(?string $value): void {
        $this->getBackingStore()->set('contactITNotes', $value);
    }

    /**
     * Sets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     * @param string|null $value Value to set for the contactITPhoneNumber property.
    */
    public function setContactITPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('contactITPhoneNumber', $value);
    }

    /**
     * Sets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     * @param MimeContent|null $value Value to set for the darkBackgroundLogo property.
    */
    public function setDarkBackgroundLogo(?MimeContent $value): void {
        $this->getBackingStore()->set('darkBackgroundLogo', $value);
    }

    /**
     * Sets the displayName property value. Company/organization name that is displayed to end users.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     * @param MimeContent|null $value Value to set for the lightBackgroundLogo property.
    */
    public function setLightBackgroundLogo(?MimeContent $value): void {
        $this->getBackingStore()->set('lightBackgroundLogo', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     * @param string|null $value Value to set for the onlineSupportSiteName property.
    */
    public function setOnlineSupportSiteName(?string $value): void {
        $this->getBackingStore()->set('onlineSupportSiteName', $value);
    }

    /**
     * Sets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     * @param string|null $value Value to set for the onlineSupportSiteUrl property.
    */
    public function setOnlineSupportSiteUrl(?string $value): void {
        $this->getBackingStore()->set('onlineSupportSiteUrl', $value);
    }

    /**
     * Sets the privacyUrl property value. URL to the company/organization’s privacy policy.
     * @param string|null $value Value to set for the privacyUrl property.
    */
    public function setPrivacyUrl(?string $value): void {
        $this->getBackingStore()->set('privacyUrl', $value);
    }

    /**
     * Sets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @param bool|null $value Value to set for the showDisplayNameNextToLogo property.
    */
    public function setShowDisplayNameNextToLogo(?bool $value): void {
        $this->getBackingStore()->set('showDisplayNameNextToLogo', $value);
    }

    /**
     * Sets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     * @param bool|null $value Value to set for the showLogo property.
    */
    public function setShowLogo(?bool $value): void {
        $this->getBackingStore()->set('showLogo', $value);
    }

    /**
     * Sets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @param bool|null $value Value to set for the showNameNextToLogo property.
    */
    public function setShowNameNextToLogo(?bool $value): void {
        $this->getBackingStore()->set('showNameNextToLogo', $value);
    }

    /**
     * Sets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     * @param RgbColor|null $value Value to set for the themeColor property.
    */
    public function setThemeColor(?RgbColor $value): void {
        $this->getBackingStore()->set('themeColor', $value);
    }

}
