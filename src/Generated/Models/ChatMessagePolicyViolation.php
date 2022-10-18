<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessagePolicyViolation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ChatMessagePolicyViolationDlpActionTypes|null $dlpAction The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
    */
    private ?ChatMessagePolicyViolationDlpActionTypes $dlpAction = null;
    
    /**
     * @var string|null $justificationText Justification text provided by the sender of the message when overriding a policy violation.
    */
    private ?string $justificationText = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ChatMessagePolicyViolationPolicyTip|null $policyTip Information to display to the message sender about why the message was flagged as a violation.
    */
    private ?ChatMessagePolicyViolationPolicyTip $policyTip = null;
    
    /**
     * @var ChatMessagePolicyViolationUserActionTypes|null $userAction Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction is not required.
    */
    private ?ChatMessagePolicyViolationUserActionTypes $userAction = null;
    
    /**
     * @var ChatMessagePolicyViolationVerdictDetailsTypes|null $verdictDetails Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction had hidden it.AllowOverrideWithoutJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
    */
    private ?ChatMessagePolicyViolationVerdictDetailsTypes $verdictDetails = null;
    
    /**
     * Instantiates a new chatMessagePolicyViolation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.chatMessagePolicyViolation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessagePolicyViolation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessagePolicyViolation {
        return new ChatMessagePolicyViolation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dlpAction property value. The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
     * @return ChatMessagePolicyViolationDlpActionTypes|null
    */
    public function getDlpAction(): ?ChatMessagePolicyViolationDlpActionTypes {
        return $this->dlpAction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dlpAction' => fn(ParseNode $n) => $o->setDlpAction($n->getEnumValue(ChatMessagePolicyViolationDlpActionTypes::class)),
            'justificationText' => fn(ParseNode $n) => $o->setJustificationText($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyTip' => fn(ParseNode $n) => $o->setPolicyTip($n->getObjectValue([ChatMessagePolicyViolationPolicyTip::class, 'createFromDiscriminatorValue'])),
            'userAction' => fn(ParseNode $n) => $o->setUserAction($n->getEnumValue(ChatMessagePolicyViolationUserActionTypes::class)),
            'verdictDetails' => fn(ParseNode $n) => $o->setVerdictDetails($n->getEnumValue(ChatMessagePolicyViolationVerdictDetailsTypes::class)),
        ];
    }

    /**
     * Gets the justificationText property value. Justification text provided by the sender of the message when overriding a policy violation.
     * @return string|null
    */
    public function getJustificationText(): ?string {
        return $this->justificationText;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the policyTip property value. Information to display to the message sender about why the message was flagged as a violation.
     * @return ChatMessagePolicyViolationPolicyTip|null
    */
    public function getPolicyTip(): ?ChatMessagePolicyViolationPolicyTip {
        return $this->policyTip;
    }

    /**
     * Gets the userAction property value. Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction is not required.
     * @return ChatMessagePolicyViolationUserActionTypes|null
    */
    public function getUserAction(): ?ChatMessagePolicyViolationUserActionTypes {
        return $this->userAction;
    }

    /**
     * Gets the verdictDetails property value. Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction had hidden it.AllowOverrideWithoutJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
     * @return ChatMessagePolicyViolationVerdictDetailsTypes|null
    */
    public function getVerdictDetails(): ?ChatMessagePolicyViolationVerdictDetailsTypes {
        return $this->verdictDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dlpAction', $this->dlpAction);
        $writer->writeStringValue('justificationText', $this->justificationText);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('policyTip', $this->policyTip);
        $writer->writeEnumValue('userAction', $this->userAction);
        $writer->writeEnumValue('verdictDetails', $this->verdictDetails);
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
     * Sets the dlpAction property value. The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
     *  @param ChatMessagePolicyViolationDlpActionTypes|null $value Value to set for the dlpAction property.
    */
    public function setDlpAction(?ChatMessagePolicyViolationDlpActionTypes $value ): void {
        $this->dlpAction = $value;
    }

    /**
     * Sets the justificationText property value. Justification text provided by the sender of the message when overriding a policy violation.
     *  @param string|null $value Value to set for the justificationText property.
    */
    public function setJustificationText(?string $value ): void {
        $this->justificationText = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the policyTip property value. Information to display to the message sender about why the message was flagged as a violation.
     *  @param ChatMessagePolicyViolationPolicyTip|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?ChatMessagePolicyViolationPolicyTip $value ): void {
        $this->policyTip = $value;
    }

    /**
     * Sets the userAction property value. Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction is not required.
     *  @param ChatMessagePolicyViolationUserActionTypes|null $value Value to set for the userAction property.
    */
    public function setUserAction(?ChatMessagePolicyViolationUserActionTypes $value ): void {
        $this->userAction = $value;
    }

    /**
     * Sets the verdictDetails property value. Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction had hidden it.AllowOverrideWithoutJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to overriide the DLP violation and allow readers to see the message again if the dlpAction had hidden it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
     *  @param ChatMessagePolicyViolationVerdictDetailsTypes|null $value Value to set for the verdictDetails property.
    */
    public function setVerdictDetails(?ChatMessagePolicyViolationVerdictDetailsTypes $value ): void {
        $this->verdictDetails = $value;
    }

}
