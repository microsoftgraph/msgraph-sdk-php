<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataSubject implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $email Email of the data subject. */
    private ?string $email = null;
    
    /** @var string|null $firstName First name of the data subject. */
    private ?string $firstName = null;
    
    /** @var string|null $lastName Last Name of the data subject. */
    private ?string $lastName = null;
    
    /** @var string|null $residency The country/region of residency. The residency information is uesed only for internal reporting but not for the content search. */
    private ?string $residency = null;
    
    /**
     * Instantiates a new dataSubject and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSubject
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DataSubject {
        return new DataSubject();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the email property value. Email of the data subject.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'email' => function (self $o, ParseNode $n) { $o->setEmail($n->getStringValue()); },
            'firstName' => function (self $o, ParseNode $n) { $o->setFirstName($n->getStringValue()); },
            'lastName' => function (self $o, ParseNode $n) { $o->setLastName($n->getStringValue()); },
            'residency' => function (self $o, ParseNode $n) { $o->setResidency($n->getStringValue()); },
        ];
    }

    /**
     * Gets the firstName property value. First name of the data subject.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the lastName property value. Last Name of the data subject.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the residency property value. The country/region of residency. The residency information is uesed only for internal reporting but not for the content search.
     * @return string|null
    */
    public function getResidency(): ?string {
        return $this->residency;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('firstName', $this->firstName);
        $writer->writeStringValue('lastName', $this->lastName);
        $writer->writeStringValue('residency', $this->residency);
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
     * Sets the email property value. Email of the data subject.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the firstName property value. First name of the data subject.
     *  @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value ): void {
        $this->firstName = $value;
    }

    /**
     * Sets the lastName property value. Last Name of the data subject.
     *  @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value ): void {
        $this->lastName = $value;
    }

    /**
     * Sets the residency property value. The country/region of residency. The residency information is uesed only for internal reporting but not for the content search.
     *  @param string|null $value Value to set for the residency property.
    */
    public function setResidency(?string $value ): void {
        $this->residency = $value;
    }

}
