<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChatMessagePolicyViolation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ChatMessagePolicyViolation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dlpAction property value. The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
     * @return ChatMessagePolicyViolationDlpActionTypes|null
    */
    public function getDlpAction(): ?ChatMessagePolicyViolationDlpActionTypes {
        $val = $this->getBackingStore()->get('dlpAction');
        if (is_null($val) || $val instanceof ChatMessagePolicyViolationDlpActionTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dlpAction'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('justificationText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justificationText'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the policyTip property value. Information to display to the message sender about why the message was flagged as a violation.
     * @return ChatMessagePolicyViolationPolicyTip|null
    */
    public function getPolicyTip(): ?ChatMessagePolicyViolationPolicyTip {
        $val = $this->getBackingStore()->get('policyTip');
        if (is_null($val) || $val instanceof ChatMessagePolicyViolationPolicyTip) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyTip'");
    }

    /**
     * Gets the userAction property value. Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction isn't required.
     * @return ChatMessagePolicyViolationUserActionTypes|null
    */
    public function getUserAction(): ?ChatMessagePolicyViolationUserActionTypes {
        $val = $this->getBackingStore()->get('userAction');
        if (is_null($val) || $val instanceof ChatMessagePolicyViolationUserActionTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAction'");
    }

    /**
     * Gets the verdictDetails property value. Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction hides it.AllowOverrideWithoutJustification -- Allows the sender to override the DLP violation and allow readers to see the message again if the dlpAction hides it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to override the DLP violation and allow readers to see the message again if the dlpAction hides it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
     * @return ChatMessagePolicyViolationVerdictDetailsTypes|null
    */
    public function getVerdictDetails(): ?ChatMessagePolicyViolationVerdictDetailsTypes {
        $val = $this->getBackingStore()->get('verdictDetails');
        if (is_null($val) || $val instanceof ChatMessagePolicyViolationVerdictDetailsTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verdictDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dlpAction', $this->getDlpAction());
        $writer->writeStringValue('justificationText', $this->getJustificationText());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('policyTip', $this->getPolicyTip());
        $writer->writeEnumValue('userAction', $this->getUserAction());
        $writer->writeEnumValue('verdictDetails', $this->getVerdictDetails());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dlpAction property value. The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
     * @param ChatMessagePolicyViolationDlpActionTypes|null $value Value to set for the dlpAction property.
    */
    public function setDlpAction(?ChatMessagePolicyViolationDlpActionTypes $value): void {
        $this->getBackingStore()->set('dlpAction', $value);
    }

    /**
     * Sets the justificationText property value. Justification text provided by the sender of the message when overriding a policy violation.
     * @param string|null $value Value to set for the justificationText property.
    */
    public function setJustificationText(?string $value): void {
        $this->getBackingStore()->set('justificationText', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyTip property value. Information to display to the message sender about why the message was flagged as a violation.
     * @param ChatMessagePolicyViolationPolicyTip|null $value Value to set for the policyTip property.
    */
    public function setPolicyTip(?ChatMessagePolicyViolationPolicyTip $value): void {
        $this->getBackingStore()->set('policyTip', $value);
    }

    /**
     * Sets the userAction property value. Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction isn't required.
     * @param ChatMessagePolicyViolationUserActionTypes|null $value Value to set for the userAction property.
    */
    public function setUserAction(?ChatMessagePolicyViolationUserActionTypes $value): void {
        $this->getBackingStore()->set('userAction', $value);
    }

    /**
     * Sets the verdictDetails property value. Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction hides it.AllowOverrideWithoutJustification -- Allows the sender to override the DLP violation and allow readers to see the message again if the dlpAction hides it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to override the DLP violation and allow readers to see the message again if the dlpAction hides it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
     * @param ChatMessagePolicyViolationVerdictDetailsTypes|null $value Value to set for the verdictDetails property.
    */
    public function setVerdictDetails(?ChatMessagePolicyViolationVerdictDetailsTypes $value): void {
        $this->getBackingStore()->set('verdictDetails', $value);
    }

}
