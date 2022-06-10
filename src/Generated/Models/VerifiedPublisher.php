<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VerifiedPublisher implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DateTime|null $addedDateTime The timestamp when the verified publisher was first added or most recently updated.
    */
    private ?DateTime $addedDateTime = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The verified publisher name from the app publisher's Microsoft Partner Network (MPN) account.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $verifiedPublisherId The ID of the verified publisher from the app publisher's Partner Center account.
    */
    private ?string $verifiedPublisherId = null;
    
    /**
     * Instantiates a new verifiedPublisher and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiedPublisher
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifiedPublisher {
        return new VerifiedPublisher();
    }

    /**
     * Gets the addedDateTime property value. The timestamp when the verified publisher was first added or most recently updated.
     * @return DateTime|null
    */
    public function getAddedDateTime(): ?DateTime {
        return $this->addedDateTime;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The verified publisher name from the app publisher's Microsoft Partner Network (MPN) account.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addedDateTime' => function (ParseNode $n) use ($o) { $o->setAddedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'verifiedPublisherId' => function (ParseNode $n) use ($o) { $o->setVerifiedPublisherId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the verifiedPublisherId property value. The ID of the verified publisher from the app publisher's Partner Center account.
     * @return string|null
    */
    public function getVerifiedPublisherId(): ?string {
        return $this->verifiedPublisherId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('addedDateTime', $this->addedDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('verifiedPublisherId', $this->verifiedPublisherId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the addedDateTime property value. The timestamp when the verified publisher was first added or most recently updated.
     *  @param DateTime|null $value Value to set for the addedDateTime property.
    */
    public function setAddedDateTime(?DateTime $value ): void {
        $this->addedDateTime = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the displayName property value. The verified publisher name from the app publisher's Microsoft Partner Network (MPN) account.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the verifiedPublisherId property value. The ID of the verified publisher from the app publisher's Partner Center account.
     *  @param string|null $value Value to set for the verifiedPublisherId property.
    */
    public function setVerifiedPublisherId(?string $value ): void {
        $this->verifiedPublisherId = $value;
    }

}
