<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppliedConditionalAccessPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Name of the conditional access policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<string>|null $enforcedGrantControls Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
    */
    private ?array $enforcedGrantControls = null;
    
    /**
     * @var array<string>|null $enforcedSessionControls Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
    */
    private ?array $enforcedSessionControls = null;
    
    /**
     * @var string|null $id Identifier of the conditional access policy.
    */
    private ?string $id = null;
    
    /**
     * @var AppliedConditionalAccessPolicyResult|null $result Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
    */
    private ?AppliedConditionalAccessPolicyResult $result = null;
    
    /**
     * Instantiates a new appliedConditionalAccessPolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppliedConditionalAccessPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppliedConditionalAccessPolicy {
        return new AppliedConditionalAccessPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Name of the conditional access policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enforcedGrantControls property value. Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
     * @return array<string>|null
    */
    public function getEnforcedGrantControls(): ?array {
        return $this->enforcedGrantControls;
    }

    /**
     * Gets the enforcedSessionControls property value. Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
     * @return array<string>|null
    */
    public function getEnforcedSessionControls(): ?array {
        return $this->enforcedSessionControls;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enforcedGrantControls' => function (ParseNode $n) use ($o) { $o->setEnforcedGrantControls($n->getCollectionOfPrimitiveValues()); },
            'enforcedSessionControls' => function (ParseNode $n) use ($o) { $o->setEnforcedSessionControls($n->getCollectionOfPrimitiveValues()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'result' => function (ParseNode $n) use ($o) { $o->setResult($n->getEnumValue(AppliedConditionalAccessPolicyResult::class)); },
        ];
    }

    /**
     * Gets the id property value. Identifier of the conditional access policy.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the result property value. Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     * @return AppliedConditionalAccessPolicyResult|null
    */
    public function getResult(): ?AppliedConditionalAccessPolicyResult {
        return $this->result;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('enforcedGrantControls', $this->enforcedGrantControls);
        $writer->writeCollectionOfPrimitiveValues('enforcedSessionControls', $this->enforcedSessionControls);
        $writer->writeStringValue('id', $this->id);
        $writer->writeEnumValue('result', $this->result);
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
     * Sets the displayName property value. Name of the conditional access policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enforcedGrantControls property value. Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
     *  @param array<string>|null $value Value to set for the enforcedGrantControls property.
    */
    public function setEnforcedGrantControls(?array $value ): void {
        $this->enforcedGrantControls = $value;
    }

    /**
     * Sets the enforcedSessionControls property value. Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
     *  @param array<string>|null $value Value to set for the enforcedSessionControls property.
    */
    public function setEnforcedSessionControls(?array $value ): void {
        $this->enforcedSessionControls = $value;
    }

    /**
     * Sets the id property value. Identifier of the conditional access policy.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the result property value. Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     *  @param AppliedConditionalAccessPolicyResult|null $value Value to set for the result property.
    */
    public function setResult(?AppliedConditionalAccessPolicyResult $value ): void {
        $this->result = $value;
    }

}
