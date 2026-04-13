<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EnumeratedScopes extends InheritableScopes implements Parsable 
{
    /**
     * Instantiates a new EnumeratedScopes and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.enumeratedScopes');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnumeratedScopes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnumeratedScopes {
        return new EnumeratedScopes();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scopes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setScopes($val);
            },
        ]);
    }

    /**
     * Gets the scopes property value. Required. Nonempty list of delegated permission scope identifiers published by the resource application to inherit. Entries must be unique and must not include any globally blocked scopes.
     * @return array<string>|null
    */
    public function getScopes(): ?array {
        $val = $this->getBackingStore()->get('scopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('scopes', $this->getScopes());
    }

    /**
     * Sets the scopes property value. Required. Nonempty list of delegated permission scope identifiers published by the resource application to inherit. Entries must be unique and must not include any globally blocked scopes.
     * @param array<string>|null $value Value to set for the scopes property.
    */
    public function setScopes(?array $value): void {
        $this->getBackingStore()->set('scopes', $value);
    }

}
