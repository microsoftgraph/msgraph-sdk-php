<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods\Item\Device\RegisteredOwners\Item\User\GetMailTips;

use Microsoft\Graph\Generated\Models\MailTipsType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetMailTipsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $EmailAddresses The EmailAddresses property
    */
    private ?array $emailAddresses = null;
    
    /**
     * @var MailTipsType|null $MailTipsOptions The MailTipsOptions property
    */
    private ?MailTipsType $mailTipsOptions = null;
    
    /**
     * Instantiates a new getMailTipsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetMailTipsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetMailTipsPostRequestBody {
        return new GetMailTipsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the emailAddresses property value. The EmailAddresses property
     * @return array<string>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->emailAddresses;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailAddresses' => function (ParseNode $n) use ($o) { $o->setEmailAddresses($n->getCollectionOfPrimitiveValues()); },
            'mailTipsOptions' => function (ParseNode $n) use ($o) { $o->setMailTipsOptions($n->getEnumValue(MailTipsType::class)); },
        ];
    }

    /**
     * Gets the mailTipsOptions property value. The MailTipsOptions property
     * @return MailTipsType|null
    */
    public function getMailTipsOptions(): ?MailTipsType {
        return $this->mailTipsOptions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('emailAddresses', $this->emailAddresses);
        $writer->writeEnumValue('mailTipsOptions', $this->mailTipsOptions);
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
     * Sets the emailAddresses property value. The EmailAddresses property
     *  @param array<string>|null $value Value to set for the EmailAddresses property.
    */
    public function setEmailAddresses(?array $value ): void {
        $this->emailAddresses = $value;
    }

    /**
     * Sets the mailTipsOptions property value. The MailTipsOptions property
     *  @param MailTipsType|null $value Value to set for the MailTipsOptions property.
    */
    public function setMailTipsOptions(?MailTipsType $value ): void {
        $this->mailTipsOptions = $value;
    }

}
