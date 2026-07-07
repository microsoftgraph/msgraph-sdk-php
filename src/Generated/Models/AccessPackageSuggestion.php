<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageSuggestion extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessPackageSuggestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageSuggestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageSuggestion {
        return new AccessPackageSuggestion();
    }

    /**
     * Gets the accessPackage property value. The access package information for the suggested package.
     * @return AvailableAccessPackage|null
    */
    public function getAccessPackage(): ?AvailableAccessPackage {
        $val = $this->getBackingStore()->get('accessPackage');
        if (is_null($val) || $val instanceof AvailableAccessPackage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AvailableAccessPackage::class, 'createFromDiscriminatorValue'])),
            'reasons' => fn(ParseNode $n) => $o->setReasons($n->getCollectionOfObjectValues([AccessPackageSuggestionReason::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the reasons property value. A collection of reasons why this access package is being suggested to the user.
     * @return array<AccessPackageSuggestionReason>|null
    */
    public function getReasons(): ?array {
        $val = $this->getBackingStore()->get('reasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageSuggestionReason::class);
            /** @var array<AccessPackageSuggestionReason>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reasons'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->getAccessPackage());
        $writer->writeCollectionOfObjectValues('reasons', $this->getReasons());
    }

    /**
     * Sets the accessPackage property value. The access package information for the suggested package.
     * @param AvailableAccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AvailableAccessPackage $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the reasons property value. A collection of reasons why this access package is being suggested to the user.
     * @param array<AccessPackageSuggestionReason>|null $value Value to set for the reasons property.
    */
    public function setReasons(?array $value): void {
        $this->getBackingStore()->set('reasons', $value);
    }

}
