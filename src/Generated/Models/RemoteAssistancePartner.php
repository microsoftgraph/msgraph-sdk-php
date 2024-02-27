<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * RemoteAssistPartner resources represent the metadata and status of a given Remote Assistance partner service.
*/
class RemoteAssistancePartner extends Entity implements Parsable 
{
    /**
     * Instantiates a new RemoteAssistancePartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteAssistancePartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteAssistancePartner {
        return new RemoteAssistancePartner();
    }

    /**
     * Gets the displayName property value. Display name of the partner.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastConnectionDateTime' => fn(ParseNode $n) => $o->setLastConnectionDateTime($n->getDateTimeValue()),
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(RemoteAssistanceOnboardingStatus::class)),
            'onboardingUrl' => fn(ParseNode $n) => $o->setOnboardingUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Timestamp of the last request sent to Intune by the TEM partner.
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastConnectionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastConnectionDateTime'");
    }

    /**
     * Gets the onboardingStatus property value. The current TeamViewer connector status
     * @return RemoteAssistanceOnboardingStatus|null
    */
    public function getOnboardingStatus(): ?RemoteAssistanceOnboardingStatus {
        $val = $this->getBackingStore()->get('onboardingStatus');
        if (is_null($val) || $val instanceof RemoteAssistanceOnboardingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onboardingStatus'");
    }

    /**
     * Gets the onboardingUrl property value. URL of the partner's onboarding portal, where an administrator can configure their Remote Assistance service.
     * @return string|null
    */
    public function getOnboardingUrl(): ?string {
        $val = $this->getBackingStore()->get('onboardingUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onboardingUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->getLastConnectionDateTime());
        $writer->writeEnumValue('onboardingStatus', $this->getOnboardingStatus());
        $writer->writeStringValue('onboardingUrl', $this->getOnboardingUrl());
    }

    /**
     * Sets the displayName property value. Display name of the partner.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastConnectionDateTime property value. Timestamp of the last request sent to Intune by the TEM partner.
     * @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastConnectionDateTime', $value);
    }

    /**
     * Sets the onboardingStatus property value. The current TeamViewer connector status
     * @param RemoteAssistanceOnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?RemoteAssistanceOnboardingStatus $value): void {
        $this->getBackingStore()->set('onboardingStatus', $value);
    }

    /**
     * Sets the onboardingUrl property value. URL of the partner's onboarding portal, where an administrator can configure their Remote Assistance service.
     * @param string|null $value Value to set for the onboardingUrl property.
    */
    public function setOnboardingUrl(?string $value): void {
        $this->getBackingStore()->set('onboardingUrl', $value);
    }

}
