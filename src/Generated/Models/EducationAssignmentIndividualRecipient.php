<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationAssignmentIndividualRecipient extends EducationAssignmentRecipient implements Parsable 
{
    /**
     * @var array<string>|null $recipients A collection of IDs of the recipients.
    */
    private ?array $recipients = null;
    
    /**
     * Instantiates a new EducationAssignmentIndividualRecipient and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationAssignmentIndividualRecipient');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentIndividualRecipient
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentIndividualRecipient {
        return new EducationAssignmentIndividualRecipient();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the recipients property value. A collection of IDs of the recipients.
     * @return array<string>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('recipients', $this->recipients);
    }

    /**
     * Sets the recipients property value. A collection of IDs of the recipients.
     *  @param array<string>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

}
