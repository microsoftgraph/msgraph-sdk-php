<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewPrincipalScope extends AccessReviewScope implements Parsable 
{
    /**
     * Instantiates a new AccessReviewPrincipalScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewPrincipalScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewPrincipalScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewPrincipalScope {
        return new AccessReviewPrincipalScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getEnumValue(AccessReviewPrincipalScopeType::class)),
        ]);
    }

    /**
     * Gets the scopeType property value. The scopeType property
     * @return AccessReviewPrincipalScopeType|null
    */
    public function getScopeType(): ?AccessReviewPrincipalScopeType {
        $val = $this->getBackingStore()->get('scopeType');
        if (is_null($val) || $val instanceof AccessReviewPrincipalScopeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('scopeType', $this->getScopeType());
    }

    /**
     * Sets the scopeType property value. The scopeType property
     * @param AccessReviewPrincipalScopeType|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?AccessReviewPrincipalScopeType $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

}
