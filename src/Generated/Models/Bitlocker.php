<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Bitlocker extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new bitlocker and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Bitlocker
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Bitlocker {
        return new Bitlocker();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recoveryKeys' => fn(ParseNode $n) => $o->setRecoveryKeys($n->getCollectionOfObjectValues([BitlockerRecoveryKey::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the recoveryKeys property value. The recovery keys associated with the bitlocker entity.
     * @return array<BitlockerRecoveryKey>|null
    */
    public function getRecoveryKeys(): ?array {
        $val = $this->getBackingStore()->get('recoveryKeys');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BitlockerRecoveryKey::class);
            /** @var array<BitlockerRecoveryKey>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recoveryKeys'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('recoveryKeys', $this->getRecoveryKeys());
    }

    /**
     * Sets the recoveryKeys property value. The recovery keys associated with the bitlocker entity.
     * @param array<BitlockerRecoveryKey>|null $value Value to set for the recoveryKeys property.
    */
    public function setRecoveryKeys(?array $value): void {
        $this->getBackingStore()->set('recoveryKeys', $value);
    }

}
