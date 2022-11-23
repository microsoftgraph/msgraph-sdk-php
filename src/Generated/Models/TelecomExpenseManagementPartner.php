<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TelecomExpenseManagementPartner extends Entity implements Parsable 
{
    /**
     * Instantiates a new telecomExpenseManagementPartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TelecomExpenseManagementPartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TelecomExpenseManagementPartner {
        return new TelecomExpenseManagementPartner();
    }

    /**
     * Gets the appAuthorized property value. Whether the partner's AAD app has been authorized to access Intune.
     * @return bool|null
    */
    public function getAppAuthorized(): ?bool {
        return $this->getBackingStore()->get('appAuthorized');
    }

    /**
     * Gets the displayName property value. Display name of the TEM partner.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the enabled property value. Whether Intune's connection to the TEM service is currently enabled or disabled.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->getBackingStore()->get('enabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appAuthorized' => fn(ParseNode $n) => $o->setAppAuthorized($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'lastConnectionDateTime' => fn(ParseNode $n) => $o->setLastConnectionDateTime($n->getDateTimeValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Timestamp of the last request sent to Intune by the TEM partner.
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastConnectionDateTime');
    }

    /**
     * Gets the url property value. URL of the TEM partner's administrative control panel, where an administrator can configure their TEM service.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->getBackingStore()->get('url');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appAuthorized', $this->getAppAuthorized());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->getLastConnectionDateTime());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the appAuthorized property value. Whether the partner's AAD app has been authorized to access Intune.
     *  @param bool|null $value Value to set for the appAuthorized property.
    */
    public function setAppAuthorized(?bool $value): void {
        $this->getBackingStore()->set('appAuthorized', $value);
    }

    /**
     * Sets the displayName property value. Display name of the TEM partner.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enabled property value. Whether Intune's connection to the TEM service is currently enabled or disabled.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the lastConnectionDateTime property value. Timestamp of the last request sent to Intune by the TEM partner.
     *  @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastConnectionDateTime', $value);
    }

    /**
     * Sets the url property value. URL of the TEM partner's administrative control panel, where an administrator can configure their TEM service.
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
