<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PasswordCredentialConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new passwordCredentialConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordCredentialConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasswordCredentialConfiguration {
        return new PasswordCredentialConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'maxLifetime' => fn(ParseNode $n) => $o->setMaxLifetime($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restrictForAppsCreatedAfterDateTime' => fn(ParseNode $n) => $o->setRestrictForAppsCreatedAfterDateTime($n->getDateTimeValue()),
            'restrictionType' => fn(ParseNode $n) => $o->setRestrictionType($n->getEnumValue(PasswordCredentialConfiguration_restrictionType::class)),
        ];
    }

    /**
     * Gets the maxLifetime property value. The maxLifetime property
     * @return DateInterval|null
    */
    public function getMaxLifetime(): ?DateInterval {
        $val = $this->getBackingStore()->get('maxLifetime');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxLifetime'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the restrictForAppsCreatedAfterDateTime property value. Enforces the policy for an app created on or after the enforcement date. For existing applications, the enforcement date would be back dated. To apply to all applications, enforcement datetime would be null.
     * @return DateTime|null
    */
    public function getRestrictForAppsCreatedAfterDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restrictForAppsCreatedAfterDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictForAppsCreatedAfterDateTime'");
    }

    /**
     * Gets the restrictionType property value. The type of restriction being applied. The possible values are: passwordAddition, passwordLifetime, symmetricKeyAddition, symmetricKeyLifetime,customPasswordAddition, unknownFutureValue. Each value of restrictionType can be used only once per policy.
     * @return PasswordCredentialConfiguration_restrictionType|null
    */
    public function getRestrictionType(): ?PasswordCredentialConfiguration_restrictionType {
        $val = $this->getBackingStore()->get('restrictionType');
        if (is_null($val) || $val instanceof PasswordCredentialConfiguration_restrictionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictionType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('maxLifetime', $this->getMaxLifetime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('restrictForAppsCreatedAfterDateTime', $this->getRestrictForAppsCreatedAfterDateTime());
        $writer->writeEnumValue('restrictionType', $this->getRestrictionType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the maxLifetime property value. The maxLifetime property
     * @param DateInterval|null $value Value to set for the maxLifetime property.
    */
    public function setMaxLifetime(?DateInterval $value): void {
        $this->getBackingStore()->set('maxLifetime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the restrictForAppsCreatedAfterDateTime property value. Enforces the policy for an app created on or after the enforcement date. For existing applications, the enforcement date would be back dated. To apply to all applications, enforcement datetime would be null.
     * @param DateTime|null $value Value to set for the restrictForAppsCreatedAfterDateTime property.
    */
    public function setRestrictForAppsCreatedAfterDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restrictForAppsCreatedAfterDateTime', $value);
    }

    /**
     * Sets the restrictionType property value. The type of restriction being applied. The possible values are: passwordAddition, passwordLifetime, symmetricKeyAddition, symmetricKeyLifetime,customPasswordAddition, unknownFutureValue. Each value of restrictionType can be used only once per policy.
     * @param PasswordCredentialConfiguration_restrictionType|null $value Value to set for the restrictionType property.
    */
    public function setRestrictionType(?PasswordCredentialConfiguration_restrictionType $value): void {
        $this->getBackingStore()->set('restrictionType', $value);
    }

}
