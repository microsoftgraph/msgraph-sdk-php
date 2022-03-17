<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageApprovalStage implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateInterval|null $durationBeforeAutomaticDenial  */
    private ?DateInterval $durationBeforeAutomaticDenial = null;
    
    /** @var DateInterval|null $durationBeforeEscalation  */
    private ?DateInterval $durationBeforeEscalation = null;
    
    /** @var array<SubjectSet>|null $escalationApprovers  */
    private ?array $escalationApprovers = null;
    
    /** @var array<SubjectSet>|null $fallbackEscalationApprovers  */
    private ?array $fallbackEscalationApprovers = null;
    
    /** @var array<SubjectSet>|null $fallbackPrimaryApprovers  */
    private ?array $fallbackPrimaryApprovers = null;
    
    /** @var bool|null $isApproverJustificationRequired  */
    private ?bool $isApproverJustificationRequired = null;
    
    /** @var bool|null $isEscalationEnabled  */
    private ?bool $isEscalationEnabled = null;
    
    /** @var array<SubjectSet>|null $primaryApprovers  */
    private ?array $primaryApprovers = null;
    
    /**
     * Instantiates a new accessPackageApprovalStage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageApprovalStage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageApprovalStage {
        return new AccessPackageApprovalStage();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the durationBeforeAutomaticDenial property value. 
     * @return DateInterval|null
    */
    public function getDurationBeforeAutomaticDenial(): ?DateInterval {
        return $this->durationBeforeAutomaticDenial;
    }

    /**
     * Gets the durationBeforeEscalation property value. 
     * @return DateInterval|null
    */
    public function getDurationBeforeEscalation(): ?DateInterval {
        return $this->durationBeforeEscalation;
    }

    /**
     * Gets the escalationApprovers property value. 
     * @return array<SubjectSet>|null
    */
    public function getEscalationApprovers(): ?array {
        return $this->escalationApprovers;
    }

    /**
     * Gets the fallbackEscalationApprovers property value. 
     * @return array<SubjectSet>|null
    */
    public function getFallbackEscalationApprovers(): ?array {
        return $this->fallbackEscalationApprovers;
    }

    /**
     * Gets the fallbackPrimaryApprovers property value. 
     * @return array<SubjectSet>|null
    */
    public function getFallbackPrimaryApprovers(): ?array {
        return $this->fallbackPrimaryApprovers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'durationBeforeAutomaticDenial' => function (self $o, ParseNode $n) { $o->setDurationBeforeAutomaticDenial($n->getDateIntervalValue()); },
            'durationBeforeEscalation' => function (self $o, ParseNode $n) { $o->setDurationBeforeEscalation($n->getDateIntervalValue()); },
            'escalationApprovers' => function (self $o, ParseNode $n) { $o->setEscalationApprovers($n->getCollectionOfObjectValues(SubjectSet::class)); },
            'fallbackEscalationApprovers' => function (self $o, ParseNode $n) { $o->setFallbackEscalationApprovers($n->getCollectionOfObjectValues(SubjectSet::class)); },
            'fallbackPrimaryApprovers' => function (self $o, ParseNode $n) { $o->setFallbackPrimaryApprovers($n->getCollectionOfObjectValues(SubjectSet::class)); },
            'isApproverJustificationRequired' => function (self $o, ParseNode $n) { $o->setIsApproverJustificationRequired($n->getBooleanValue()); },
            'isEscalationEnabled' => function (self $o, ParseNode $n) { $o->setIsEscalationEnabled($n->getBooleanValue()); },
            'primaryApprovers' => function (self $o, ParseNode $n) { $o->setPrimaryApprovers($n->getCollectionOfObjectValues(SubjectSet::class)); },
        ];
    }

    /**
     * Gets the isApproverJustificationRequired property value. 
     * @return bool|null
    */
    public function getIsApproverJustificationRequired(): ?bool {
        return $this->isApproverJustificationRequired;
    }

    /**
     * Gets the isEscalationEnabled property value. 
     * @return bool|null
    */
    public function getIsEscalationEnabled(): ?bool {
        return $this->isEscalationEnabled;
    }

    /**
     * Gets the primaryApprovers property value. 
     * @return array<SubjectSet>|null
    */
    public function getPrimaryApprovers(): ?array {
        return $this->primaryApprovers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('durationBeforeAutomaticDenial', $this->durationBeforeAutomaticDenial);
        $writer->writeDateIntervalValue('durationBeforeEscalation', $this->durationBeforeEscalation);
        $writer->writeCollectionOfObjectValues('escalationApprovers', $this->escalationApprovers);
        $writer->writeCollectionOfObjectValues('fallbackEscalationApprovers', $this->fallbackEscalationApprovers);
        $writer->writeCollectionOfObjectValues('fallbackPrimaryApprovers', $this->fallbackPrimaryApprovers);
        $writer->writeBooleanValue('isApproverJustificationRequired', $this->isApproverJustificationRequired);
        $writer->writeBooleanValue('isEscalationEnabled', $this->isEscalationEnabled);
        $writer->writeCollectionOfObjectValues('primaryApprovers', $this->primaryApprovers);
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
     * Sets the durationBeforeAutomaticDenial property value. 
     *  @param DateInterval|null $value Value to set for the durationBeforeAutomaticDenial property.
    */
    public function setDurationBeforeAutomaticDenial(?DateInterval $value ): void {
        $this->durationBeforeAutomaticDenial = $value;
    }

    /**
     * Sets the durationBeforeEscalation property value. 
     *  @param DateInterval|null $value Value to set for the durationBeforeEscalation property.
    */
    public function setDurationBeforeEscalation(?DateInterval $value ): void {
        $this->durationBeforeEscalation = $value;
    }

    /**
     * Sets the escalationApprovers property value. 
     *  @param array<SubjectSet>|null $value Value to set for the escalationApprovers property.
    */
    public function setEscalationApprovers(?array $value ): void {
        $this->escalationApprovers = $value;
    }

    /**
     * Sets the fallbackEscalationApprovers property value. 
     *  @param array<SubjectSet>|null $value Value to set for the fallbackEscalationApprovers property.
    */
    public function setFallbackEscalationApprovers(?array $value ): void {
        $this->fallbackEscalationApprovers = $value;
    }

    /**
     * Sets the fallbackPrimaryApprovers property value. 
     *  @param array<SubjectSet>|null $value Value to set for the fallbackPrimaryApprovers property.
    */
    public function setFallbackPrimaryApprovers(?array $value ): void {
        $this->fallbackPrimaryApprovers = $value;
    }

    /**
     * Sets the isApproverJustificationRequired property value. 
     *  @param bool|null $value Value to set for the isApproverJustificationRequired property.
    */
    public function setIsApproverJustificationRequired(?bool $value ): void {
        $this->isApproverJustificationRequired = $value;
    }

    /**
     * Sets the isEscalationEnabled property value. 
     *  @param bool|null $value Value to set for the isEscalationEnabled property.
    */
    public function setIsEscalationEnabled(?bool $value ): void {
        $this->isEscalationEnabled = $value;
    }

    /**
     * Sets the primaryApprovers property value. 
     *  @param array<SubjectSet>|null $value Value to set for the primaryApprovers property.
    */
    public function setPrimaryApprovers(?array $value ): void {
        $this->primaryApprovers = $value;
    }

}
