<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InferenceClassificationOverride extends Entity implements Parsable 
{
    /**
     * @var InferenceClassificationType|null $classifyAs Specifies how incoming messages from a specific sender should always be classified as. Possible values are: focused, other.
    */
    private ?InferenceClassificationType $classifyAs = null;
    
    /**
     * @var EmailAddress|null $senderEmailAddress The email address information of the sender for whom the override is created.
    */
    private ?EmailAddress $senderEmailAddress = null;
    
    /**
     * Instantiates a new inferenceClassificationOverride and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InferenceClassificationOverride
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InferenceClassificationOverride {
        return new InferenceClassificationOverride();
    }

    /**
     * Gets the classifyAs property value. Specifies how incoming messages from a specific sender should always be classified as. Possible values are: focused, other.
     * @return InferenceClassificationType|null
    */
    public function getClassifyAs(): ?InferenceClassificationType {
        return $this->classifyAs;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classifyAs' => function (ParseNode $n) use ($o) { $o->setClassifyAs($n->getEnumValue(InferenceClassificationType::class)); },
            'senderEmailAddress' => function (ParseNode $n) use ($o) { $o->setSenderEmailAddress($n->getObjectValue(array(EmailAddress::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the senderEmailAddress property value. The email address information of the sender for whom the override is created.
     * @return EmailAddress|null
    */
    public function getSenderEmailAddress(): ?EmailAddress {
        return $this->senderEmailAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classifyAs', $this->classifyAs);
        $writer->writeObjectValue('senderEmailAddress', $this->senderEmailAddress);
    }

    /**
     * Sets the classifyAs property value. Specifies how incoming messages from a specific sender should always be classified as. Possible values are: focused, other.
     *  @param InferenceClassificationType|null $value Value to set for the classifyAs property.
    */
    public function setClassifyAs(?InferenceClassificationType $value ): void {
        $this->classifyAs = $value;
    }

    /**
     * Sets the senderEmailAddress property value. The email address information of the sender for whom the override is created.
     *  @param EmailAddress|null $value Value to set for the senderEmailAddress property.
    */
    public function setSenderEmailAddress(?EmailAddress $value ): void {
        $this->senderEmailAddress = $value;
    }

}
