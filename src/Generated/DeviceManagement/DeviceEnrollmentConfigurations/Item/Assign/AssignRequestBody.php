<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations\Item\Assign;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\EnrollmentConfigurationAssignment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<EnrollmentConfigurationAssignment>|null $enrollmentConfigurationAssignments  */
    private ?array $enrollmentConfigurationAssignments = null;
    
    /**
     * Instantiates a new assignRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignRequestBody {
        return new AssignRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enrollmentConfigurationAssignments property value. 
     * @return array<EnrollmentConfigurationAssignment>|null
    */
    public function getEnrollmentConfigurationAssignments(): ?array {
        return $this->enrollmentConfigurationAssignments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'enrollmentConfigurationAssignments' => function (self $o, ParseNode $n) { $o->setEnrollmentConfigurationAssignments($n->getCollectionOfObjectValues(EnrollmentConfigurationAssignment::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('enrollmentConfigurationAssignments', $this->enrollmentConfigurationAssignments);
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
     * Sets the enrollmentConfigurationAssignments property value. 
     *  @param array<EnrollmentConfigurationAssignment>|null $value Value to set for the enrollmentConfigurationAssignments property.
    */
    public function setEnrollmentConfigurationAssignments(?array $value ): void {
        $this->enrollmentConfigurationAssignments = $value;
    }

}
