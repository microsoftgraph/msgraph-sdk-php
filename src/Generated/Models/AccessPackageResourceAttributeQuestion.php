<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceAttributeQuestion extends AccessPackageResourceAttributeSource implements Parsable 
{
    /**
     * Instantiates a new AccessPackageResourceAttributeQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageResourceAttributeQuestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceAttributeQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceAttributeQuestion {
        return new AccessPackageResourceAttributeQuestion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'question' => fn(ParseNode $n) => $o->setQuestion($n->getObjectValue([AccessPackageQuestion::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the question property value. The question property
     * @return AccessPackageQuestion|null
    */
    public function getQuestion(): ?AccessPackageQuestion {
        $val = $this->getBackingStore()->get('question');
        if (is_null($val) || $val instanceof AccessPackageQuestion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'question'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('question', $this->getQuestion());
    }

    /**
     * Sets the question property value. The question property
     * @param AccessPackageQuestion|null $value Value to set for the question property.
    */
    public function setQuestion(?AccessPackageQuestion $value): void {
        $this->getBackingStore()->set('question', $value);
    }

}
