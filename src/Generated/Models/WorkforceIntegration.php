<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkforceIntegration extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new WorkforceIntegration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workforceIntegration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkforceIntegration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkforceIntegration {
        return new WorkforceIntegration();
    }

    /**
     * Gets the apiVersion property value. API version for the callback URL. Start with 1.
     * @return int|null
    */
    public function getApiVersion(): ?int {
        $val = $this->getBackingStore()->get('apiVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiVersion'");
    }

    /**
     * Gets the displayName property value. Name of the workforce integration.
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
     * Gets the eligibilityFilteringEnabledEntities property value. Support to view eligibility-filtered results. Possible values are: none, swapRequest, offerShiftRequest, unknownFutureValue, timeOffReason. Use the Prefer: include-unknown-enum-members request header to get the following members in this evolvable enum: timeOffReason.
     * @return EligibilityFilteringEnabledEntities|null
    */
    public function getEligibilityFilteringEnabledEntities(): ?EligibilityFilteringEnabledEntities {
        $val = $this->getBackingStore()->get('eligibilityFilteringEnabledEntities');
        if (is_null($val) || $val instanceof EligibilityFilteringEnabledEntities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eligibilityFilteringEnabledEntities'");
    }

    /**
     * Gets the encryption property value. The workforce integration encryption resource.
     * @return WorkforceIntegrationEncryption|null
    */
    public function getEncryption(): ?WorkforceIntegrationEncryption {
        $val = $this->getBackingStore()->get('encryption');
        if (is_null($val) || $val instanceof WorkforceIntegrationEncryption) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryption'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiVersion' => fn(ParseNode $n) => $o->setApiVersion($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'eligibilityFilteringEnabledEntities' => fn(ParseNode $n) => $o->setEligibilityFilteringEnabledEntities($n->getEnumValue(EligibilityFilteringEnabledEntities::class)),
            'encryption' => fn(ParseNode $n) => $o->setEncryption($n->getObjectValue([WorkforceIntegrationEncryption::class, 'createFromDiscriminatorValue'])),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'supportedEntities' => fn(ParseNode $n) => $o->setSupportedEntities($n->getEnumValue(WorkforceIntegrationSupportedEntities::class)),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isActive property value. Indicates whether this workforce integration is currently active and available.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Gets the supportedEntities property value. The Shifts entities supported for synchronous change notifications. Shifts call back to the provided URL when client changes occur to the entities specified in this property. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openShift, openShiftRequest, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard , timeOffReason , timeOff , timeOffRequest.
     * @return WorkforceIntegrationSupportedEntities|null
    */
    public function getSupportedEntities(): ?WorkforceIntegrationSupportedEntities {
        $val = $this->getBackingStore()->get('supportedEntities');
        if (is_null($val) || $val instanceof WorkforceIntegrationSupportedEntities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedEntities'");
    }

    /**
     * Gets the url property value. Workforce Integration URL for callbacks from the Shifts service.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('apiVersion', $this->getApiVersion());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('eligibilityFilteringEnabledEntities', $this->getEligibilityFilteringEnabledEntities());
        $writer->writeObjectValue('encryption', $this->getEncryption());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeEnumValue('supportedEntities', $this->getSupportedEntities());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the apiVersion property value. API version for the callback URL. Start with 1.
     * @param int|null $value Value to set for the apiVersion property.
    */
    public function setApiVersion(?int $value): void {
        $this->getBackingStore()->set('apiVersion', $value);
    }

    /**
     * Sets the displayName property value. Name of the workforce integration.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the eligibilityFilteringEnabledEntities property value. Support to view eligibility-filtered results. Possible values are: none, swapRequest, offerShiftRequest, unknownFutureValue, timeOffReason. Use the Prefer: include-unknown-enum-members request header to get the following members in this evolvable enum: timeOffReason.
     * @param EligibilityFilteringEnabledEntities|null $value Value to set for the eligibilityFilteringEnabledEntities property.
    */
    public function setEligibilityFilteringEnabledEntities(?EligibilityFilteringEnabledEntities $value): void {
        $this->getBackingStore()->set('eligibilityFilteringEnabledEntities', $value);
    }

    /**
     * Sets the encryption property value. The workforce integration encryption resource.
     * @param WorkforceIntegrationEncryption|null $value Value to set for the encryption property.
    */
    public function setEncryption(?WorkforceIntegrationEncryption $value): void {
        $this->getBackingStore()->set('encryption', $value);
    }

    /**
     * Sets the isActive property value. Indicates whether this workforce integration is currently active and available.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the supportedEntities property value. The Shifts entities supported for synchronous change notifications. Shifts call back to the provided URL when client changes occur to the entities specified in this property. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openShift, openShiftRequest, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard , timeOffReason , timeOff , timeOffRequest.
     * @param WorkforceIntegrationSupportedEntities|null $value Value to set for the supportedEntities property.
    */
    public function setSupportedEntities(?WorkforceIntegrationSupportedEntities $value): void {
        $this->getBackingStore()->set('supportedEntities', $value);
    }

    /**
     * Sets the url property value. Workforce Integration URL for callbacks from the Shifts service.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
