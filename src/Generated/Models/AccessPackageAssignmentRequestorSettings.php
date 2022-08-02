<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequestorSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowCustomAssignmentSchedule If false, the requestor is not permitted to include a schedule in their request.
    */
    private ?bool $allowCustomAssignmentSchedule = null;
    
    /**
     * @var bool|null $enableOnBehalfRequestorsToAddAccess If true, allows on-behalf-of requestors to create a request to add access for another principal.
    */
    private ?bool $enableOnBehalfRequestorsToAddAccess = null;
    
    /**
     * @var bool|null $enableOnBehalfRequestorsToRemoveAccess If true, allows on-behalf-of requestors to create a request to remove access for another principal.
    */
    private ?bool $enableOnBehalfRequestorsToRemoveAccess = null;
    
    /**
     * @var bool|null $enableOnBehalfRequestorsToUpdateAccess If true, allows on-behalf-of requestors to create a request to update access for another principal.
    */
    private ?bool $enableOnBehalfRequestorsToUpdateAccess = null;
    
    /**
     * @var bool|null $enableTargetsToSelfAddAccess If true, allows requestors to create a request to add access for themselves.
    */
    private ?bool $enableTargetsToSelfAddAccess = null;
    
    /**
     * @var bool|null $enableTargetsToSelfRemoveAccess If true, allows requestors to create a request to remove their access.
    */
    private ?bool $enableTargetsToSelfRemoveAccess = null;
    
    /**
     * @var bool|null $enableTargetsToSelfUpdateAccess If true, allows requestors to create a request to update their access.
    */
    private ?bool $enableTargetsToSelfUpdateAccess = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<SubjectSet>|null $onBehalfRequestors The principals who can request on-behalf-of others.
    */
    private ?array $onBehalfRequestors = null;
    
    /**
     * Instantiates a new accessPackageAssignmentRequestorSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.accessPackageAssignmentRequestorSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestorSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestorSettings {
        return new AccessPackageAssignmentRequestorSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowCustomAssignmentSchedule property value. If false, the requestor is not permitted to include a schedule in their request.
     * @return bool|null
    */
    public function getAllowCustomAssignmentSchedule(): ?bool {
        return $this->allowCustomAssignmentSchedule;
    }

    /**
     * Gets the enableOnBehalfRequestorsToAddAccess property value. If true, allows on-behalf-of requestors to create a request to add access for another principal.
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToAddAccess(): ?bool {
        return $this->enableOnBehalfRequestorsToAddAccess;
    }

    /**
     * Gets the enableOnBehalfRequestorsToRemoveAccess property value. If true, allows on-behalf-of requestors to create a request to remove access for another principal.
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToRemoveAccess(): ?bool {
        return $this->enableOnBehalfRequestorsToRemoveAccess;
    }

    /**
     * Gets the enableOnBehalfRequestorsToUpdateAccess property value. If true, allows on-behalf-of requestors to create a request to update access for another principal.
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToUpdateAccess(): ?bool {
        return $this->enableOnBehalfRequestorsToUpdateAccess;
    }

    /**
     * Gets the enableTargetsToSelfAddAccess property value. If true, allows requestors to create a request to add access for themselves.
     * @return bool|null
    */
    public function getEnableTargetsToSelfAddAccess(): ?bool {
        return $this->enableTargetsToSelfAddAccess;
    }

    /**
     * Gets the enableTargetsToSelfRemoveAccess property value. If true, allows requestors to create a request to remove their access.
     * @return bool|null
    */
    public function getEnableTargetsToSelfRemoveAccess(): ?bool {
        return $this->enableTargetsToSelfRemoveAccess;
    }

    /**
     * Gets the enableTargetsToSelfUpdateAccess property value. If true, allows requestors to create a request to update their access.
     * @return bool|null
    */
    public function getEnableTargetsToSelfUpdateAccess(): ?bool {
        return $this->enableTargetsToSelfUpdateAccess;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowCustomAssignmentSchedule' => function (ParseNode $n) use ($o) { $o->setAllowCustomAssignmentSchedule($n->getBooleanValue()); },
            'enableOnBehalfRequestorsToAddAccess' => function (ParseNode $n) use ($o) { $o->setEnableOnBehalfRequestorsToAddAccess($n->getBooleanValue()); },
            'enableOnBehalfRequestorsToRemoveAccess' => function (ParseNode $n) use ($o) { $o->setEnableOnBehalfRequestorsToRemoveAccess($n->getBooleanValue()); },
            'enableOnBehalfRequestorsToUpdateAccess' => function (ParseNode $n) use ($o) { $o->setEnableOnBehalfRequestorsToUpdateAccess($n->getBooleanValue()); },
            'enableTargetsToSelfAddAccess' => function (ParseNode $n) use ($o) { $o->setEnableTargetsToSelfAddAccess($n->getBooleanValue()); },
            'enableTargetsToSelfRemoveAccess' => function (ParseNode $n) use ($o) { $o->setEnableTargetsToSelfRemoveAccess($n->getBooleanValue()); },
            'enableTargetsToSelfUpdateAccess' => function (ParseNode $n) use ($o) { $o->setEnableTargetsToSelfUpdateAccess($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'onBehalfRequestors' => function (ParseNode $n) use ($o) { $o->setOnBehalfRequestors($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the onBehalfRequestors property value. The principals who can request on-behalf-of others.
     * @return array<SubjectSet>|null
    */
    public function getOnBehalfRequestors(): ?array {
        return $this->onBehalfRequestors;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCustomAssignmentSchedule', $this->allowCustomAssignmentSchedule);
        $writer->writeBooleanValue('enableOnBehalfRequestorsToAddAccess', $this->enableOnBehalfRequestorsToAddAccess);
        $writer->writeBooleanValue('enableOnBehalfRequestorsToRemoveAccess', $this->enableOnBehalfRequestorsToRemoveAccess);
        $writer->writeBooleanValue('enableOnBehalfRequestorsToUpdateAccess', $this->enableOnBehalfRequestorsToUpdateAccess);
        $writer->writeBooleanValue('enableTargetsToSelfAddAccess', $this->enableTargetsToSelfAddAccess);
        $writer->writeBooleanValue('enableTargetsToSelfRemoveAccess', $this->enableTargetsToSelfRemoveAccess);
        $writer->writeBooleanValue('enableTargetsToSelfUpdateAccess', $this->enableTargetsToSelfUpdateAccess);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('onBehalfRequestors', $this->onBehalfRequestors);
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
     * Sets the allowCustomAssignmentSchedule property value. If false, the requestor is not permitted to include a schedule in their request.
     *  @param bool|null $value Value to set for the allowCustomAssignmentSchedule property.
    */
    public function setAllowCustomAssignmentSchedule(?bool $value ): void {
        $this->allowCustomAssignmentSchedule = $value;
    }

    /**
     * Sets the enableOnBehalfRequestorsToAddAccess property value. If true, allows on-behalf-of requestors to create a request to add access for another principal.
     *  @param bool|null $value Value to set for the enableOnBehalfRequestorsToAddAccess property.
    */
    public function setEnableOnBehalfRequestorsToAddAccess(?bool $value ): void {
        $this->enableOnBehalfRequestorsToAddAccess = $value;
    }

    /**
     * Sets the enableOnBehalfRequestorsToRemoveAccess property value. If true, allows on-behalf-of requestors to create a request to remove access for another principal.
     *  @param bool|null $value Value to set for the enableOnBehalfRequestorsToRemoveAccess property.
    */
    public function setEnableOnBehalfRequestorsToRemoveAccess(?bool $value ): void {
        $this->enableOnBehalfRequestorsToRemoveAccess = $value;
    }

    /**
     * Sets the enableOnBehalfRequestorsToUpdateAccess property value. If true, allows on-behalf-of requestors to create a request to update access for another principal.
     *  @param bool|null $value Value to set for the enableOnBehalfRequestorsToUpdateAccess property.
    */
    public function setEnableOnBehalfRequestorsToUpdateAccess(?bool $value ): void {
        $this->enableOnBehalfRequestorsToUpdateAccess = $value;
    }

    /**
     * Sets the enableTargetsToSelfAddAccess property value. If true, allows requestors to create a request to add access for themselves.
     *  @param bool|null $value Value to set for the enableTargetsToSelfAddAccess property.
    */
    public function setEnableTargetsToSelfAddAccess(?bool $value ): void {
        $this->enableTargetsToSelfAddAccess = $value;
    }

    /**
     * Sets the enableTargetsToSelfRemoveAccess property value. If true, allows requestors to create a request to remove their access.
     *  @param bool|null $value Value to set for the enableTargetsToSelfRemoveAccess property.
    */
    public function setEnableTargetsToSelfRemoveAccess(?bool $value ): void {
        $this->enableTargetsToSelfRemoveAccess = $value;
    }

    /**
     * Sets the enableTargetsToSelfUpdateAccess property value. If true, allows requestors to create a request to update their access.
     *  @param bool|null $value Value to set for the enableTargetsToSelfUpdateAccess property.
    */
    public function setEnableTargetsToSelfUpdateAccess(?bool $value ): void {
        $this->enableTargetsToSelfUpdateAccess = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the onBehalfRequestors property value. The principals who can request on-behalf-of others.
     *  @param array<SubjectSet>|null $value Value to set for the onBehalfRequestors property.
    */
    public function setOnBehalfRequestors(?array $value ): void {
        $this->onBehalfRequestors = $value;
    }

}
