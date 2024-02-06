<?php

namespace Microsoft\Graph\Generated\Models\Partners\Billing;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Billing extends Entity implements Parsable 
{
    /**
     * Instantiates a new billing and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Billing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Billing {
        return new Billing();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'manifests' => fn(ParseNode $n) => $o->setManifests($n->getCollectionOfObjectValues([Manifest::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([Operation::class, 'createFromDiscriminatorValue'])),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getObjectValue([AzureUsage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the manifests property value. Represents metadata for the exported data.
     * @return array<Manifest>|null
    */
    public function getManifests(): ?array {
        $val = $this->getBackingStore()->get('manifests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Manifest::class);
            /** @var array<Manifest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manifests'");
    }

    /**
     * Gets the operations property value. Represents an operation to export the billing data of a partner.
     * @return array<Operation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Operation::class);
            /** @var array<Operation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the usage property value. The usage property
     * @return AzureUsage|null
    */
    public function getUsage(): ?AzureUsage {
        $val = $this->getBackingStore()->get('usage');
        if (is_null($val) || $val instanceof AzureUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('manifests', $this->getManifests());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeObjectValue('usage', $this->getUsage());
    }

    /**
     * Sets the manifests property value. Represents metadata for the exported data.
     * @param array<Manifest>|null $value Value to set for the manifests property.
    */
    public function setManifests(?array $value): void {
        $this->getBackingStore()->set('manifests', $value);
    }

    /**
     * Sets the operations property value. Represents an operation to export the billing data of a partner.
     * @param array<Operation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the usage property value. The usage property
     * @param AzureUsage|null $value Value to set for the usage property.
    */
    public function setUsage(?AzureUsage $value): void {
        $this->getBackingStore()->set('usage', $value);
    }

}
