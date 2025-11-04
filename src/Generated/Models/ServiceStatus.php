<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ServiceStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ServiceStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceStatus {
        return new ServiceStatus();
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
     * Gets the backupServiceConsumer property value. The type of consumer. The possible values are: unknown, firstparty, thirdparty, unknownFutureValue.
     * @return BackupServiceConsumer|null
    */
    public function getBackupServiceConsumer(): ?BackupServiceConsumer {
        $val = $this->getBackingStore()->get('backupServiceConsumer');
        if (is_null($val) || $val instanceof BackupServiceConsumer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'backupServiceConsumer'");
    }

    /**
     * Gets the disableReason property value. The reason the service is disabled. The possible values are: none, controllerServiceAppDeleted, invalidBillingProfile, userRequested, unknownFutureValue.
     * @return DisableReason|null
    */
    public function getDisableReason(): ?DisableReason {
        $val = $this->getBackingStore()->get('disableReason');
        if (is_null($val) || $val instanceof DisableReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableReason'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'backupServiceConsumer' => fn(ParseNode $n) => $o->setBackupServiceConsumer($n->getEnumValue(BackupServiceConsumer::class)),
            'disableReason' => fn(ParseNode $n) => $o->setDisableReason($n->getEnumValue(DisableReason::class)),
            'gracePeriodDateTime' => fn(ParseNode $n) => $o->setGracePeriodDateTime($n->getDateTimeValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restoreAllowedTillDateTime' => fn(ParseNode $n) => $o->setRestoreAllowedTillDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(BackupServiceStatus::class)),
        ];
    }

    /**
     * Gets the gracePeriodDateTime property value. The expiration time of the grace period.
     * @return DateTime|null
    */
    public function getGracePeriodDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('gracePeriodDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gracePeriodDateTime'");
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the person who last modified the entity.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Timestamp of the last modification of the entity.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Gets the restoreAllowedTillDateTime property value. The expiration time of the restoration allowed period.
     * @return DateTime|null
    */
    public function getRestoreAllowedTillDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restoreAllowedTillDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreAllowedTillDateTime'");
    }

    /**
     * Gets the status property value. Status of the service. This value indicates what capabilities can be used. The possible values are: disabled, enabled, protectionChangeLocked, restoreLocked, unknownFutureValue.
     * @return BackupServiceStatus|null
    */
    public function getStatus(): ?BackupServiceStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof BackupServiceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('backupServiceConsumer', $this->getBackupServiceConsumer());
        $writer->writeEnumValue('disableReason', $this->getDisableReason());
        $writer->writeDateTimeValue('gracePeriodDateTime', $this->getGracePeriodDateTime());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('restoreAllowedTillDateTime', $this->getRestoreAllowedTillDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the backupServiceConsumer property value. The type of consumer. The possible values are: unknown, firstparty, thirdparty, unknownFutureValue.
     * @param BackupServiceConsumer|null $value Value to set for the backupServiceConsumer property.
    */
    public function setBackupServiceConsumer(?BackupServiceConsumer $value): void {
        $this->getBackingStore()->set('backupServiceConsumer', $value);
    }

    /**
     * Sets the disableReason property value. The reason the service is disabled. The possible values are: none, controllerServiceAppDeleted, invalidBillingProfile, userRequested, unknownFutureValue.
     * @param DisableReason|null $value Value to set for the disableReason property.
    */
    public function setDisableReason(?DisableReason $value): void {
        $this->getBackingStore()->set('disableReason', $value);
    }

    /**
     * Sets the gracePeriodDateTime property value. The expiration time of the grace period.
     * @param DateTime|null $value Value to set for the gracePeriodDateTime property.
    */
    public function setGracePeriodDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('gracePeriodDateTime', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the person who last modified the entity.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp of the last modification of the entity.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the restoreAllowedTillDateTime property value. The expiration time of the restoration allowed period.
     * @param DateTime|null $value Value to set for the restoreAllowedTillDateTime property.
    */
    public function setRestoreAllowedTillDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restoreAllowedTillDateTime', $value);
    }

    /**
     * Sets the status property value. Status of the service. This value indicates what capabilities can be used. The possible values are: disabled, enabled, protectionChangeLocked, restoreLocked, unknownFutureValue.
     * @param BackupServiceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BackupServiceStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
