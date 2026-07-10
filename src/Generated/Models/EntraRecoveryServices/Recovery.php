<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Recovery extends Entity implements Parsable 
{
    /**
     * Instantiates a new Recovery and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Recovery
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Recovery {
        return new Recovery();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'jobs' => fn(ParseNode $n) => $o->setJobs($n->getCollectionOfObjectValues([RecoveryJobBase::class, 'createFromDiscriminatorValue'])),
            'snapshots' => fn(ParseNode $n) => $o->setSnapshots($n->getCollectionOfObjectValues([Snapshot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the jobs property value. The jobs property
     * @return array<RecoveryJobBase>|null
    */
    public function getJobs(): ?array {
        $val = $this->getBackingStore()->get('jobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RecoveryJobBase::class);
            /** @var array<RecoveryJobBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobs'");
    }

    /**
     * Gets the snapshots property value. The snapshots property
     * @return array<Snapshot>|null
    */
    public function getSnapshots(): ?array {
        $val = $this->getBackingStore()->get('snapshots');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Snapshot::class);
            /** @var array<Snapshot>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'snapshots'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('jobs', $this->getJobs());
        $writer->writeCollectionOfObjectValues('snapshots', $this->getSnapshots());
    }

    /**
     * Sets the jobs property value. The jobs property
     * @param array<RecoveryJobBase>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value): void {
        $this->getBackingStore()->set('jobs', $value);
    }

    /**
     * Sets the snapshots property value. The snapshots property
     * @param array<Snapshot>|null $value Value to set for the snapshots property.
    */
    public function setSnapshots(?array $value): void {
        $this->getBackingStore()->set('snapshots', $value);
    }

}
