<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Privacy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<SubjectRightsRequest>|null $subjectRightsRequests The subjectRightsRequests property
    */
    private ?array $subjectRightsRequests = null;
    
    /**
     * Instantiates a new Privacy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Privacy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Privacy {
        return new Privacy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'subjectRightsRequests' => function (ParseNode $n) use ($o) { $o->setSubjectRightsRequests($n->getCollectionOfObjectValues(array(SubjectRightsRequest::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the subjectRightsRequests property value. The subjectRightsRequests property
     * @return array<SubjectRightsRequest>|null
    */
    public function getSubjectRightsRequests(): ?array {
        return $this->subjectRightsRequests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('subjectRightsRequests', $this->subjectRightsRequests);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the subjectRightsRequests property value. The subjectRightsRequests property
     *  @param array<SubjectRightsRequest>|null $value Value to set for the subjectRightsRequests property.
    */
    public function setSubjectRightsRequests(?array $value ): void {
        $this->subjectRightsRequests = $value;
    }

}
