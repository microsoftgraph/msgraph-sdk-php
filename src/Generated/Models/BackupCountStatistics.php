<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BackupCountStatistics implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new BackupCountStatistics and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BackupCountStatistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BackupCountStatistics {
        return new BackupCountStatistics();
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
            'lastComputedDateTime' => fn(ParseNode $n) => $o->setLastComputedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offboardRequested' => fn(ParseNode $n) => $o->setOffboardRequested($n->getIntegerValue()),
            'protectedCompleted' => fn(ParseNode $n) => $o->setProtectedCompleted($n->getIntegerValue()),
            'protectedFailed' => fn(ParseNode $n) => $o->setProtectedFailed($n->getIntegerValue()),
            'protectedInProgress' => fn(ParseNode $n) => $o->setProtectedInProgress($n->getIntegerValue()),
            'removed' => fn(ParseNode $n) => $o->setRemoved($n->getIntegerValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
            'unprotectedCompleted' => fn(ParseNode $n) => $o->setUnprotectedCompleted($n->getIntegerValue()),
            'unprotectedFailed' => fn(ParseNode $n) => $o->setUnprotectedFailed($n->getIntegerValue()),
            'unprotectedInProgress' => fn(ParseNode $n) => $o->setUnprotectedInProgress($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lastComputedDateTime property value. The date and time when this metric was calculated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastComputedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastComputedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastComputedDateTime'");
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
     * Gets the offboardRequested property value. The count of artifacts in offboardRequested state. This metric captures artifacts in protection‑unit–level offboarding and artifacts offboarded due to an unhealthy billing profile.
     * @return int|null
    */
    public function getOffboardRequested(): ?int {
        $val = $this->getBackingStore()->get('offboardRequested');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offboardRequested'");
    }

    /**
     * Gets the protectedCompleted property value. The count of artifacts in protected state.
     * @return int|null
    */
    public function getProtectedCompleted(): ?int {
        $val = $this->getBackingStore()->get('protectedCompleted');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectedCompleted'");
    }

    /**
     * Gets the protectedFailed property value. The count of artifacts whose protection was attempted but failed. These artifacts typically have unprotected as their status.
     * @return int|null
    */
    public function getProtectedFailed(): ?int {
        $val = $this->getBackingStore()->get('protectedFailed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectedFailed'");
    }

    /**
     * Gets the protectedInProgress property value. The count of artifacts whose protection attempt is currently in progress. This metric applies to artifacts for which the process to start or resume taking backups is still required.
     * @return int|null
    */
    public function getProtectedInProgress(): ?int {
        $val = $this->getBackingStore()->get('protectedInProgress');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectedInProgress'");
    }

    /**
     * Gets the removed property value. The count of artifacts not associated with any policy. This property is always null for a policy-level report. Nullable.
     * @return int|null
    */
    public function getRemoved(): ?int {
        $val = $this->getBackingStore()->get('removed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removed'");
    }

    /**
     * Gets the total property value. The count of artifacts in the specified entity. The currently supported entity is a backup policy.
     * @return int|null
    */
    public function getTotal(): ?int {
        $val = $this->getBackingStore()->get('total');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'total'");
    }

    /**
     * Gets the unprotectedCompleted property value. The count of artifacts that are no longer actively protected. These artifacts have historical restore points, but no new backups are taken.
     * @return int|null
    */
    public function getUnprotectedCompleted(): ?int {
        $val = $this->getBackingStore()->get('unprotectedCompleted');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unprotectedCompleted'");
    }

    /**
     * Gets the unprotectedFailed property value. The count of artifacts for which unprotection was attempted but didn't complete. These artifacts are typically in the protected state.
     * @return int|null
    */
    public function getUnprotectedFailed(): ?int {
        $val = $this->getBackingStore()->get('unprotectedFailed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unprotectedFailed'");
    }

    /**
     * Gets the unprotectedInProgress property value. The count of artifacts for which unprotection is currently in progress.
     * @return int|null
    */
    public function getUnprotectedInProgress(): ?int {
        $val = $this->getBackingStore()->get('unprotectedInProgress');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unprotectedInProgress'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastComputedDateTime', $this->getLastComputedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('offboardRequested', $this->getOffboardRequested());
        $writer->writeIntegerValue('protectedCompleted', $this->getProtectedCompleted());
        $writer->writeIntegerValue('protectedFailed', $this->getProtectedFailed());
        $writer->writeIntegerValue('protectedInProgress', $this->getProtectedInProgress());
        $writer->writeIntegerValue('removed', $this->getRemoved());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeIntegerValue('unprotectedCompleted', $this->getUnprotectedCompleted());
        $writer->writeIntegerValue('unprotectedFailed', $this->getUnprotectedFailed());
        $writer->writeIntegerValue('unprotectedInProgress', $this->getUnprotectedInProgress());
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
     * Sets the lastComputedDateTime property value. The date and time when this metric was calculated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastComputedDateTime property.
    */
    public function setLastComputedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastComputedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offboardRequested property value. The count of artifacts in offboardRequested state. This metric captures artifacts in protection‑unit–level offboarding and artifacts offboarded due to an unhealthy billing profile.
     * @param int|null $value Value to set for the offboardRequested property.
    */
    public function setOffboardRequested(?int $value): void {
        $this->getBackingStore()->set('offboardRequested', $value);
    }

    /**
     * Sets the protectedCompleted property value. The count of artifacts in protected state.
     * @param int|null $value Value to set for the protectedCompleted property.
    */
    public function setProtectedCompleted(?int $value): void {
        $this->getBackingStore()->set('protectedCompleted', $value);
    }

    /**
     * Sets the protectedFailed property value. The count of artifacts whose protection was attempted but failed. These artifacts typically have unprotected as their status.
     * @param int|null $value Value to set for the protectedFailed property.
    */
    public function setProtectedFailed(?int $value): void {
        $this->getBackingStore()->set('protectedFailed', $value);
    }

    /**
     * Sets the protectedInProgress property value. The count of artifacts whose protection attempt is currently in progress. This metric applies to artifacts for which the process to start or resume taking backups is still required.
     * @param int|null $value Value to set for the protectedInProgress property.
    */
    public function setProtectedInProgress(?int $value): void {
        $this->getBackingStore()->set('protectedInProgress', $value);
    }

    /**
     * Sets the removed property value. The count of artifacts not associated with any policy. This property is always null for a policy-level report. Nullable.
     * @param int|null $value Value to set for the removed property.
    */
    public function setRemoved(?int $value): void {
        $this->getBackingStore()->set('removed', $value);
    }

    /**
     * Sets the total property value. The count of artifacts in the specified entity. The currently supported entity is a backup policy.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->getBackingStore()->set('total', $value);
    }

    /**
     * Sets the unprotectedCompleted property value. The count of artifacts that are no longer actively protected. These artifacts have historical restore points, but no new backups are taken.
     * @param int|null $value Value to set for the unprotectedCompleted property.
    */
    public function setUnprotectedCompleted(?int $value): void {
        $this->getBackingStore()->set('unprotectedCompleted', $value);
    }

    /**
     * Sets the unprotectedFailed property value. The count of artifacts for which unprotection was attempted but didn't complete. These artifacts are typically in the protected state.
     * @param int|null $value Value to set for the unprotectedFailed property.
    */
    public function setUnprotectedFailed(?int $value): void {
        $this->getBackingStore()->set('unprotectedFailed', $value);
    }

    /**
     * Sets the unprotectedInProgress property value. The count of artifacts for which unprotection is currently in progress.
     * @param int|null $value Value to set for the unprotectedInProgress property.
    */
    public function setUnprotectedInProgress(?int $value): void {
        $this->getBackingStore()->set('unprotectedInProgress', $value);
    }

}
