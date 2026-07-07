<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Snapshot extends Entity implements Parsable 
{
    /**
     * Instantiates a new Snapshot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Snapshot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Snapshot {
        return new Snapshot();
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'recoveryJobs' => fn(ParseNode $n) => $o->setRecoveryJobs($n->getCollectionOfObjectValues([RecoveryJob::class, 'createFromDiscriminatorValue'])),
            'recoveryPreviewJobs' => fn(ParseNode $n) => $o->setRecoveryPreviewJobs($n->getCollectionOfObjectValues([RecoveryPreviewJob::class, 'createFromDiscriminatorValue'])),
            'totalChangedObjects' => fn(ParseNode $n) => $o->setTotalChangedObjects($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the recoveryJobs property value. The recoveryJobs property
     * @return array<RecoveryJob>|null
    */
    public function getRecoveryJobs(): ?array {
        $val = $this->getBackingStore()->get('recoveryJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RecoveryJob::class);
            /** @var array<RecoveryJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recoveryJobs'");
    }

    /**
     * Gets the recoveryPreviewJobs property value. The recoveryPreviewJobs property
     * @return array<RecoveryPreviewJob>|null
    */
    public function getRecoveryPreviewJobs(): ?array {
        $val = $this->getBackingStore()->get('recoveryPreviewJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RecoveryPreviewJob::class);
            /** @var array<RecoveryPreviewJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recoveryPreviewJobs'");
    }

    /**
     * Gets the totalChangedObjects property value. The totalChangedObjects property
     * @return int|null
    */
    public function getTotalChangedObjects(): ?int {
        $val = $this->getBackingStore()->get('totalChangedObjects');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalChangedObjects'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('recoveryJobs', $this->getRecoveryJobs());
        $writer->writeCollectionOfObjectValues('recoveryPreviewJobs', $this->getRecoveryPreviewJobs());
        $writer->writeIntegerValue('totalChangedObjects', $this->getTotalChangedObjects());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the recoveryJobs property value. The recoveryJobs property
     * @param array<RecoveryJob>|null $value Value to set for the recoveryJobs property.
    */
    public function setRecoveryJobs(?array $value): void {
        $this->getBackingStore()->set('recoveryJobs', $value);
    }

    /**
     * Sets the recoveryPreviewJobs property value. The recoveryPreviewJobs property
     * @param array<RecoveryPreviewJob>|null $value Value to set for the recoveryPreviewJobs property.
    */
    public function setRecoveryPreviewJobs(?array $value): void {
        $this->getBackingStore()->set('recoveryPreviewJobs', $value);
    }

    /**
     * Sets the totalChangedObjects property value. The totalChangedObjects property
     * @param int|null $value Value to set for the totalChangedObjects property.
    */
    public function setTotalChangedObjects(?int $value): void {
        $this->getBackingStore()->set('totalChangedObjects', $value);
    }

}
