<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecoveryJob extends RecoveryJobBase implements Parsable 
{
    /**
     * Instantiates a new RecoveryJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.entraRecoveryServices.recoveryJob');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecoveryJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecoveryJob {
        return new RecoveryJob();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'totalFailedChanges' => fn(ParseNode $n) => $o->setTotalFailedChanges($n->getIntegerValue()),
            'totalLinksModified' => fn(ParseNode $n) => $o->setTotalLinksModified($n->getIntegerValue()),
            'totalObjectsModified' => fn(ParseNode $n) => $o->setTotalObjectsModified($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the totalFailedChanges property value. The totalFailedChanges property
     * @return int|null
    */
    public function getTotalFailedChanges(): ?int {
        $val = $this->getBackingStore()->get('totalFailedChanges');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalFailedChanges'");
    }

    /**
     * Gets the totalLinksModified property value. The totalLinksModified property
     * @return int|null
    */
    public function getTotalLinksModified(): ?int {
        $val = $this->getBackingStore()->get('totalLinksModified');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLinksModified'");
    }

    /**
     * Gets the totalObjectsModified property value. The totalObjectsModified property
     * @return int|null
    */
    public function getTotalObjectsModified(): ?int {
        $val = $this->getBackingStore()->get('totalObjectsModified');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalObjectsModified'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('totalFailedChanges', $this->getTotalFailedChanges());
        $writer->writeIntegerValue('totalLinksModified', $this->getTotalLinksModified());
        $writer->writeIntegerValue('totalObjectsModified', $this->getTotalObjectsModified());
    }

    /**
     * Sets the totalFailedChanges property value. The totalFailedChanges property
     * @param int|null $value Value to set for the totalFailedChanges property.
    */
    public function setTotalFailedChanges(?int $value): void {
        $this->getBackingStore()->set('totalFailedChanges', $value);
    }

    /**
     * Sets the totalLinksModified property value. The totalLinksModified property
     * @param int|null $value Value to set for the totalLinksModified property.
    */
    public function setTotalLinksModified(?int $value): void {
        $this->getBackingStore()->set('totalLinksModified', $value);
    }

    /**
     * Sets the totalObjectsModified property value. The totalObjectsModified property
     * @param int|null $value Value to set for the totalObjectsModified property.
    */
    public function setTotalObjectsModified(?int $value): void {
        $this->getBackingStore()->set('totalObjectsModified', $value);
    }

}
